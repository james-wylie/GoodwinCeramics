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
                        <input type="text" v-model="body.name" placeholder="Name" required>
                        <br>Description: 
                        <input type="text-area" v-model="body.description" placeholder="Description" required>
                        <br>Image One: 
                        <input type="text" v-model="body.imageOne" value="http://googel.com" required>
                        <br>Image Two:
                        <input type="text" v-model="body.imageTwo" value="http://googel.com">
                        <br>Price:
                        <input type="number" v-model="body.price" placeholder="price" required>
                        <br>Color:
                        <input type="text-area" v-model="body.color" placeholder="Color">
                        <br>Height
                        <input type="number" v-model="body.height" placeholder="Height (in cm)">
                        <br>Width
                        <input type="number" v-model="body.width" placeholder="Width (in cm)">
                        <br>Sold
                        <input type="number" v-model="body.width"
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
                body: {
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
            {
                     name: this.body.name,
                    description: this.body.description,
                    imageOne: this.body.imageOne,
                    imageTwo: this.body.imageTwo,
                    price: this.body.price,
                    height: this.body.height,
                    width: this.body.width,
                    color: this.body.color,
                    sold: this.body.sold
            }
            //  ,{
            //     headers: {
            //         'Content-type': 'multipart/form-data',
            //     },
                
            // }
            )
                .then(res => {
                    console.log(res.data)
                }).catch(err => {
                    console.log(err.response.data)
                })
        }
    }
    }
</script>
