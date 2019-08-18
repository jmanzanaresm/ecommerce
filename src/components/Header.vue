<template>
    <header>
        <nav class="transparent">
            <v-layout justify-end fluid>
                <v-flex xs12 md3 lg-4>
                    <ul class="access-nav">
                        <v-flex xs4 md4 lg4>
                            <v-dialog
                                v-model="dialog"
                                width="500"
                                >
                                <template v-slot:activator="{ on }">
                                    <v-btn
                                    dark
                                    v-on="on"
                                    text
                                    elevation="0"
                                    >
                                    Login
                                    </v-btn>
                                </template>

                                <v-card>
                                    <v-card-title
                                        class="headline mb-4"
                                        primary-title
                                        >
                                        Login
                                    </v-card-title>

                                    <v-card-text>
                                        <v-text-field label="Email" placeholder="john@example.com" outlined></v-text-field>
                                        <v-text-field label="Password" outlined></v-text-field>
                                        <v-btn
                                            primary
                                            color="primary"
                                            @click="dialog = false"
                                        >
                                            Login
                                        </v-btn>
                                        <v-btn
                                            primary
                                            text
                                            color="primary"
                                            @click="dialog = false"
                                        >
                                            Cancel
                                        </v-btn>
                                    </v-card-text>
                                </v-card>
                            </v-dialog>
                        </v-flex>
                        <v-flex xs4 md4 lg4>
                            <v-dialog
                                v-model="dialog"
                                width="500"
                                >
                                <template v-slot:activator="{ on }">
                                    <v-btn
                                    dark
                                    v-on="on"
                                    text
                                    elevation="0"
                                    >
                                    Register
                                    </v-btn>
                                </template>

                                <v-card>
                                    <v-card-title
                                        class="headline mb-4"
                                        primary-title
                                        >
                                        Create account
                                    </v-card-title>

                                    <v-card-text>
                                        <v-text-field placeholder="Name" outlined></v-text-field>
                                        <v-text-field placeholder="Email" outlined></v-text-field>
                                        <v-text-field placeholder="Password" type="password" outlined></v-text-field>
                                        <v-btn
                                            primary
                                            color="primary"
                                            @click="dialog = false"
                                        >
                                            Create
                                        </v-btn>
                                        <v-btn
                                            primary
                                            text
                                            color="primary"
                                            @click="dialog = false"
                                        >
                                            Cancel
                                        </v-btn>
                                    </v-card-text>
                                </v-card>
                            </v-dialog>
                        </v-flex>
                        <v-flex xs4 md4 lg4>
                            <li class="access-nav__item">
                                <v-btn class="pt-0" fab text small>
                                    <v-icon class="">mdi-cart</v-icon>
                                </v-btn>
                            </li>
                        </v-flex>
                    </ul>
                </v-flex>
            </v-layout>
        </nav>
    </header>
</template>

<script>
export default {
    name: 'Header',
    data: () => {
        return {
            dialog: false
        }
    }
}
</script>

<style lang="sass" scoped>
header
    height: 3rem
    left: 0
    padding: 0 100px
    width: 100%
    position: absolute
    top: 0
    z-index: 100
    nav
        background: #fafafa
        height: 100%
        padding-top: 0.5rem
        width: 100%

.access-nav
    display: flex
    flex-flow: row nowrap
    justify-content: flex-end
    padding-bottom: 2rem
    position: relative
    .access-nav__item
        display: flex
        flex-flow: row nowrap
        justify-content: flex-end
    &::before
        display: block
        content: ""
        background: #1976D2
        border-radius: 50%
        top: -300px
        left: -30px
        position: absolute
        height: 400px
        width: 400px
        z-index: -1
</style>

