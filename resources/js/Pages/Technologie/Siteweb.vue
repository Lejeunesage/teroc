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
import { ref, onMounted, onUnmounted } from 'vue';



const form = reactive({
    first_name: null,
    last_name: null,
    email: null,
})

function submit() {
    router.post('/users', form)
}


const faqs = ref([
    {
        question: "Pourquoi devrais-je investir dans un site internet ?",
        answer: "Avoir un site Internet vous apporte plusieurs avantages. Peu importe que vous soyez un commerce, une association ou un particulier, vous y trouverez quelque chose à gagner. Un site vous apporte à vous ou votre entreprise de la visibilité sur le web, de la notoriété ou encore de la crédibilité. Vous vous rendez accessible à plus de personnes, que vous cherchiez des clients, une audience ou autre, c’est probablement le moyen qui vous obtiendra les meilleurs résultats. De plus, vous pouvez augmenter vos chances de communiquer avec d’autres personnes, ou augmenter vos chances de vendre, si c’est votre but. Retenez simplement que dépendant de votre objectif, avoir un site internet peut certainement vous aider.",
        open: true
    },
    {
        question: "Combien coûte la création d’un site internet ?",
        answer: "Le prix de la création d’un site internet est variable, les coûts peuvent aller de quelques centaines de dollars canadiens ou euros à plusieurs milliers. Il y a plusieurs types de sites web, dépendamment de vos besoins, vous serez facturés des prix totalement différents. Plus votre site est sophistiqué en technologie et fonctionnalités, plus il va vous couter. Cependant la vraie question à vous poser c’est : est-ce un bon investissement ? Retenez qu’à Oshara Inc., l’agence web basée à Montréal, nous nous adaptons à votre budget. Nous avons de l’expérience auprès de petites comme de grosses structures, ce qui fait de nous l’agence idéale pour créer votre site Internet.",
        open: false
    },
    {
        question: "Est-ce que vous pouvez améliorer mon site internet ?",
        answer: "En effet, Oshara Inc. est une agence web basée à Montréal qui améliore ou crée des sites internet. Il existe plusieurs raisons de changer son site internet et peut être est-ce votre cas. Si votre site est démodé, à des problèmes techniques ou que votre compétiteur gagne des clients mais pas vous, c’est peut-être le moment de mettre à jour votre site internet. Refaites une beauté à votre site internet grâce à Oshara, et devenez plus performants que jamais sur le web. Retenez que sur Internet tout est plus rapide, afin de rester compétitif il vous faut en moyenne mettre à jour votre site tous les trois ans.",
        open: false
    }
])

const toggleFAQ = (index) => {
    faqs.value[index].open = !faqs.value[index].open;
}





</script>

<template>
    <NavbarLayout>

        <Head title="Développement de logiciel" />


        <div class="bg-[url('@/../../public/images/site_web.jpg')] bg-cover  h-[40rem]  mb-20 mt-20">

            <div class="bg-[#4d3d40bf] h-[40rem]  ">
                <div class=" flex flex-col h-[40rem] mx-auto max-w-screen-lg justify-center mx-auto md:px-6 py-2.5 ">
                    <div class="max-w-xl  ">
                        <h1 class="text-white md:text-6xl text-5xl font-semibold">Lancez un site web à la hauteur de votre
                            image, de votre marque et de vos objectifs<span class="text-[orange]">.</span></h1>

                        <p class="text-white mt-20 text-xl md:text-xl">Soutenez la croissance de votre entreprise en créant
                            un site web qui vous ramène plus de clients et génère plus de ventes. </p>
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>

        <!-- <div class="mx-auto max-w-screen-xl px-4 md:px-6 mt-[4rem] md:mt-[8rem] py-2.5 ">
                    <h1 class="text-3xl mb-[1rem] text-center font-semibold"></h1>

                    <p class="mb-[.5rem] text-center"> /p>
                </div> -->

        <div class="mx-auto max-w-screen-lg">
            <h2 class="text-2xl mb-[1rem] text-center font-semibold">Avec la création d’un site web sur mesure, vous vous
                démarquerez de votre compétition et atteindrez plus vite vos objectifs.
            </h2>

            <div class="flex  flex-col gap-10  ">
                <p>
                    Peu importe la taille de votre entreprise, votre secteur d'activité, ou votre clientèle cible, créer un
                    site web personnalisé vous permettra toujours d'améliorer vos ventes et vos résultats.
                </p>
                <p>
                    Nous avons déjà créé plus de 500 sites web au cours des dernières années . Notre agence est spécialisée
                    en création de site web sur mesure et vous accompagne tout au long du projet et même après sa livraison
                </p>
                <p>
                    Du début de votre projet de création de site web jusqu’à sa mise en ligne, nous travaillerons en étroite
                    collaboration avec vous pour nous assurer de comprendre parfaitement votre vision et de vous livrer une
                    création de site web qui dépasse vos attentes.
                </p>
            </div>
        </div>



        <div class="  bg-clr-amour p-[2rem] pb-[5rem] mt-[5rem] ">
            <div class=" mx-auto max-w-screen-lg">
                <h2 class="text-2xl mb-[1rem] text-center font-semibold">Pour créer votre site web, c’est toute une équipe
                    de programmeurs qui se met à votre service dès le premier jour.</h2>

                <div class="flex flex-col gap-5 ">

                    <p>
                        Afin de créer un site web performant, il faut penser à rendre non seulement sa navigation facile aux
                        internautes, mais aussi sa gestion de contenu simple aux administrateurs. Un site web doit être
                        nourri de contenus engageants pour votre audience et vous devez donc être en mesure de pouvoir gérer
                        vous-même les contenus de votre site web.
                    </p>

                    <p>
                        Chez Oshara, chaque site web créé doit systématiquement être autogéré pour maximiser son potentiel
                        de rentabilité. Qu’il s'agisse donc de la création d’un site web Wordpress, Joomla ou de développer
                        un CMS sur mesure, notre équipe technique est prête à relever le défi.
                    </p>

                </div>


            </div>
        </div>
        <div class=" p-[3rem] ">
            <div class=" mx-auto max-w-screen-lg">
                <h2 class="text-2xl mb-[1rem] text-center font-semibold ">Notre processus de création de site web est
                    rigoureux et efficace.
                </h2>

                <div class="flex flex-col gap-5">
                    <p>
                        Pour réussir à créer le site web idéal pour votre entreprise, nous suivons un processus en quatres
                        (4) étapes qui peut résumer à ceci:
                    </p>
                </div>


            </div>
        </div>
        <div class="flex gap-10  mx-auto max-w-screen-lg">
            <ul class="flex flex-col gap-2">
                <li class="marker:text-green list-outside list-disc ml-6">
                    La découverte
                    À travers une rencontre préliminaire, nous prendrons le temps de comprendre clairement vos besoins/défis
                    et collecterons toute information pertinente liée à la création de site web ou de sa refonte.
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    Développement d’applications web et de plateformes technologiques personnalisées
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    La solution de création de site web
                    Avec l’information que vous nous aurez fourni, nous vous préparerons et présenterons une proposition
                    claire et détaillée des meilleures solutions et options pour la création de site web ou de sa refonte.
                </li>
            </ul>
            <ul class="flex flex-col gap-2">
                <li class="marker:text-green list-outside list-disc ml-6">
                    Développement du site web
                    En utilisant la méthode agile, notre équipe passera à la création visuelle puis fonctionnelle du site
                    web puis fonctionnelle de votre site web dans le respect des échéances fixées au calendrier de création
                    de site web.
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    Déploiement & Maintenance
                    La création de site web est terminée et il est prêt à être mis en ligne et présenté au grand public.
                    Nous formons vos équipes sur l’utilisation de votre site web pour vous donner toute l’autonomie dont
                    vous aurez besoin.
                </li>
                
            </ul>
        </div>

        <div class="flex justify-center item-center mt-10">
            <PrimaryButton>
                <a class="uppercase" href="">Commencer gratuitement</a>
            </PrimaryButton>
        </div>


        <!-- Temoignages à mettre ici -->

        <div class=" mx-auto max-w-screen-lg mt-20">
            <h2 class="text-3xl mb-[1rem] text-center font-semibold ">Si créer un site internet performant est nécessaire pour votre entreprise, nos solutions en création de sites web sont adaptées à votre budget.</h2>

            <p>
                En fonction de la complexité de votre projet de création de site web, nous pouvons vous proposer des formules de tarification flexible et adaptée à votre budget. Nous pouvons aussi vous proposer des plans de paiements échelonnés. Parlez à un de nos experts en création de site web aujourd’hui pour en savoir plus.
            </p>

            <div class="grid md:grid-cols-4 mt-10 text-center mx-auto max-w-screen-lg ">

                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[10rem] object-contain" src="@/../../public/images/wordpress-logo.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[8rem] object-contain" src="@/../../public/images/shopify.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[8rem] object-contain" src="@/../../public/images/Wix.com_Logo.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[10rem] object-contain" src="@/../../public/images/woo_commerce.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[8rem] object-contain" src="@/../../public/images/drupal.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[10rem] h-[5rem] object-contain  " src="@/../../public/images/Joomla.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[11rem] h-[5rem] object-contain  " src="@/../../public/images/prestashop.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[8rem] h-[5rem] object-contain  " src="@/../../public/images/magento.png" alt="">
                </div>
            </div>
        </div>


        <div class="  bg-clr-amour p-[2rem] pb-[5rem] mt-[5rem] ">

            <h2 class="font-bold text-3xl text-center pt-10  mx-auto max-w-screen-lg">
                Amplifiez votre présence en ligne avec la  création de site web par Teroc
            </h2>

        </div>

        <div class="flex justify-center item-center mt-10">
            <PrimaryButton>
                <a class="uppercase" href="">Commencer gratuitement</a>
            </PrimaryButton>
        </div>


        <div class="bg-blue-900 py-10 text-white mt-10">
            <div class=" mx-auto max-w-screen-lg">
                <h1 class="font-bold text-3xl mb-10">FAQ</h1>
                <ul>
                    <li class=" cursor-pointer" v-for="(faq, index) in faqs" :key="index">
                        <h3 class="flex justify-between mb-5 border-t  pt-5 " @click="toggleFAQ(index)">
                            {{ faq.question }}
                            <span class="font-bold text-2xl" v-if="faq.open">-</span>
                            <span class="font-bold text-2xl" v-else>+</span>
                        </h3>
                        <p v-if="faq.open">{{ faq.answer }}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-10">
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
</NavbarLayout></template>


