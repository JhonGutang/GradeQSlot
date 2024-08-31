<template>
    <nav class="bg-blue-500 h-16">
      <div class="container mx-auto flex justify-between items-center h-full">
        <div class="text-white text-xl font-bold">My Website</div>
        <div class="space-x-4">
          <Link to="/" class="text-gray-300 text-sm hover:text-white">Home</Link>
          <Link to="/services" class="text-gray-300 text-sm hover:text-white">Services</Link>
          <Link to="/about" class="text-gray-300 text-sm hover:text-white">About Us</Link>
          <Link to="/contact" class="text-gray-300 text-sm hover:text-white">Contact Us</Link>
        </div>
      </div>
    </nav>
  </template>
  
  <script setup>
    
  </script>
  
  <style scoped>
  /* Add any additional styles if necessary */
  </style>
  