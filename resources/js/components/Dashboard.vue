<template>
    <div>
    <!-- dashboard -->
    <v-navigation-drawer fixed v-model="drawer" app >
    <v-list>
    <v-list-tile>
    <v-list-tile-action>
    <v-icon>account_circle</v-icon>
    </v-list-tile-action>
    <v-list-tile-title>{{name}}</v-list-tile-title>
    </v-list-tile>
    <v-list-tile @click="logout">
    <v-list-tile-action>
    <v-icon>logout</v-icon>
    </v-list-tile-action>
    <v-list-tile-title>Logout</v-list-tile-title>
    </v-list-tile>
    </v-list>
    </v-navigation-drawer>
    <v-toolbar color="indigo" dark app >
    <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
    <v-toolbar-title>GameCoding</v-toolbar-title>
    <v-toolbar-title>{{score}}</v-toolbar-title>
    <v-toolbar-items class="hidden-sm-and-down">
    </v-toolbar-items>
    </v-toolbar>
    <v-content>
    <v-container fluid fill-height>
    <router-view></router-view>
    </v-container>
    </v-content>
    </div>
</template>