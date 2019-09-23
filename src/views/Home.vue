<template>
    <div>
        <section class="home-cover">
            <figure class="home-cover__image-wrapper">
                <v-img class="home-cover__image-wrapper__image" src="https://cdn.mos.cms.futurecdn.net/a4dc920f3688e217fe4168335758e54a.jpg" alt="" contain></v-img>
            </figure>
            <v-container>
                <v-layout justify-center align-end fill-height>
                    <v-flex lg8>
                        <!-- <v-text-field
                            class="searchbar"
                            label="What are you looking for?"
                            height="48pt"
                            prepend-inner-icon
                            solo
                        >
                        </v-text-field> -->
                        <Searchbar></Searchbar>
                    </v-flex>
                </v-layout>
            </v-container>
        </section>

        <v-container grid-list-xl>
            <h4 class="secondary--text">Best seller</h4>
            <v-layout>
                <v-flex v-for="(product, index) in best_seller" :key="index" lg3>
                    <CardProduct :product="product"/>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container grid-list-xl>
            <h4 class="secondary--text">New offers</h4>
            <v-layout>
                <v-flex v-for="(product, index) in new_offers" :key="index" lg3>
                    <CardProduct :product="product"/>
                </v-flex>
            </v-layout>
        </v-container>

        <v-container grid-list-xl>
            <h4 class="secondary--text">Last in Stock</h4>
            <v-layout>
                <v-flex v-for="(product, index) in last_stock" :key="index" lg3>
                    <CardProduct :product="product"/>
                </v-flex>
            </v-layout>
        </v-container>
    </div>
</template>

<script>
import Header from '../components/Header'
import CardProduct from '../components/CardProduct'
import Searchbar from '../components/Searchbar'

export default {
    name: 'Home',
    components: {
        Header,
        CardProduct,
        Searchbar
    },
    data: () => {
        return {
            best_seller: [],
            new_offers: [],
            last_stock: []
        }
    },

    created() {
        axios.get('http://localhost:8080/best_seller.json')
        .then(response => {
            this.best_seller = response.data
        })

        axios.get('http://localhost:8080/new_offers.json')
        .then(response => {
            this.new_offers = response.data
        })

        axios.get('http://localhost:8080/last_stock.json')
        .then(response => {
            this.last_stock = response.data
        })
    }
}
</script>
<style lang="sass" scoped>

.home-cover
    display: flex
    flex-flow: row nowrap
    justify-content: center
    align-content: flex-end
    height: 350px
    position: relative
    width: 100%

.home-cover__image-wrapper
    position: absolute
    top: 0px
    left: 0px
    height: 350px
    overflow: hidden
    width: 100%

.home-cover__image-wrapper__image
    width: 100%
</style>