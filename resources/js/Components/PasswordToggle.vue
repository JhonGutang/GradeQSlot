<script setup>
import { ref } from 'vue';

const props = defineProps({
    passwordLabel: {
        type: String,
        Required: true
    }
})
const password = ref('');
const showPassword = ref(false);

const togglePasswordVisibility = () => {
  showPassword.value = !showPassword.value;
};


</script>

<template>
    <v-text-field variant="outlined" :label="props.passwordLabel" :type="showPassword ? 'text' : 'password'" v-model="password">
        <template #append-inner>
          <v-icon class="cursor-pointer" @click="togglePasswordVisibility">
            {{ showPassword ? 'mdi-eye-off' : 'mdi-eye' }}
          </v-icon>
        </template>
      </v-text-field>
</template>