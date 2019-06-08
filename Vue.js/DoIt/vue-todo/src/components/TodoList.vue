<template>
    <section>
        <ul>
            <li v-for="(todoItem, index) in todoItems">{{ todoItem }}</li>
        </ul>
    </section>
</template>

<script>
    export default {
        props: ['todoItems'],
    }
</script>

<style>

</style>