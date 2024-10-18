<script setup>
import AuthLayout from "../../Layouts/StudentAuthLayout.vue";
import PasswordToggle from "../../Components/PasswordToggle.vue"
import AuthButtonWithLink from "../../Components/AuthButtonWithLink.vue";
import { ref } from "vue";
import { useRouter } from 'vue-router';
import axios from "axios";

const router = useRouter()
const studentInfo = ref({
  id: '',
  password: '',
})

const login = async () => {
  try {
    const response = await axios.post('api/login', studentInfo.value);
    localStorage.setItem('auth_token', response.data.token);
    localStorage.setItem('user', JSON.stringify(response.data.user));
    router.push('/student');
  } catch (error) {
    console.error(error)
  }
}

</script>

<template>
  <AuthLayout>
    <v-form @submit.prevent="login">
      <div class="my-10">
        <v-text-field v-model="studentInfo.id" variant="outlined" label="Student Id" type="number"> </v-text-field>
        <PasswordToggle v-model="studentInfo.password" passwordLabel="Password" />
        <div class="text-right">Forgot Password</div>
      </div>
      <AuthButtonWithLink buttonText="Login" authMessage="Don't Have An Account?" authLink="/register"
        :authTextWidth="105" authText="Register Now" />
    </v-form>
  </AuthLayout>
</template>


<style></style>