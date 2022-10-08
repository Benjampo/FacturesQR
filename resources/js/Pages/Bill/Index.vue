<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link} from '@inertiajs/inertia-vue3';

</script>
<script>
export default {
    props: {
        bills: Object,
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

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table>
                            <thead>

                            </thead>
                            <tbody>
                            <tr v-for="bill in bills.data">
                                <td>{{bill.id}}</td>
                                <td>{{bill.title}}</td>
                                <td>{{bill.description}}</td>
                                <td>{{bill.price}}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
