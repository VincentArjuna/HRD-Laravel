<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { Head } from '@inertiajs/vue3';
import Asset from './Partials/Asset.vue';
import Family from './Partials/Family.vue';
import Profile from './Partials/Profile.vue';

defineProps({
    profile: Object,
    family: Object,
    assets: Object,
});
</script>

<template>
    <Head title="Profile" />

    <AuthenticatedLayout>
        <template #header>
            Employee's Profile Details
        </template>

        <div class="sm:px-6 md:px-0 lg:px-0 space-y-6">
            <div class="p-4 sm:p-8 bg-gradient-to-l from-indigo-300 to-white shadow sm:rounded-lg">
                <Profile class="w-full" :profile="profile" />
            </div>

            <div class="p-4 sm:p-8 bg-gradient-to-l from-indigo-300 to-white shadow sm:rounded-lg">
                <Family class="w-full" :family="family" />
            </div>

            <div class="p-4 sm:p-8 bg-gradient-to-l from-indigo-300 to-white shadow sm:rounded-lg">
                <Asset class="w-full" :assets="assets" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
