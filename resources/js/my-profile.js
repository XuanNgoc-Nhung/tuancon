window.Vue = require('vue');
Vue.component('my-profile', require('./components/pages/myProfile').default);
new Vue({
    el: '#app'
});

