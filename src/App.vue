<template>
  <v-app>
    <Header/>
    <router-view></router-view>
  </v-app>
</template>

<script>
import Header from './components/Header';

export default {
  name: 'App',
  components: {
    Header
  },
  data: () => ({
    //
  }),
};
</script>
<style lang="sass">
html
  background: #ffffff

main
  padding: 3rem 5rem 0 5rem

a
  color: #ffffff
  text-decoration: none

ul
  list-style: none

.v-input__slot
  &::before
    display: none
  &::after
    display: none
</style>
