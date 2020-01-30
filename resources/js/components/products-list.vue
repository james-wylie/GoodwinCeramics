<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="">Product List</div>
                        <ul id="productList list-group">
                            <li class="list-group-item">
                                 <router-link to="/addproduct"><button class="btn btn-success ml-5">Add New Product</button></router-link>
                            </li>
                            
                            <li class="list-group-item" v-for="(product, index ) in products" :key="product.id">
                            <router-link :to="{name: 'editProduct', params: { id: product.id }}">
                                {{product.name}}
                                
                                <!-- Below buttons need real V-Bind -->
                                    <button  class="btn btn-info ml-5">Edit</button></router-link>  
                                    <button class="btn btn-danger" @click="deleteProduct(product, index) in products">Delete</button>
                                   
                    
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