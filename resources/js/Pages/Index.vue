<script setup>
import NavbarLayout from '@/Layouts/NavbarLayout.vue';
import Hero from '@/Layouts/Hero.vue';
import Service from '@/Layouts/Service.vue';
import Portfolio from '@/Layouts/Portfolio.vue';
import Partenaire from '@/Layouts/Partenaire.vue';
import Leader from '@/Layouts/Leader.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';



</script>

<template>
    <NavbarLayout >
         <Head title="Acceuil" />

         <Hero></Hero>
         <Service></Service>
         <Portfolio></Portfolio>
         <Partenaire></Partenaire>
         <Leader></Leader>

    </NavbarLayout>

</template>



