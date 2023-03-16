<script setup>
import { onMounted } from 'vue';

const props = defineProps({
    assets: Object,
});

</script>

<template>
    <section>
        <header>
            <h2 class="text-lg  font-medium text-gray-600">Assets</h2>

            <p class="mt-1 text-sm text-gray-500">
                Employee's Rented Assets
            </p>
        </header>

        <div v-for="asset in props.assets" :key="asset.id"
            class="mt-6 bg-gradient-to-r from-green-300 to-white p-2 border border-gray-300 shadow-md rounded-md w-full items-center">
            <div class="grid grid-cols-4">
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">NIK: </h2>
                    <h2 class="font-medium text-black">{{ asset.nik }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Asset Number: </h2>
                    <h2 class="font-medium text-black">{{ asset.asset_number }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Type: </h2>
                    <h2 class="font-medium text-black">{{ asset.type }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Loaned On: </h2>
                    <h2 class="text-black"> {{
                        new Date(asset.loaned_on).toLocaleDateString('en-GB', {
                            day:
                                'numeric', month: 'short', year: 'numeric'
                        })
                    }}
                    </h2>
                </div>
            </div>
            <div class="grid grid-cols-4 ">
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Name: </h2>
                    <h2 class="font-medium text-black">{{ asset.name }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Asset Name: </h2>
                    <h2 class="font-medium text-black">{{ asset.asset_name }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Description: </h2>
                    <h2 class="font-medium text-black">{{ asset.description }}</h2>
                </div>
                <div class="inline-flex items-center gap-2">
                    <h2 class="font-medium text-gray-500">Return Due Date: </h2>
                    <h2 class="text-black"> {{
                        new Date(asset.return_due_date).toLocaleDateString('en-GB', {
                            day:
                                'numeric', month: 'short', year: 'numeric'
                        })
                    }}
                    </h2>
                </div>
            </div>
        </div>
    </section>
</template>
