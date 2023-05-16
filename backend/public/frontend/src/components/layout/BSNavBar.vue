<template>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <img id="logo" :src="logo" height="30" alt="logo">
        <a class="navbar-brand" href="#">Sky Flights</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <router-link class="nav-link" to="/flights">Flights</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/groundhandler">Ground Handler</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/flightoperator">Flight Operator</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/admin">Administration</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/login" >Login</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/register" >Register</router-link>
            </li>
            <li>
            <div v-if="auth.isLoggedIn">
              <span class="navbar-text">Helló !</span>
            </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>

<script setup>
import {RouterLink} from 'vue-router'
import logo from "@/assets/img/logo.png";
import { useAuthStore } from '@/stores/AuthStore.js';
function onChange(locale){
    localStorage.setItem('locale',locale);
}
const auth = useAuthStore();
</script>
