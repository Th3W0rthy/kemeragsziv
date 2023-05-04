import { defineStore } from 'pinia';
import axios from 'axios';

import { defineStore } from 'pinia';
import axios from 'axios';

export const useAuthStore = defineStore({
  id: 'auth',
  state: () => ({
    currentUser: null,
  }),
  actions: {
    async register({ email, password }) {
      try {
        const response = await axios.post('http://localhost:8881/api/register', {
          email,
          password,
        });

        this.currentUser = response.data;
      } catch (error) {
        console.error(error);
        throw new Error('Registration failed.');
      }
    },
  },
});