import {defineStore} from "pinia";
import {http} from "../utils/http.mjs";

export const useFlight = defineStore('flight-store', {
    state() {
        return {
            flights: [],
            filter: ""
        }
    },
    getters: {
        filteredFlights(){
          if(this.filters === ''){
            return this.flights;
          }
          return this.flights.filter((flight) => flight.to.includes(this.filter));
        }
      },
    actions: {

        async getFlights() {
            const flights = await http.get('flights');
            this.flights = flights.data.data;
        },
       async getFlight(id) {
            const flight = await http.get(`flight/${id}`);
            return flight.data.data;
        },
        setFilter(flight){
            this.filter = flight;
        }
    }
})