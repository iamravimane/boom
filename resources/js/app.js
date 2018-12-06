
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Tabs from 'vue-tabs-component';

Vue.use(Tabs);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//Vue.component('navbar', require('./components/Navbar.vue'));
// Vue.component('articles', require('./components/Articles.vue'));

Vue.component('searchbar', require('./components/SearchBar.vue'));

Vue.component('reportdetailstab', require('./components/ReportDetailsTabs.vue'));

Vue.component('advancedsearch', require('./components/AdvancedSearch.vue'));

//Vue.component


// Vue.component('reportdetailstab', {
//   template: '#reportdetails',
//   props: 'id',
//   data: function() {
//     return {
//         id: id,
//         }
//    },
// })

//Vue.component('tabs', Tabs);

const app = new Vue({
    el: '#app'
});
