import { createRouter, createWebHistory } from 'vue-router'
import { setTitle } from '@/router/guards/SetTitleGuard.mjs'
// import Flights from '../pages/Flights.vue'
export const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/flights',
      name: 'flights',
      component: () => import('@/pages/HomePage.vue'),
      meta: {
        requiresAuth: false,
        title: 'Flights'
      },
    },
    {
      path: '/admin',
      name: 'Admin',
      component: () => import('@/pages/Admin.vue'),
      meta: {
        requiresAuth: false,
        title: 'Admin'
      },
    },
    {
      path: '/luggage',
      name: 'Luggage',
      component: () => import('@/pages/LuggageLocation.vue'),
      meta: {
        requiresAuth: false,
        title: 'Luggage'
      },
    },
    {
      path: '/groundhandler',
      name: 'groundhandler',
      component: () => import('@/pages/GroundHandler.vue'),
      meta: {
        requiresAuth: false,
        title: 'Ground Handler'
      },
    },
    {
      path: '/flightoperator',
      name: 'flightoperator',
      component: () => import('@/pages/FlightOperator.vue'),
      meta: {
        requiresAuth: false,
        title: 'Flight Operator'
      },
    },
    {
      path:'/register',
      name:'Register',
      component: () => import('@/pages/Register.vue'),
      meta:{
        requiresAuth: false,
        title: 'Register'
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
