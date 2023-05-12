<script setup>
import FlightRow from "../components/FlightRow.vue";
import { useFlight } from '@/stores/FlightStore.js';
import { onMounted } from 'vue';

const FlightStore = useFlight();

async function showFlight(id){
  
}

onMounted(FlightStore.getFlights);
</script>

<template>
<table class="table flights_table table-responsive table-striped table-dark">
    <thead>
        <tr>
            <th>Departure</th>
            <th>Arrival</th>
            <th>From</th>
            <th>To</th>
            <th>Airline</th>
            <th>Flight number</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <flight-row v-for="flight in FlightStore.filteredFlights" :key="flight.id" :flight_id="flight.id" :departure="flight.departure" :arrival="flight.arrival" :from="flight.from" :to="flight.to" :airline="flight.airline" :flight_number="flight.number" ></flight-row>
    </tbody>
</table>
</template>
