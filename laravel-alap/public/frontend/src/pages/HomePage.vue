<script setup>
import { useFlight } from '@/stores/FlightStore.js';
import { onMounted } from 'vue';

const FlightStore = useFlight();

const emptyString = "";

async function showFlight(id){
  const flightMore = await FlightStore.getFlight(id);
}

onMounted(FlightStore.getFlights);
</script>

<template>
  <div class="row">
    <div class="col-3">
      <div id="filter" class="bg-dark">
        <h5>Filters</h5>
      </div>
    </div>
    <div class="container col-6">
      <table class="table table-striped table-dark">
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
      </table>
      <div id="flights">
        <table class="table table-striped table-dark" v-for="flight in FlightStore.flights" :key="flight.id">
          <tbody>
            <tr>
              <td>{{ flight.departure }}</td>
              <td>{{ flight.arrival }}</td>
              <td>{{ flight.from }}</td>
              <td>{{ flight.to }}</td>
              <td>{{ flight.airline }}</td>
              <td>{{ flight.number }}</td>
              <td>
                <button class="btn btn-primary" @click="showFlight(flight.id)">
                  More
                </button>
              </td>
            </tr>
            <tr v-show="true">
              <td colspan="7">
                <div class="row">
                  <div class="col">
                    <p>
                      <span>Departure: </span>
                      <span></span>
                    </p>
                    <p>
                      <span>Arrival: </span>
                      <span></span>
                    </p>
                    <p>
                      <span>From: </span>
                      <span></span>
                    </p>
                    <p>
                      <span>To: </span>
                      <span></span>
                    </p>
                  </div>
                  <div class="col">
                    <p>
                      <span>Airline: </span>
                      <span><a id="airlineLink" href="" target="_blank"></a></span>
                    </p>
                    <p>
                      <span>IATA/ICAO: </span>
                      <span></span>
                    </p>
                    <p v-show="flight.airline_phone != emptyString ">
                      <span>Phone: </span>
                      <span></span>
                    </p>
                    <p v-show="flight.airline_email != emptyString">
                      <span>Email: </span>
                      <span></span>
                    </p>
                    <p>
                      <span>Aircraft: </span>
                      <span></span>
                    </p>
                    <button class="btn btn-primary">
                      Booking
                    </button>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-3">
      <div id="info" class="bg-dark">
          <h5>Info</h5>
      </div>
    </div>
  </div>
</template>
