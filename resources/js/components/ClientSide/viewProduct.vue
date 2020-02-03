<template>
<div>
    <navBar></navBar>
    <div class="container mt-6" style="font-family: 'Asul'; width: 80vw; height: 75vh; position: fixed; top:50%; left:50%; transform: translate(-50%, -50%);">
        <div class="row justify-content-center mt-6 text-light">
             <div class="col-6 " style="width: 40vw;">
                <div class="">
                   
                        <img class="img-fluid rounded shadow-sm" :src="product.imageOne" alt="">
                        <br>
                    </div>
                
                </div>
             <div class="col-4 mt-1" style="width: 20vw;">
                <div class="">
                    <h1> {{product.name}}</h1> 
                    <br>  <br>
                        {{product.description}}
                        <br>  <br>
                        Height: {{product.height}}
                        <br>  <br>
                        Width: {{product.width}}
                        <br>  <br>
                        Colour: {{product.color}}
                        <br>  <br>
                        Available: {{product.sold}}
                        <br>  <br>
                        <br>  <br>
                        <button class="btn btn-info ">Add To Cart</button>
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
                    console.log(res)
                    this.product = res.data
                })
                .then(res => "Yes")
                .catch(err => {
                    console.log(err)
                })
        },
        
    }
    }
</script>
 <style >
    @import url('https://fonts.googleapis.com/css?family=Asul:400,700&display=swap');
</style>