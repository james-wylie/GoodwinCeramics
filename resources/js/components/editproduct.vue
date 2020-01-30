<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        Products
                        <form method="post" @submit.prevent="putEditedProduct">
                        <input type="hidden" name="_token" :value="csrf">
                        <br><p>Date Created: {{product.created_at}}</p> 
                        <br><p>Date Update: {{product.updated_at}}</p> 
                            
                        <br>Title: 
                        <input type="text" v-model="newProductData.name"
                         :placeholder="product.name">
                        <br>Description: 
                        <input type="text-area" 
                        v-model="newProductData.description" :placeholder="product.description">
                        <br>Image One: 
                        <input type="text-area" 
                        v-model="newProductData.imageOne"
                        :placeholder="product.imageOne" >
                        <br>Image Two:
                        <input type="text-area" v-model="newProductData.imageTwo" :placeholder="product.imageOne">
                        <br>Price:
                        <input type="number" v-model="newProductData.price" :placeholder="product.price">
                        <br>Height
                        <input type="text-area" 
                        v-model="newProductData.height"
                        :placeholder="product.height">
                        <br>Width
                        <input type="text-area" 
                        v-model="newProductData.width"
                        :placeholder="product.width">
                        <br>Color
                        <input type="textarea" 
                        v-model="newProductData.color"
                        :placeholder="product.color">
                        <br>Sold
                        <input type="text-area" 
                        v-model="newProductData.sold"
                        :placeholder="product.sold">
                        <input type="submit">
                        </form>


                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Product</div>

                    <div class="card-body">
                        <br><p>Date Created: {{product.created_at}}</p> 
                        <br><p>Date Update: {{product.updated_at}}</p> 
                            
                        
                        <br>Image One: 
                        <img :src="product.imageOne" alt="">
                        <br>Image Two:
                        <img :src="product.imageTwo" alt="">
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Edit Product Component mounted.')
        },
          data() {
            return {
                product: [],
                newProductData: {},
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },

        created() {
            
            this.fetchProduct();
        },

            methods: {
        fetchProduct() {
            axios.get(`${this.$route.params.id}/show`)  
                .then(res => {
                    this.product = res.data
                })
                .then(res => "Yes")
                .catch(err => {
                    console.log(err)
                })
        },
        putEditedProduct() {
                // console.log()
               axios.patch(`${this.$route.params.id}/` , 
            {
                    name: this.newProductData.name,
                    description: this.newProductData.description,
                    imageOne: this.newProductData.imageOne,
                    imageTwo: this.newProductData.imageTwo,
                    price: this.newProductData.price,
                    height: this.newProductData.height,
                    width: this.newProductData.width,
                    color: this.newProductData.color,
                    sold: this.newProductData.sold,
                    id: this.product.id
            }
            )
                .then(res => {
                    if(res.status === 200) {
                        this.$router.push({ path: '/products-list' })
                }})
                // .then(res => {
                //     if(res.status === 200) this.fetchProducts()})
                .catch(err => {
                    console.log(err.response)
                })
        }
    }
    }
</script>
