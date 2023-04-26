<script setup>
import { useFlight } from '@/stores/FlightStore.js';
import { onMounted } from 'vue';

const FlightStore = useFlight();

const emptyString = "";

async function showFlight(id){
  
  const flight = await FlightStore.getFlight(id);
  alert(`${flight.number}, ${show}`);
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
      <table class="table table-striped table-dark" v-for="flight in FlightStore.flights" :key="flight.id" @click="showFlight(flight.id)">
        <tbody>
          <tr>
            <td>{{ flight.departure }}</td>
            <td>{{ flight.arrival }}</td>
            <td>{{ flight.departure_airport }}</td>
            <td>{{ flight.arrival_airport }}</td>
            <td>{{ flight.airline }}</td>
            <td>{{ flight.number }}</td>
            <td></td>
          </tr>
          <tr v-show="show">
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
                    <span>
                      {{ flight.departure_country}}, 
                      {{ flight.departure_settlement}}, 
                      {{ flight.departure_airport }}, 
                      {{ flight.departure_iata }} 
                    </span>
                  </p>
                  <p>
                    <span>To: </span>
                    <span>
                      {{ flight.arrival_country}}, 
                      {{ flight.arrival_settlement}}, 
                      {{ flight.arrival_airport }}
                      {{ flight.arrival_iata }} 
                    </span>
                  </p>
                </div>
                <div class="col">
                  <p>
                    <span>Airline: </span>
                    <span><a id="airlineLink" href="" target="_blank">{{ flight.airline }}</a></span>
                  </p>
                  <p>
                    <span>IATA/ICAO: </span>
                    <span>{{ flight.iata }}, {{ flight.icao }}</span>
                  </p>
                  <p v-show="flight.airline_phone != emptyString ">
                    <span>Phone: </span>
                    <span>{{ flight.airline_phone }}</span>
                  </p>
                  <p v-show="flight.airline_email != emptyString">
                    <span>Email: </span>
                    <span>{{ flight.airline_email }}</span>
                  </p>
                  <p>
                    <span>Aircraft: </span>
                    <span>{{ flight.aircraft }}</span>
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
