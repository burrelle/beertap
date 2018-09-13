<template>
    <ul v-if="beers && beers.length">
        <li class="max-w-md rounded overflow-hidden shadow-lg mb-4" v-for="(beer, index) in beers" :key="index">
            <img class="w-full" src="https://via.placeholder.com/350x65">
            <div class="px-6 py-4">
                <p class="text-grey-dark font-semibold">{{ breweries[beer.brewery_id].name }}</p>
                <div class="flex justify-between mt-2 mb-2">
                    <p class="font-bold text-xl">{{ beer.name }}</p> <p class="font-bold text-xl">${{ beer.price }}</p>
                </div>
                <div class="flex items-baseline">
                    <svg class="h-4 w-4 mr-2 fill-current text-grey-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 0l20 8-8 4-2 8z"/></svg><p class="text-grey-dark">{{ breweries[beer.brewery_id].city }}, {{ breweries[beer.brewery_id].state }}</p>
                </div>
            </div>
            <div class="px-6 py-4 flex justify-between bg-grey-lightest border-l-4 border-blue-dark">
                <div>
                    <p class="font-semibold"><em class="text-grey-dark font-thin">ABV</em> {{ beer.abv }}%  <em class="text-grey-dark font-thin">IBU</em> {{ beer.ibu }}</p>
                </div>
                <div>
                    <p class="font-semibold"><em class="text-grey-dark font-thin">Style</em> {{ styles[beer.style_id].style }} <em class="text-grey-dark font-thin">Glass</em> {{ glasses[beer.style_id].type }}</p>
                </div>
            </div>
        </li>
    </ul>
</template>

<script>
import axios from 'axios';

export default {
    name: 'beer-card',
    data() {
        return {
            beers: [],
            breweries: [],
            styles: [],
            glasses: []
        };
    },
    async mounted() {
        const BASE_URL = 'http://beer-brewery.test';
        const response = await axios.get(BASE_URL + '/beers');
        const secondRespone = await axios.get(BASE_URL + '/breweries');
        const thirdResponse = await axios.get(BASE_URL + '/styles');
        const fourthResponse = await axios.get(BASE_URL + '/glasses');
        this.beers = response.data;
        this.breweries = secondRespone.data;
        this.styles = thirdResponse.data;
        this.glasses = fourthResponse.data;
    }
};
</script>

<style>
</style>
