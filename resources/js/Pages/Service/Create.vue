<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

//Permet de recupérer les données retournée par la base de donnée
const props = defineProps({
    services: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({
    service_service_name : '' ,
    service_category : '',
    service_service_image: '',
    first_title : '',
    first_description: '',
    second_title: '',
    second_description : ''
});

const submit = () => {
    form.post(route('service.store'));
};
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Créer un service" />

        <div class="max-w-6xl mx-auto mt-10">

            <h2 class="text-center text-orange-500 text-xl font-semibold ">Créer un service</h2>
            
            <form @submit.prevent="submit" class="max-w-xl mx-auto ">
                <div>
                    <InputLabel class="text-gray-500" for="service_name" value="Nom service" />
    
                    <TextInput
                        id="service_name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.service_name"
                        required
                        autofocus
                        autocomplete="service_name"
                    />
    
                    <InputError class="mt-2" :message="form.errors.service_name" />
                </div>
                <div class="mt-4">
                    <InputLabel class="text-gray-500" for="service_category" value="Catégorie" />
    
                    <select 
                    class=" border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        id="service_category"
                        type="text"
                        v-model="form.service_category"
                        required
                        autofocus
                        autocomplete="service_category"
                    >
                    <option value="Solutions Technologiques"
                    >Solutions Technologiques</option>
                    <option value="Solutions en Markéting Numérique"
                    >Solutions en Markéting Numérique</option>

                    </select>
    
                    <InputError class="mt-2" :message="form.errors.service_category" />
                </div>

                <div class="mt-4">
                    
                    <InputLabel class="text-gray-500" for="service_image" value="Choisir une image" />
                    <input 
                        class="block w-full text-sm  text-gray-900 border border-gray-300 bg-white rounded-tr-lg rounded-br-lg rounded-tl-sm rounded-bl-sm cursor-pointer focus:outline-none" aria-describedby="file_input_help" id="file_input" 
                        type="file"
                        @input="form.service_image = $event.target.files[0]"
                        >
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG ou GIF (MAX. 800x400px).</p>

                    <InputError class="mt-2" :message="form.errors.service_image" />

                </div>
                <div class="mt-4">
                    <InputLabel class="text-gray-500" for="first_title" value="Titre 1" />
    
                    <TextInput
                        id="first_title"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.first_title"
                        required
                        autofocus
                        autocomplete="first_title"
                    />
    
                    <InputError class="mt-2" :message="form.errors.first_title" />
                </div>
    
                <div class="mt-4">
                    <InputLabel class="text-gray-500" for="first_description" value="Description 1" />
    
                    <textarea class="block h-40 w-full text-sm text-gray-900  rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  mt-1"
                        id="first_description"
                        type="first_description"
                        v-model="form.first_description"
                        required
                        autocomplete="first_description"
                        placeholder="Insérer la première description..."
                    ></textarea>
    
                    <InputError class="mt-2" :message="form.errors.first_description" />
                </div>

        

                <div class="mt-4">
                    <InputLabel class="text-gray-500" for="second_title" value="Titre 2" />
    
                    <TextInput
                        id="second_title"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.second_title"
                        required
                        autofocus
                        autocomplete="second_title"
                    />
    
                    <InputError class="mt-2" :message="form.errors.second_title" />
                </div>
    
                <div class="mt-4">
                    <InputLabel class="text-gray-500" for="second_description" value="Description 2" />
    
                    <textarea 
                        class="block h-40 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-1"
                        id="second_description"
                        type="second_description"
                        v-model="form.second_description"
                        required
                        autocomplete="second_description"
                        placeholder="Insérer la deuxième description"
                    ></textarea>
    
                    <InputError class="mt-2" :message="form.errors.second_description" />
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Créer
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
