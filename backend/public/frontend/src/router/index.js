import { createMemoryHistory, createRouter, createWebHistory } from 'vue-router'
import { setTitle } from '@/router/guards/SetTitleGuard.mjs'
// import Flights from '../pages/Flights.vue'
export const router = createRouter({
  history: createMemoryHistory(),
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
        requiresAuth: true,
        title: 'Admin'
      },
    },
    {
      path: '/luggagelocation',
      name: 'LuggageLocation',
      component: () => import('@/pages/LuggageLocation.vue'),
      meta: {
        requiresAuth: false,
        title: 'LuggageLocation'
      },
    },
    {
      path: '/groundhandler',
      name: 'groundhandler',
      component: () => import('@/pages/GroundHandler.vue'),
      meta: {
        requiresAuth: true,
        title: 'Ground Handler',
        role: 'gh',
        permissions: ['create', 'edit', 'delete']
      },
    },
    {
      path: '/flightoperator',
      name: 'flightoperator',
      component: () => import('@/pages/FlightOperator.vue'),
      meta: {
        requiresAuth: true,
        title: 'Flight Operator',
        role: 'fo',
        permissions: ['create', 'edit', 'delete']
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
    },
    {
      path:'/flightreservation',
      name:'FlightReservation',
      component: () => import('@/pages/FlightReservation.vue'),
      meta:{
        requiresAuth: false,
        title: 'FlightReservation'
      }
    },
    {
      path:'/user',
      name:'Account',
      component: () => import('@/pages/User.vue'),
      meta:{
        requiresAuth: true,
        title: 'Accunt',
        permissions: ['create', 'edit', 'delete']
      }
    }
  ]
})

//router.beforeEach(setTitle)
