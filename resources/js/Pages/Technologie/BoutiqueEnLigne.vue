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
        question: "Pouvez-vous rendre ma boutique en ligne accessible en plusieurs langues ?",
        answer: "A Oshara, agence web basée à Montréal, nous faisons tout notre possible pour donner vie à votre projet de création de boutique en ligne. Si votre projet inclus la traduction de votre contenu dans une ou plusieurs langues, alors nous espérons être à la hauteur. Si vous souhaiter rajouter le français ou l’anglais à votre boutique en ligne, nous sommes déjà prêts à agir alors contactez-nous dès maintenant. Autrement, si vous désirez traduire votre contenu dans une autre langue contactez-nous directement pour savoir si nous sommes en mesure de réaliser votre projet.",
        open: false
    },
    {
        question: "Pourquoi investir dans la création d’une boutique en ligne ?",
        answer: "Avoir une boutique en ligne vous apporte plusieurs avantages. Peu importe que vous soyez un petit ou gros commerce, vous y trouverez quelque chose à gagner, et encore plus depuis la pandémie. Une boutique en ligne vous apporte de la visibilité sur le web, de la notoriété ou encore de la crédibilité. Vous vous rendez accessible à plus de personnes en permanence, que vous cherchiez de nouveaux clients ou à fidéliser vos clients, c’est probablement le moyen qui vous obtiendra les meilleurs résultats. De plus, vous pouvez augmenter vos chances de communiquer avec vos clients, ainsi qu’augmenter vos chances de vendre.",
        open: false
    },
    {
        question: "Combien de temps prends la création d’une boutique en ligne ?",
        answer: "Le temps de création ou d’amélioration de votre boutique en ligne est variable, cela peut prendre quelques semaines à plusieurs mois. Dépendamment de si vous souhaiter créer votre boutique ne ligne ou l’améliorer, vous devrez attendre plus ou moins longtemps pour que le résultat soit parfait. Plus vos demandes sont sophistiquées en technologie et nouvelles fonctionnalités, plus ça va nous prendre du temps à confectionner. Cependant la vraie question à vous poser c’est : est-ce un bon investissement ? Retenez qu’à Oshara Inc., l’agence web basée à Montréal, nous nous adaptons à vous. Nous avons de l’expérience auprès de petites comme de grosses structures, ce qui fait de nous l’agence idéale créer ou améliorer votre boutique en ligne dans les délais qui vous conviennent.",
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


        <div class="bg-[url('@/../../public/images/e-commerce.jpg')] bg-cover object-cover h-[40rem] mt-10 mb-20 ">
            <div class="bg-[#4d3d40bf] h-[40rem]  ">
                <div class=" flex flex-col h-[40rem] mx-auto max-w-screen-lg justify-center mx-auto md:px-6 py-2.5 ">
                    <div class="max-w-xl  ">
                        <h1 class="text-white md:text-6xl text-5xl font-semibold">Créez une boutique en ligne qui augmente
                            vos ventes et l’expérience d’achat de vos clients<span class="text-[orange]">.</span></h1>

                        <p class="text-white mt-20 text-xl md:text-xl">Vendez tout ce que vous voulez peu importe l’endroit
                            grâce au commerce électronique avec une boutique en ligne. </p>
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
            <h2 class="text-2xl mb-[1rem] text-center font-semibold">Repoussez les limites du commerce traditionnel avec une
                boutique en ligne qui vous offrira des possibilités de ventes infinies sur le web.
            </h2>

            <div class="flex  flex-col gap-10  ">
                <p>
                    Grâce au e-commerce, des millions de personnes recherchent chaque jour vos produits sur internet.
                    Répondez à cette demande importante en créant une boutique en ligne et vendez vos produits à un plus
                    grand nombre de personnes sur internet.
                </p>
                <p>
                    A une ère où le e-commerce continue de transformer la manière dont nous consommons et transigeons, une
                    boutique en ligne peut vous aider à saisir des opportunités réelles de vendre plus de produits partout
                    dans le monde.
                </p>
                <p>
                    Nous sommes une agence de création de site e-commerce sur mesure basée à montréal et notre équipe cumule
                    plus de dix (10) ans d’expérience dans le développement de boutiques en ligne, autant pour des PMEs que
                    des grandes entreprises. Parlez à un de nos experts e-commerce pour obtenir une estimation gratuite dès
                    aujourd’hui.
                </p>
            </div>
        </div>



        <div class="  bg-clr-amour p-[2rem] pb-[5rem] mt-[5rem] ">
            <div class=" mx-auto max-w-screen-lg">
                <h2 class="text-2xl mb-[1rem] text-center font-semibold">Diriez-vous NON à la possibilité de faire des
                    ventes 24h/24, pendant toute l’année avec la création d’une boutique en ligne si elle vous permet
                    d’accélérer la croissance de votre entreprise?</h2>

                <div class="flex flex-col gap-5 ">

                    <p>
                        La réponse à cette question est bien évidemment NON. Qui ne souhaite pas augmenter ses ventes même
                        pendant son sommeil ? Depuis 2020, le e-commerce a explosé et la création de sites web style
                        boutiques en ligne se fait par centaines chaque jour car les entreprises réalisent que c'est bien
                        plus qu'une simple tendance. Avoir un site e-commerce aujourd’hui est clairement un outil économique
                        nécessaire pour grandir et survivre en affaires.
                    </p>

                    <p>
                        Peu importe votre statut et votre situation, si vous avez une idée ou un produit à commercialiser,
                        nous pouvons vous aider à vendre sur internet avec une boutique en ligne personnalisée à vos besoins
                        et objectifs. Nos experts dans le domaine de e-commerce vous aideront à choisir et créer la boutique
                        en ligne la plus adaptée à votre besoin et à votre budget.
                    </p>
                </div>


            </div>
        </div>
        <div class=" p-[3rem] ">
            <div class=" mx-auto max-w-screen-lg">
                <h2 class="text-2xl mb-[1rem] text-center font-semibold ">Économisez du temps et augmentez vos ventes, peu
                    importe ce que vous vendez sur internet grâce à une boutique en ligne qui retient l’attention des
                    internautes.
                </h2>

                <div class="flex flex-col gap-5">
                    <p>
                        Plusieurs agences de création de site web vous diront être capable de réaliser la création de votre
                        boutique en ligne, et c'est vrai. Par contre très peu comprennent réellement le concept de
                        l’engagement des internautes et son importance. Chez Oshara, nous créons des boutiques en ligne en
                        tenant compte spécifiquement de votre audience cible de sorte à les engager et les retenir dès leur
                        première visite sur le site e-commerce. En travaillant avec nos experts en création de boutique en
                        ligne, nous ferons économiser du temps, et vous aiderons à atteindre vos objectifs plus rapidement.
                    </p>
                    <p>
                        Nos solutions de créations de site e-commerce intègrent toujours les meilleures technologies et
                        fonctionnalités tel que:
                    </p>
                </div>


            </div>
        </div>
        <div class="flex gap-10  mx-auto max-w-screen-lg">
            <ul class="flex flex-col gap-2">
                <li class="marker:text-green list-outside list-disc ml-6">
                    La gestion des produits et stocks.
                    Organisez vos produits dans votre boutique en ligne par catégorie, par prix et gérer intuitivement vos
                    ventes et votre stocks
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    Tableau de bord et suivi des Ventes
                    À partir d’une seule interface, visualisez toutes vos ventes, analysez le trafic sur votre boutique en
                    ligne et bien plus pour attirer des clients plus facilement.
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    Commandes et expédition
                    Envoyez vos commandes n’importe où et gérer la tarification selon le modèle le plus adapté à votre
                    entreprise.
                </li>
            </ul>
            <ul class="flex flex-col gap-2">
                <li class="marker:text-green list-outside list-disc ml-6">
                    Gestion de la relation client (CRM)
                    Attirez, gérez et communiquez efficacement avec vos clients grâce à des outils et des modules
                    technologiques uniques intégrées dans votre boutique en ligne.
                </li>
            </ul>
        </div>

        <div class="flex justify-center item-center mt-10">
            <PrimaryButton>
                <a class="uppercase" href="">Commencer gratuitement</a>
            </PrimaryButton>
        </div>

        <!-- Témoignage -->

        <div class=" mx-auto max-w-screen-lg mt-20">
            <h2 class="text-3xl mb-[1rem] text-center font-semibold ">Avec une boutique en ligne, vous pourrez attirer
                facilement plus de clients, peu importe où ils se trouvent sur la planète. C’est ça, le vrai pouvoir du
                e-commerce.</h2>

            <p>
                Avec plus de 3.5 milliards de recherches par jour sur Google seulement, imaginez tout le potentiel
                d’opportunités de ventes qu’une boutique en ligne peut vous offrir. Peu importe votre position géographique
                ou celle de vos clients, vendre en ligne avec un site e-commerce est peut être l’une des plus belle
                révolution digitale de l’histoire du commerce moderne. Qu’il s'agisse de créer une boutique en ligne sur
                mesure ou d’utiliser des solutions pré-faites, nous pouvons vous aider car notre expertise en e-commerce est
                prouvée et nous maîtrisons l’utilisation des meilleures technologies dans ce marché.
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
                Choisir une agence d’experts en e-commerce comme la nôtre pour la création de votre boutique en ligne, c’est faire le bon choix et réussir votre pari.
            </h2>

        </div>

        <div class="flex justify-center item-center mt-10">
            <PrimaryButton>
                <a class="uppercase" href="">Commener maintenant</a>
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


