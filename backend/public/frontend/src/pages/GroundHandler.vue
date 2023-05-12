<template>
  <main class="container">
    <div class="col">
      <div class="row qrcode"  v-show="show">
        <qrcode-stream @init="onInit" @decode="onDecode" ></qrcode-stream>
      </div>
      <div class="row" v-show="!show" v-for="luggage in LuggageStore.luggages" :key="luggage.id">
        <div class="row" v-show="luggage.tag == decodedTag">
          <h1>Luggage</h1>
        <label for="luggageTag">Luggage tag</label>
        <input type="text" name="luggageTag" id="luggageTag" :value="decodedTag" disabled>
        <label for="LuggageOwner">Luggage owner</label>
        <input type="text" name="LuggageOwner" id="LuggageOwner" :value="luggage.luggageData.owner" disabled>
        <label for="LuggageOwnerPhone">Luggage owner's phone</label>
        <input type="text" name="LuggageOwnerPhone" id="LuggageOwnerPhone" :value="luggage.luggageData.phone" disabled>
        <label for="LuggageOwnerEmail">Luggage owner's email</label>
        <input type="text" name="LuggageOwnerEmail" id="LuggageOwnerEmail" :value="luggage.luggageData.email" disabled>
        <label for="LuggageOwnerAddress">Luggage owner's address</label>
        <input type="text" name="LuggageOwnerAddress" id="LuggageOwnerAddress" :value="luggage.luggageData.address" disabled>

        <table class="table flights_table table-responsive table-striped table-dark">
          <thead>
              <tr>
                  <th>Luggage location</th>
                  <th>Created_at</th>
                  <th>Updated_at</th>
              </tr>
          </thead>
          <tbody>
              <tr v-for="(log, index) in luggage.luggage_logs" :key="index">
                <td> {{log.airport}} </td>
                <td>
                  <input type="datetime-local" :value="log.created_at" name="created_at" id="created_at">
                </td>
                <td>
                  <input type="datetime-local" :value="log.updated_at" name="updated_at" id="updated_at">
                </td>
              </tr>
          </tbody>
      </table>
      </div>
        </div>
    </div>
  </main>
</template>

<script setup>
  import { onMounted } from 'vue';
  import { useLuggage } from '../stores/LuggageStore';
  import { QrcodeStream } from 'vue3-qrcode-reader';

  const LuggageStore = useLuggage();

  onMounted(LuggageStore.getLuggages);
</script>

<script>
  export default {
    data() {
      return {
        error: '',
        decodedTag: '',
        show: true,
      }
    },
    components: {
      QrcodeStream
    },
    methods: {
      async onInit( promise ) {
        // show loading indicator

        try {
          const { capabilities } =  await promise

          // successfully initialized
          } catch (error) {
          if (error.name === 'NotAllowedError') {
            error = "user denied camera access permisson";
            alert(error);
          } else if (error.name === 'NotFoundError') {
            error = "no suitable camera device installed";
            alert(error);
          } else if (error.name === 'NotSupportedError') {
            error = "page is not served over HTTPS (or localhost)";
            alert(error);
          } else if (error.name === 'NotReadableError') {
            error = "maybe camera is already in use";
            alert(error);
          } else if (error.name === 'OverconstrainedError') {
            error = "did you requested the front camera although there is none?";
            alert(error);
          } else if (error.name === 'StreamApiNotSupportedError') {
            error = "browser seems to be lacking features";
            alert(error);
          }
        } finally {
          // hide loading indicator
        }
      },
      onDecode(decodedString) {
        this.decodedTag = decodedString;
        //alert(this.decodedTag);
        this.show = false;
      }
    }
  }
</script>