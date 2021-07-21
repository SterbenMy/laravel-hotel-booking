<template>
    <div>
    <a class=" btn btn-danger" href="/cart">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
        </svg> <sup class="supClass">{{cartCount}}</sup>
    </a>

    </div>
</template>
<script>
export default {
    name:"CartComponent",
    computed:{
        cartCount(){
            return this.$root.cart.length;
        }
    },
    mounted() {
        if (localStorage.getItem('cart'))
            this.$root.cart = JSON.parse(localStorage.getItem('cart'));
    }
};
</script>
<style scoped>
a {
    padding: 10px 20px;
    border: 1px solid #ddd;
    color: #333;
    background-color: #fff;
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
    position: absolute;
    right:  15px;
    z-index: 3;
}
.supClass{
    vertical-align:super;
}
@media (max-width: 991px) {
   a{
       position: relative;
       left: 0px;
   }
}
</style>
