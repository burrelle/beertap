<template>
    <form class="w-full max-w-md mt-4">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Beer Name
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" type="text" :placeholder="info.name">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0 pt-2">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Brewery
                </label>
                <input class="cursor-not-allowed appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" type="text" :placeholder="info.brewery">
            </div>
        </div>
    </form>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            info: {}
        };
    },
    async mounted() {
        const BASE_URL = 'http://beer-brewery.test';
        const repsonse = await axios.get(
            BASE_URL + '/beers/' + this.$route.params.id
        );
        this.info = repsonse.data;
    }
};
</script>

<style>
</style>
