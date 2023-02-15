<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import PrincipalLink from '@/Components/PrincipalLink.vue';
import { ref } from 'vue';

// defineProps({
//     canLogin: Boolean,
//     canRegister: Boolean,
//     laravelVersion: String,
//     phpVersion: String,
// });

const showingNavigationDropdown = ref(false);


</script>

<template class="main">
    <Head title="Acceuil" />

    
<nav class="bg-clr-amour shadow-md fixed left-0 right-0">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
         <!-- Logo -->
         <div class="shrink-0 flex items-center ">
            <Link :href="route('acceuil')">
                <ApplicationLogo
                    class="block h-9 w-auto fill-current text-gray-800"
                />
            </Link>
            
        </div>
       
        <div class="flex items-center">
            <PrincipalLink class="text-lg hover:underline  hidden md:flex"  href="tel:+22957972575" >
                <span>Appelez-nous :</span>
                +229 57972575
            </PrincipalLink>
            <!-- <PrincipalLink :href="route('/login')" >
               Se connecter
            </PrincipalLink> -->
        </div>

         <!-- Hamburger -->
         <div class="-mr-2 flex items-center md:hidden ">
                    <button
                        @click="showingNavigationDropdown = !showingNavigationDropdown"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                    >
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path
                                :class="{
                                    hidden: showingNavigationDropdown,
                                    'inline-flex': !showingNavigationDropdown,
                                }"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                            <path
                                :class="{
                                    hidden: !showingNavigationDropdown,
                                    'inline-flex': showingNavigationDropdown,
                                }"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>

        </div>
</nav>
   

<nav 

class=" hidden md:flex  bg-gray-50 shadow-md md:fixed left-0 right-0 top-14"
>
    <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6 text-center">
        <div class="flex items-center justify-center">
            <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                <li>
                    <PrincipalLink  :href="route('acceuil')" class=" text-lg text-gray-900  hover:text-[orange]" aria-current="page">Acceuil</PrincipalLink>
                </li>
                <li>
                    <PrincipalLink  :href="route('service')" class=" text-lg text-gray-900  hover:text-[orange]">Service</PrincipalLink>
                </li>
                <li>
                    <PrincipalLink  href="#" class=" text-lg text-gray-900  hover:text-[orange]">Portfolio</PrincipalLink>
                </li>
                <li>
                    <PrincipalLink  href="#" class=" text-lg text-gray-900  hover:text-[orange]">A propos</PrincipalLink>
                </li>
                <li>
                    <PrincipalLink  href="#" class=" text-lg text-gray-900  hover:text-[orange]">Contact</PrincipalLink>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav 

:class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
        class="md:hidden bg-gray-50 shadow-md fixed left-0 right-0 top-14  right-0 top-[4rem] left-0 "
>
    <div class="max-w-screen-xl px-4  mx-auto md:px-6 text-center ">
        <div class="flex items-center justify-center">
            <ul class="flex flex-col gap-3 text-sm font-medium w-full">
                <li class="border-b-2 pt-2 pb-2">
                    <PrincipalLink  href="#" class=" text-lg text-gray-900  hover:text-[orange]" aria-current="page">Acceuil</PrincipalLink>
                </li>
                <li class="border-b-2  pb-3">
                    <PrincipalLink  href="#" class=" text-lg text-gray-900  hover:text-[orange]">Service</PrincipalLink>
                </li>
                <li class="border-b-2  pb-3">
                    <PrincipalLink  href="#" class=" text-lg text-gray-900  hover:text-[orange]">Portfolio</PrincipalLink>
                </li>
                <li class="border-b-2  pb-3">
                    <PrincipalLink  href="#" class=" text-lg text-gray-900  hover:text-[orange]">A propos</PrincipalLink>
                </li>
                <li class="border-b-2  pb-3">
                    <PrincipalLink  href="#" class=" text-lg text-gray-900  hover:text-[orange]">Contact</PrincipalLink>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="pt-10 md:pt-2">
<!-- Page Content -->
<main>
    <slot />
</main>
</div>

    

</template>

<style>
::-webkit-scrollbar-thumb{
    background-color: orange;
    border-radius: 50px;
}

::-webkit-scrollbar-track{
    background-color: #e2e0ff;

}

::-webkit-scrollbar{
    width: 10px;
}

</style>


