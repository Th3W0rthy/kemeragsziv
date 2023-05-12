<template>
    
    <div class="w-75 nt-5 mx-auto p-4 bg-succes bg-opacity-20">
        <h1 class="display-1 text-center">Account</h1>
        <VFrom @submit="onSubmit" id="vfrom" :validation-schema="schema">
            <div class="form-group">
                <label for="email"> Email</label>
                
            </div>
            <div class="form-group">
                <label for="password">Password</label> 
                
            </div>
            <div>
                <label for="travel">Travel</label>
            </div>
            <div>
                <input type="button" value="Logout" class="btn btn-danger mt-3">

            </div>
        </VFrom> 
    </div>
</template>
<script setup >
import {Form as VFrom, Field, ErrorMessage} from  "vee-validate";

</script>
<script>
import { useAuthStore } from '@/stores/AuthStore.js';

export default {
  name: 'New',
  setup() {
    const authStore = useAuthStore();

    const onSubmit = async (userdata) => {
      await authStore.logout();
    };

    return {
      onSubmit,
    };
  },
};
</script>