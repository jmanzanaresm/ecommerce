<template>
    <header>
        <nav class="transparent">
            <v-layout justify-space-between fluid>
                <v-flex xs12 md4 lg4>
                    <ul class="d-flex justify-space-between pl-0">
                        <router-link to="/">
                            <li><strong>Home</strong></li>
                        </router-link>
                        <router-link to="search">
                            <li><strong>Electronics</strong></li>
                        </router-link>
                        <router-link to="moda">
                            <li><strong>Hot</strong></li>
                        </router-link>
                    </ul>
                </v-flex>
                <v-flex xs12 md3 lg-4>
                    <ul class="access-nav">
                        <v-flex xs4 md4 lg4>
                            <v-dialog
                                v-model="loginModal"
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
                                        <v-text-field label="Password" type="password" outlined></v-text-field>
                                        <v-btn
                                            primary
                                            color="primary"
                                            @click="loginModal = false"
                                        >
                                            Login
                                        </v-btn>
                                        <v-btn
                                            primary
                                            text
                                            color="primary"
                                            @click="loginModal = false"
                                        >
                                            Cancel
                                        </v-btn>
                                    </v-card-text>
                                </v-card>
                            </v-dialog>
                        </v-flex>
                        <v-flex xs4 md4 lg4>
                            <v-dialog
                                v-model="registerModal"
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
                                        <v-radio-group>
                                            <label>What kind of user you are?</label>
                                            <v-radio label="Buyer" value="1"></v-radio>
                                            <v-radio label="Seller" value="2"></v-radio>
                                        </v-radio-group>
                                        <v-btn
                                            primary
                                            color="primary"
                                            @click="registerModal = false"
                                        >
                                            Create
                                        </v-btn>
                                        <v-btn
                                            primary
                                            text
                                            color="primary"
                                            @click="registerModal = false"
                                        >
                                            Cancel
                                        </v-btn>
                                    </v-card-text>
                                </v-card>
                            </v-dialog>
                        </v-flex>
                        <v-flex xs4 md4 lg4>
                            <li class="access-nav__item">
                                <v-btn class="ma-0" color="white" fab text small>
                                    <v-icon>mdi-cart</v-icon>
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
            loginModal: false,
            registerModal: false
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
        &::before
            display: block
            border-radius: 0 0 50px 50px
            background: #fafafa
            content: ""
            opacity: 0.6
            height: 40px
            width: 700px
            position: absolute
            top: 0
            left: -100px
            z-index: -1

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

