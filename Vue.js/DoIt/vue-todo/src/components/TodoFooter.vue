<template>
    <div>
        <button v-on:click="clearAll">Clear All</button>
    </div>
</template>

<script>
    export default {
        methods: {
            clearAll() {
                alert('clearAll');
            }
        }
    }
</script>

<style>

</style>