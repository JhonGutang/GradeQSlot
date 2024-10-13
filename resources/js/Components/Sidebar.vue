<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  navItems: {
    type: Array,
    required: true,
  },
  sidebarWidth: Number,
});
</script>

<template> 
    <v-card>
      <v-layout>
        <v-navigation-drawer :width="props.sidebarWidth" class="bg-indigo-darken-3">
            <v-container fluid>
                <v-row>
                    <v-col>
                        <v-list-item-title link  class="text-h6 font-weight-bold text-center" > GradeQSlot </v-list-item-title>
                    </v-col>
                    
                </v-row>
                <v-row class="d-flex flex-col">
                    <v-sheet class="bg-transparent pt-5" height="500">
                        <v-col v-for="item in props.navItems" :key="item.title">
                          <v-btn class="justify-start" :to="item.route" color="transparent" width="140px" flat>{{item.title}}</v-btn>
                        </v-col>
                      </v-sheet>
                </v-row>

                <v-row class="d-flex flex-col">
                    <v-col>
                        <Link method="post" as="button">
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
          <v-main height="100vh" class="overflow-y-hidden">
            <slot>

            </slot>
          </v-main>
      </v-layout>
    </v-card>
  </template>