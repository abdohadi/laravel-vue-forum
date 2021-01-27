require('./bootstrap');

require('alpinejs');

import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import routes from './routes';
import App from './components/App';
import Home from './components/pages/Home';
import Header from './components/layouts/Header';
import Footer from './components/layouts/Footer';

const app = createApp({
	components: { App, Home, 'header-component': Header, 'footer-component': Footer },
	created() {
	}
})

const router = createRouter(routes);

app.use(router);

app.mount('#app');