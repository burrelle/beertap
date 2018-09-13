
<template>
  <div>
    <beer-card></beer-card>
  </div>
</template>

<script>
import BeerCard from "./components/BeerCard.vue";
export default {
    name: 'app',
    components: { BeerCard },
    data() {
        return {
            msg: 'Welcome to Your Vue.js App!'
        };
    }
};
</script>

<style>
</style>