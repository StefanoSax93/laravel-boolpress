import Vue from "vue";
import Frontend from "./frontend/Frontend.vue";

new Vue({
    el: "#app",
    render: h => h(Frontend)
})