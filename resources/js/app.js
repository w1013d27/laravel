/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import ComponentA from "./components/ComponentA";
import NotificationA from "./components/NotificationA";
//Vue.component('ComponentA',require('./components/ComponentA.vue').default);
let a =100;
//let ComponentA = require('./components/ComponentA').default;
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Echo from "laravel-echo";
window.io = require('socket.io-client');
window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.host,
    path: '/ws/socket.io',
});
const app = new Vue({
    el: '#app',

    data:()=>({
        items:['one','two','three','four','five'],
        arr:[],
    }),
    components:{
        ComponentA,
        NotificationA,
    }
    ,
    mounted(){
        //window.Echo.channel('my-channel')
         window.Echo.private('my-channel').listen('MyEvent',function (e) {
             console.log(e);
         })
        /*
         window.Echo.join('my-channel')
             .here(function ($user) {

                 console.log($user);
             })
             .joining(function ($user) {
                 console.log($user);

             })
             .leaving(function ($user) {

                 console.log($user);
             })
            .listen('MyEvent',(e)=>{
              //  console.log('abc');
                console.log(e);
                this.arr.push(e.message);
            });

         */

    }
});
