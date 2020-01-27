<template>
<div>
<router-link to="/addproduct">

<a>add new product</a></router-link>

<router-link to="/products-list">

<a>products list</a></router-link>

</div>
</template>

<script>
    export default {

        data() {
          return {
            message: 'This is the backend home component.'
          }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
