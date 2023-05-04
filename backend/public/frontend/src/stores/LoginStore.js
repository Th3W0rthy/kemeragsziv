import { defineStore } from 'pinia';
import axios from 'axios';

export const useAuthStore = defineStore({
  id: 'auth',
  state: () => ({
    user: null,
    isAuthenticated: false,
  }),
  getters: {
    currentUser() {
      return this.user;
    },
    isLoggedIn() {
      return this.isAuthenticated;
    },
  },
  actions: {
    async login(email, password) {
      try {
        const response = await axios.post('http://localhost:8881/api/authenticate', {
          email,
          password,
        });

        // Itt ellenőrizhetjük a válasz tartalmát és beállíthatjuk a store állapotát
        if (response.status === 200 && response.data.token) {
          this.user = { email: email };
          this.isAuthenticated = true;
          // A token-t is tárolhatjuk el, ha szükséges
        }
      } catch (error) {
        // Itt kezelhetjük a hibás bejelentkezési adatokat
        console.error(error);
      }
    },
    logout() {
      // Itt állíthatjuk vissza a store állapotát a kijelentkezett állapotra
      this.user = null;
      this.isAuthenticated = false;
    },
  },
});
