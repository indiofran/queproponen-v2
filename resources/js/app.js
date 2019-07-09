/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import M from './materialize/bin/materialize';
import DondeVotoPage from "./components/Pages/DondeVotoPage";
import WhoPage from "./components/Pages/WhoPage";
import PartyPage from "./components/Pages/PartyPage";

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import IndexPage from "./components/Pages/IndexPage";
import PartiesPages from "./components/Pages/PartiesPages";
import VueAnalytics from 'vue-analytics'
import HowItWorks from "./components/Pages/HowItWorks";


const routes = [
	{
		path: '/',
		name: "Index",
		component: PartiesPages
	},
	{
		path: '/parties',
		name: "Parties",
		component: PartiesPages
	},
	{
		path: '/party/:id',
		name: "Party",
		component: PartyPage
	},
	{
		path: '/padron',
		name: "Padron",
		component: DondeVotoPage
	},
	{
		path: '/team',
		name: "Team",
		component: WhoPage
	},
	{
		path: '/how-it-works',
		name: "What",
		component: HowItWorks
	}
]

export const router = new VueRouter({
	routes
})

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.use(VueAnalytics, {
	id: window.analyticsCode,
	checkDuplicatedScript: true,
	router
})
Vue.use(VueRouter);
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('navbar-component', require('./components/Helpers/NavbarComponent').default);
Vue.component('add-proposal', require('./components/AddProposal').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.prototype.$M = M;

const app = new Vue({
	el: '#app',
	router
});
