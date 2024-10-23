import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import {ZiggyVue} from "../../vendor/tightenco/ziggy";
import {Link, Head} from "@inertiajs/vue3";
import Layout from "../js/pages/layout/Master.vue"

createInertiaApp({

  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page=  pages[`./Pages/${name}.vue`];
    page.default.layout = page.default.layout || Layout
    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .component("Link",Link)
      .component("Head",Head)
      .mount(el)
  },
  progress: {
    // The delay after which the progress bar will appear, in milliseconds...
    delay: 0,

    // The color of the progress bar...
    color: 'white',

    // Whether to include the default NProgress styles...
    includeCSS: true,

    // Whether the NProgress spinner will be shown...
    showSpinner: false,
  },
})
