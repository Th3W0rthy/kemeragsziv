<script setup>
import { useFlight } from '@/stores/FlightStore.js';
import { onMounted } from 'vue';

const FlightStore = useFlight();

async function onClick(id) {
  const flight = await FlightStore.getFlight(id);
  //teszt
  window.open("http://localhost:5174/flightreservation");
  alert(flight.description);
}

onMounted(FlightStore.getFlights);

const props = defineProps({
    flight_id: Number,
    departure: String,
    arrival: String,
    from: String,
    to: String,
    airline: String,
    flight_number: String
})

</script>

<template>
<tr>
    <td>{{ departure }}</td>
    <td>{{ arrival }}</td>
    <td>{{ from }}</td>
    <td>{{ to }}</td>
    <td>{{ airline }}</td>
    <td>{{ flight_number }}</td>
    <td>
        <button class="btn btn-primary" @click="onClick(flight.id)">
        More
        </button>
    </td>
</tr>
</template>