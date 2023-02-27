<script setup>
import * as heroIcons from "@heroicons/vue/24/outline";

defineProps({
    name: String
});
</script>
<template>
    <component class="w-5 h-5" :is="heroIcons[name]" />
</template>
  
