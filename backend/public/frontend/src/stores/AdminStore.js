import {defineStore} from "pinia";
import {http} from "../utils/http.mjs";

export const useAdmin = defineStore('admin-store', {
    state() {
        return {
            admins: [],
            filter: 0
        }
    },
    actions: {
        async getAdmin() {
            const admins = await http.get('user',{header:{Authorization:`Bearer ${localStorage.getItem("token")}`}});
            this.admins = users.data.data;
        }
    }
})