import "./bootstrap";
import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/vue3'
import { createVuetify } from 'vuetify';
import 'vuetify/styles'; // Ensure Vuetify styles are imported
import '@mdi/font/css/materialdesignicons.css';
import { aliases, mdi } from 'vuetify/iconsets/mdi'; // Import icon sets if needed
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist';


const vuetify = createVuetify({
  components,
  directives,
  icons: {
    defaultSet: 'mdi',
    aliases,
    sets: {
      mdi,
    },
  },
});

createInertiaApp({
  title: (title) => `${title} | GradeQSlot`,
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(ZiggyVue)
      .use(vuetify)
      .use(plugin)
      .component('Head', Head)
      .component('Link', Link)
      .mount(el)
  },
})