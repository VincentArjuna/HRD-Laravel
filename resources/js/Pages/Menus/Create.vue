<template>
    <Head title="Create Mnu" />

    <AuthenticatedLayout>
        <template #header>
            Create Menu
        </template>

        <div class="p-4 bg-white rounded-lg shadow-xs flex items-center justify-center">
            <form @submit.prevent="submit" class="w-1/2">
                <div>
                    <InputLabel for="name" value="Name" />
                    <TextInput id="name" type="text" class="block w-full mt-1" v-model="form.name" required autofocus
                        autocomplete="name" />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <div>
                    <InputLabel for="url" value="URL Alias" />
                    <TextInput id="url" type="text" class="block w-full mt-1" v-model="form.url" required
                        autocomplete="URL" />
                    <InputError class="mt-2" :message="form.errors.url" />
                </div>

                <div>
                    <InputLabel for="icon" value="Icon Name (Camel Case)" />
                    <TextInput id="icon" type="text" class="block w-full mt-1" v-model="form.icon" autocomplete="icon" />
                    <InputError class="mt-2" :message="form.errors.url" />
                </div>

                <div>
                    <InputLabel for="position" value="Menu Position" />
                    <TextInput id="position" type="number" class="block w-full mt-1" v-model="form.position" required
                        autocomplete="position" />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <div class="flex">
                    <div>
                        <InputLabel for="enable" value="Enable" />
                        <Checkbox id="enable" class="block w-full mt-1" v-model="form.enable" :value="form.enable">
                        </Checkbox>
                    </div>
                    <div>
                        <InputLabel for="deleteable" value="Deleteable" />
                        <Checkbox id="deleteable" class="block w-full mt-1" v-model="form.deleteable" :value="form.deleteable">
                        </Checkbox>
                    </div>
                </div>


                <div>
                    <InputLabel for="deleteable" value="Deleteable" />
                    <select id="deleteable" class="block w-full mt-1" v-model="form.deleteable">
                        <option value="true">Yes</option>
                        <option value="false">No</option>
                    </select>
                    <InputError class="mt-2" :message="form.errors.deleteable" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Create Menu
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
import Checkbox from '@/Components/Checkbox.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    parent_id: null,
    name: null,
    url: null,
    icon: null,
    position: null,
    enable: true,
    deleteable: true,
    actives: null,
    permission_name: null
});

const submit = () => {
    form.post(route('menus.store'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>
  