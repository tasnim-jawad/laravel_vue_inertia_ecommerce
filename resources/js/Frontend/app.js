// import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp ,Link , Head } from '@inertiajs/vue3'
import { createPinia } from 'pinia'

import Layout from "./Shared/Layout.vue";

const pinia = createPinia();
createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        const page = pages[`./Pages/${name}.vue`]
        if (page && page.default) {
            page.default.layout = page.default.layout || Layout;
        }
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
          .use(plugin)
          .component("Link", Link)
          .component("Head", Head)
          .use(pinia)
          .mount(el)
    },     
    title: title  => `laravel-inertia-vue-ecommerce : ${title}`  
})