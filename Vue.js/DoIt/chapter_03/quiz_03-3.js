Vue.component("child-component", {
    props: ['propsdata']
    ,template: "<p>{{ propsdata }}</p>"
});

Vue.component("sibling-component", {
    props: ['propsdata']
    ,template: "<p>{{ propsdata }}</p>"
});

let cmp = {
    template: "<p>This is another local child component</p>"
};
let app = new Vue({
    el: "#app"
    ,data: {
        message: "Hello Vue! passed from Parent Component"
        ,anotherMessage: "anotherMessage!!"
    }
});