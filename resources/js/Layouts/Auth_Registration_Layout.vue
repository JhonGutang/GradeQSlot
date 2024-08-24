<template>
  <Head :title="title" />
  <v-container fluid class="fill-width" height="100vh">
    <v-row align="center" justify="center" class="fill-height flex-wrap">
      <v-sheet
        width="950"
        height="570"
        class="d-flex flex-row rounded-lg"
        style="border: 2px solid #1867C0"
      >
        <v-col class="bg-primary ">
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
          <h1 class="text-center text-3xl font-weight-bold">{{ title }}</h1>

          <v-card flat class="mt-10 mx-auto" width="380">
            
              <slot> </slot>
            
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
  
  