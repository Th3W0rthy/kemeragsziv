import {defineStore} from "pinia";
import {http} from "../utils/http.mjs";

export const useLuggage = defineStore('luggage-store', {
    state() {
        return {
            luggages: [],
            filter: 0
        }
    },
    actions: {
        async getLuggages() {
            const luggages = await http.get('luggages');
            this.luggages = luggages.data.data;
        }
    }
})