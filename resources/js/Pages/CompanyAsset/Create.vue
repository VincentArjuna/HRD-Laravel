<template>
    <Head title="Register Company Asset" />

    <AuthenticatedLayout>
        <template #header>
            Register Company Asset
        </template>

        <div class="p-4 bg-gradient-to-tl from-indigo-300 to-white rounded-lg shadow-xs flex items-center justify-center">
            <form @submit.prevent="submit" class="w-3/4 my-4 grid grid-cols-2 gap-4">

                <div>
                    <InputLabel for="asset_number" value="Asset Number" />
                    <TextInput id="asset_number" type="text" class="block w-full mt-1" v-model="form.asset_number" required
                        autofocus autocomplete="asset_number" />
                    <InputError class="mt-2" :message="form.errors.asset_number" />
                </div>

                <div>
                    <InputLabel for="type" value="Type" />
                    <select id="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" v-model="form.type"
                        required>
                        <option value="Rumah">Rumah</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Laptop">Laptop</option>
                    </select>
                    <InputError class="mt-2" :message="form.errors.type" />
                </div>

                <div class="mt-4">
                    <InputLabel for="asset_name" value="Asset Name" />
                    <TextInput id="asset_name" type="text" class="block w-full mt-1" v-model="form.asset_name" required
                        autocomplete="asset_name" />
                    <InputError class="mt-2" :message="form.errors.asset_name" />
                </div>

                <div class="mt-4">
                    <InputLabel for="description" value="Description" />
                    <TextArea id="description" type="text" class="block w-full mt-1 rounded-lg " v-model="form.description"
                        required autocomplete="description" />
                    <InputError class="mt-2" :message="form.errors.description" />
                </div>

                <div class="mt-4">
                    <InputLabel for="date_entry" value="Entry Date" />
                    <VueDatePicker class="mt-1" v-model="form.date_entry" :enable-time-picker="false" format="yyyy/MM/dd" />
                    <InputError class="mt-2" :message="form.errors.date_entry" />
                </div>

                <div class="mt-4">
                    <InputLabel for="status_loan" value="Status Loan" />
                    <select id="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
                        v-model="form.status_loan">
                        <option value="Available">Available</option>
                        <option value="Loaned">Loaned</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                    <InputError class="mt-2" :message="form.errors.status_loan" />
                </div>

                <div class="mt-4" v-if="form.status_loan === 'Loaned'">
                    <InputLabel for="id_loan" value="Loan ID" />
                    <TextInput id="id_loan" type="text" class="block w-full mt-1" v-model="form.id_loan" required
                        autocomplete="id_loan" />
                    <InputError class="mt-2" :message="form.errors.id_loan" />
                </div>

                <div class="mt-4">
                    <InputLabel for="kondisi" value="Kondisi" />
                    <TextInput id="kondisi" type="text" class="block w-full mt-1" v-model="form.kondisi" required
                        autocomplete="kondisi" />
                    <InputError class="mt-2" :message="form.errors.kondisi" />
                </div>

                <div class="mt-4">
                    <InputLabel for="warehouse" value="Warehouse" />
                    <TextInput id="warehouse" type="text" class="block w-full mt-1" v-model="form.warehouse" required
                        autocomplete="warehouse" />
                    <InputError class="mt-2" :message="form.errors.warehouse" />
                </div>

                <div class="mt-4">
                    <InputLabel for="keterangan" value="Keterangan" />
                    <TextArea id="keterangan" type="text" class="block w-full mt-1 rounded-lg " v-model="form.keterangan"
                        required autocomplete="keterangan" />
                    <InputError class="mt-2" :message="form.errors.keterangan" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <PrimaryButton class="ml-4 bg-white text-indigo-600" :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing">
                        Create Company Asset
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
  
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';
import TextArea from '@/Components/TextArea.vue'
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';

const form = useForm({
    asset_number: null,
    type: null,
    asset_name: null,
    description: null,
    date_entry: null,
    status_loan: null,
    id_loan: null,
    kondisi: null,
    warehouse: null,
    keterangan: null,
});
const submit = () => {
    form.post(route('company-assets.store'), {
        // onFinish: () => form.reset(),
    });
};
</script>
  