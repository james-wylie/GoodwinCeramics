<template>
<div>
    CART:  ({{cart.length}})
    <div style="" class="col-3 m-3 p-3" v-for="(cartItem, index) in cart" :key="cartItem.id">
      <router-link :to="{ name: 'viewproduct', params: {id: cartItem.product_id}}">
      <p class="text-light">{{cartItem.name}}  |  <span class="text-light float-right text-right">${{cartItem.price}}</span>{{cart.length}}</p>
                                </router-link>
                                </div>
                            </div>




</template>


<script>
export default {
data() {
            return {
                cart: [],
                cartItem: { 
                    title: '',
                    price: '',
                    id: '',
                    product_id: ''
                }
            }
        },

         computed: {
            productRoute(index){
                return `viewproduct/${index}`
            }

        },

         created() {
            this.fetchCart()
        },


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