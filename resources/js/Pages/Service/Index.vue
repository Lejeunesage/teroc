<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head } from '@inertiajs/vue3';




const createService = () => {

    window.location.href = "/service/create";
};

</script>

<template>
    <Head title="Services" />

    <AuthenticatedLayout>

        <div class="max-w-6xl mx-auto mt-5 flex justify-end">
            <PrimaryButton @click="createService">
                Créer un service
            </PrimaryButton>
        </div>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Services</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Aucun service!</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>