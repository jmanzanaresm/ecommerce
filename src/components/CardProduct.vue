<template>
    <v-card
      class="mb-5"
      flat="flat"
      width="95%"
      hover
      outlined
    >
      <v-img
        class="white--text"
        height="200px"
        contain
        :src="product.thumbnail_image"
      >
      </v-img>
    <v-card-title class="align-end fill-height subtitle-1">{{ product.product_name }}</v-card-title>
    <v-layout justify-space-between align-center>
        <v-flex lg6>
            <v-card-text class="display-1">{{(product.discount_price/product.real_price*100).toFixed(0)}}% <span class="subtitle-1">off</span></v-card-text>
        </v-flex>
        <v-flex lg6>
            <v-card-text class="title pb-0 d-flex justify-end">L. {{ product.discount_price }}</v-card-text>
            <v-card-text class="d-flex justify-end middle-line subtitle-1 pt-0 mt-0">L. {{ product.real_price }}</v-card-text>
        </v-flex>
    </v-layout>
    </v-card>
</template>

<script>

export default {
    name: 'CardProduct',
    props: [
      'product'
    ]
}
</script>

<style lang="sass" scoped>
.middle-line
    text-decoration-line: line-through

.subtitle-1
  max-height: 75px
  overflow: hidden
</style>

