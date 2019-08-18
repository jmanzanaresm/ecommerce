<template>
    <main>
        <v-container>
            <Searchbar />
            <v-btn class="mt-3" outlined>Filters</v-btn>
        </v-container>

        <v-container class="pb-4 mb-4" grid-list-xl>
            <h4 class="mt-6 secondary--text">Results for "Laptop"</h4>
            <v-layout wrap>
                <v-flex v-for="(product, index) in results" :key="index" lg4>
                    <CardProduct :product="product"/>
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
            results: []
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