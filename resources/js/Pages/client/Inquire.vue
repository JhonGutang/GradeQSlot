<script setup>
import ClientPageLayout from "../../Layouts/StudentPageLayout.vue";
import DocumentRequestModal from "../../Components/Modals/DocumentRequestModal.vue";
import { onMounted, ref } from "vue";

const documents = ref([]);
const dialog = ref(true);
const fetchDocuments = async () => {
  const response = await axios.get("/api/documents");
  documents.value = response.data;
  console.log(documents.value);
};

onMounted(() => {
  fetchDocuments();
});
</script>

<template>
  <Head title="Inquire" />
  <ClientPageLayout>
    <div class="text-center pa-4 text-end">
      <v-btn @click="dialog = true" color="primary"> Request Document </v-btn>

      <v-dialog v-model="dialog" width="auto">
        <v-card max-width="600" height="500">
          <v-card-title>
            <h3>Requesting a Document</h3>
          </v-card-title>
          <v-card-text>
            <p>
              Your application will relaunch automatically after the update is
              complete.
            </p>
            <v-select
              label="Select a Document"
              :items="documents"
              item-title="name"
              item-text="name"
            ></v-select>
          </v-card-text>
          <template v-slot:actions>
            <v-btn class="ms-auto bg-success"  @click="dialog = false"> Submit</v-btn>
          </template>
        </v-card>
      </v-dialog>
    </div>
  </ClientPageLayout>
</template>




<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>