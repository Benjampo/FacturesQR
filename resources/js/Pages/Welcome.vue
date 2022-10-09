<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/24/outline'
import {
    ArrowUturnLeftIcon,
    ChatBubbleLeftEllipsisIcon,
    DocumentChartBarIcon,
    HeartIcon, InboxIcon, PencilSquareIcon, TrashIcon, UsersIcon
} from '@heroicons/vue/20/solid';
import Footer from '@/Layouts/Marketing/Footer.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
const pricing = {
    tiers: [
        {
            title: 'Freelancer',
            price: 24,
            frequency: '/month',
            description: 'The essentials to provide your best work for clients.',
            features: ['5 products', 'Up to 1,000 subscribers', 'Basic analytics', '48-hour support response time'],
            cta: 'Monthly billing',
            mostPopular: false,
        },
        {
            title: 'Startup',
            price: 32,
            frequency: '/month',
            description: 'A plan that scales with your rapidly growing business.',
            features: [
                '25 products',
                'Up to 10,000 subscribers',
                'Advanced analytics',
                '24-hour support response time',
                'Marketing automations',
            ],
            cta: 'Monthly billing',
            mostPopular: true,
        },
        {
            title: 'Enterprise',
            price: 48,
            frequency: '/month',
            description: 'Dedicated support and infrastructure for your company.',
            features: [
                'Unlimited products',
                'Unlimited subscribers',
                'Advanced analytics',
                '1-hour, dedicated support response time',
                'Marketing automations',
                'Custom integrations',
            ],
            cta: 'Monthly billing',
            mostPopular: false,
        },
    ],
};
const features = [
    {
        name: 'Unlimited Inboxes',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: InboxIcon,
    },
    {
        name: 'Manage Team Members',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: UsersIcon,
    },
    {
        name: 'Spam Report',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: TrashIcon,
    },
    {
        name: 'Compose in Markdown',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: PencilSquareIcon,
    },
    {
        name: 'Team Reporting',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: DocumentChartBarIcon,
    },
    {
        name: 'Saved Replies',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: ArrowUturnLeftIcon,
    },
    {
        name: 'Email Commenting',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: ChatBubbleLeftEllipsisIcon,
    },
    {
        name: 'Connect with Customers',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: HeartIcon,
    },
]
const faqs = [
    {
        question: "What's the best thing about Switzerland?",
        answer:
            "I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    // More questions...
]

</script>

<template>
    <Head title="Welcome" />

    <div class="relative w-full items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden z-10 fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="inline-flex items-center rounded-md border border-transparent bg-white px-4 py-2 text-base font-medium text-indigo-600 hover:text-indigo-500">Connexion</Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'inscrire</Link>
            </template>
        </div>
        <div class="bg-gray-50 w-full">
            <div class="relative overflow-hidden">
                <div class="absolute inset-y-0 h-full w-full" aria-hidden="true">
                    <div class="relative h-full">
                        <svg class="absolute right-full translate-y-1/3 translate-x-1/4 transform sm:translate-x-1/2 md:translate-y-1/2 lg:translate-x-full" width="404" height="784" fill="none" viewBox="0 0 404 784">
                            <defs>
                                <pattern id="e229dbec-10e9-49ee-8ec3-0286ca089edf" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="784" fill="url(#e229dbec-10e9-49ee-8ec3-0286ca089edf)" />
                        </svg>
                        <svg class="absolute left-full -translate-y-3/4 -translate-x-1/4 transform sm:-translate-x-1/2 md:-translate-y-1/2 lg:-translate-x-3/4" width="404" height="784" fill="none" viewBox="0 0 404 784">
                            <defs>
                                <pattern id="d2a68204-c383-44b1-b99f-42ccff4e5365" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="784" fill="url(#d2a68204-c383-44b1-b99f-42ccff4e5365)" />
                        </svg>
                    </div>
                </div>

                <div class="relative pt-6 pb-16 sm:pb-24">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6">

                        </div>
                    <div class="mx-auto mt-16 max-w-7xl px-4 sm:mt-24 sm:px-6">
                        <div class="text-center">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block">Data to enrich your</span>
                                <span class="block text-indigo-600">online business</span>
                            </h1>
                            <p class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 flex flex-col" aria-hidden="true">
                        <div class="flex-1" />
                        <div class="w-full flex-1 bg-gray-800" />
                    </div>
                    <div class="mx-auto max-w-7xl px-4 sm:px-6">
                        <img class="relative rounded-lg shadow-lg" src="https://tailwindui.com/img/component-images/top-nav-with-multi-column-layout-screenshot.jpg" alt="App screenshot" />
                    </div>
                </div>
            </div>

            <div class="bg-gray-800">
                <div class="mx-auto max-w-7xl py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                    <h2 class="text-center text-base font-semibold text-gray-400">Trusted by over 26,000 forward-thinking companies</h2>
                    <div class="mt-8 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple" />
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage" />
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit" />
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-3 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor" />
                        </div>
                        <div class="col-span-2 flex justify-center md:col-span-3 lg:col-span-1">
                            <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden bg-white pt-16 pb-32">
            <div class="relative">
                <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8">
                    <div class="mx-auto max-w-xl px-4 sm:px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0">
                        <div>
                            <div>
              <span class="flex h-12 w-12 items-center justify-center rounded-md bg-indigo-600">
                <InboxIcon class="h-6 w-6 text-white" aria-hidden="true" />
              </span>
                            </div>
                            <div class="mt-6">
                                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Stay on top of customer support</h2>
                                <p class="mt-4 text-lg text-gray-500">Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p>
                                <div class="mt-6">
                                    <Link v-if="canRegister" :href="route('register')" class="inline-flex rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Commencer</Link>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-6">
                            <blockquote>
                                <div>
                                    <p class="text-base text-gray-500">&ldquo;Cras velit quis eros eget rhoncus lacus ultrices sed diam. Sit orci risus aenean curabitur donec aliquet. Mi venenatis in euismod ut.&rdquo;</p>
                                </div>
                                <footer class="mt-3">
                                    <div class="flex items-center space-x-3">
                                        <div class="flex-shrink-0">
                                            <img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="" />
                                        </div>
                                        <div class="text-base font-medium text-gray-700">Marcia Hill, Digital Marketing Manager</div>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:mt-0">
                        <div class="-mr-48 pl-4 sm:pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                            <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-1.jpg" alt="Inbox user interface" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-24">
                <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8">
                    <div class="mx-auto max-w-xl px-4 sm:px-6 lg:col-start-2 lg:mx-0 lg:max-w-none lg:py-32 lg:px-0">
                        <div>
                            <div>
              <span class="flex h-12 w-12 items-center justify-center rounded-md bg-indigo-600">
                <SparklesIcon class="h-6 w-6 text-white" aria-hidden="true" />
              </span>
                            </div>
                            <div class="mt-6">
                                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Better understand your customers</h2>
                                <p class="mt-4 text-lg text-gray-500">Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p>
                                <div class="mt-6">
                                    <Link v-if="canRegister" :href="route('register')" class="inline-flex rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Commencer</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:col-start-1 lg:mt-0">
                        <div class="-ml-48 pr-4 sm:pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                            <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-2.jpg" alt="Customer profile user interface" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 pt-12 sm:pt-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-4xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Trusted by developers from over 80 planets</h2>
                    <p class="mt-3 text-xl text-gray-500 sm:mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus repellat laudantium.</p>
                </div>
            </div>
            <div class="mt-10 bg-white pb-12 sm:pb-16">
                <div class="relative">
                    <div class="absolute inset-0 h-1/2 bg-gray-50" />
                    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="mx-auto max-w-4xl">
                            <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                                <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                                    <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">Pepperoni</dt>
                                    <dd class="order-1 text-5xl font-bold tracking-tight text-indigo-600">100%</dd>
                                </div>
                                <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                    <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">Delivery</dt>
                                    <dd class="order-1 text-5xl font-bold tracking-tight text-indigo-600">24/7</dd>
                                </div>
                                <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                    <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">Calories</dt>
                                    <dd class="order-1 text-5xl font-bold tracking-tight text-indigo-600">100k</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-indigo-700">
            <div class="mx-auto max-w-4xl px-4 py-16 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:px-8 lg:pt-24">
                <h2 class="text-3xl font-bold tracking-tight text-white">Inbox support built for efficiency</h2>
                <p class="mt-4 max-w-3xl text-lg text-indigo-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis. Blandit aliquam sit nisl euismod mattis in.</p>
                <div class="mt-12 grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">
                    <div v-for="feature in features" :key="feature.name">
                        <div>
            <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
              <component :is="feature.icon" class="h-6 w-6 text-white" aria-hidden="true" />
            </span>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-white">{{ feature.name }}</h3>
                            <p class="mt-2 text-base text-indigo-200">{{ feature.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto  bg-white py-24 px-4 sm:px-6 lg:px-8 flex flex-col items-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl sm:leading-none lg:text-6xl">Pricing plans for teams of all sizes</h2>
            <p class="mt-6 max-w-2xl text-xl text-gray-500">Choose an affordable plan that's packed with the best features for engaging your audience, creating customer loyalty, and driving sales.</p>
            <div class="mt-24 max-w-7xl space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
                <div v-for="tier in pricing.tiers" :key="tier.title" class="relative flex flex-col rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-gray-900">{{ tier.title }}</h3>
                        <p v-if="tier.mostPopular" class="absolute top-0 -translate-y-1/2 transform rounded-full bg-indigo-500 py-1.5 px-4 text-sm font-semibold text-white">Most popular</p>
                        <p class="mt-4 flex items-baseline text-gray-900">
                            <span class="text-5xl font-bold tracking-tight">${{ tier.price }}</span>
                            <span class="ml-1 text-xl font-semibold">{{ tier.frequency }}</span>
                        </p>
                        <p class="mt-6 text-gray-500">{{ tier.description }}</p>

                        <!-- Feature list -->
                        <ul role="list" class="mt-6 space-y-6">
                            <li v-for="feature in tier.features" :key="feature" class="flex">
                                <CheckIcon class="h-6 w-6 flex-shrink-0 text-indigo-500" aria-hidden="true" />
                                <span class="ml-3 text-gray-500">{{ feature }}</span>
                            </li>
                        </ul>
                    </div>

                    <a href="#" :class="[tier.mostPopular ? 'bg-indigo-500 text-white hover:bg-indigo-600' : 'bg-indigo-50 text-indigo-700 hover:bg-indigo-100', 'mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium']">{{ tier.cta }}</a>
                </div>
            </div>
        </div>
        <section class="bg-indigo-800">
            <div class="mx-auto max-w-7xl md:grid md:grid-cols-2 md:px-6 lg:px-8">
                <div class="py-12 px-4 sm:px-6 md:flex md:flex-col md:border-r md:border-indigo-900 md:py-16 md:pl-0 md:pr-10 lg:pr-16">
                    <div class="md:flex-shrink-0">
                        <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-indigo-300.svg" alt="Tuple" />
                    </div>
                    <blockquote class="mt-6 md:flex md:flex-grow md:flex-col">
                        <div class="relative text-lg font-medium text-white md:flex-grow">
                            <svg class="absolute top-0 left-0 h-8 w-8 -translate-x-3 -translate-y-2 transform text-indigo-600" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                            </svg>
                            <p class="relative">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis.</p>
                        </div>
                        <footer class="mt-8">
                            <div class="flex items-start">
                                <div class="inline-flex flex-shrink-0 rounded-full border-2 border-white">
                                    <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                </div>
                                <div class="ml-4">
                                    <div class="text-base font-medium text-white">Judith Black</div>
                                    <div class="text-base font-medium text-indigo-200">CEO, Tuple</div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
                <div class="border-t-2 border-indigo-900 py-12 px-4 sm:px-6 md:border-t-0 md:border-l md:py-16 md:pr-0 md:pl-10 lg:pl-16">
                    <div class="md:flex-shrink-0">
                        <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-indigo-300.svg" alt="Workcation" />
                    </div>
                    <blockquote class="mt-6 md:flex md:flex-grow md:flex-col">
                        <div class="relative text-lg font-medium text-white md:flex-grow">
                            <svg class="absolute top-0 left-0 h-8 w-8 -translate-x-3 -translate-y-2 transform text-indigo-600" fill="currentColor" viewBox="0 0 32 32">
                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                            </svg>
                            <p class="relative">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis. Nemo expedita voluptas culpa sapiente alias molestiae.</p>
                        </div>
                        <footer class="mt-8">
                            <div class="flex items-start">
                                <div class="inline-flex flex-shrink-0 rounded-full border-2 border-white">
                                    <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                </div>
                                <div class="ml-4">
                                    <div class="text-base font-medium text-white">Joseph Rodriguez</div>
                                    <div class="text-base font-medium text-indigo-200">CEO, Workcation</div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </section>
        <div class="bg-gray-50">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl divide-y-2 divide-gray-200">
                    <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Frequently asked questions</h2>
                    <dl class="mt-6 space-y-6 divide-y divide-gray-200">
                        <Disclosure as="div" v-for="faq in faqs" :key="faq.question" class="pt-6" v-slot="{ open }">
                            <dt class="text-lg">
                                <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-400">
                                    <span class="font-medium text-gray-900">{{ faq.question }}</span>
                                    <span class="ml-6 flex h-7 items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" />
                </span>
                                </DisclosureButton>
                            </dt>
                            <DisclosurePanel as="dd" class="mt-2 pr-12">
                                <p class="text-base text-gray-500">{{ faq.answer }}</p>
                            </DisclosurePanel>
                        </Disclosure>
                    </dl>
                </div>
            </div>
        </div>
        <Footer />
    </div>
</template>
