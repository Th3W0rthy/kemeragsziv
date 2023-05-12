<template>
    <h1 class="display-1 text-center">Login</h1>
    <div class="w-75 nt-5 m-auto p-5 bg-succes bg-opacity-25">
        <VFrom @submit="onSubmit" id="vfrom" :validation-schema="schema">
            <div class="form-group">
                <label for="email">Email</label>
                <Field type="text" name="email" id="email" class="form-control" rules="required"/> 
                <ErrorMessage name="email" id="EmailErrormessage" as="div" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <Field type="password" name="password" id="password" class="form-control" rules="required"/> 
                <ErrorMessage name="password" as="div" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <input type="submit" value="Login" class="btn btn-success mt-3" >
            </div>
        </VFrom>  
    </div>   
   
</template>
<script setup >
import * as yup from 'yup';
import {Form as VFrom, Field, ErrorMessage} from  "vee-validate";

const schema = yup.object({
    email: yup.string().email().required("The field is mandatory"),
    password: yup.string().required("The field is mandatory"),
});
</script>
<script>
import { useAuthStore } from '@/stores/AuthStore.js';

export default {
  name: 'LoginForm',
  setup() {
    const authStore = useAuthStore();

    const onSubmit = async (userdata) => {
      await authStore.login(userdata);
    };

    return {
      onSubmit,
    };
  },
};
</script>