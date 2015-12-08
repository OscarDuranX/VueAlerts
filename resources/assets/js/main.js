Vue.component('alert',{

   template: '#alert-template',

    props: ['type'],

    data: function () {
        return{
            show: true
        };
    }
});

new Vue({
    el: 'body'
})