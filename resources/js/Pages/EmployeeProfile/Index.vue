<template>
    <Head title="Employee Profile" />

    <AuthenticatedLayout>
        <template #header>
            Employee Profile
        </template>

        <div class="py-10 px-20 bg-gradient-to-tl from-indigo-300 to-white rounded-lg shadow-xs">
            <div class="inline-flex overflow-hidden mb-4 w-full bg-white rounded-lg shadow-md" v-if="$page.props.message">
                <div class="flex justify-center items-center w-12 bg-green-500">
                    <HeroIcon name="InformationCircleIcon" class="w-8 h-8 text-gray-100" />
                </div>
                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-indigo-500">Info</span>
                        <p class="text-sm text-gray-600">{{ $page.props.message }}</p>
                    </div>
                </div>
            </div>

            <Link :href="route('employee-profiles.create')" method="get" as="button" type="button"
                class="rounded-lg border border-transparent bg-indigo-500 px-4 py-2 mb-4 text-center text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-indigo-700 focus:outline-none focus:ring active:bg-indigo-500">
            <HeroIcon name="PlusIcon" class="w-6 h-6 inline" />
            Create
            </Link>

            <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
                <div class="overflow-x-auto w-full">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                                <th class="px-4 py-3 text-center">NIK</th>
                                <th class="px-4 py-3 text-center">Name</th>
                                <th class="px-4 py-3 text-center">Gender</th>
                                <th class="px-4 py-3 text-center">Location</th>
                                <th class="px-4 py-3 text-center">Home Address</th>
                                <th class="px-4 py-3 text-center">Hired On</th>
                                <th class="px-4 py-3 text-center">Hours</th>
                                <th class="px-4 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            <tr v-for="employee_profile in employee_profiles.data" :key="employee_profile.nik"
                                class="text-gray-700">
                                <td class="px-4 py-3 text-sm">
                                    {{ employee_profile.nik }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ employee_profile.name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ employee_profile.gender }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ employee_profile.location }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ employee_profile.home_address }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ employee_profile.hired_on }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ employee_profile.hours }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <Link :href="route('employee-profiles.details', employee_profile.nik)" method="get"
                                        as="button" type="button"
                                        class="rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-center text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-600">
                                    <HeroIcon name="Bars3Icon" class="w-4 h-4 inline" />
                                    Details
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
                    <pagination :links="employee_profiles.links" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
  
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import { Head, Link } from '@inertiajs/vue3';
import HeroIcon from '@/Components/HeroIcon.vue';

const props = defineProps({
    employee_profiles: Object
})

</script>
  