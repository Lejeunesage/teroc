<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Link from '@/Components/Link.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import EditIcon from '@/Components/EditIcon.vue';
import DeleteIcon from '@/Components/DeleteIcon.vue';
import { Head } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
// import { useForm } from "@inertiajs/vue3";

// const form = useForm();


//Permet de recupérer les données retournée par la base de donnée
const props = defineProps({
    services: {
        type: Object,
        default: () => ({}),
    },
    
});


const createService = () => {
    
    window.location.href = route('service.create');
};

const editService = (id) => {
    
    window.location.href =  route('service.edit',id)
};



function deleteService(service, id) {
    
    if (confirm( `Voulez vous supprimer le service : ${service} ?`)) {
        
        Inertia.delete(route('service.destroy', id));
        location.reload();
    }
    
}




</script>

<template>
    <Head title="Services" />

    <AuthenticatedLayout>
       

        <div class="max-w-6xl mx-auto mt-20 flex justify-end">
            <PrimaryButton @click="createService">
                Créer un service
            </PrimaryButton>
        </div>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Services</h2>
        </template>

        <div class="py-12">
            <div class=" flex flex-row  gap-9 justify-center  flex-wrap max-w-7xl  sm:px-6 lg:px-8 mx-auto  ">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5 md:w-[45%] " v-for="service in services"
                    :key="service.id">

                    <div>
                        <!-- <img  class="mt-5" :src="service.service_image" alt=""> -->

                        <h1 class="text-lg text-center font-bold">
                        {{ service.service_name }}
                        </h1>

                        <h2 class="mt-5 text-lg font-semibold">{{ service.first_title }}</h2>

                        <p class="mt-5 text-justify truncate ">{{service.first_description }}</p>

                      
                    </div>

                    <div class=" mt-5 flex justify-between">
                        <Link class="rounded-md">
                            Voir plus...
                        </Link>
                        <div class="flex gap-3 ">
                            <EditIcon class="cursor-pointer"  @click="editService(service.id)" >
                            Editer
                            </EditIcon>
                            <DeleteIcon  class="cursor-pointer"
                            @click="deleteService(`${service.service_name}`,`${service.id}`)" >
                                Supprimer
                            </DeleteIcon>
                        </div>
                    </div>
                </div>
               

            </div>
        </div>
    </AuthenticatedLayout>
</template>