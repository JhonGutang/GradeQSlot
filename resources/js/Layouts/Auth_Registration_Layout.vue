<template>
  <Head :title="title" />
  <v-container fluid class="fill-width" height="100vh">
    <v-row align="center" justify="center" class="fill-height flex-wrap">
      <v-sheet
        width="950"
        height="550"
        class="d-flex flex-row rounded-lg"
        border="md"
      >
        <v-col class="bg-primary rounded">
          <v-sheet
            color="transparent"
            align="center"
            justify="center"
            class="d-flex"
          >
            <h1>GradeQSlot</h1>
          </v-sheet>
        </v-col>
        <v-col class="pt-15">
          <h1 class="text-center">{{ title }}</h1>

          <v-card flat class="mt-10 mx-auto" width="380">
            <v-form>
              <slot> </slot>
            </v-form>
          </v-card>
        </v-col>
      </v-sheet>
    </v-row>
  </v-container>
</template>
  
  <script setup>
import { Head } from "@inertiajs/vue3";

defineProps({
  title: String,
});
</script>
  
  