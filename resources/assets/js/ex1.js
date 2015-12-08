/**
 * Created by oscar on 9/12/15.
 */

var vm = new Vue({
    el: '#app',
    data:{
        message:'prova !',
        a: 210,
        show: true
    },
    computed:{
        b: function(){
            return this.a*2;
        }
    }

});