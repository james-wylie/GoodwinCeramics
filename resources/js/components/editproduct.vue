<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        Products
                        <form>
                        <br>Title: 
                        <input type="text" :placeholder="products.name" required>
                        <br>Description: 
                        <input type="text-area" :placeholder="product.description" required>
                        <br>Image One: 
                        <input type="url" :placeholder="product.imageOne" required>
                        <br>Image Two:
                        <input type="url" placeholder="Larry">
                        <br>Price:
                        <input type="number" placeholder="Larry" required>
                        <br>Color:
                        <input type="text-area" placeholder="Larry">
                        <br>Height
                        <input type="text-area" placeholder="Larry">
                        <br>Width
                        <input type="text-area" placeholder="Larry">
                        <br>Sold
                        <input type="checkbox" placeholder="Larry">
                        <br>Amount
                        <input type="text-area" placeholder="Larry">
                        <input type="submit">

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
            

            axios.get('1')  
                .then(res => {
                    this.products = res.data
                })
                .then(res => {
                    console.log(this.products)
                })
                .catch(err => {
                    console.log(err)
                })
        }
    }
    }
</script>
