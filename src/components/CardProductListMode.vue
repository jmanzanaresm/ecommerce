<template>
  <v-flex lg12>
    <v-divider v-if="index > 0" class="mb-6"></v-divider>
    <div class="d-flex flex-nowrap justify-start">
      <v-img
        class="white--text pa-1"
        max-width="240px"
        max-height="240px"
        contain :src="product.thumbnail_image"></v-img>
      <div class="pl-5">
        <div class="d-flex justify-start"><h4 class="product-name">{{product.product_name}}</h4></div>
        <div class="d-flex flex-wrap justify-start value-tags">
          <span class="product-price">L. {{ product.discount_price }}</span>
          <span class="value-tags middle-line">L. {{ product.real_price }}</span>
          <span class="value-tags">-{{(product.discount_price/product.real_price*100).toFixed(0)}}%</span>
          <br>
          <p class="grey--text text--darken-1">{{ product.description.substring(0, 255) }}</p>
        </div>
      </div>
    </div>
  </v-flex>
</template>

<script>

export default {
    name: 'CardProduct',
    props: [
      'product',
      'index'
    ]
}
</script>

<style lang="sass" scoped>
.middle-line
    text-decoration-line: line-through

.product-name
  max-height: 75px
  width: 100%

.value-tags
  padding-bottom: 0.5rem
  width: 100%
</style>

