<template>
    <main>
        <v-container>
            <Searchbar />
        </v-container>

        <v-container class="pb-4 mb-4" grid-list-xl>
            <v-layout nowrap>
                <v-flex lg2>
                    <h4 class="secondary--text">Filters</h4>
                    <v-divider></v-divider>
                    <ul>
                        <li class="pt-4"><h5>Brand</h5></li>
                        <li>Acer</li>
                        <li>Asus</li>
                        <li>DELL</li>
                        <li class="pt-4"><h5>RAM Capacity</h5></li>
                        <li>4GB</li>
                        <li>6GB</li>
                    </ul>
                </v-flex>
                <v-flex class="offset-lg1" lg9>
                    <h4 class="secondary--text">Results for "Laptop"</h4>
                    <v-layout wrap>
                        <v-flex v-for="(product, index) in results" :key="index" lg4>
                            <CardProduct :product="product"/>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-container>
    </main>
</template>
<script>
import Header from '../components/Header'
import Searchbar from '../components/Searchbar'
import CardProduct from '../components/CardProduct'

export default {
    name: "Results",
    components: {
        Searchbar,
        CardProduct
    },

    data: () => {
        return {
            results: [],
            filters: {
                showPanel: false,
            }
        }
    },

    mounted() {
        this.loadData();
    },

    methods: {
        loadData() {
            axios.get('http://localhost:8080/results.json')
            .then(response => {
                this.results = response.data
            })
        }
    }
}
</script>