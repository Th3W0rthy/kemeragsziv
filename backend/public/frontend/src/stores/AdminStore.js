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
        async getAdmins() {
            const admins = await http.get('user');
            this.admins = users.data.data;
        },
        async getAdmins(id) {
            const admin = await http.get(`user/${id}`);
            return admin.data.data;
        }
    }
})