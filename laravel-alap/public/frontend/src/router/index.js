import { createRouter, createWebHistory } from 'vue-router'
import { setTitle } from '@/router/guards/SetTitleGuard.mjs'
export const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('@/pages/HomePage.vue'),
      meta: {
        requiresAuth: false,
        title: 'Főoldal'
      }
    },
    {
      path:'/login',
      name: 'Login',
      component: ()=> import('@/pages/LoginPage.vue'),
      meta:{
          title:'Login'
      }
    }
  ]
})

router.beforeEach(setTitle)
