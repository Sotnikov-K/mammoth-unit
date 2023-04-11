<template>
    <p>{{ authorName }}</p>
</template>




<script>







export default {

    props: {
        authorName: String,
    },


    data() {
        return {

        }
    },


    created() {
        console.log(this.authorName);
    },
}
</script>