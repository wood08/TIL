var app = new Vue({
    el: "#app",
    data: {
        message: "Hello Vue.js",
        message2: "Hello Vue.js!!!",
        uid: "20",
        flag: false
    },
    methods: {
        clickBtn() {
            console.log("hi");
        },
        clickBtn2: function(){
            alert('hi');
        }
    }

});