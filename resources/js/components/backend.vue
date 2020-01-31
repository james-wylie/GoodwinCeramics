<template>
<div>
<router-link to="/addproduct">

<button class="btn btn-success">Add New Product</button></router-link>


<router-link to="/products-list">
  <button class="btn btn-info">Products List</button>
</router-link>

<router-link to="/products-list">
  <button class="btn btn-dark">See My Orders</button>
</router-link>

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
