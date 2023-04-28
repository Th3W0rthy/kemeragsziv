/*
const loginForm = document.querySelector("vfrom");

loginForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  const email = document.querySelector("email").value;
  const password = document.querySelector("password").value;

  try {
    const response = await fetch("http://localhost:8881/api/authenticate", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        email,
        password,
      }),
    });

    const data = await response.json();

    if (data.jwt) {
      localStorage.setItem("token", data.jwt);
      console.log("Sikeres bejelentkezés!");
    } else {
      console.error(data.error);
    }
  } catch (error) {
    console.error(error);
  }
});
*/
import { defineRule, configure } from 'vee-validate';
import { required, email } from '@vee-validate/rules';
import { setLocale } from '@vee-validate/i18n';
import * as yup from 'yup';
import axios from 'axios';

defineRule('required', required);
defineRule('email', email);

const schema = yup.object().shape({
  email: yup.string().email().required(),
  password: yup.string().required(),
});

configure({
  generateMessage: setLocale('en', {}), // Set locale to English
  validateOnInput: true,
});

export default {
  data() {
    return {
      email: '',
      password: '',
      emailRules: [v => schema.validate({ email: v }).catch(e => e.message)],
      passwordRules: [v => schema.validate({ password: v }).catch(e => e.message)],
      emailErrors: [],
      passwordErrors: [],
    };
  },

  methods: {
    async submitForm() {
      try {
        const response = await axios.post('http://localhost:8881/api/authenticate', {
          email: this.email,
          password: this.password,
        });
        
        // Do something with the response, e.g. store the JWT token in Vuex store
      } catch (error) {
        console.error(error);
      }
    },
  },
};