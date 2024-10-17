<script setup>
const props = defineProps({
    buttonText: {
        type: String,
        Required: true,
    },
    authLink: {
        type: String,
        required: true,
    },
    authMessage: {
        type: String,
        Required: true,
    },
    authText: {
        type: String,
        required: true,
    },
    authTextWidth: {
        type: Number,
        required: true,
    }

})
</script>

<template>
    <div>
        <v-btn type="submit" width="100vw" height="45px" color="blue-lighten-1">{{ props.buttonText }}</v-btn>
        <div class="mt-2">
            {{ props.authMessage }}
            <v-btn class="text-body-1 text-blue-darken-4" color="transparent" flat height="25px" :to="props.authLink"
                :width="props.authTextWidth">{{ props.authText }}</v-btn>
        </div>
    </div>
</template>