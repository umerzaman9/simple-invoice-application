import { createRouter, createWebHistory } from 'vue-router';

import invoiceIndex from '../invoices/Index.vue';
import notFound from '../NotFound.vue';

const routes = [
    {
        path: '/',
        name: 'invoice.index',
        component: invoiceIndex,
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'not-found',
        component: notFound,
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;