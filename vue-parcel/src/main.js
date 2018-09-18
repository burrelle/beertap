import Vue from 'vue';
import App from "./App";
import BeerTable from './components/BeerTable.vue';
import BeerDetails from './components/BeerDetails'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
    { path: '/', component: BeerTable },
    { path: '/beers/:id', component: BeerDetails }
  ]

  // 3. Create the router instance and pass the `routes` option
  // You can pass in additional options here, but let's
  // keep it simple for now.
  const router = new VueRouter({
    routes // short for `routes: routes`
  })


new Vue({
    el: '#app',
    router,
    render: h => h(App)
});