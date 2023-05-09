<script setup>
import { onMounted } from 'vue';

const AdminStore = useAdmin();

onMounted(Adminstore.getAdmin);

const props = defineProps({
    email: String,
    password: String,
    rule: String
})

</script>

<template>
<tr>
    <td>{{ email }}</td>
    <td>{{ password }}</td>
    <td>{{ rule }}</td>

</tr>
</template>