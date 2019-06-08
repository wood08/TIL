<template>
    <section>
        <ul>
            <li v-for="(todoItem, index) in todoItems">
                {{ todoItem }}
                <span class="removeContainer" v-on:click="removeTodo(todoItem, index)">
                    <i class="addBtn fas fa-plus" aria-hidden="true"></i>
                </span>
            </li>
        </ul>
    </section>
</template>

<script>
    export default {
        props: ['todoItems'],
        methods: {
            removeTodo(todoItem, index) {
                this.$emit('removeTodo', todoItem, index);
            }
        }
    }
</script>

<style>

</style>