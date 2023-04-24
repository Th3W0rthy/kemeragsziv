<script setup>
import { useCounter } from '@/stores/CounterStore.mjs'

const CounterStore = useCounter()


</script>
<script>
// Az API kulcs és a város neve
var apiKey = '6ea0dd1fe69906c6dd07299aa527f803';
var city = 'Budapest';

// Az API URL és a lekérdezés paraméterei
var apiUrl = 'http://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=' + apiKey;

// Az AJAX hívás az API lekérdezéshez
var xhr = new XMLHttpRequest();
xhr.open('GET', apiUrl);
xhr.onreadystatechange = function() {
	if (xhr.readyState === 4 && xhr.status === 200) {
		var response = JSON.parse(xhr.responseText);
		var weather = response.weather[0].description;
		var temp = response.main.temp;
		var humidity = response.main.humidity;
		var windSpeed = response.wind.speed;
		document.getElementById('weather').innerHTML = 'Időjárás: ' + weather + ', Hőmérséklet: ' + temp + ', Páratartalom: ' + humidity + ', Szélsebesség: ' + windSpeed;
	}
};
xhr.send();
</script>
<template>
  <main class="text-center">
    <h1>Weather</h1>
    <div id="weather"></div>
    <h1 class="display-1 my-5">{{ $t('pages.home.hello') }}</h1>
    <button class="btn btn-success" @click="CounterStore.increment()">
      {{ $t('pages.home.counter', { n: CounterStore.counter }) }}
    </button>
  </main>
</template>
