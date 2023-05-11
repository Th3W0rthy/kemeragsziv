<template>
  <main class="container">
    <div class="col">
      <div class="row qrcode"  v-show="show">
        <qrcode-stream @init="onInit" @decode="onDecode" ></qrcode-stream>
      </div>
      <!--
        !show
      -->
      <div class="row" v-show="show">
        <h1>Luggage</h1>
        <label for="luggageTag">Luggage tag</label>
        <input type="text" name="luggageTag" id="luggageTag" :value="decodedTag" disabled>
        <label for="">Luggage owner</label>
        <input type="text" name="" id="">
        <label for="">Luggage owner's phone</label>
        <input type="text" name="" id="">
        <label for="">Luggage owner's email</label>
        <input type="text" name="" id="">

        <table class="table flights_table table-responsive table-striped table-dark">
          <thead>
              <tr>
                  <th>Luggage location</th>
                  <th>Created_at</th>
                  <th>Updated_at</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td> Budapest</td>
                <td>
                  <input type="datetime-local" name="" id="">
                </td>
                <td>
                  <input type="datetime-local" name="" id="">
                </td>
              </tr>
          </tbody>
      </table>
      </div>
    </div>
  </main>
</template>

<script>
  import { QrcodeStream } from 'vue3-qrcode-reader';
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
        alert(this.decodedTag);
        this.show = false;
      }
    }
  }
</script>