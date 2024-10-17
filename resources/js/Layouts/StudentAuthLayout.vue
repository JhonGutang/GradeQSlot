<template>
  <v-container style="border: 2px solid black; background-color: #001F3E" height="25vh" class="d-flex flex-column justify-end pb-7">
    <div class="text-center text-white"> GradeQSlot</div>
    <div class="text-center text-white"> 
      Login 
      <v-sheet class="border mx-auto" width="20vw"></v-sheet>
    </div>
  </v-container>
  <v-container class="text-center" height="80%">
    <v-card flat width="70vw" class="mx-auto bg-transparent mt-5">HELLO! WELCOME BACK! GLAD TO SEE YOU AGAIN</v-card>
    <v-col>
      <slot></slot>
    </v-col>
  </v-container>

</template>
