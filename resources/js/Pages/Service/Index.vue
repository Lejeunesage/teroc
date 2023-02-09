<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import { Head } from '@inertiajs/vue3';


//Permet de recupérer les données retournée par la base de donnée
const props = defineProps({
    services: {
        type: Object,
        default: () => ({}),
    },
    
});



const createService = () => {

    window.location.href = "/service/create";
};

</script>

<template>
    <Head title="Services" />

    <AuthenticatedLayout>
        <!-- <div
                    v-if="$page.props.flash.message"
                    class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert"
                >
                    <span class="font-medium">
                        {{ $page.props.flash.message }}
                    </span>
                </div> -->

        <div class="max-w-6xl mx-auto mt-20 flex justify-end">
            <PrimaryButton @click="createService">
                Créer un service
            </PrimaryButton>
        </div>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Services</h2>
        </template>

        <div class="py-12">
            <div class="flex flex-wrap  gap-10 max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class="bg-blue-50 overflow-hidden shadow-sm sm:rounded-lg p-5" v-for="service in services"
                    :key="service.id">

                    <div>
                        <h1 class="text-lg font-bold">
                        {{ service.service_name }}
                        </h1>

                        <img  class="mt-5" :src="service.service_image" alt="">

                        <h2 class="mt-5 text-lg font-semibold">{{ service.first_title }}</h2>

                        <p class="mt-5">{{ service.first_description }}</p>

                        <h2 class="mt-5 text-lg font-semibold">{{ service.second_title }}</h2>
                        <p class="mt-5">{{ service.second_description }}</p>
                    </div>

                    <div class=" mt-5 flex justify-center gap-5">
                        <PrimaryButton>
                            Voir plus
                        </PrimaryButton>
                        <SecondaryButton>
                            Editer
                        </SecondaryButton>
                        <DangerButton>
                            Supprimer
                        </DangerButton>
                    </div>
                </div>
        

            </div>
        </div>
    </AuthenticatedLayout>
</template>