<template>
  <v-sheet class="d-flex justify-end align-center" width="100%">
    <v-text-field
      v-model="searchQuery"
      :label="label"
      append-inner-icon="mdi-magnify"
      clearable
      @input="performSearch"
      @click:clear="clearSearch"
      style="max-width: 400px;"
    />
  </v-sheet>
</template>

<script setup>
import { ref, defineProps, defineEmits } from 'vue';

// Define props
const props = defineProps({
  label: {
    type: String,
    default: 'Search...',
  },
  initialQuery: {
    type: String,
    default: '',
  },
});

// Define emits
const emit = defineEmits(['search']);

// Create a ref for search query
const searchQuery = ref(props.initialQuery);

// Method to perform search
const performSearch = () => {
  emit('search', searchQuery.value); // Emit the current search query
};

// Method to clear search
const clearSearch = () => {
  searchQuery.value = '';
  performSearch(); // Emit empty string to clear results
};
</script>
