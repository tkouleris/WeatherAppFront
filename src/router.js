import Vue from 'vue'
import VueRouter from "vue-router";
import LoginPageComponent from "@/components/LoginPageComponent";
import DashboardComponent from "@/components/DashboardComponent";
import SettingsComponent from "@/components/SettingsComponent";

Vue.use(VueRouter);

const routes =[
    {
        name:'login',
        path:'/login',
        component: LoginPageComponent,
        beforeEnter:(to, from, next) =>{
            if(localStorage.token != null){
                next('/dashboard');
            }else{
                next();
            }
        }
    },
    {
        path: '/dashboard',
        component: DashboardComponent,
        beforeEnter:(to, from, next) =>{
            if(localStorage.token == null){
                next('/login');
            }else{
                next();
            }
        }
    },
    {
        path: '/settings',
        component: SettingsComponent,
        beforeEnter:(to, from, next) =>{
            if(localStorage.token == null){
                next('/login');
            }else{
                next();
            }
        }
    },
];

export default new VueRouter({
    mode:'history',
    // base: process.env.VUE_BASE_PATH,
    routes: routes
});