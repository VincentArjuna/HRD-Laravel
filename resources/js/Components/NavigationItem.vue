<template>
    <li class="relative px-6 py-3" :class="{ 'pl-8': item.parent_id }">
        <NavLink :href="route(item.url)" :active="route().current(item.actives)">
            <template #icon>
                <HeroIcon :name="item.icon" />
            </template>
            {{ item.name }}
        </NavLink>
        <ul v-if="hasChildren" class="mt-1">
            <NavigationItem v-for="child in item.children" :key="child.id" :item="child" />
        </ul>
    </li>
</template>
  
<script>
import HeroIcon from '@/Components/HeroIcon.vue';
import NavLink from '@/Components/NavLink.vue';
import { Link } from '@inertiajs/vue3';

export default {
    components: {
        NavLink,
        HeroIcon,
        Link,
        NavigationItem: () => import('./NavigationItem.vue') // Importing dynamically to avoid circular dependency
    },
    props: {
        item: {
            type: Object,
            required: true
        }
    },
    computed: {
        hasChildren() {
            return Array.isArray(this.item.children) && this.item.children.length > 0
        }
    }
}
</script>
  