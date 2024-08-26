<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template> 
    <v-card>
      <v-layout>
        <v-navigation-drawer :width="200" class="bg-indigo-darken-3">
            <v-container fluid>
                <v-row>
                    <v-col>
                        <v-list-item-title link  class="text-h6 font-weight-bold text-center" > GradeQSlot </v-list-item-title>
                    </v-col>
                    
                </v-row>
                <v-row class="d-flex flex-col">
                    <v-sheet class="bg-transparent pt-5" height="500" >
                        <v-col>
                            <Link :href="route('client.home')">
                                <v-list-item link class="" rounded title="Home"></v-list-item>
                            </Link>
                            
                        </v-col>
                        <v-col>
                            <Link :href="route('client.profile')">
                                <v-list-item link class="" rounded title="Profile"></v-list-item>
                            </Link>
                        </v-col>
                        <v-col>
                            <Link :href="route('client.prospectus')">
                                <v-list-item link class="" rounded title="Prospectus"></v-list-item>
                            </Link>
                        </v-col>
                        <v-col>
                            <Link :href="route('client.inquire')">
                                <v-list-item link class="" rounded title="Inquire"></v-list-item>
                            </Link>
                        </v-col>
                    </v-sheet>
                </v-row>

                <v-row class="d-flex flex-col">
                    <v-col>
                        <Link :href="route('login')">
                            <v-list-item link class="text-h6">Logout</v-list-item>
                        </Link>
                    </v-col>
                    <v-sheet class="bg-transparent pt-16">
                        <v-col>
                            <v-list-item link class="text-center text-red-accent-2" style="font-size: 12px">Report a problem?</v-list-item>
                        </v-col>
                    </v-sheet>
                </v-row>
            </v-container>
            
          </v-navigation-drawer>
          <v-main height="100vh">
            <slot>

            </slot>
          </v-main>
      </v-layout>
    </v-card>
  </template>