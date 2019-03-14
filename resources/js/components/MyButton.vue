<template>
    <div>
        <button :type="type" class="my-button" v-text="test.name"></button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')

            axios.post('api/vue', {})
                .then(response => {
                    this.test = response.data;
                });
        },

        data: function () {
            return {
                test: null,
            }
        },

        props: [
            'text',
            'type'
        ]
    }
</script>

<style>
    .my-button {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        font-weight: bold;
    }
</style>
