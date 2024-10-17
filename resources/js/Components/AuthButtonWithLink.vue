<script setup>
const props = defineProps({
    buttonText: {
        type: String,
        Required: true,
    },
    buttonLink: {
        type: String,
        required: true,
    },
    authMessage: {
        type: String,
        Required: true,
    }, 
    authLink: {
        type: String,
        required: true,
    },
    authText: {
        type: String,
        required: true,
    },
    authTextWidth: {
        type: Number,
        required: true,
    }


})
</script>

<template>
    <div>
        <v-btn :to="props.buttonLink" width="100vw" height="45px" color="blue-lighten-1">{{props.buttonText}}</v-btn>
        <div class="mt-2">
          {{ props.authMessage }}
          <v-btn :to="props.authLink" class="text-body-1" color="transparent" flat height="25px" :width="props.authTextWidth">{{props.authText}}</v-btn>
        </div>
      </div>
</template>