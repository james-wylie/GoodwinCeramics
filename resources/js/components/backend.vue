<template>


<router-link to="/addproduct"><a>url to example</a></router-link>

<!-- <div>
<products-list></products-list>
</div> -->

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
