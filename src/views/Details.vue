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
                    <span class="subtitle-1 primary--text">By ASUS</span><br />
                    <v-divider class="my-3" />
                    <p class="description">Proident Lorem reprehenderit id ipsum adipisicing pariatur dolore cupidatat sunt exercitation exercitation. Ad fugiat ut minim aliquip Lorem consequat excepteur velit elit. Nulla ea adipisicing Lorem et incididunt ut officia. Ipsum eu id id ea aute veniam pariatur qui esse irure nostrud. Excepteur consectetur aliquip duis eiusmod nisi sunt voluptate in ea cillum anim. Dolor laboris proident deserunt ullamco Lorem in esse dolore dolore. Aliquip et incididunt minim et duis sint ad.</p>
                    <v-divider class="my-3" />
                    <v-layout>
                        <v-flex lg2>
                            <v-text-field
                                label="Quantity"
                                value="1"
                                outlined
                            ></v-text-field>
                        </v-flex>
                        <v-flex lg4>
                            <v-btn x-large color="primary">Buy</v-btn>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
            <v-divider></v-divider>
        </v-container>
    </main>
</template>

<script>
import Searchbar from '../components/Searchbar'

export default {
    name: 'Details',
    components: {
        Searchbar
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