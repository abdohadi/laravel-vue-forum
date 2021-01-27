import { createWebHistory } from 'vue-router';
import NotFound from './components/pages/NotFound';
import Home from './components/pages/Home.vue';
import About from './components/pages/About';

const routes = [
	{ path: '/:pathMatch(.*)*', name: 'not-found', component: NotFound },
	{ path: '/', name: 'home', component: Home, alias: '/home' },
	{ path: '/about', name: 'about', component: About },
];

export default {
	history: createWebHistory(),
	routes
};