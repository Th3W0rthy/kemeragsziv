<template>
    <h1 class="display-1 text-center">Register</h1>
    <div class="w-75 nt-5 m-auto p-5 bg-succes bg-opacity-25">
        <VFrom @submit="onSubmit" id="vform" :validation-schema="schema">
            <div class="form-group">
                <label for="name">Name</label>
                <Field type="text" name="name" id="name" class="form-control" rules="required"/> 
                <ErrorMessage name="name" as="div" id="NameErrormessage" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <Field type="text" name="email" id="email" class="form-control" rules="required"/> 
                <ErrorMessage name="email" as="div" id="EmailErrormessage" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <Field type="password" name="password" id="password" class="form-control" rules="required"/> 
                <ErrorMessage name="password" as="div" id="PasswordErrormessage" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password confirmation</label>
                <Field type="password" name="password_confirmation" id="password_confirmation" class="form-control" rules="required"/> 
                <ErrorMessage name="password_confirmation" as="div" id="AgainPasswordErrormessage" class="alert alert-danger m-1"/>
            </div>
            <div>
                <input type="radio" name="password_confirmation" id="termsofuse" required>Terms of use
             </div>
            <input type="submit" value="Registration" class="btn btn-primary mt-3">
        </VFrom>  
    </div>   
</template>
<script setup >
import { useAuthStore } from '@/stores/AuthStore.js';
import * as yup from 'yup';
import {Form as VFrom, Field, ErrorMessage} from  "vee-validate";

const authStore = useAuthStore();

const onSubmit = async (userdata) => {
      await authStore.register(userdata);
    };

const schema = yup.object({
    email: yup.string().email().required("The field is mandatory"),
    name: yup.string().required("This field is mandatory"),
    password: yup.string().required("The field is mandatory"),
    password_confirmation: yup.string().required("The field is mandatory").oneOf([yup.ref('password')]),
});
</script>