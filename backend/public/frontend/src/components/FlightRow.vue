<template>
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
</template>

<script>

</script>