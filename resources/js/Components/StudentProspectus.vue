<script setup>
defineProps({
  prospectus: {
    type: Array,
    required: true,
  },
});
</script>

<template>
  <v-container>
    
    <div class="text-h5">Prospectus</div>
    <v-table height="300">
      <thead>
        <tr>
          <th class="text-left">Code</th>
          <th class="text-left">Name</th>
          <th class="text-left">Grade</th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="courseWithGrade in prospectus"
          :key="courseWithGrade.course.id"
        >
          <td>{{ courseWithGrade.course.course_code }}</td>
          <td>{{ courseWithGrade.course.course_name }}</td>
          <td>{{ courseWithGrade.grade || "Missing" }}</td>
        </tr>
      </tbody>
    </v-table>
</v-container>
</template>
 