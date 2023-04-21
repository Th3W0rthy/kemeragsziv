<template>
    <h1 class="display-1 text-center">Bejelentkezés</h1>
    <div class="container-fluid bg-warning bg-opacity-50 p-5">
      <div class="w-75 m-auto m-5">
        <VeeForm @submit="onSubmit" v-slot="{ values }" :validation-schema="schema">
         
          <label for="email">Ímél:</label>
          <Field name="email" type="text" class="form-control" />
          <ErrorMessage name="email" as="div" class="alert alert-danger" />
          <label for="name">Jelszó:</label>
          <Field name="password" type="password" class="form-control" />
          <ErrorMessage name="password" as="div" class="alert alert-danger" />
          <button type="submit" class="btn btn-danger mt-5">Login</button>
  
          <div class="alert alert-success">
            {{ values }}
          </div>
        </VeeForm>
        <RouterLink :to="{name: 'register'}" >Regisztráció</RouterLink>
      </div>
    </div>
  </template>
  
  <script setup>
  import { Form as VeeForm, Field, ErrorMessage } from 'vee-validate';
  import * as yup from 'yup';
  const schema = yup.object({
      email: yup.string().email().required(),
      password: yup.string().min(8).required('Kötelező kitölteni!')
  })
  function onSubmit(values) {
    console.log(values);
  }
  </script>