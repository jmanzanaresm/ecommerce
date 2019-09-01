<template>
    <main>
        <Searchbar />

        <v-container grid-list-xl>
            <v-layout >
                <v-flex lg6>
                    <v-card>
                        <v-img src="https://home.ripley.com.pe/Attachment/WOP_5/2004219013583/2004219013583-2.jpg"></v-img>
                    </v-card>
                    <div class="d-flex justify-space-between">
                        <img class="details-thumbnail" src="https://img-us1.asus.com/A/show/AW000706/2018/0125/AM0000001/201801AM250000001_15168459708835440006443.jpg" alt="">
                        <img class="details-thumbnail" src="https://img-us1.asus.com/A/show/AW000706/2018/0125/AM0000001/201801AM250000001_15168459708835440006443.jpg" alt="">
                        <img class="details-thumbnail" src="https://img-us1.asus.com/A/show/AW000706/2018/0125/AM0000001/201801AM250000001_15168459708835440006443.jpg" alt="">
                        <img class="details-thumbnail" src="https://img-us1.asus.com/A/show/AW000706/2018/0125/AM0000001/201801AM250000001_15168459708835440006443.jpg" alt="">
                    </div>
                </v-flex>
                <v-flex lg6>
                    <h1 class="title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h1>
                    <span class="subtitle-1 primary--text">By ASUS</span>
                    <v-rating class="pa-0 ma-0" v-model="rating" color="yellow darken-2" hide-details></v-rating>
                    <v-divider class="my-3" />
                    <p class="description">Proident Lorem reprehenderit id ipsum adipisicing pariatur dolore cupidatat sunt exercitation exercitation. Ad fugiat ut minim aliquip Lorem consequat excepteur velit elit. Nulla ea adipisicing Lorem et incididunt ut officia. Ipsum eu id id ea aute veniam pariatur qui esse irure nostrud. Excepteur consectetur aliquip duis eiusmod nisi sunt voluptate in ea cillum anim. Dolor laboris proident deserunt ullamco Lorem in esse dolore dolore. Aliquip et incididunt minim et duis sint ad.</p>
                    <v-divider class="my-3" />
                    <v-layout align-center>
                        <v-flex lg4>
                            <v-btn-toggle
                                class="d-flex align-center"
                                rounded
                                >
                                <v-btn @click="decreaseItems">
                                    <v-icon>mdi-minus</v-icon>
                                </v-btn>
                                <v-text-field
                                    label="Quantity"
                                    hide-details
                                    :value="quantityItems"
                                    outlined
                            ></v-text-field>
                                <v-btn @click="increaseItems">
                                    <v-icon>mdi-plus</v-icon>
                                </v-btn>
                                </v-btn-toggle>
                        </v-flex>
                        <v-flex lg4>
                            <v-btn x-large color="primary">Buy</v-btn>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
            <v-layout class="mt-5" wrap>
                <v-flex xs12>
                    <h3>Recommends</h3>
                    <v-divider></v-divider>
                </v-flex>
                <v-flex v-for="(product, index) in recommend_products" :key="index" lg3>
                    <CardProduct :product="product"></CardProduct>
                </v-flex>
            </v-layout>
            <v-layout wrap>
                <v-flex xs12>
                    <h3>Comments</h3>
                    <v-divider></v-divider>
                </v-flex>
                <v-flex lg8>
                    <v-layout wrap>
                        <v-flex xs12>
                            <v-layout>
                                <v-flex lg1>
                                    <v-avatar>
                                        <v-img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/face-wash-2-1561136582.jpg?resize=480:*"></v-img>
                                    </v-avatar>
                                </v-flex>
                                <v-flex lg11>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Ut, quas aut. Iusto itaque voluptates dicta fugiat iurenulla
                                    eum quia omnis doloremque, dolores accusantium id quos in a
                                    voluptatem. Eius.</p>
                                    <v-layout class="mt-0" align-center>
                                        <v-btn class="mt-0" flat icon>
                                            <v-icon>mdi-thumb-up</v-icon>
                                        </v-btn>
                                        <span class="secondary--text">128k</span>
                                    </v-layout>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-container>
    </main>
</template>

<script>
import Searchbar from '../components/Searchbar'
import CardProduct from '../components/CardProduct'

export default {
    name: 'Details',
    components: {
        Searchbar,
        CardProduct
    },
    data: () => {
        return {
            quantityItems: 1,
            rating: 3,
            recommend_products: []
        }
    },

    created() {
        axios.get('http://localhost:8080/last_stock.json')
        .then(response => {
            this.recommend_products = response.data
        })
    },

    methods: {
        increaseItems() {
            this.quantityItems += 1;
        },

        decreaseItems() {
            if (this.quantityItems > 1) {
                this.quantityItems -= 1
            }
        }
    }
}
</script>

<style lang="sass" scoped>
.description
    line-height: 35px

.details-thumbnail
    padding-top: 0.8rem
    width: 128px
</style>