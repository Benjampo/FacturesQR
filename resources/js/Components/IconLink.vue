<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Link class="block px-4 py-2 text-left text-sm leading-5 text-gray-700  focus:outline-none  transition duration-150 ease-in-out">
        <slot />
    </Link>
</template>
