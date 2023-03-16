<script setup>
const props = defineProps({
    profile: Object,
});
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg  font-medium text-gray-600">Profile Information</h2>

            <p class="mt-1 text-sm text-gray-500">
                Employee's profile information.
            </p>
        </header>

        <div class="mt-6 space-x-2 grid grid-cols-4 justify-center items-center w-full">
            <div
                class="grid grid-rows-4 bg-gradient-to-r from-green-300 to-white p-2 border border-gray-300 shadow-md rounded-md h-full items-center">
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">NIK: </h2>
                    <h2 class="font-medium text-black">{{ props.profile.nik }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Name: </h2>
                    <h2 class="font-medium text-black">{{ props.profile.name }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Birthplace: </h2>
                    <h2 class="font-medium text-black">{{ props.profile.birthplace }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Birthday: </h2>
                    <h2 class="text-black"> {{
                        new Date(props.profile.birthday).toLocaleDateString('en-GB', {
                            day:
                                'numeric', month: 'short', year: 'numeric'
                        })
                    }}
                    </h2>
                </div>
            </div>
            <div
                class="grid grid-rows-4 bg-gradient-to-l from-green-300 to-white p-2 border border-gray-300 shadow-md rounded-md h-full items-center">
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Gender: </h2>
                    <h2 class="font-medium text-black">{{ props.profile.gender }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Religion: </h2>
                    <h2 class="font-medium text-black">{{ props.profile.religion }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Status Menikah:</h2>
                    <h2 class="font-medium text-black">{{ props.profile.status_menikah }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Home Address:</h2>
                    <h2 class="font-medium text-black">{{ props.profile.home_address }}</h2>
                </div>
            </div>
            <div
                class="grid grid-rows-4 bg-gradient-to-r from-green-300 to-white from  p-2 border border-gray-300 shadow-md rounded-md h-full items-center">
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Email: </h2>
                    <h2 class="font-medium text-black">{{ props.profile.email }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Phone: </h2>
                    <h2 class="font-medium text-black">{{ props.profile.phone }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium  text-gray-500">Education: </h2>
                    <h2 class="font-medium text-black">{{ props.profile.education }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Hired On:</h2>
                    <h2 class="font-medium text-black">{{
                        new Date(props.profile.hired_on).toLocaleDateString('en-GB', {
                            day: 'numeric',
                            month: 'short', year: 'numeric'
                        })
                    }}
                    </h2>
                </div>
            </div>
            <div
                class="grid grid-rows-4 bg-gradient-to-l from-green-300 to-white p-2 border border-gray-300 shadow-md rounded-md h-full items-center">
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Location:</h2>
                    <h2 class="font-medium text-black">{{ props.profile.location }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Department:</h2>
                    <h2 class="font-medium text-black">{{ props.profile.department }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Position:</h2>
                    <h2 class="font-medium text-black">{{ props.profile.position }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Hours:</h2>
                    <h2 class="font-medium text-black">{{ props.profile.hours }}</h2>
                </div>
            </div>
        </div>
    </section>
</template>
