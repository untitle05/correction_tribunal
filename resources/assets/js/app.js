require('./bootstrap');


import Users from './components/Users.vue';
Vue.http.headers.common['X-CSRF-TOKEN'] = Laravel.csrfToken;

const app = new Vue({
    el: '#app',
    components: { Users }
});
