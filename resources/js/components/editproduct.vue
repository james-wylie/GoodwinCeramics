<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        Products
                        <form>
                        <br><p>Date Created: {{product.created_at}}</p> 
                        <br><p>Date Update: {{product.updated_at}}</p> 
                            
                        <br>Title: 
                        <input type="text" :placeholder="product.name" required>
                        <br>Description: 
                        <input type="text-area" :placeholder="product.description" required>
                        <br>Image One: 
                        <input type="url" :placeholder="product.imageOne" required>
                        <br>Image Two:
                        <input type="url" :placeholder="product.imageOne">
                        <br>Price:
                        <input type="number" :placeholder="product.price" required>
                        <br>Color:
                        <input type="text-area" :placeholder="product.imageOne">
                        <br>Height
                        <input type="text-area" :placeholder="product.imageOne">
                        <br>Width
                        <input type="text-area" :placeholder="product.imageTwo">
                        <br>Sold
                        <input type="checkbox" :placeholder="product.sold">
                        <br>Color
                        <input type="textarea" :placeholder="product.color">
                        <br>Amount
                        <input type="text-area" :placeholder="product.price">
                        <input type="submit">

                        </form>


                        <!-- Here I bring in the information about the product in the same manner that would be shown on the webpage. -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Product</div>

                    <div class="card-body">
                        <br><p>Date Created: {{product.created_at}}</p> 
                        <br><p>Date Update: {{product.updated_at}}</p> 
                            
                        <br>Title: 
                        <p>{{product.name}}</p>
                        <br>Description: 
                        <p> {{product.description}}</p>
                        <br>Image One: 
                        <img :src="product.imageOne" alt="">
                        <br>Image Two:
                        <img :src="product.imageTwo" alt="">
                        <br>Price:
                        <p> {{product.price}}</p>
                        <br>Color:
                        <p> {{product.color}}</p>
                        <br>Height
                        <p> {{product.height}}</p>
                        <br>Width
                        <p> {{product.width}}</p>
                        <br>Sold
                        <p> {{product.sold}}</p>
                        <br>Color
                        <p> {{product.color}}</p>
                        <br>Amount
                        <p>{{product.price}}</p>
                

                        </form>


                        <!-- Here I bring in the information about the product in the same manner that would be shown on the webpage. -->
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
                product: []
            }
        },

        created() {
            
            this.fetchArticles();
        },

            methods: {
        fetchArticles() {
            

            axios.get(this.$route.params.id)  
                .then(res => {
                    this.product = res.data
                })
                .catch(err => {
                    console.log(err)
                })
        }
    }
    }
</script>
