<script setup>
import { ref } from 'vue';
import NavLink from '@/Components/NavLink.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import Dropdown from '@/Components/Dropdown.vue';
import { FolderIcon, HomeIcon, UsersIcon, BellIcon } from '@heroicons/vue/24/outline'

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100 flex">
            <nav class="flex w-16 min-h-0 flex-1 flex-col border-r border-gray-200 bg-white">
                <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
                    <div class="flex flex-shrink-0 items-center px-4">
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" />
                    </div>
                    <nav class="mt-5 flex-1 space-y-1 bg-white px-2" aria-label="Sidebar">
                        <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            <HomeIcon class='mr-3 flex-shrink-0 h-6 w-6'  />
                            Dashboard
                        </NavLink>
                        <NavLink :href="route('bills.index')" :active="route().current('bills.index')">
                            <FolderIcon class='mr-3 flex-shrink-0 h-6 w-6'  />
                            Bills
                        </NavLink>
                        <NavLink :href="route('clients.index')" :active="route().current('clients.index')">
                            <UsersIcon class='mr-3 flex-shrink-0 h-6 w-6'  />
                            Clients
                        </NavLink>
                    </nav>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                        <Dropdown align="right" width="48">
                            <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                            </template>

                            <template #content>
                                <DropdownLink :href="route('logout')" method="post" as="button">
                                    Log Out
                                </DropdownLink>
                            </template>
                        </Dropdown>
                    </div>
                </div>
                <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
                    <a href="#" class="group block w-full flex-shrink-0">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">{{ $page.props.auth.user.name }}</p>
                                <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">Logout</p>
                                <Link :href="route('logout')" method="post" as="button">

                                </Link>
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
                        <BellIcon class="h-6 w-6 text-gray-400 hover:text-gray-900 hover:bg-gray-50 cursor-pointer" />
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
