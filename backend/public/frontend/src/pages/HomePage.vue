<script setup>
import FlightTable from "../components/FlightTable.vue";
import { useFlight } from '@/stores/FlightStore.js';
import { onMounted, ref } from 'vue';

const FlightStore = useFlight();

const emptyString = "";
const flight = ref("");
//szures/kereseshez
async function onClick(flight)
{
 FlightStore.setFilter(flight);
}

//tovabbi informacio gombhoz
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
          <h5 id="h5">Filters</h5> 
        </div>
        <div class="search-bar">  
          <input type="text" class="textbox" v-model="flight" placeholder="type here..."/>
          <a class = "search-btn" href="#" @click="onClick(flight)">
            <p>Search</p>
          </a>
        </div>
      </div>
      <div class="col-lg-9">
        <flight-table></flight-table>
      </div>
    </div>
  </div>
</template>
