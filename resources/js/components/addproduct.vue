<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <router-link to="/backend"><a>Back to the Backend Home</a></router-link>
                    <div class="card-body">
                        Products
                        <form>
                        <br>Title: 
                        <input type="text" placeholder="Title" required>
                        <br>Description: 
                        <input type="text-area" placeholder="Description" required>
                        <br>Image One: 
                        <input type="url" placeholder="Image One (url)" required>
                        <br>Image Two:
                        <input type="url" placeholder="Image Two (url)">
                        <br>Price:
                        <input type="number" placeholder="Number" required>
                        <br>Color:
                        <input type="text-area" placeholder="Color">
                        <br>Height
                        <input type="number" placeholder="Height (in cm)">
                        <br>Width
                        <input type="number" placeholder="Width (in cm)">
                        <br>Sold
                        <input type="checkbox" placeholder="Sold (check yes if unavailable)">
                        <br>Amount
                        <input type="text-area" placeholder="Cost in NZD">
                        <input type="submit">

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
        }
    }
</script>
