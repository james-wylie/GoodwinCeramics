<template>
<div></div>

</template>


<script>
export default {


   
               methods: {

        
      // Is it easier to store active cart data in Cache? How to do that?
        fetchCart(activeCart) {
            axios.get(`getcart`)
                // .then(res => res.json)
                .then(res => {
                    // console.log(res)
                    this.cart = res.data.data
                    console.log(this.cart)
                }).catch(err => {
                    console.log(err)
                })
            }
            }
}
</script>