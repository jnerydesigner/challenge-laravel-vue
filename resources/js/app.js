import VueRouter from 'vue-router';
require('./bootstrap');


window.Vue = require('vue');


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.use(VueRouter);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('submit-value', require('./components/SubmitValue.vue').default);
Vue.component('card-account', require('./components/CardMovimentationAccount.vue').default);
Vue.component('list-item-movimentation', require('./components/ListItemMovimentation.vue').default);


const app = new Vue({
    el: '#app',
});
