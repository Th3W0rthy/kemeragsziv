<template>
    <h1 class="display-1 text-center">Login</h1>
    <div class="w-75 nt-5 m-auto p-5 bg-succes bg-opacity-25">
        <VFrom @submit="onSubmit" id="vfrom" :validation-schema="schema">
            <div class="form-group">
                <label for="email">Email</label>
                <Field type="text" name="email" id="email" class="form-control" rules="required"/> 
                <ErrorMessage name="email" as="div" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <Field type="password" name="password" id="password" class="form-control" rules="required"/> 
                <ErrorMessage name="password" as="div" class="alert alert-danger m-1"/>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Login</button>
        </VFrom>  
    </div>   
</template>
<script setup>
import * as login from "@/stores/LoginStore.js";
</script>