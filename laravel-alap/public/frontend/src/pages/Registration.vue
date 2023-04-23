<template>
    <h1 class="display-1 text-center">Registration</h1>
    <div class="w-75 nt-5 m-auto p-5 bg-succes bg-opacity-25">
        <VFrom @submit="onSubmit" :validation-schema="schema">
            <div class="form-group">
                <label for="email">Email</label>
                <Field type="text" name="email" id="email" class="form-control" rules="required"/> 
                <ErrorMessage name="email" as="div" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <Field type="text" name="password" id="password" class="form-control" rules="required"/> 
                <ErrorMessage name="password" as="div" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Again password</label>
                <Field type="text" name="password_confirmation" id="password_confirmation" class="form-control" rules="required"/> 
                <ErrorMessage name="password_confirmation" as="div" class="alert alert-danger m-1"/>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Registration</button>
        </VFrom>  
    </div>   
</template>
<script setup>
import {From as VFrom, Field, ErrorMessage}from "vee-validate";
function onSubmit(values){
    console.table(values)
}
import * as yup from 'yup';
const schema = yup.object({
    email: yup.string().email().required("The field is mandatory"),
    password: yup.string().required("The field is mandatory").matches(
      /^.*(?=.{8,})((?=.*[!@#$%^&*()\-_=+{};:,<.>]){1})(?=.*\d)((?=.*[a-z]){1})((?=.*[A-Z]){1}).*$/,
      "Password must contain at least 8 characters, one uppercase, one number and one special case character."
    ),
    password_confirmation: yup.string().required().oneOf([yup.ref('password'), null], "Passwords don't match.")
});
</script>