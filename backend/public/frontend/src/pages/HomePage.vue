<script setup>
import FlightTable from "../components/FlightTable.vue";
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
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div id="filter" class="bg-dark">
          <h5>Filters</h5>
        </div>
      </div>
      <div class="col-lg-9">
        <flight-table></flight-table>
      </div>
    </div>
  </div>
</template>
