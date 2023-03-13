<template>
    <Head title="Menu Management" />

    <AuthenticatedLayout>
        <template #header>
            Menus
        </template>

        <div class="p-4 bg-white rounded-lg shadow-xs">
            <div class="inline-flex overflow-hidden mb-4 w-full bg-white rounded-lg shadow-md" v-if="$page.props.message">
                <div class="flex justify-center items-center w-12 bg-blue-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z">
                        </path>
                    </svg>
                </div>
                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-blue-500">Info</span>
                        <p class="text-sm text-gray-600">{{ $page.props.message }}</p>
                    </div>
                </div>
            </div>

            <Link :href="route('menus.create')" method="get" as="button" type="button"
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
                                <th class="px-4 py-3 text-center">Name</th>
                                <th class="px-4 py-3 text-center">URL Alias</th>
                                <th class="px-4 py-3 text-center">Icon</th>
                                <th class="px-4 py-3 text-center">Position</th>
                                <th class="px-4 py-3 text-center">Permission Name</th>
                                <th class="px-4 py-3 text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            <tr v-for="menu in menus.data" :key="menu.id" class="text-gray-700">
                                <td class="px-4 py-3 text-sm">
                                    {{ menu.name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ menu.url }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <HeroIcon :name="menu.icon" />
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ menu.position }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ menu.permission_name }}
                                </td>
                                <td class="px-4 py-3 grid grid-cols-2 gap-2">
                                    <Link :href="route('menus.edit', menu.id)" method="delete" as="button" type="button"
                                        class="rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-center text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-600">
                                    <HeroIcon name="PencilSquareIcon" class="w-4 h-4 inline" />
                                    Edit
                                    </Link>
                                    <Link :href="route('menus.destroy', menu.id)" method="delete" as="button" type="button"
                                        class="rounded-lg border border-transparent bg-red-600 px-3 py-2 text-center text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-red-700 focus:outline-none focus:ring active:bg-red-600">
                                    <HeroIcon name="TrashIcon" class="w-4 h-4 inline" />
                                    Delete
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
                    <pagination :links="menus.links" />
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
    menus: Object
})
console.log(props.menus);
</script>
  