<script setup>
import { computed, ref } from 'vue';
import Searchbar from '../Searchbar.vue';

const selectedYear = ref(null);
const dialog = ref(false)
// Props definition
const props = defineProps({
  prospectus: {
    type: Array,
    required: true,
  },
});

// Search query and computed property for filtering courses
const searchQuery = ref("");

// Computed property to filter courses based on the search query
const filteredCourses = computed(() => {
  let courses = props.prospectus;
  // Filter by selected year if applicable
  if (selectedYear.value) {
    courses = courses.filter(
      (courseWithGrade) => courseWithGrade.course.year_level === selectedYear.value
    );
  }
  // Filter by search query
  if (searchQuery.value) {
    courses = courses.filter(
      (courseWithGrade) =>
        courseWithGrade.course.course_name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
        courseWithGrade.course.course_code.toLowerCase().includes(searchQuery.value.toLowerCase())
    );
  }
  return courses; // Return the filtered courses
});

// Function to update the selected year
function displayCourseByYear(id) {
  selectedYear.value = id;
  console.log(`Selected Year: ${id}`);
}

// Function to handle search input
const handleSearch = (query) => {
  searchQuery.value = query;
};
</script>

<template>
  <v-container>
    <v-container class="d-flex flex-row mb-4">
      <div class="text-h5 me-10">Prospectus</div>
      <v-btn class="me-3" variant="outlined" @click="displayCourseByYear(1)" flat>1st Year</v-btn>
      <v-btn class="me-3" variant="outlined" @click="displayCourseByYear(2)" flat>2nd Year</v-btn>
      <v-btn class="me-3" variant="outlined" @click="displayCourseByYear(3)" flat>3rd Year</v-btn>
      <v-btn class="me-3" variant="outlined" @click="displayCourseByYear(4)" flat>4th Year</v-btn>
      <Searchbar @search="handleSearch"/>
    </v-container>
    <v-table height="500" class="rounded">
      <thead>
        <tr class="bg-indigo">
          <th class="text-left">Code</th>
          <th class="text-left">Name</th>
          <th class="text-center">Grade</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="courseWithGrade in filteredCourses"
          :key="courseWithGrade.course.id"
        >
          <td>{{ courseWithGrade.course.course_code }}</td>
          <td>{{ courseWithGrade.course.course_name }}</td>
          <td :class="courseWithGrade.grade ? 'text-black': 'text-red'" class="text-center">{{ courseWithGrade.grade || "Missing" }}</td>
          <td class="d-flex justify-center align-center"><v-btn  @click="dialog = true">
          <v-icon>mdi-pencil</v-icon>  
          </v-btn></td>
        </tr>
      </tbody>
    </v-table>
  </v-container>

  <div class="text-center pa-4">
    <v-btn @click="dialog = true">
      Open Dialog
    </v-btn>

    <v-dialog
      v-model="dialog"
      width="auto"
    >
      <v-card
        width="700"
        height="400"
        class="pa-5 rounded-lg"
        
      >
      <v-card-title class="d-flex justify-between">
        Editing Grades
        <v-btn class="bg-error" @click="dialog = false">
          <v-icon>mdi-close</v-icon>
        </v-btn>
      </v-card-title>
      <v-card-text>
        <v-container class="d-flex" width="500">
          <div class="me-8">Course: </div>
          <div class="">Course name Here</div>
        </v-container>
        <v-container class="d-flex align-center" height="80" width="500">
          <div class="me-8">Add Current Grade: </div>
          <v-text-field></v-text-field>
        </v-container>
        <v-container class="d-flex align-center" height="80" width="500">
          <div class="me-8 ms-5">Add New Grade: </div>
          <v-text-field></v-text-field>
        </v-container>
      </v-card-text>
        <template v-slot:actions>
          <v-btn
          width="100"
            class="ms-auto bg-success"
            text="Submit"
            @click="dialog = false"
          ></v-btn>
        </template>
      </v-card>
    </v-dialog>
  </div>
</template>
