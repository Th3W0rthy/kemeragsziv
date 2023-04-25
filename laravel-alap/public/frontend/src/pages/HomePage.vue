<script setup>
import { useFlight } from '@/stores/FlightStore.js';
import { onMounted } from 'vue';

const FlightStore = useFlight();

async function onClick(id){
  const flight = await FlightStore.getFlight(id);
  alert(flight.number);
}

onMounted(FlightStore.getFlights);
</script>

<template>
  <main class="container">
    <table class="table table-striped table-dark">
      <thead>
      <tr>
        <th>Departure</th>
        <th>Arrival</th>
        <th>From</th>
        <th>To</th>
        <th>Airline</th>
        <th>Flight number</th>
      </tr>
    </thead>
    </table>
    <div id="flights">
      <table class="table table-striped table-dark" v-for="flight in FlightStore.flights" :key="flight.id">
        <tbody>
          <tr>
            <td>{{ flight.departure }}</td>
            <td>{{ flight.arrival }}</td>
            <td>{{ flight.departure_airport }}</td>
            <td>{{ flight.arrival_airport }}</td>
            <td>{{ flight.airline }}</td>
            <td>{{ flight.number }}</td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="row">
                <div class="col">
                  <p>
                    <span>Departure: </span>
                    <span>{{ flight.departure }}</span>
                  </p>
                  <p>
                    <span>Arrival: </span>
                    <span>{{ flight.arrival }}</span>
                  </p>
                  <p>
                    <span>From: </span>
                    <span>{{ flight.departure_airport }}</span>
                  </p>
                  <p>
                    <span>To: </span>
                    <span>{{ flight.arrival_airport }}</span>
                  </p>
                </div>
                <div class="col">
                  <p>
                    <span>Airline: </span>
                    <span>{{ flight.airline }}</span>
                  </p>
                  <p>
                    <span>Phone: </span>
                    <span></span>
                  </p>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!--
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th>Departure</th>
          <th>Arrival</th>
          <th>From</th>
          <th>To</th>
          <th>Airline</th>
          <th>Flight number</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="flight in FlightStore.flights" :key="flight.id" @click="onClick(flight.id)">
          <td>{{ flight.departure }}</td>
          <td>{{ flight.arrival }}</td>
          <td>{{ flight.departure_airport }}</td>
          <td>{{ flight.arrival_airport }}</td>
          <td>{{ flight.airline }}</td>
          <td>{{ flight.number }}</td>
        </tr>
      </tbody>
    </table>
    -->
  </main>
</template>
