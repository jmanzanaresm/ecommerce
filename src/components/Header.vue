<template>
    <header>
        <nav class="transparent">
            <v-layout justify-end fluid>
                <v-flex xs12 md3 lg-4>
                    <ul class="access-nav">
                        <v-flex xs4 md4 lg4>
                            <li class="access-nav__item"><a href="#" class="secondary--text">Login</a></li>
                        </v-flex>
                        <v-flex xs4 md4 lg4>
                            <li class="access-nav__item"><a href="#" class="secondary--text">Register</a></li>
                        </v-flex>
                        <v-flex xs4 md4 lg4>
                            <li class="access-nav__item"><a href="#" class="secondary--text">Cart</a></li>
                        </v-flex>
                    </ul>
                </v-flex>
            </v-layout>
        </nav>
    </header>
</template>

<script>

</script>

<style lang="sass" scoped>
header
    background: transparent
    height: 3rem
    left: 0
    padding: 0 100px
    width: 100%
    position: absolute
    top: 0
    nav
        background: #fafafa
        height: 100%
        padding-top: 1rem
        width: 100%

.access-nav
    display: flex
    flex-flow: row nowrap
    justify-content: flex-end
    padding-bottom: 2rem
    .access-nav__item
        display: flex
        flex-flow: row nowrap
        justify-content: flex-end
</style>

