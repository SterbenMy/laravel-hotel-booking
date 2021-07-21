import Vue from "vue";
import AddCartComponent from "./components/AddCartComponent";
import CartComponent from "./components/CartComponent";
import OrderComponent from "./components/OrderComponent";
import Modal from "./components/Modal";
import store from "./storeJs/store";
import VueRecaptcha from "vue-recaptcha";



require('./bootstrap');
Vue.component('CartComponent', CartComponent);
Vue.component('AddCartComponent', AddCartComponent);
Vue.component('OrderComponent', OrderComponent);
Vue.component('Modal', Modal);
Vue.component( 'vue-recaptcha', VueRecaptcha );

const app = new Vue({
    el: '#app',
    store,
    data() {
        return {
            cart: []
        }
    },
    methods: {
        addToCart(productId) {
            if (!this.isProductAdded(productId)) {
                this.cart.unshift(productId);
                localStorage.setItem('cart', JSON.stringify(this.cart));
            }
        },
        isProductAdded(productId) {
            if (this.cart.length === 0) {
                return false
            }
            return this.cart.some(product => product.id === productId)
        }
    }
});

