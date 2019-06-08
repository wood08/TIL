<template>
    <div id="app">
        <TodoHeader></TodoHeader>
        <TodoInput v-on:addTodo="addTodo"></TodoInput>
        <TodoList v-bind:todoItems="todoItems" v-on:removeTodo="removeTodo"></TodoList>
        <TodoFooter v-on:clearAll="clearAll"></TodoFooter>
    </div>
</template>

<script>
    import TodoHeader from "./components/TodoHeader";
    import TodoInput from "./components/TodoInput";
    import TodoList from "./components/TodoList";
    import TodoFooter from "./components/TodoFooter";

    export default {
        data() {
            return {
                todoItems: []
            }
        },
        methods: {
            addTodo(input) {
                localStorage.setItem(input, input);
                this.todoItems.push(input);
            },
            removeTodo(todoItem, index) {
                localStorage.removeItem(todoItem);
                this.todoItems.splice(index, 1);
            },
            clearAll() {
                localStorage.clear();
                this.todoItems = [];
            }
        },
        created() {
            for (let i=0; i<localStorage.length; i++) {
                if(localStorage.key(i) !== 'loglevel:webpack-dev-server'){
                    this.todoItems.push(localStorage.key(i));
                }
            }
        },
        components: {
            'TodoHeader': TodoHeader,
            'TodoInput': TodoInput,
            'TodoList': TodoList,
            'TodoFooter': TodoFooter,
        }
    }
</script>

<style>
    body {
        text-align: center;
        background-color: #F6F6F8;
    }
    input {
        border-style: groove;
        width: 200px;
    }
    button {
        border-style: groove;
    }
    .shadow {
        box-shadow: 5px 10px 10px rgba(0,0,0,0.03);
    }
</style>