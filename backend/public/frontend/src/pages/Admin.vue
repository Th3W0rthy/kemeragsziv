<script setup>
import AdminTable from '../components/AdminTable.vue';
import { useAdmin } from '@/stores/AdminStore.js';
import { onMounted } from 'vue';
const AdminStore = userAdmin();
const emptyString="";
async function showUser($id){
    const userMore = await AdminStore.getAdmin(id);
}
onMounted(AdminStore.getAdmin);
</script>

<template>
  <main class="container">
    
    <AdminTable></AdminTable>
  
  </main>
</template>
