<script>
//import { logo } from "@/src/assets/img/logo.png";

</script>

<template>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <img id="logo" src="../../assets/img/logo.png" height="30" alt="logo">
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
              <router-link class="nav-link" to="/">Flights</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/luggage">Luggage location</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/qrscanner">QR code scanner</router-link>
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
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>

<script setup>
import {RouterLink} from 'vue-router'
function onChange(locale){
    localStorage.setItem('locale',locale);
}
</script>
