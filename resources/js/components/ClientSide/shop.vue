<template>
  <div class="shop">
    <navBar></navBar>

    <div class="shop">
     <div class="noscroll overflow-auto d-inline-block p-6" style="font-family: 'Asul'; width: 80vw; height: 75vh; position: fixed; top:50%; left:50%; transform: translate(-50%, -50%);">
                        
                            
                            <div style="width: 80vw;" class="mb-4 row justify-content-center" v-bind:key="chunk.id" v-for="chunk in productChunks"> 
                                
                            <div style="height: 50vh;" class="col-3 m-3 p-3" v-for="(product, index ) in products" :key="product.id">
                                <router-link :to="{ name: 'viewproduct', params: {id: product.id}}">
                                <img style="width: 100%; height: 100%;" class="" :src="product.imageOne" alt="">
                                <p class="text-light">{{product.name}}  |   {{product.color}}<span class="text-light float-right text-right">${{product.price}}</span></p>
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
            },
            productRoute(index){
                console.log(index)
                return `viewproduct/${index}`
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
    @import url('https://fonts.googleapis.com/css?family=Asul:400,700&display=swap');

    .noscroll::-webkit-scrollbar {
   display: none;
 }
</style> 
   