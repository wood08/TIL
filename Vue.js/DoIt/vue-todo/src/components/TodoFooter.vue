<template>
    <div>
        <button v-on:click="clearAll">Clear All</button>
    </div>
</template>

<script>
    export default {
        methods: {
            clearAll() {
                this.$emit('clearAll');
            }
        }
    }
</script>

<style>

</style>