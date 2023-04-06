<script setup>
import NavbarLayout from '@/Layouts/NavbarLayout.vue';
import Footer from '@/Layouts/Footer.vue';
import { router } from '@inertiajs/vue3';


import PrimaryButton from '@/Components/PrimaryButton.vue';
import ArrowIcon from '@/Components/ArrowIcon.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';


import { ref, reactive, onMounted, onUnmounted, watchEffect } from 'vue';



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
        question: "Pourquoi confier mon référencement SEO à des experts ?",
        answer: "En confiant le référencement naturel SEO de votre site internet à nos experts vous choisissez la méthode la plus simple et efficace pour vous. Vous obtiendrez des résultats plus rapidement en faisant appel à notre agence ainsi que des meilleures performances. Votre retour sur investissement sera bien plus élevé car nous avons beaucoup d’expérience dans le domaine. L’agence web Oshara, basée à Montréal, s’adapte à votre budget pour améliorer le référencement naturel de votre site internet, alors n’hésitez pas à nous contacter. Choisir Oshara, c’est gagner du temps pour vous occuper de vos clients et être sûr de rester compétitif sur le web.",
        open: false
    },
    {
        question: "Pourquoi investir dans du référencement SEO ?",
        answer: "Tout d’abord, avoir un site internet c’est bien mais si personne ne le visite ce n’est pas très utile. Avec internet tout va très vite, et pour rester compétitif vous devez apparaitre sur la première page de recherche Facebook. C’est pourquoi Oshara, l’agence web basée à Montréal, augmente votre visibilité sur internet en offrant à votre site plus de visites pertinentes, et donc plus de clients prêts à acheter vos produits et/ou services. A notre époque, et encore plus depuis la pandémie, vous ne pouvez plus échapper à l’utilisation d’internet pour grandir votre commerce. N’hésitez pas à nous contacter pour plus d’informations.",
        open: false
    },
    {
        question: "Comment puis-je suivre l’évolution du mon référencement ?",
        answer: "L’outil le plus utilisé pour suivre l’avancée de votre référencement naturel SEO est Google Analytics. Grâce à cette plateforme, vous aurez accès à beaucoup de données concernant votre site internet. De plus, en choisissant l’agence web Oshara, basée à Montréal, nos experts vous font un rapport mensuel de l’avancée de votre référencement en vous détaillant les progrès qu’ils ont remarquées et les taches qu’ils ont accomplies durant la semaine. Nos spécialistes en référencement naturel SEO sont là pour vous accompagner et vous aider à comprendre afin que vous puissiez maintenir, si vous le souhaitez, votre classement dans le moteur de recherche sur le long terme vous-même.",
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


        <div class="bg-[url('@/../../public/images/redaction_web.jpg')] bg-cover  h-[40rem]  mb-20 mt-20 ">
            <div class="bg-[#4d3d40bf] h-[40rem]  ">
                <div class=" flex flex-col h-[40rem] mx-auto max-w-screen-lg justify-center mx-auto md:px-6 py-2.5 ">
                    <div class="max-w-xl  ">
                        <h1 class="text-white md:text-6xl text-5xl font-semibold">Soyez visible lorsque votre prochain
                            client recherchera vos produits ou services en ligne<span class="text-[orange]">.</span></h1>

                        <p class="text-white mt-20 text-xl md:text-xl">
                            Augmentez le trafic web et multipliez vos ventes grâce au SEO! </p>
                        <ul class="text-white mt-5 text-lg">
                            <li>***Un appel stratégique de 30 minutes avec un de nos experts SEO</li>
                            <li>***Un audit SEO de plus de 50 pages couvrant le référencement, le PPC, Facebook et plus
                                (valeur de 500$)</li>
                            <li>
                                ***Un Plan d’action SEO sur 6 mois
                            </li>
                        </ul>
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
            <h2 class="text-2xl mb-[1rem] text-center font-semibold">Vous pouvez passer à la 1ère page des moteurs de
                recherche en ligne comme Google. Commencer aujourd’hui et nous paierons pour votre audit SEO et plan
                d’action personnalisé.
            </h2>

            <div class="flex  flex-col gap-10  ">
                <p>
                    Nous faisons partie des meilleures agences SEO à Montréal et nous nous spécialisons en référencement
                    naturel qui positionne nos clients parmi les premiers résultats des moteurs de recherches sur internet.
                </p>
                <p>
                    Ayant travaillé avec plusieurs entreprises dans différents secteurs, nous avons accumulé une expérience
                    riche et complète en référencement web SEO. Notre expertise dans le domaine du référencement naturel a
                    permis à des centaines d’entreprises de booster les visites et ventes sur leurs sites web. Nous
                    utilisons des techniques SEO efficaces pour vous permettre de positionner votre site web en première
                    page de Google et des moteurs de recherches sur internet.

                    Grâce au référencement SEO, vous êtes visible au moment même où vos clients potentiels recherchent vos
                    produits et services.
                </p>
                <p>
                    Obtenez votre Plan de référencement SEO gratuitement!
                </p>
            </div>
        </div>



        <div class="  bg-clr-amour p-[2rem] pb-[5rem] mt-[5rem] ">
            <div class=" mx-auto max-w-screen-lg">
                <h2 class="text-2xl mb-[1rem] text-center font-semibold">Réclamez-nous votre audit SEO gratuit pour évaluer
                    votre situation en matière de référencement naturel. Augmentez ensuite vos ventes grâce à un plan de
                    référencement SEO sur mesure.</h2>

                <div class="flex flex-col gap-5 ">

                    <p>
                        Nous sommes une agence SEO qui pouvons vous aider à booster les visites sur votre site web, le
                        nombre de prospects et de ventes de votre entreprise. Pour y arriver nous avons d’abord besoin
                        d’évaluer votre site web à travers un audit SEO que nous vous offrons gratuitement. S’en suivra des
                        recommandations et un plan d’action infaillible qui vous propulsera au top des résultats sur les
                        moteurs de recherches en seulement quelques semaines.
                    </p>

                    <p>
                        Nos solutions SEO ont déjà permis à des milliers d’entreprises de multiplier leurs revenus et leur
                        croissance. À votre tour d’en profiter en commençant gratuitement.
                    </p>


                </div>


            </div>
        </div>
        <div class=" p-[3rem] ">
            <div class=" mx-auto max-w-screen-lg">
                <h2 class="text-2xl mb-[1rem] text-center font-semibold ">L’exécution des actions découlant d’un plan SEO
                    augmentent votre visibilité et génère des résultats en très peu de temps.
                </h2>

                <div class="flex flex-col gap-5">
                    <p>
                        Notre solution en matière de référencement SEO est personnalisée et axée sur les résultats en vous
                        positionnant dans les premiers résultats de recherche en ligne pour les internautes qui
                        s'intéressent à ce que vous avez à offrir.
                        Elle inclut plusieurs actions tels que :
                    </p>
                </div>


            </div>
        </div>
        <div class="flex gap-10  mx-auto max-w-screen-lg">
            <ul class="flex flex-col gap-2">
                <li class="marker:text-green list-outside list-disc ml-6">
                    La veille concurrentielle SEO et étude de votre compétition
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    L'optimisation des pages de votre site web (on-site SEO et off-site SEO)
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    La création de listes et intégration des mots-clés pertinents dans vos contenus pour améliorer votre SEO
                    et positionnement dans les résultats de recherches
                </li>
            </ul>
            <ul class="flex flex-col gap-2">
                <li class="marker:text-green list-outside list-disc ml-6">
                    La création et l’intégration de liens de redirections référents (backlinks) sur votre site web et des
                    sites à forte notoriété
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    L’amélioration de la performance de votre site web (vitesse de chargement, balises titres, meta
                    description, etc,)
                </li>
                <li class="marker:text-green list-outside list-disc ml-6">
                    Et bien plus d’action SEO
                </li>
            </ul>
        </div>

        <div class="flex justify-center item-center mt-10">
            <PrimaryButton>
                <a class="uppercase" href="">Consultation gratuite</a>
            </PrimaryButton>
        </div>

        <!-- Temoignage -->
        <div id="app" class="py-20 bg-[orange] mt-20">
           
        </div>



        <div class="bg-blue-900 py-10 text-white ">

            <div class=" mx-auto max-w-screen-lg">
                <div>
                    <h1 class="uppercase font-bold text-2xl">OBTENEZ VOTRE ÉVALUATION DIGITALE GRATUITEMENT!</h1>
                    <ul class="pt-5">
                        <li class="marker:text-green list-outside list-disc ml-6">Analyse complet de votre site web</li>
                        <li class="marker:text-green list-outside list-disc ml-6">Rapport de performance SEO en 20 points
                        </li>
                        <li class="marker:text-green list-outside list-disc ml-6">Stratégie sur mesure d’actions marketing
                            numérique</li>
                    </ul>
                </div>
                <div class="py-5">
                    Avec plus de 800 campagnes créées, gérées et réussies en marketing numérique nous pouvons vous aider à
                    générer plus de prospects et de ventes sur internet. Demandez votre consultation stratégique gratuite
                    aujourd'hui.
                </div>
                <PrimaryButton>
                    Reclamer votre audit Gratuit
                </PrimaryButton>
            </div>
        </div>


        <div class=" mx-auto max-w-screen-lg mt-20">
            <h2 class="text-3xl mb-[1rem] text-center font-semibold ">Notre processus en matière de référencement naturel
                (SEO) est non seulement clair mais surtout personnalisé. Et en plus, il fonctionne toujours.</h2>

            <p>
                Pour réussir à atteindre les objectifs SEO que vous aurez fixé pour votre entreprise, et bien que nous
                personnalisions toujours votre plan SEO , nous suivons un processus très organisé et rigoureux qui génère
                souvent des résultats même au 1er mois
            </p>
            <p>
                Parlez à un expert aujourd’hui en réservant une rencontre virtuelle de 30 minutes.
            </p>

            <div class="grid md:grid-cols-3 mt-10 text-center mx-auto max-w-screen-lg ">

                <div class=" mb-10 ">
                    <h2 class="font-bold text-md">Prise de contact</h2>
                    <p>Réclamez votre plan de référencement SEO en comminiquant avec un de nos experts en référencement SEO
                        dès aujoud’hui.</p>
                </div>
                <div class=" mb-10 ">
                    <h2 class="font-bold text-md">Découverte</h2>
                    <p>Nous prendrons quelques minutes de votre temps pour comprendre votre modèle d’affaires et vos
                        objectifs afin de vous proposer une solution personalisée. </p>
                </div>
                <div class=" mb-10 ">
                    <h2 class="font-bold text-md">Exécution</h2>
                    <p>Nous exécutons le plan SEO défini en effectuant les optimisations et suvis neccessaires pour
                        atteindre les objectifs fixés et préalablement approuvé.</p>
                </div>
                <div class=" mb-10 ">
                    <h2 class="font-bold text-md">Plan SEO</h2>
                    <p>On analyse votre compétition et on fait des recommandations dans un plan d’action de référencement
                        SEO détaillée et axée sur des résultats quantifiables.</p>
                </div>
                <div class=" mb-10 ">
                    <h2 class="font-bold text-md">Rapports et Résultats</h2>
                    <p>Nous observons régulièrement et de très près la performance SEO et nous les documentons dans des
                        rapports vous présentant clairement vos résultats et le progès de référencement.</p>
                </div>
                <div class=" mb-10 ">
                    <h2 class="font-bold text-md">Amélioration continue</h2>
                    <p>Le référencement SEO neccessite de l’omitisation continue. En tenant compte des standars web en
                        constante évolution nous nous assurons de positionner et garder votre site web au top de Google.</p>
                </div>

            </div>
        </div>


        <div class="  bg-clr-amour p-[2rem] pb-[5rem] mt-[5rem] ">

            <h2 class="font-bold text-3xl text-center pt-10  mx-auto max-w-screen-lg">
                Commencer sans engagement et améliorer votre visibilité en ligne et votre positionnement dans les moteurs de
                recherche comme Google grâce au meilleur service de référencement SEO sur le marché.
            </h2>

        </div>

        <div class="flex justify-center item-center mt-10">
            <PrimaryButton>
                <a class="uppercase" href="">Commencer mon SEO</a>
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
    </NavbarLayout>
</template>

<style  scoped>
.slider-container {
    max-width: 800px;
    margin: 0 auto;
}

.slider {
    display: flex;
    flex-wrap: wrap;
    overflow: hidden;
}

.slide {
    flex: 0 0 33.33%;
    padding: 20px;
    text-align: center;
}

.slide img {
    width: 100%;
    border-radius: 50%;
}

.slide h3 {
    margin-top: 10px;
    margin-bottom: 5px;
}

.slide p {
    font-style: italic;
    color: #666;
}
</style>


