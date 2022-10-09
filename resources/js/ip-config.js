window.Vue = require('vue');
Vue.component('ip-config', require('./components/pages/ipConfig').default);
new Vue({
    el: '#app'
});

