Vue.component('alert',{

   template: '#alert-template',

    props: ['type'],

    data: function () {
        return{
            show: true
        };
    },

    computed: {
        alertClasses: function(){
            var type = this.type;

            return{
                'Alert': true,
                'Alert--Success': type == 'success',
                'Alert--Error': type == 'error'
            }

        }
    }

});

new Vue({
    el: 'body'
})
/**
 * Created by oscar on 9/12/15.
 */

var vm = new Vue({
    el: '#app',
    data:{
        message:'prova !',
        a: 1
    },

});
//# sourceMappingURL=all.js.map
