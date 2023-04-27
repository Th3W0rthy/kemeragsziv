import {defineStore} from "pinia";
import {http} from "../utils/http.mjs";

export const useFlight = defineStore('flight-store', {
    state() {
        return {
            flights: [],
            filter: 0
        }
    },
    actions: {
        async getFlights() {
            const flights = await http.get('flights');
            this.flights = flights.data.data;
        },
        async getFlight(id) {
            const flight = await http.get(`flights/${id}`);
            return flight.data.data;
        }
    }
})