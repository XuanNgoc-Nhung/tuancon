window.Vue = require('vue');
Vue.component('register', require('./components/pages/register').default);
new Vue({
    el: '#app'
});

