<template>
    <header>
        <nav>
            <v-layout justify-end>
                <ul>
                    <v-flex xs4 lg4>
                        <li><a href="#">Login</a></li>
                    </v-flex>
                    <v-flex xs4 lg4>
                        <li><a href="#">Register</a></li>
                    </v-flex>
                    <v-flex xs4 lg4>
                        <li><a href="#">Cart</a></li>
                    </v-flex>
                </ul>
            </v-layout>
        </nav>
    </header>
</template>

<script>

</script>

<style lang="sass" scoped>
header
    height: 4rem
    padding: 0 100px
    width: 100%
    nav
        background: #fafafa
        height: 100%
        width: 100%
        ul
            display: flex
            flex-flow: row nowrap
            justify-content: flex-end
            list-style: none
</style>

