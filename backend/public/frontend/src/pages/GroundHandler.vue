<template>
  <main class="container">
   gh
   <qrcode-stream @init="onInit"  ></qrcode-stream>
  </main>
</template>

<script>
  import { QrcodeStream } from 'vue3-qrcode-reader';
  export default {
    data() {
      return {
        error: '',
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
            $this.error = "user denied camera access permisson";
            alert($this.error);
          } else if (error.name === 'NotFoundError') {
            $this.error = "no suitable camera device installed";
            alert($this.error);
          } else if (error.name === 'NotSupportedError') {
            $this.error = "page is not served over HTTPS (or localhost)";
            alert($this.error);
          } else if (error.name === 'NotReadableError') {
            $this.error = "maybe camera is already in use";
            alert($this.error);
          } else if (error.name === 'OverconstrainedError') {
            $this.error = "did you requested the front camera although there is none?";
            alert($this.error);
          } else if (error.name === 'StreamApiNotSupportedError') {
            $this.error = "browser seems to be lacking features";
            alert($this.error);
          }
        } finally {
          // hide loading indicator
        }
      }
    }
  }
</script>