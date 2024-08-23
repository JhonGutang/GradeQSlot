<!-- <template>
  <Head title="Login"/>
  <v-container fluid class="fill-width"  height="100vh">
      <v-row align="center" justify="center" class="fill-height flex-wrap">

        <v-sheet  width="950" height="550" class="d-flex flex-row rounded-lg" border="md">
          <v-col class="bg-primary rounded">
              <v-sheet color="transparent" align="center" justify="center" class="d-flex"> 
                <h1>GradeQSlot</h1>
              </v-sheet>
          </v-col>
          <v-col class="pt-15">
            <h1 class="text-center">Login</h1>

            <v-card flat class="mt-10 mx-auto" width="300">
              <v-form >
                <v-text-field label="Username" color="primary"></v-text-field>
                <v-text-field label="Password" type="password" color="primary"></v-text-field>
                <v-sheet align="end" class="mb-10">
                  <Link class="text-decoration-none text-black text-body-2" href="">Forget Password</Link>
                </v-sheet>
                <v-btn class="bg-primary" width="100%" height="50">Login</v-btn>
                <div class="d-flex text-center justify-center mt-2">
                  <h5 class="me-1">Don't have Any Account?</h5>
                  <Link href='/auth/register' class="text-decoration-none font-weight-bold text-body-2 text-light-blue-darken-4" >Register Now</Link>
                </div>
              </v-form>
            </v-card>

          </v-col>
        </v-sheet>

      </v-row>
  </v-container>  
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';


</script>
 -->


 <template>
  <AuthLayout title="Login">
    <v-text-field label="Student Id" type="number" color="primary" hide-spin-buttons></v-text-field>
    <v-text-field
      label="Password"
      type="password"
      color="primary"
    ></v-text-field>
    <v-sheet align="end" class="mb-10">
      <Link class="text-decoration-none text-black text-body-2" href=""
        >Forget Password</Link
      >
    </v-sheet>
    <v-btn class="bg-primary" width="100%" height="50" :href="route('client.dashboard')">Login</v-btn>
    <div class="d-flex text-center justify-center mt-2">
      <h5 class="me-1">Don't have Any Account?</h5>
      <Link
        :href="route('register')"
        class="text-decoration-none font-weight-bold text-body-2 text-light-blue-darken-4"
        >Register Now</Link
      >
    </div>
  </AuthLayout>
</template>

 <script setup>
import { Link } from "@inertiajs/vue3";
import AuthLayout from "../../Layouts/Auth_Registration_Layout.vue";
</script>