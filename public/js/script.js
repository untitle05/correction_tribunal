/**
 * Created by untitled on 9/7/17.
 */
var vue = new Vue ({
    el: '#app',

    data:{
        message: 'hello world',
        todos: [
                 'Laravel',
                 'Javascrip',
                 'Vue Js',
                 2,
                 false,
                 {},
                 function () {
                     
                 }
            ]
    },

    methods: {
        clickMe: function () {
            alert('you just click Me');
        }
    }
})