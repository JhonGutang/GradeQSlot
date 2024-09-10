<script setup>
import { computed, ref, watch } from "vue";

const props = defineProps({
  isClicked: {
    type: Boolean,
    required: true,
  },
  document: {
    type: Object,
    required: true
  },
  documentId: {
    type : String,
    required : true,
  }
});

const dialog = ref(props.isClicked);

watch(
  () => props.isClicked,
  (newVal) => {
    dialog.value = newVal;
  }
);

const emit = defineEmits(['close']);

function closeModal() {
  dialog.value = false;
  emit('close');
}

const documentRequest = computed(() => {
  return props.document.document_requests.find(
    (request) => request.id === Number(props.documentId)
  );
});
</script>

<template>
    <v-dialog v-model="dialog" width="auto">
        <v-card height="450" width="700" class="py-6 px-4">
          <v-card-title><strong>Requested Document</strong></v-card-title>
          <v-card-text>
            <div v-if="documentRequest">
                <div class="d-flex flex-row justify-between mb-6">
                    <p><strong>Document Name:</strong> {{ documentRequest.document.name }}</p>
                    <p><strong>Status:</strong> {{ documentRequest.status }}</p>
                </div>
                <v-container class="border-md rounded" height="200">
                    <p class="mb-4"><strong>Request Reason</strong></p>
                    <p class="ms-5"> {{ documentRequest.request_reason }}</p>
                </v-container>
            </div>
            <div v-else>
              <p>No document request found for this ID.</p>
            </div>
          </v-card-text>
          <v-card-actions>
            <v-btn @click="closeModal">Ok</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
</template>
