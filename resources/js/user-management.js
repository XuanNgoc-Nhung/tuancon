window.Vue = require('vue');
Vue.component('user-management', require('./components/pages/userManagement').default);
new Vue({
    el: '#app'
});

