

 <template>
  <AuthLayout title="Login">
    <v-form>
      <v-text-field
        label="Student Id"
        type="number"
        color="primary"
        hide-spin-buttons
      ></v-text-field>

      <v-text-field
        label="Password"
        type="password"
        color="primary"
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
        :href="route('client.dashboard')"
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

 <script setup>
import { Link } from "@inertiajs/vue3";
import AuthLayout from "../../Layouts/Auth_Registration_Layout.vue";
</script>