<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import NavLink from '@/Components/NavLink.vue';

import { Head, Link} from '@inertiajs/inertia-vue3';
import { TrashIcon,PencilIcon, PlusIcon } from '@heroicons/vue/24/outline'
</script>
<script>
export default {
    props: {
        bills: Object,
    },
    methods: {
        destroy(id) {
            this.$inertia.delete(route("bills.destroy", id));
        },
        edit(id) {
            this.$inertia.update(route("bills.update", id));
        },
    },
};
</script>

<template>
    <Head title="Bills" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Bills
                </h2>

            </div>
        </template>
        <template #action>
            <button class="flex  items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">
                <a :href="route('bills.create')" class='flex justify-center items-center gap-1'>
                    <PlusIcon class="h-5 w-5" aria-hidden="true" />
                    Créer une facture
                </a>

            </button>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white border-b border-gray-200">
                        <table class="min-w-full p-2 border-separate" style="border-spacing: 0">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-bold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                    Client
                                </th>
                                <th class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                    Titre
                                </th>
                                <th class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                    Prix
                                </th>
                                <th class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                    Status
                                </th>
                                <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pr-4 pl-3 backdrop-blur backdrop-filter sm:pr-6 lg:pr-8">
                                    <span class="sr-only">actions</span>
                                </th>
                            </tr>

                            </thead>
                            <tbody>
                            <tr class='max-w-full' v-for="bill in bills">
                                <td class=" border-b border-gray-200 whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                    {{ bill.client?.firstname }} {{ bill.client?.lastname }}
                                </td>
                                <td class=" border-b border-gray-200 whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                    {{ bill.title }}
                                </td>
                                <td class="border-b border-gray-200 whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                    {{ bill.price }} CHF
                                </td>
                                <td class="border-b border-gray-200 whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                    <span v-if="bills.status === 'transit' " class='class="inline-flex rounded-full bg-blue-100 px-2 text-xs font-semibold leading-5 text-blue-800">'>En attente</span>
                                    <span v-else-if="bills.status === 'late' " class='class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800">'>Non payé</span>
                                    <span v-else-if="bills.status === 'paid' " class='class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">'>Payé</span>
                                    <span v-else class='class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800">'>Erreur</span>
                                </td>
                                <td class=' flex justify-center gap-5 border-b border-gray-200 whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8'>
                                    <Link
                                        @click="update(bill.id)"
                                        class="text-gray-600 hover:text-indigo-900 "
                                    >
                                        <PencilIcon class="h-5 w-5" aria-hidden="true" />
                                    </Link>
                                    <Link
                                    @click="destroy(bill.id)"
                                    class="text-gray-600 hover:text-red-900"
                                    >
                                        <TrashIcon class="h-5 w-5" aria-hidden="true" />
                                    </Link>

                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
