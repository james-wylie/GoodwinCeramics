<template>
  <div class="shop">
    <navBar></navBar>

    <div class="shop">
     <div class="noscroll overflow-auto d-inline-block p-6 " style="width: 80vw; height: 75vh; position: fixed; top:50%; left:50%; transform: translate(-50%, -50%);">
                        
                            
                            <div style="width: 80vw;" class="mb-4 row justify-content-center" v-bind:key="chunk.id" v-for="chunk in productChunks"> 
                                
                            <div style="height: 35vh; width: 30%;" class="col-3 m-3 p-3" v-for="(product, index ) in products" :key="product.id">
                                <router-link to="/georgie">
                                <img style="width: 83%; height: 100%;" class="" :src="product.imageOne" alt="">
                                <p class="text-lead">{{product.name}}| {{product.color}}<span class="text-light text-right">${{product.price}}</span></p>
                           
                                   </router-link>
                                </div>
                            </div>
                    </div>


    </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                products: [],
                product: { 
                    title: '',
                    description: '',
                    imageOne: '',
                    imageTwo: '',
                    price: '',
                    id: '',
                    height: '',
                    width: '',
                    color: '',
                    sold: '',
                    amount: ''
                }
            }
        },

        computed: {
            productChunks(){
                return _.chunk((this.products), 4)
            }
        },
        created() {
            this.fetchProducts()
        },

            methods: {


        fetchProducts(page) {
            axios.get(`getproducts`)
                // .then(res => res.json)
                .then(res => {
                    // console.log(res)
                    this.products = res.data.data
                    console.log(this.products)
                }).catch(err => {
                    console.log(err)
                })
            }
            }
    }

            </script>

    <style >
    .noscroll::-webkit-scrollbar {
   display: none;
 }
    </style>