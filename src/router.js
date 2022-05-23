import Vue from 'vue'
import VueRouter from "vue-router";
import LoginPageComponent from "@/components/LoginPageComponent";

Vue.use(VueRouter);

const routes =[
    {
        name:'login',
        path:'/login',
        component: LoginPageComponent,
        props: true
    },
];

export default new VueRouter({
    mode:'history',
    // base: process.env.VUE_BASE_PATH,
    routes: routes
});