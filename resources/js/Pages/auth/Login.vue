
<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import AuthLayout from "../../Layouts/AuthRegistrationLayout.vue";

const form = useForm({
    student_id: null,
    password: null,
})


const onLogin = () => {
  form.post(route('login'))
  onError: () => form.reset('password')
} 

</script>

 <template>
  <AuthLayout title="Login">
    <v-form @submit.prevent="onLogin">
      <v-text-field
      v-model="form.student_id"
        label="Student Id"
        type="number"
        color="primary"
        class="mb-2"
        hide-spin-buttons
        :error="!!form.errors.student_id"
        :error-messages="form.errors.student_id ? [form.errors.student_id] : []"
      ></v-text-field>

      <v-text-field
      v-model="form.password"
        label="Password"
        type="password"
        color="primary"
        class="mb-2"
         :error="!!form.errors.password"
        :error-messages="form.errors.password ? [form.errors.password] : []"
      ></v-text-field>
      <v-sheet align="end" class="mb-10">
        <Link
          class="text-decoration-none text-black font-weight-bold text-body-2"
          href=""
          >Forget Password</Link
        >
      </v-sheet>
      <v-btn
        class="bg-primary"
        width="100%"
        height="50"
        type="submit"
        >Login</v-btn
      >
      <div class="d-flex text-center justify-center mt-2">
        <h5 class="me-1 text-body-2">Don't have Any Account?</h5>
        <Link
          :href="route('register')"
          class="text-decoration-none font-weight-bold text-body-2 text-light-blue-darken-4"
          >Register Now</Link
        >
      </div>
    </v-form>
  </AuthLayout>
</template>
