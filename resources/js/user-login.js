window.Vue = require('vue');
Vue.component('user-login', require('./components/pages/login').default);
new Vue({
    el: '#app'
});

