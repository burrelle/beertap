<template>
    <table class="w-full rounded shadow-lg mt-4 leading-normal text-left" v-if="beers && beers.length">
        <tr class="bg-grey-lighter uppercase text-grey-darkest text-sm">
            <th class="p-6"></th>
            <th>Beer</th>
            <th>Brewery</th>
            <th>Price</th>
            <th>ABV</th>
            <th>IBU</th>
            <th>Style</th>
            <th></th>
        </tr>
        <tr v-for="(beer, index) in beers" :key="index" class="border-b-2">
            <td :class="getBorder(beer.volume)">
                <img class="w-8 h-8 rounded-full" src="https://via.placeholder.com/400x400">
            </td>
            <td>
                <p class="font-semibold">{{ beer.name }}</p>
                <p class="text-sm text-grey-dark font-thin">{{ styles[beer.style_id].style }}</p>
            </td>
            <td>
                <p class="font-semibold">{{ breweries[beer.brewery_id].name }}</p>
                <p class="text-sm text-grey-dark font-thin">{{ breweries[beer.brewery_id].city }}, {{ breweries[beer.brewery_id].state }}</p>
            </td>
            <td>
                <p class="inline font-thin text-xs text-sm text-grey-dark">$</p>
                <p class="inline font-semibold">{{ beer.price }}</p>
            </td>
            <td>
                <p class="inline font-semibold text-sm">{{ beer.abv }}</p>
                <p class="inline font-thin text-xs text-grey-dark">%</p>
            </td>
            <td class="font-semibold text-sm">
                {{ beer.ibu }}
            </td>
            <td class="font-semibold text-sm">
                {{ glasses[beer.style_id].type }}
            </td>
            <td>
                <svg class="-mt-4 h-4 w-6 fill-current text-grey-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
            </td>
        </tr>
    </table>
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
    },
    methods: {
        getBorder(index){
            return {
                'p-4 border-l-4 border-green-dark': index <= 30,
                'p-4 border-l-4 border-yellow-dark': index > 30 && index <= 60,
                'p-4 border-l-4 border-red-dark': index > 60
            }
        }
    }
};
</script>

<style>
</style>
