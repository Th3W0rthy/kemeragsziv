import { defineStore } from 'pinia';
import axios from 'axios';

export const useAuthStore = defineStore('auth',{
  state(){
    return{
    currentUser:"",
    isAuthenticated: false,
    token:localStorage.getItem("token"),
        } 
  },
  actions: {
    async register(userdata) {
      try {
        const response = await axios.post('http://localhost:8881/api/register', 
          userdata
        );

        this.currentUser = response.data;
      } catch (error) {
        console.error(error);
        throw new Error('Registration failed.');
      }
    },
    async login(useradata) {
        try {
          const response = await axios.post('http://localhost:8881/api/authenticate',useradata);
          if (response.status === 200 && response.data.token) {
            this.user = { email: email}
            this.token = response.data.token;
            localStorage.setItem("token",this.token);
          }
        } catch (error) {
          console.error(error);
        }
      },
    async logout() {
        this.user = null;
        this.isAuthenticated = false;
        localStorage.setItem("token",null);
      },
  },
  getters: {
    currentUser() {
      return this.user;
    },
    isLoggedIn() {
      return this.isAuthenticated;
    },
  },
});