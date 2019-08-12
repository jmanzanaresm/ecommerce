<template>
    <div>
        <section class="home-cover">
            <figure class="home-cover__image-wrapper">
                <img class="home-cover__image-wrapper__image" src="https://www.decoratingcentreonline.co.uk/media/wysiwyg/BEST_SELLERS_BANNER_MAR_2019.jpg" alt="">
            </figure>
        </section>

        <v-container grid-list-xl>
            <h4 class="secondary--text">Best seller</h4>
            <v-layout>
                <v-flex lg3>
                    <CardProduct/>
                </v-flex>
                <v-flex lg3>
                    <CardProduct/>
                </v-flex>
                <v-flex lg3>
                    <CardProduct/>
                </v-flex>
                <v-flex lg3>
                    <CardProduct/>
                </v-flex>
            </v-layout>
        </v-container>
    </div>
</template>

<script>
import Header from '../components/Header'
import CardProduct from '../components/CardProduct'

export default {
    name: 'Home',
    components: {
        Header,
        CardProduct
    },
    data: () => {

    }
}
</script>
<style lang="sass" scoped>
.home-cover
    width: 100%

.home-cover__image-wrapper
    height: 350px
    overflow: hidden

.home-cover__image-wrapper__image
    width: 100%

</style>