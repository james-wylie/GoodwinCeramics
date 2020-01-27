<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="">Product List</div>
                        <ul id="productList list-group">
                            <li class="list-group-item">
                                 <button class="btn btn-success ml-5">Add New Product</button>
                            </li>
                            
                            <li class="list-group-item" v-for="product in products" :key="product.id">
                            <a :href="product.id">
                                {{product.name}}</a> 
                                
                                <!-- Below buttons need real V-Bind -->
                                    <a :href="product.id"><button  class="btn btn-info ml-5">Edit</button></a> 
                                    <a :href="product.id"><button class="btn btn-danger">Delete</button></a>
                                    <img :src="product.image-one" alt=""> 
                    
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
            this.fetchArticles();
        },

            methods: {
        fetchArticles() {
            axios.get('getproducts')
                // .then(res => res.json)
                .then(res => {
                    this.products = res.data.data
                }).catch(err => {
                    console.log(err)
                })
        }
    }

    }


</script>