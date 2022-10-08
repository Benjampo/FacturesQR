<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
    import TextInput from '@/Components/TextInput.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';


    const form = useForm({
        title: null,
        description: null,
        price: null,
    });
    const submit = () => {
        form.post(route("bills.store"));
    }
</script>


<template>
    <Head title="Bills" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Nouvelle facture
                </h2>

            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                            <div>
                                <InputLabel Label='Titre' for="title">Titre</InputLabel>
                                <TextInput
                                    id="title"
                                    type="text"
                                    v-model="form.title"
                                    class="
                                        w-full
                                        px-4
                                        py-2
                                        mt-2
                                        border
                                        rounded-md
                                        focus:outline-none
                                        focus:ring-1
                                        focus:ring-blue-600
                                    "
                                />
                            </div>
                            <div class="mt-4">
                                <InputLabel label='Description' for="description">Description</InputLabel>
                                <TextInput
                                    id="description"
                                    type="text"
                                    v-model="form.description"
                                    class="
                                        w-full
                                        px-4
                                        py-2
                                        mt-2
                                        border
                                        rounded-md
                                        focus:outline-none
                                        focus:ring-1
                                        focus:ring-blue-600
                                    "
                                >
                                </TextInput>
                            </div>
                            <div class="mt-4">
                                <InputLabel label='Prix' for="price">Prix</InputLabel>
                                <TextInput
                                    id="price"
                                    type="number"
                                    v-model="form.price"
                                    class="
                                        w-full
                                        px-4
                                        py-2
                                        mt-2
                                        border
                                        rounded-md
                                        focus:outline-none
                                        focus:ring-1
                                        focus:ring-blue-600
                                    "
                                >
                                </TextInput>
                            </div>

                            <!-- submit -->
                            <div class="flex items-center mt-4">
                                <PrimaryButton type="submit" class="ml-4">
                                    Créer facture
                                </PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
