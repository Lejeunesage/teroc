<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 bg-indigo-100">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <Link :href="route('dashboard')">
                    <ApplicationLogo
                        class="block h-9 w-auto fill-current text-gray-800"
                    />
                </Link>
            </div>

        </div>
        <div class="flex items-center">
            <div class="flex items-center ml-3">
                <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 " aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
                </div>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                    Neil Sims
                    </p>
                    <p class="text-sm font-medium text-gray-900 truncate " role="none">
                    neil.sims@flowbite.com
                    </p>
                </div>
                <ul class="py-1" role="none">
                
                
                    <li>
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 " role="menuitem">Profil</a>
                    </li>
                    <li>
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 " role="menuitem">Se déconnecter</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
    </nav>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 bg-indigo-100" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white bg-indigo-100 ">
        <ul class="space-y-2">
            <li>
                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                    Tableau de bord
                </NavLink>
            </li>
            <li>
                <NavLink :href="route('service.index')" :active="route().current('service.index')">
                    Services
                </NavLink>
            </li>
            <li>
                <NavLink :href="route('portfolio.index')" :active="route().current('portfolio.index')">
                    Portfolio
                </NavLink>
            </li>
         
        </ul>
    </div>
    </aside>

    <div class="p-4 sm:ml-64">

        <!-- Page Heading -->
        <header class="bg-white shadow" v-if="$slots.header">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <slot name="header" />
            </div>
        </header>
    
        <!-- Page Content -->
        <main>
            <slot />
        </main>
    </div>


</template>
