<script setup>
import { useRouter } from 'vue-router';

const router = useRouter();

const props = defineProps({
  navLinks: {
    type: Array,
    required: true,
  },
  sidebarWidth: Number,
});

const logout = async() => {
  localStorage.removeItem('auth_token');
  localStorage.removeItem('user');
  router.push('/login');
}

</script>

<template>
  <v-card>
    <v-layout>
      <v-navigation-drawer :width="props.sidebarWidth" class="bg-indigo-darken-3">
        <v-container fluid>
          <v-row>
            <v-col>
              <v-list-item-title link class="text-h6 font-weight-bold text-center"> GradeQSlot </v-list-item-title>
            </v-col>  
          </v-row>
          <v-row class="d-flex flex-col">
            <v-sheet class="bg-transparent pt-5" height="500">
              <v-col v-for="item in props.navLinks" :key="item.title">
                <v-btn class="justify-start" :to="item.route" color="transparent" flat>{{ item.title }}</v-btn>
              </v-col>
            </v-sheet>
          </v-row>
          <v-row>
            <v-col>
              <v-btn @click="logout" flat color="transparent">Logout</v-btn>
            </v-col>
          </v-row>
        </v-container>

      </v-navigation-drawer>
      <v-main height="100vh" class="overflow-y-hidden">
        <slot>

        </slot>
      </v-main>
    </v-layout>
  </v-card>
</template>