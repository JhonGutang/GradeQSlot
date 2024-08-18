import "./bootstrap";
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { createVuetify } from 'vuetify';
import 'vuetify/styles'; // Ensure Vuetify styles are imported
import '@mdi/font/css/materialdesignicons.css';
import { aliases, mdi } from 'vuetify/iconsets/mdi'; // Import icon sets if needed
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';

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
  title: (title) => `GradeQSlot |   ${title}`,
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(vuetify)
      .use(plugin)
      .mount(el)
  },
})