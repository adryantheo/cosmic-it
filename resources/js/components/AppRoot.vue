<template>
    <div id='app'>
        <v-app>
            <router-view></router-view>
        </v-app>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Componenet Mounted');
    },

}
</script>

<style>

</style>