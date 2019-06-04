Vue.component("todo-footer", {
    template: "<p>This is another golbal child component</p>"
});

let cmp = {
    template: "<p>This is another local child component</p>"
};
let app = new Vue({
    el: "#app"
    ,data: {
        message: "This is a parent component"
    }
    ,components: {
        "todo-list": cmp
    }
});