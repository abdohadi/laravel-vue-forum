require('./bootstrap');

import { createApp } from 'vue';
import { createRouter } from 'vue-router';
import routes from './routes';

const app = createApp({});
const router = createRouter(routes);

app.use(router);

app.mount('#app');