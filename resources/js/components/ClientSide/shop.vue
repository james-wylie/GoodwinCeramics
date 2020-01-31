<template>
  <div class="shop">
    <navBar></navBar>

    <div class="shop">
     <div class="overflow-auto d-inline-block p-6 " style="position: fixed; top:50%; left:50%; transform: translate(-50%, -50%);">
                        <ul id="productList list-group ">
                            
                            
                            <li class="list-group-item" v-for="(product, index ) in products" :key="product.id">
                                <div style="" class="">
                                {{product.name}}  
                                
                                <!-- Below buttons need real V-Bind -->
                                
                                     <button class="px-2 float-right btn btn-info" @click="addProduct(product, index) in products">Add To Cart </button>
                                     </div>
                                </li>

                            <li class="list-group-item" v-for="(product, index ) in products" :key="product.id">
                                <div style="" class="">
                                {{product.name}}  
                                
                                
                                <!-- Below buttons need real V-Bind -->
                                
                                     <button class="px-2 float-right btn btn-info" @click="addProduct(product, index) in products">Two To Cart </button>
                                     </div>
                                   
                                   
                    
                    </li>
                    </ul>
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

        created() {
            this.fetchProducts(1);
        },

            methods: {
        fetchProducts(page) {
            axios.get(`getproducts?page=${page}`)
                // .then(res => res.json)
                .then(res => {
                    // console.log(res)
                    this.products = res.data.data
                }).catch(err => {
                    console.log(err)
                })
            }
            }
    }

            </script>