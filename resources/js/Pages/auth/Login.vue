
<script setup>
import AuthLayout from "../../Layouts/AuthLayout.vue";
</script>

 <template>
  <AuthLayout title="Login">
    <v-form>
      <v-text-field
        label="Student Id"
        type="number"
        color="primary"
        class="mb-2"
        hide-spin-buttons
      ></v-text-field>

      <v-text-field
        label="Password"
        type="password"
        color="primary"
        class="mb-2"
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
      <div class="d-flex text-center justify-center mt-2 align-center">
        <h5 class="me-1 text-body-2">Already Have An Account?</h5>
        <v-btn height="30px" width="90px" class="text-body-2" to="/register" flat>Register Now</v-btn>
      </div>
    </v-form>
  </AuthLayout>
</template>
