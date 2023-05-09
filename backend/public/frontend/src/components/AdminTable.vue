<script setup>
import AdminRow from '../components/AdminRow.vue';
import { useAdmin } from '@/stores/AdminStore.js';
import { onMounted } from 'vue';

const AdminStore = useAdmin();

</script>

<template>
  <main class="container">
    <br>
    <table class="table table-responsive table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Role</th>
        </tr>
      </thead>
      <tbody>
        <AdminRow v-for="AdminRow in AdminStore.getAdmin()" :key="admin.id"  ></AdminRow>
      </tbody>
    </table>
  </main>
</template>
