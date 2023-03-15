<template>
  <aside
    class="z-20 hidden w-64 overflow-y-auto bg-gradient-to-t from-indigo-300 via-zinc-100 to-white md:block flex-shrink-0 shadow-2xl">
    <!--sidebar title-->
    <div class="py-4 text-gray-500">
      <Link class="ml-6 text-2xl font-bold text-gray-800" :href="route('dashboard')">
      HRD Dashboard
      </Link>

      <ul class="mt-6">
        <NavigationItem v-for="item in navigation" :key="item.id" :item="item" />
      </ul>
    </div>
  </aside>
</template>

<script>
import HeroIcon from '@/Components/HeroIcon.vue';
import NavLink from '@/Components/NavLink.vue';
import NavigationItem from '@/Components/NavigationItem.vue';
import { Link } from '@inertiajs/vue3';
import axios from 'axios';
import { ref } from 'vue';

export default {
  components: {
    NavLink,
    HeroIcon,
    Link,
    NavigationItem
  },
  setup() {
    let showingTwoLevelMenu = ref(false)
    let navigation = ref([]);
    axios.get('/api/navigation')
      .then(response => {
        navigation.value = response.data.payload;
        console.log(response.data.payload);
      })
      .catch(error => {
        console.error('Error fetching navigation menu:', error)
      })
    return {
      showingTwoLevelMenu,
      navigation
    }
  },
}
</script>
