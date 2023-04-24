import { createRouter, createWebHistory } from 'vue-router'
import { setTitle } from '@/router/guards/SetTitleGuard.mjs'
// import Flights from '../pages/Flights.vue'
export const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('@/pages/HomePage.vue'),
      meta: {
        requiresAuth: false,
        title: 'Home'
      },
    },
    {
      path:'/flights',
      name:'Flights',
      component: () => import('@/pages/Flights.vue'),
      meta:{
        requiresAuth: false,
        title: 'Flights'
      }
    },
    {
      path:'/registration',
      name:'Registration',
      component: () => import('@/pages/Registration.vue'),
      meta:{
        requiresAuth: false,
        title: 'Registration'
      }
    },
    {
      path:'/login',
      name:'Login',
      component: () => import('@/pages/Login.vue'),
      meta:{
        requiresAuth: false,
        title: 'Login'
      }
    }
  ]
})

//router.beforeEach(setTitle)
