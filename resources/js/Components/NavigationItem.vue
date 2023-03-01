<template>
    <li v-if="item" class="relative px-6 py-3" :class="{ 'pl-8': item.parent_id }">
        <template v-if="!hasChildren">
            <NavLink :href="route(item.url)" :active="route().current(item.actives)">
                <template #icon>
                    <HeroIcon :name="item.icon" />
                </template>
                {{ item.name }}
            </NavLink>
        </template>

        <template v-else>
            <button @click="showingChildren = !showingChildren"
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                aria-haspopup="true">
                <span class="inline-flex items-center">
                    <HeroIcon :name="item.icon" />
                    <span class="ml-4">{{ item.name }}</span>
                </span>
                <HeroIcon :name="showingChildren ? 'ChevronDoubleDownIcon' : 'ChevronDoubleRightIcon'" />
            </button>
            <ul v-if="showingChildren"
                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                aria-label="submenu">
                <NavigationItem v-for="child in item.children" :key="child.id" :item="child" />
            </ul>
        </template>
    </li>
</template>
  
<script>
import HeroIcon from '@/Components/HeroIcon.vue';
import NavLink from '@/Components/NavLink.vue';
import { Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import NavigationItem from './NavigationItem.vue';

export default {
    components: {
        NavLink,
        HeroIcon,
        Link,
    },
    props: {
        item: {
            type: Object,
            required: true
        }
    },
    setup(props) {
        const showingChildren = ref(false);
        const hasChildren = computed(() => props.item.children && props.item.children.length > 0);
        console.log(props.item);
        return {
            showingChildren,
            hasChildren
        };
    }
};
</script>