<template>
  <aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
    <!--sidebar title-->
    <div class="py-4 text-gray-500">
      <Link class="ml-6 text-lg font-bold text-gray-800" :href="route('dashboard')">
      Windmill
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
  data() {
    return {
      navigation: []
    }
  },
  setup() {
    let showingTwoLevelMenu = ref(false)
    return {
      showingTwoLevelMenu
    }
  },
  mounted() {
    axios.get('/api/navigation')
      .then(response => {
        this.navigation = response.data.payload;
        console.log(response.data.payload);
      })
      .catch(error => {
        console.error('Error fetching navigation menu:', error)
      })
  }
}
</script>
