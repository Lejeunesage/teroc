<script setup>
import NavbarLayout from '@/Layouts/NavbarLayout.vue';
import Footer from '@/Layouts/Footer.vue';

import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import ArrowIcon from '@/Components/ArrowIcon.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = reactive({
  first_name: null,
  last_name: null,
  email: null,
})

function submit() {
  router.post('/users', form)
}




</script>

<template>
    <NavbarLayout>

        <Head title="Contact" />


        <div class="mt-[4rem]">
            <h3 class="text-2xl font-semibold text-center">Découvrez comment nous pouvons aider votre entreprise </h3>
            <div class="">
                <form @submit.prevent="submit" class="max-w-xl mx-auto mt-20 mb-20 p-5 shadow-md">

                    <div class="flex flex-col mb-2">
                        <label for="">Votre Nom</label>
                        <input
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                            type="text">
                    </div>


                    <div class="flex flex-col mb-2">
                        <label for="">Nom de la compagnie</label>
                        <input
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full "
                            type="text">
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="">Selectionner un sujet</label>

                        <select name="" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm 
                                    w-full" id="">

                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="">
                        <div class="flex flex-col mb-2">
                            <label for="">Selectionner un budget (mensuel pour marketing)</label>
                            <select name="" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm 
                                    w-full" id="">

                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="flex flex-col mb-2">
                            <label for="">Adresse email</label>
                            <input
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm  full"
                                type="text">
                        </div>

                        <div class="flex flex-col mb-2">
                            <label for="">Votre numéro de téléphone</label>
                            <input
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm full "
                                type="text">
                        </div>

                        <div class="flex flex-col mb-2">
                            <label for="">Votre requête</label>

                            <textarea name="" id=""
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-40 w-full"
                                type="text"></textarea>
                        </div>
                    </div>

                    <PrimaryButton type="submit">Soumettre</PrimaryButton>


                </form>
            </div>
        </div>


        <Footer></Footer>
    </NavbarLayout>
</template>



