<script setup>
import { ref } from "vue";
import AuthLayout from "../../Layouts/StudentAuthLayout.vue";
import PasswordToggle from "../../Components/PasswordToggle.vue"
import AuthButtonWithLink from "../../Components/AuthButtonWithLink.vue";

</script>

<template>
  <AuthLayout>
    <v-form>
      <div class="my-10">
        <v-text-field variant="outlined" label="Student Id" type="number"> </v-text-field>
        <PasswordToggle passwordLabel="Password"/>
        <div class="text-right">Forgot Password</div>
      </div>
      <AuthButtonWithLink buttonText="Login" buttonLink="/student" authMessage="Don't Have An Account?" authLink="/register" :authTextWidth="105" authText="Register Now"/>
    </v-form>
  </AuthLayout>
</template>


<style>
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>