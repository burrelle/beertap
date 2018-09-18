
<template>
  <div>
    <router-view></router-view>
  </div>
</template>

<script>
import BeerTable from "./components/BeerTable.vue";
export default {
    name: 'app',
    components: { BeerTable },
    data() {
        return {
            msg: 'Welcome to Your Vue.js App!'
        };
    }
};
</script>

<style>
</style>