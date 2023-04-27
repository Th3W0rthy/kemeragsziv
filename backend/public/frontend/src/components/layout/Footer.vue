<template>
  <footer class="mt-auto py-3 bg-dark" data-bs-theme="dark">
    <p class="text-center text-white">© {{ currentYear }}, Sky Flights</p>
  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear()
</script>
