<script setup>
import { ref } from 'vue';
import NavLink from '@/Components/NavLink.vue';
import DropdownLink from '@/Components/IconLink.vue';
import { BanknotesIcon, HomeIcon, UsersIcon, BellIcon, PowerIcon } from '@heroicons/vue/24/outline'
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100 flex">
            <nav class="flex max-w-xl  min-h-0 flex-1 flex-col border-r border-gray-200 bg-white">
                <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
                    <div class="flex flex-shrink-0 items-center px-4 justify-between">
                        <ApplicationLogo class="h-8 w-auto" />
                        <BellIcon class="h-6 w-6 text-gray-400 hover:text-gray-900 hover:bg-gray-50 cursor-pointer" />
                    </div>
                    <nav class="mt-5 flex-1 space-y-1 bg-white px-2" aria-label="Sidebar">
                        <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            <HomeIcon class='mr-3 flex-shrink-0 h-6 w-6'  />
                            Tableau de bord
                        </NavLink>
                        <NavLink :href="route('bills.index')" :active="route().current('bills.index')">
                           <BanknotesIcon class='mr-3 flex-shrink-0 h-6 w-6'  />
                            Factures
                        </NavLink>
                        <NavLink :href="route('clients.index')" :active="route().current('clients.index')">
                            <UsersIcon class='mr-3 flex-shrink-0 h-6 w-6'  />
                            Clients
                        </NavLink>
                    </nav>
                </div>
                <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
                    <a href="#" class="group block w-full flex-shrink-0">
                        <div class="flex items-center">
                            <div class="ml-3 flex justify-between w-full">
                                <div>
                                    <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">{{ $page.props.auth.user.name }}</p>
                                    <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">{{ $page.props.auth.user.email }}</p>
                                </div>
                                <DropdownLink :href="route('logout')" method="post" as="button">
                                    <PowerIcon class='h-6 w-6 text-gray-400 hover:text-gray-900' />
                                </DropdownLink>
                            </div>
                        </div>
                    </a>
                </div>
            </nav>
            <div class='w-3/4'>
                <!-- Page Heading -->
                <header class="bg-white shadow" v-if="$slots.header">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between">
                        <slot name="header" />
                    </div>
                </header>
                <!-- Page Content -->
                <main>
                    <slot />
                </main>
            </div>
        </div>
    </div>
</template>
