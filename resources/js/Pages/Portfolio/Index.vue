<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Portfolio" />

    <AuthenticatedLayout>
        
    
        <div class="max-w-6xl mx-auto mt-20 flex justify-end">
            <PrimaryButton>
                Créer un portfolio
            </PrimaryButton>
        </div>
       
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Portfolio</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Aucun portfolio!</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>