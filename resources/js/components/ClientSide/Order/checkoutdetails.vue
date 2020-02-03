<template>
  <div>
    <form method="post" @submit.prevent="putEditedProduct">
      <input type="hidden" name="_token" :value="csrf">
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
          <input type="text-area" v-model="newProductData.imageTwo"     
                 :placeholder="product.imageOne">
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
</template>