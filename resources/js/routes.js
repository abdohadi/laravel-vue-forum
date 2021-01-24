import { createWebHistory } from 'vue-router';
import Home from './components/Home';

const routes = [
	{ path: '/', name: 'home', component: Home },
];

export default {
	history: createWebHistory(),
	routes
};