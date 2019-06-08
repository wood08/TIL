<template>
    <div id="app">
        <TodoHeader></TodoHeader>
        <TodoInput v-on:addTodo="addTodo"></TodoInput>
        <TodoList v-bind:todoItems="todoItems" v-on:removeTodo="removeTodo"></TodoList>
        <TodoFooter v-on:clearAll="clearAll"></TodoFooter>
        <Modal v-if="showModal" @close="showModal = false">
            <h3 slot="header">경고</h3>
            <span slot="footer" @click="showModal = false">
                {{ modalMsg }}
                <i class="closeModalBtn fas fa-times" aria-hidden="true"></i>
            </span>
        </Modal>
    </div>
</template>

<script>
    import TodoHeader from "./components/TodoHeader";
    import TodoInput from "./components/TodoInput";
    import TodoList from "./components/TodoList";
    import TodoFooter from "./components/TodoFooter";
    import Modal from "./components/common/Modal";

    export default {
        data() {
            return {
                todoItems: [],
                showModal: false,
                modalMsg: '',
                nullInputMsg: '할일을 입력 하세요.',
                dupliKeyMsg: '이미 입력된 할일 입니다.',
            }
        },
        methods: {
            addTodo(input) {
                if(localStorage.getItem(input)) {
                    this.modalMsg = this.dupliKeyMsg;
                    this.showModal = !this.showModal;
                } else if(input=='') {
                    this.modalMsg = this.nullInputMsg;
                    this.showModal = !this.showModal;
                } else {
                    localStorage.setItem(input, input);
                    this.todoItems.push(input);
                }
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
            'Modal': Modal,
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