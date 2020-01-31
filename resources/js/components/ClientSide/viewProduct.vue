<template>
    <div class="container mt-6">
        <div class="row justify-content-center mt-6">
             <div class="col-6 " style="width: 40vw;">
                 <div class="card">
                    <div class="card-header">Product Details</div>

                    <div class="card-body">
                        <br><h1> {{product.name}}</h1> 
                        <br><p>Date Update: {{product.updated_at}}</p> 
                        <br>Image One: 
                        <img class="img-fluid" :src="product.imageOne" alt="">
                        <br>Image Two:
                        <img class="img-fluid" :src="product.imageTwo" alt="">
                
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
