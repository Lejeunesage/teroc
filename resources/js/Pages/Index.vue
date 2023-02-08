<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template class="main">
    <Head title="Acceuil" />

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
    >
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-lg"
                >Tableau de bord</Link
            >
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-lg"
                >Services</Link
            >
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-lg"
                >Portfolio</Link
            >
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-lg"
                >A propos</Link
            >
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-lg"
                >Contact</Link
            >

            <template v-else>
                <Link :href="route('login')" class="text-lg">Se connecter</Link>

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 text-lg"
                    >S'inscrire</Link
                >
            </template>
        </div>

        
<div class="text-lg">
    La page d'acceuil est en cours de maintenance !
</div>

             
    </div>
</template>


