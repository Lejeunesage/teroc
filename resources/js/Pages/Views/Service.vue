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

        <Head title="Service" />

        <div class="mx-auto max-w-screen-xl px-4 md:px-6 mt-[4rem] md:mt-[8rem] py-2.5 ">
            <h2 class="text-3xl mb-[1rem] text-center font-semibold">Profitez des occasions d'affaires d'une économie
                numérique mondiale.</h2>

            <p class="mb-[.5rem] text-center">Comblez tous vos besoins en technologie et en marketing numérique avec des
                experts sous un même toit. </p>

            <p class="mb-[1rem] text-center">Chez Teroc, nous privilégions:</p>

            <ul class="mb-[1rem] list-disc px-10">
                <li>Une écoute attentive de vos besoins</li>
                <li>Des solutions et des recommandations muries et personnalisées</li>
                <li>Une geston de projet minutieuse, rigoureuse, agile et maitrisée</li>
            </ul>
        </div>

        <!-- <div class="flex flex-col md:flex-row items-center gap-10 justify-center px-10 my-[2rem]">
            <a class="border px-[3.3rem] py-5 text-white bg-[orange]" href="#solutions_technologiques">Solutions
                Technologiques</a>
            <a class="border p-5 text-white bg-[orange]" :href="'#' + solutions_marketing">Solutions En Marketing
                Numérique</a>
        </div>  -->

        <div  class="bg-clr-amour  bg-clr-amour p-[2rem] pb-[5rem] mt-[5rem] ">
            <div>
                <h3 class="text-2xl mb-[1rem] text-center font-semibold">Solutions Technologiques</h3>

                <div class="grid md:grid-cols-3 gap-10 mx-auto max-w-screen-lg">
                    <div class="text-center mt-[3rem]   border p-10 shadow bg-white ">
                        <div class="flex justify-center items-center flex-col gap-2 mb-5">
                            <img class="w-[15rem]  h-[8rem]" src="@/../../public/images/redaction_web.jpg" alt="">
                            <h4 class="font-semibold ">
                                <a class="flex font-bold hover:underline text-xl" href="/service/developpement-de-logiciels">
                                    Developpement Logiciels Et Applications
                                </a>
                            </h4>
                            <p>Développez une application et des logiciels sur mesure pour résoudre un problème spécifique
                                ou simplement...</p>
                        </div>
                        <a class="flex  items-center justify-start font-bold text-lg " href="/service/developpement-de-logiciels">Lire la suite
                            <ArrowIcon />
                        </a>
                    </div>
                    <div class=" border p-10 shadow  text-center mt-[3rem]   bg-white">
                        <div class="flex justify-center items-center flex-col gap-2 mb-5">
                            <img class="w-[15rem]  h-[8rem]" src="@/../../public/images/site_web.jpg" alt="">
                            <h4 class="font-semibold ">
                                <a class="flex font-bold hover:underline text-xl " href="">
                                    Site Web
                                </a>
                            </h4>
                            <p>
                                Nous créons des sites web personnalisés et autogérés qui génèrent des visites et
                                améliorent...</p>
                        </div>
                        <a class="flex  items-center justify-start font-bold text-lg " href="#">Lire la suite
                            <ArrowIcon />
                        </a>
                    </div>
                    <div class=" border p-10 shadow  text-center mt-[3rem]  bg-white">
                        <div class="flex justify-center items-center flex-col gap-2 mb-5">

                            <img class="w-[15rem]  h-[8rem]" src="@/../../public/images/e-commerce.jpg" alt="">
                            <h4 class="font-semibold ">
                                <a class="flex font-bold hover:underline text-xl " href="">
                                    Boutique En Ligne
                                </a>
                            </h4>
                            <p>
                                Une boutique en ligne sur mesure peut tout changer. Optez pour un service professionnel de
                                création de...
                            </p>
                        </div>
                        <a class="flex  items-center justify-start font-bold text-lg " href="#">Lire la suite
                            <ArrowIcon />
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <div  class=" p-[3rem] ">
            <div>
                <h3 class="text-2xl mb-[1rem] text-center font-semibold">Solution en Marketing Numérique.</h3>

                <div class="grid md:grid-cols-3 gap-10 mx-auto max-w-screen-lg">
                    <div class="text-center mt-[3rem]   border p-10 shadow bg-white ">
                        <div class="flex justify-center items-center flex-col gap-2 mb-5">
                            <img class="w-[15rem]  h-[8rem]  h-[10rem]" src="@/../../public/images/redaction_web.jpg" alt="">
                            <h4 class="font-semibold ">
                                <a class="flex font-bold hover:underline text-xl" href="">
                                    Référencement Naturel (SEO)
                                </a>
                            </h4>
                            <p>
                                Agence SEO Montréal. Positionnez vous en première page de Google grâce à notre expertise SEO
                                en...
                            </p>
                        </div>
                        <a class="flex  items-center justify-start font-bold text-lg " href="#">Lire la suite
                            <ArrowIcon />
                        </a>
                    </div>
                    <div class=" border p-10 shadow  text-center mt-[3rem]   bg-white">
                        <div class="flex justify-center items-center flex-col gap-2 mb-5">
                            <img class="w-[15rem]  h-[8rem] h-[10rem]" src="@/../../public/images/google_ads.jpg" alt="">
                            <h4 class="font-semibold ">
                                <a class="flex font-bold hover:underline text-xl " href="">
                                    Publicité Google Ads
                                </a>
                            </h4>
                            <p>
                                Nous confier la gestion de votre publicité Google Ads, c’est bénéficier d’un service haut de
                                gamme peu...
                            </p>
                        </div>
                        <a class="flex  items-center justify-start font-bold text-lg " href="#">Lire la suite
                            <ArrowIcon />
                        </a>
                    </div>
                    <div class=" border p-10 shadow  text-center mt-[3rem]  bg-white">
                        <div class="flex justify-center items-center flex-col gap-2 mb-5">

                            <img class="w-[15rem]  h-[8rem] h-[10rem]" src="@/../../public/images/facebook.jpg" alt="">
                            <h4 class="font-semibold ">
                                <a class="flex font-bold hover:underline text-xl " href="">
                                    Publicité Facebook
                                </a>
                            </h4>
                            <p>Optimisation des publicités sur Facebook grâce à l'agence de publicité Teroc
                            </p>
                        </div>
                        <a class="flex  items-center justify-start font-bold text-lg " href="#">Lire la suite
                            <ArrowIcon />
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <div >
            <h3 class="text-2xl font-semibold text-center">Et vous! Quel est votre défi? Nous sommes impatients de vous
                entendre et de vous aider. </h3>
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

                            <option value="">sujet1</option>
                            <option value="">sujet2</option>
                            <option value="">sujet3</option>
                            <option value="">sujet4</option>
                        </select>
                    </div>

                    <div class="">
                        <div class="flex flex-col mb-2">
                            <label for="">Selectionner un budget (mensuel pour marketing)</label>
                            <select name="" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm 
                                                w-full" id="">

                                <option value="">sujet1</option>
                                <option value="">sujet2</option>
                                <option value="">sujet3</option>
                                <option value="">sujet4</option>
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



