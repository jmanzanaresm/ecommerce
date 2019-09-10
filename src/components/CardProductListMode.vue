<template>
  <v-flex lg12>
    <div class="d-flex ">
      <v-img
        class="white--text pa-1"
        max-height="240px"
        contain :src="product.thumbnail_image"></v-img>
      <div class="d-flex justify-start">
        <h4>{{product.name}}</h4>
        <span>-{{(product.discount_price/product.real_price*100).toFixed(0)}}%</span>
      </div>
    </div>
    <v-divider class="mt-6"></v-divider>
  </v-flex>
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

