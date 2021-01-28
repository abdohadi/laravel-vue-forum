import { createWebHistory } from 'vue-router';
import NotFound from './components/pages/NotFound';
import Home from './components/pages/Home';
import Threads from './components/pages/Threads';
import Thread from './components/pages/Thread';

const routes = [
	{ path: '/:pathMatch(.*)*', name: 'not-found', component: NotFound },
	{ path: '/', name: 'home', component: Home, alias: '/home' },
	{ path: '/threads', name: 'threads', component: Threads },
	{ path: '/threads/:id', name: 'thread', component: Thread, props: true },
];

export default {
	history: createWebHistory(),
	routes
};