<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Product List</div>
                    <div class="card-header">Product List</div>

                    <div class="card-body">
                        Products
                        <form>
                        <br>Title: 
                        <input type="text" placeholder="Larry" required>
                        <br>Description: 
                        <input type="text-area" placeholder="Larry" required>
                        <br>Image One: 
                        <input type="url" placeholder="Larry" required>
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