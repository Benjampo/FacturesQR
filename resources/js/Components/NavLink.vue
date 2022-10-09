<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'bg-gray-100 text-gray-900 hover:text-gray-900 hover:bg-gray-100'
    : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50'
);
</script>

<template>
    <Link :href="href" class='group flex items-center px-2 py-2 text-sm font-medium rounded-md' :class="classes">
        <slot />
    </Link>
</template>
