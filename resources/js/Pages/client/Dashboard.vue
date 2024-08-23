<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template> 
    <Head title="Home" />
    <v-card>
      <v-layout>
        <v-navigation-drawer :width="188">
            <v-list-item title="My Application" subtitle="Vuetify"></v-list-item>
            <v-divider></v-divider>
            <v-list-item link title="List Item 1"></v-list-item>
            <v-list-item link title="List Item 2"></v-list-item>
            <Link :href="route('login')" > Logout</Link>
          </v-navigation-drawer>
      </v-layout>
    </v-card>
  </template>