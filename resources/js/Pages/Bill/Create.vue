<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
    import TextInput from '@/Components/TextInput.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import {
        Combobox,
        ComboboxButton,
        ComboboxInput,
        ComboboxLabel,
        ComboboxOption,

        ComboboxOptions,
    } from '@headlessui/vue'
    import { computed } from 'vue';
    import TextArea from '@/Components/TextArea.vue';

    const form = useForm({
        title: null,
        description: null,
        price: null,
        client_id: null,
        tasks: [
            {

            }
        ]
    });
    const submit = () => {
        form.post(route("bills.store"));
    }
</script>
<script>
export default {
    props: {
        clients: Object,
    },
    data() {
        return {
            clientsData: null,
            query: '',
        }
    },
    methods: {
        formatClients() {
            console.log(this.clients)
            const newData = JSON.parse(JSON.stringify(this.clients))
            const arr =  Object.keys(newData).map((k) => newData[k])
            this.clientsData = arr
        },
        addRow() {
            this.form.tasks.push({
                title: '',
                description: '',
                price: 0,
            })
        },
        deleteRow() {
            this.form.tasks.pop()
        },
    },
    created() {
        this.formatClients()
    },
    computed: {
        filtered() {
            return this.query === ''
                ? this.clientsData
                : this.clientsData.filter((person) => {
                    console.log(person)
                    return person.firstname.toLowerCase().includes(this.query.toLowerCase())
                })
        },
        totalPrice() {
            let sum = 0;
            this.form.tasks.forEach((task) => {
                sum += parseInt(task.price)
            })
            this.form.price = sum
            return  sum > 0 ?  sum : null
        }
    },

};
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
                            <div class="mt-4">
                                <InputLabel label='Client' for="client">Client</InputLabel>
                                <select v-model="form.client_id">
                                    <option v-for='client in clients' :value='client.id'>{{ client.firstname }} {{ client.lastname }}</option>
                                </select>
                            </div>
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
                                <TextArea
                                    id="descriptionf"
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
                                </TextArea>
                            </div>

                            <div class="mt-4">
                                <div class='flex justify-between items-center '>
                                    <InputLabel label='tasks' for="task">Unités</InputLabel>
                                    <button class='text-indigo-600 hover:text-indigo-900' @click.prevent='addRow'>Ajouter une entrée</button>
                                </div>
                                <ul >

                                    <li class='' v-for='task in form.tasks'>
                                        <InputLabel label='tasks' for="task">Tâches</InputLabel>
                                        <div class='flex'>
                                            <TextInput
                                                type="text"
                                                v-model="task.title"
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
                                            <TextInput
                                                type="number"
                                                v-model="task.price"
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
                                        <TextArea
                                            class='w-full'
                                            type="text"
                                            v-model="task.description"
                                        />
                                        <button @click.prevent='deleteRow'>delete line</button>
                                    </li>
                                </ul>
                                <div class='flex font-bold text-2xl'>
                                    <h2 class='ml-auto'>Total: </h2>
                                    <h2 class='ml-2'>{{totalPrice}} CHF</h2>
                                </div>

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
