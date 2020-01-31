<template>

<div>
    <img style="position: fixed; left: 20px; top: 10px;" class="" src="logo.svg" alt="logogoeshere">

    <div style="position: fixed; right: 20px; top: 10px;" class="links row float-right">
                
        <div class="p-3"><router-link to="/shop" ><p class="text-light">Shop</p></router-link></div>
        <div class="p-3"><router-link to="/" ><p class="text-light">Home</p></router-link></div>
        <div class="p-3"><router-link to="/about" ><p class="text-light">About</p></router-link></div>

    </div>

    <a href="mailto: abc@example.com"><i style="position: fixed; right: 60px; font-size: 75px; bottom: 35px;" class="text-light far fa-envelope"></i></a>
    <a href="https://www.instagram.com/goodwinceramics/"><i style="position: fixed; right: 180px; font-size: 75px; bottom: 35px;" class="text-light fab fa-instagram"></i></a>
</div>

</template>