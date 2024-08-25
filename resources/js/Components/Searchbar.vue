<template>
    <v-sheet class="d-flex justify-end align-center" width="100%">
        <v-text-field
          v-model="searchQuery"
          :label="label"
          append-inner-icon="mdi-magnify"
          clearable
          @keyup.enter="performSearch"
          @click:clear="clearSearch"
          style="max-width: 400px;"
        ></v-text-field>
      </v-sheet>
  </template>
  
  <script>
  export default {
    props: {
      label: {
        type: String,
        default: 'Search...',
      },
      initialQuery: {
        type: String,
        default: '',
      },
    },
    data() {
      return {
        searchQuery: this.initialQuery,
      };
    },
    methods: {
      performSearch() {
        this.$emit('search', this.searchQuery);
      },
      clearSearch() {
        this.searchQuery = '';
        this.performSearch();
      },
    },
  };
  </script>
  