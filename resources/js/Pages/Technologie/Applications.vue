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
        question: "A quelle(s) étape(s) du développement d'application pouvez-vous m'aider?",
        answer: "Nous pouvons vous aider à toutes les étapes du développement de votre logiciel ou de votre application. De la première idée que vous avez à la solution finale. Parce que nous faisons un développement personnalisé selon vos besoins, nous pouvons le rendre aussi spécifique et personnalisé que vous le souhaitez. Nous pouvons intégrer des bases de données, des apk d'applications populaires, des GPS, des gyroscopes, etc. ainsi qu'utiliser les autres données que votre utilisateur a sur son téléphone ou son ordinateur. Le ciel est la limite de ce que nous pouvons faire.",
        open: false
    },
    {
        question: "Quel(s) langage(s) de programmation utilisez-vous ?",
        answer: "Nous pouvons développer votre logiciel ou votre application sur plusieurs plateformes ou avec différents langages de codage, en fonction de vos besoins. Nous sommes experts dans les domaines suivants : Drupal, Laravel, Python, PHP/MYSQL, AngularJS, Node.js, Vue.js, JavaScript, etc. Ensemble, nous trouverons le moyen le plus rapide et le plus économique de réaliser votre logiciel ou votre application.",
        open: false
    },
    {
        question: "Quels résultats puis-je attendre de la création d'une application sur mesure ?",
        answer: "Vous aurez un contrôle total de votre logiciel ainsi que de vos données. Vous serez en mesure de suivre les entrées et les sorties et d'améliorer immédiatement les performances. Votre productivité montera en flèche, et vous saurez exactement pourquoi vous avez réussi. La puissance d'analyse que vous offre un logiciel personnalisé est inégalée dans le monde du marketing ou de l'informatique. Vous serez également en mesure d'automatiser de nombreux processus et d'économiser du temps et des ressources.",
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


        <div class="bg-[url('@/../../public/images/application.jpg')] bg-cover  h-[40rem] pt-10 mb-20 ">
            <div class="bg-[#4d3d40bf] h-[37.5rem]  ">
                <div class=" flex flex-col h-[40rem] mx-auto max-w-screen-lg justify-center mx-auto md:px-6 py-2.5 ">
                    <div class="max-w-xl  ">
                        <h1 class="text-white md:text-6xl text-5xl font-semibold">Transformez votre organisation avec un
                            logiciel ou une
                            application web sur mesure<span class="text-[orange]">.</span></h1>

                        <p class="text-white mt-20 text-xl md:text-xl">Avec une application web sur mesure, vous
                            économiserez temps et argent en
                            augmentant productivité et performance. </p>
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
            <h2 class="text-2xl mb-[1rem] text-center font-semibold">La seul limite de votre projet de developpement
                d'application web ou d'un logiciel, c'est votre imagination.
            </h2>

            <div class="flex  flex-col gap-10  ">
                <p>
                    Positionné parmi les meilleurs de l’industrie dans le développement de logiciels ou le développement
                    d'applications web sur mesure à Montréal, nous cumulons plus de dix (10) ans d’expérience pendant
                    lesquelles
                    nous avons transformé et aidé plusieurs organisations. Nos services de développement de logiciels et de
                    développement d’applications web vous permettront d'accélérer et/ou d’automatiser vos processus,
                    d’améliorer
                    votre productivité et éventuellement vos résultats et l'expérience de vos utilisateurs.
                </p>
                <p>
                    Peu importe l'industrie dans laquelle vous êtes, le développement d’ un logiciel ou d'une application
                    web
                    qui répond parfaitement à vos besoins d'affaires vous permettra de rester en tête et compétitif en vous
                    donnant la capacité de vous adapter rapidement aux changements du marché.
                </p>
                <p>
                    Réclamez votre soumission gratuite en parlant aujourd'hui avec un de nos spécialistes pour le
                    développement
                    web de votre prochain logiciel ou application web .
                </p>
            </div>
        </div>



        <div class="  bg-clr-amour p-[2rem] pb-[5rem] mt-[5rem] ">
            <div class=" mx-auto max-w-screen-lg">
                <h2 class="text-2xl mb-[1rem] text-center font-semibold">Notre processus de développement de logiciels et de
                    développement d'applications web sont prouvés et génèrent des résultats.</h2>

                <div class="flex flex-col gap-5 ">

                    <p>
                        Choisir un fournisseur de développement pour une application web ou un logiciel est toujours délicat
                        pour n’importe quelle entreprise. Vous voulez vous assurer d’investir avec une agence spécialisée en
                        développement web sur mesure et capable de respecter les délais et ses engagements.
                    </p>

                    <p>
                        Notre agence web est le meilleur point de contact pour réaliser votre projet de développement web et
                        même dépasser vos attentes. Nous prenons notre travail de développement de logiciel et votre
                        satisfaction très au sérieux. Voilà pourquoi nous vous offrons de payer vos 10 premières heures de
                        services afin que vous puissiez nous évaluer et juger par vous-même avant de choisir et payer un
                        autre fournisseur de services de développement web..
                    </p>

                    <p>
                        Parlez à un expert en développement de logiciel et développement d’application web dès aujourd’hui
                        pour obtenir une soumission gratuite et réclamer vos dix (10) premières heures gratuites.
                    </p>
                </div>


            </div>
        </div>
        <div class=" p-[3rem] ">
            <div class=" mx-auto max-w-screen-lg">
                <h2 class="text-2xl mb-[1rem] text-center font-semibold ">Nous mettons notre passion pour la technologie,
                    notre expérience en développement d’applications web avec un souci important au détail à votre service.
                </h2>

                <div class="flex flex-col gap-5">
                    <p>
                        Au- delà de l’expérience et de notre expertise pour le développement d’une application web ou d’un
                        logiciel, nous sommes avant tout de vrais passionnés de technologies. Nous cherchons constamment des
                        solutions viables et abordables en matière de développement web pour aider nos clients. Parmis ces
                        solutions web nous pouvons citer les suivantes:
                    </p>
                </div>


            </div>
        </div>
        <div class="flex gap-10  mx-auto max-w-screen-lg">
            <ul class="flex flex-col gap-2">
                <li class="marker:text-green list-outside list-disc ml-6">
                    Développement de logiciels, de progiciels et d’applications de gestion
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    Développement d’applications web et de plateformes technologiques personnalisées
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    Développement web et intégration d’APIs pour interconnecter systèmes pour accélérer et améliorer vos
                    processus.
                </li>
            </ul>
            <ul class="flex flex-col gap-2">
                <li class="marker:text-green list-outside list-disc ml-6">
                    Création et maintenance d’infrastructures informatiques sécuritaires contre les pirates du web
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    Audit TI de vos systèmes et rédaction d’un plan de digitalisation
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    Lancer de nouveaux produits technologiques.
                </li>
            </ul>
        </div>

        <div class="flex justify-center item-center mt-10">
            <PrimaryButton>
                <a class="uppercase" href="">Parler à un expert</a>
            </PrimaryButton>
        </div>

        <div class=" mx-auto max-w-screen-lg mt-20">
            <h2 class="text-3xl mb-[1rem] text-center font-semibold ">Passez au prochain niveau en développant un logiciel
                ou une application web sur mesure aujourd’hui.</h2>

            <p>
                Nous maîtrisons et utilisons les meilleures et les dernières technologies pour vous livrer des projets
                simples ou complexes de développement d’application web et de logiciel adapté à votre réalité et vos
                priorités.
            </p>

            <div class="grid md:grid-cols-3 mt-10 text-center mx-auto max-w-screen-lg ">

                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[8rem] object-contain" src="@/../../public/images/php.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[8rem] object-contain" src="@/../../public/images/laravel_png.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[8rem] object-contain" src="@/../../public/images/Python-JS.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[8rem] object-contain" src="@/../../public/images/nodejs.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[8rem] object-contain" src="@/../../public/images/vue-js.png" alt="">
                </div>
                <div class="flex justify-center item-center mb-10 ">
                    <img class="w-[5rem] h-[5rem] object-contain  " src="@/../../public/images/react-js.png" alt="">
                </div>
            </div>
        </div>


        <div class="  bg-clr-amour p-[2rem] pb-[5rem] mt-[5rem] ">

            <h2 class="font-bold text-3xl text-center pt-10  mx-auto max-w-screen-lg">
                Chaque jour, nous développons et livrons plus des solutions logiciels et d’applications web fonctionnelles
                et innovants. Nous pouvons aussi vous aider
            </h2>

        </div>

        <div class="flex justify-center item-center mt-10">
            <PrimaryButton>
                <a class="uppercase" href="">Parler à un expert</a>
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
                        <span  class="font-bold text-2xl" v-else>+</span>
                    </h3>
                    <p v-if="faq.open">{{ faq.answer }}</p>
                </li>
            </ul>
            </div>
        </div>

        <div  class="mt-10" >
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


