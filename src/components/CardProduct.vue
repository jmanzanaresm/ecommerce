<template>
    <v-card
      class="mx-auto"
      flat="flat"
      elevation="8"
      width="100%"
    >
      <v-img
        class="white--text"
        height="200px"
        src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
      >
      </v-img>
    <v-card-title class="align-end fill-height subtitle-1">Lorem, ipsum dolor sit amet</v-card-title>
    <v-layout justify-space-between align-center>
        <v-flex lg6>
            <v-card-text class="display-1">35% <span class="subtitle-1">off</span></v-card-text>
        </v-flex>
        <v-flex lg6>
            <v-card-text class="title pb-0">L. 1,250.00</v-card-text>
            <v-card-text class="middle-line subtitle-1 pt-0 mt-0">L. 2,750.00</v-card-text>
        </v-flex>
    </v-layout>
    </v-card>
</template>

<script>

export default {
    name: 'CardProduct'
}
</script>

<style lang="sass" scoped>
.middle-line
    text-decoration-line: line-through
</style>

