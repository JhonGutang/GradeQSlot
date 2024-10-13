import "./bootstrap";
import { createApp, h } from 'vue'
import App from './App.vue';
import router from "./router";
import { createVuetify } from 'vuetify';
import { VDateInput } from 'vuetify/labs/VDateInput'
import 'vuetify/styles';
import '@mdi/font/css/materialdesignicons.css';
import { aliases, mdi } from 'vuetify/iconsets/mdi';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';


const vuetify = createVuetify({
  components: {
    ...components,
    VDateInput
  },
  directives,
  icons: {
    defaultSet: 'mdi',
    aliases,
    sets: {
      mdi,
    },
  },
});


const app = createApp({
  render: () => h(App), 
});
app.use(router);
app.use(vuetify);

app.mount('#app');