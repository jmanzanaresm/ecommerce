<template>
  <div class="about" @mousemove="mouseMove">
    <h2>Christopher Flores Crack</h2>
    <div class="circle" :style="{
      left: mouseMoveX,
      top: mouseMoveY
    }"></div>
  </div>
</template>


<script>
import { setInterval, clearInterval } from 'timers';
export default {
  name: 'About',
  data: () => {
    return {
      mouseMoveX: '100px',
      mouseMoveY: '0px',
      mouseMovePosition: null
    }
  },
  methods: {

    mouseMove: function(event) {
      // if (this.mouseMovePosition !== null) {
      //   clearInterval(this.mouseMovePosition)
      // }
      // this.mouseMovePosition = setInterval(() => {
      //     this.mouseMoveX = `${event.pageX}px`;
      //     console.log(this.mouseMoveX)
      //   }, 500)
      this.mouseMoveX = `${event.pageX-50}px`;
      this.mouseMoveY = `${event.pageY - 50}px`;
    }

  },

  watch: {
  }
}
</script>

<style lang="sass">
.about
  background: #e3e3e3
  height: 100%
  position: relative
  width: 100%

.circle
  background: red
  width: 100px
  height: 100px
  border-radius: 50%
  position: absolute

</style>