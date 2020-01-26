<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    Hello USERNAME HERE
                    <div class="card-header">Product List</div>
                        <div class="card-body">
                            SPACE!
                        </div>

                    <div class="card-header">Product List</div>
                        <ul id="productList">
                    <li v-for="product in products" :key="product.name">
                    <div class="card-body">
                       {{product.name}}
                    </div> 
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