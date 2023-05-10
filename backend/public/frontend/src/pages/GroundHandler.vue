<template>
  <main class="container">
   gh
   <p>{{ decodedTag }}</p>
   <qrcode-stream @init="onInit" @decode="onDecode" ></qrcode-stream>
  </main>
</template>

<script>
  import { QrcodeStream } from 'vue3-qrcode-reader';
  export default {
    data() {
      return {
        error: '',
        decodedTag: '',
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
      }
    },
    onDecode(decodedString) {
      this.decodedTag = decodedString;
    }
  }
</script>