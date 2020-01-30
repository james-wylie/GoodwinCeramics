<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="" >
                    <div class="overflow-auto d-inline-block p-6" style="height: 50vh; width:30vw;">
                        <ul id="productList list-group ">
                            <li class="list-group-item">
                                <div class="row justify-content-center">
                                    <div class="col-5">
                                 <router-link to="/addproduct"><button class="btn btn-success">Add New Product</button></router-link>
                                 </div>
                              
                                 <div class="col-5 ">
                                 <router-link to="/addproduct"><button class="btn btn-dark">See Orders</button></router-link>
                                 </div>
                                 </div>
                            </li>
                            
                            <li class="list-group-item" v-for="(product, index ) in products" :key="product.id">
                            
                                {{product.name}}  
                                
                                <!-- Below buttons need real V-Bind -->
                                <router-link :to="{name: 'editProduct', params: { id: product.id }}">
                                     <button class="px-2 float-right btn btn-danger" @click="deleteProduct(product, index) in products">Delete</button>
                                    <button  class="btn btn-info float-right">Edit</button></router-link>  
                                   
                                   
                    
                    </li>
                    </ul>
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

        created() {
            this.fetchProducts();
        },

            methods: {
        fetchProducts() {
            axios.get('getproducts')
                // .then(res => res.json)
                .then(res => {
                    // console.log(res)
                    this.products = res.data.data
                }).catch(err => {
                    console.log(err)
                })
            },

        deleteProduct(product, id) {
            if(confirm(`Do you really want to delete ${product.name}?`)){
            axios.delete('remove/' + product.id)
                .then(res => {
                    if(res.status === 200) this.fetchProducts()})
            }}
                
        }    
    }

    


</script>