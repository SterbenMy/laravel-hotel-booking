<template>
    <div>
        <div v-if="isProductAdded()">
            <button @click="removeFromCart(productId, $event)" class="btn btn-outline-danger">Remove from favorite
            </button>
        </div>
        <div v-else>
            <button @click="addToCart()" class="btn btn-outline-danger">Add to favorite</button>
        </div>
    </div>
</template>
<script>

export default {
    name: "AddCartComponent",
    props: ['productId', 'productName', 'productCountry','productAddress','productPrice'],
    methods: {
        addToCart() {
            this.$root.addToCart({
                id: this.productId,
                name: this.productName,
                country: this.productCountry,
                address: this.productAddress,
                price: this.productPrice
            });
        },
        isProductAdded() {
            return this.$root.isProductAdded(this.productId);
        },
        removeFromCart(productId, event) {
            event.stopPropagation();
            this.$root.cart = this.$root.cart.filter(cart => cart.id !== productId);
            localStorage.setItem('cart', JSON.stringify(this.$root.cart));
            console.log(productId);
        }
    }

}
</script>

