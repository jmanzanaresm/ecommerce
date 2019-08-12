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
  background: #fafafa

main
  padding: 0 100px

a
  text-decoration: none

ul
  list-style: none
</style>
