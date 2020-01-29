<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <router-link to="/backend"><a>Back to the Backend Home</a></router-link>
                    <div class="card-body">
                        Products
                        <form method="post" @submit.prevent="postProduct">
                            <input type="hidden" name="_token" :value="csrf">
                        <br>Name: 
                        <input type="text" name="name" v-model="productData.name" placeholder="Name" required>
                        <br>Description: 
                        <input type="text-area" name="description" v-model="productData.description" placeholder="Description" required>
                        <br>Image One: 
                        <input type="text" name="imageOne" v-model="productData.imageOne" value="http://googel.com" required>
                        <br>Image Two:
                        <input type="text" name="imageTwo" v-model="productData.imageTwo" value="http://googel.com">
                        <br>Price:
                        <input type="number" name="price" v-model="productData.price" placeholder="price" required>
                        <br>Color:
                        <input type="text-area" name="color" v-model="productData.color" placeholder="Color">
                        <br>Height
                        <input type="number" name="height" v-model="productData.height" placeholder="Height (in cm)">
                        <br>Width
                        <input type="number" name="width" v-model="productData.width" placeholder="Width (in cm)">
                        <br>Sold
                        <input type="number" name="sold" v-model="productData.sold"
                        placeholder="Sold (check yes if unavailable)">
                        <br>
                        <!-- <input type="text-area" v-model="body.amount" 
                        placeholder="Cost in NZD"> -->
                        <button type="submit" name="button">Submit</button>

                        </form>
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
         created() {
            
        },
        data() {
            return {
                productData: {
                    name: '',
                    description: '',
                    imageOne: '',
                    imageTwo: '',
                    price: '',
                    height: '',
                    width: '',
                    color: '',
                    sold: ''
                    },
                    csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            },
        


            methods: {
            postProduct: function() {
          
            axios.post('create' , 
            // this.productData
            {
                    name: this.productData.name,
                    description: this.productData.description,
                    imageOne: this.productData.imageOne,
                    imageTwo: this.productData.imageTwo,
                    price: this.productData.price,
                    height: this.productData.height,
                    width: this.productData.width,
                    color: this.productData.color,
                    sold: this.productData.sold
            }
            )
                // .then(res => res.config.data)
                .catch(err => {
                    console.log(err.response.data)
                })
        }
    }
    }
</script>
