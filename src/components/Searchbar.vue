<template>
    <v-card
      class="search py-2 px-5 mb-6 mt-4"
      flat="flat"
      elevation="8"
      width="100%"
    >
      <v-layout nowrap align-center>
        <v-flex lg2>
          <v-select
            :items="items"
            class="search__select mt-0 pt-0"
            width="40px"
            placeholder="Departament"
            hide-details
            flat
          ></v-select>
        </v-flex>
        <v-divider
          class="mx-4"
          vertical
        ></v-divider>
        <v-flex lg8>
          <v-text-field
            class="ma-0 pa-0"
            label="What are you looking for?"
            hide-details
            solo
            flat
          ></v-text-field>
        </v-flex>
      </v-layout>
    </v-card>
</template>

<script>

export default {
    name: 'Searchbar',
    data: () => {
      return {
        items: ['Electronic', 'Books', 'Baby', 'Beauty']
      }
    }
}
</script>

<style lang="sass" scoped>
.search
  z-index: 100
</style>

