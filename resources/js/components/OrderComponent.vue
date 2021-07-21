<template>

    <div class="row" id="modal">

        <div class="col-md-8 p-3">

            <div class="text-lg-center pt-90" v-if="this.$root.cart.length===0 ">
                <h3 class="title-d">No Favorites Hotels...</h3>
            </div>
            <div v-if="this.$root.cart.length> 0">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Country</th>
                    <th scope="col">Address</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="hotels in this.$root.cart" :key="hotels.id">
                    <td scope="row">{{ hotels.name }}</td>
                    <td>{{ hotels.country }}</td>
                    <td>{{ hotels.address }}</td>
                    <td>{{ hotels.price }}$</td>
                    <td>
                        <button @click="tableData(hotels.id,hotels.name,hotels.country,hotels.address,hotels.price) "
                                class="btn btn-outline-danger">Get order
                        </button>

                        <modal v-if="showModal" @toggle="toggleModal()">
                            <div slot="header">
                                <h2>Reservation Order</h2></div>
                            <div slot="body">
                                <form
                                    @submit.prevent="mxSubmit"
                                    :class="{mx_form_inv: formInv}"
                                >
                                    <div class="form-group">
                                        <label for="nameValue">Name</label><br/>
                                        <input class="form-control" type="text" id="nameValue" v-model="nameValue"
                                               readonly/>
                                    </div>

                                    <div class="form-group">
                                        <label for="countryValue">Country</label><br/>
                                        <input class="form-control" type="text" id="countryValue" v-model="countryValue"
                                               readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label for="addressValue">Address</label><br/>
                                        <input class="form-control" type="text" id="addressValue" v-model="addressValue"
                                               readonly/>
                                    </div>
                                    <div class="form-group">

                                        <label for="checkIn">Check in</label><br/>
                                        <input id="checkIn" class="form-control" type="date" v-model="checkIn"
                                               :class="{mx_empty_filed: !checkIn}"/>
                                        <small class="smallP">Fill in the date</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="check2">Check out</label><br/>
                                        <input id="check2" class="form-control" type="date" v-model="check2"
                                               :class="{mx_empty_filed: !check2}"/>
                                        <small class="smallP">Fill in the date</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="peopleCount">How many</label><br/>
                                        <input id="peopleCount" class="form-control" type="number" min="1"
                                               v-model="peopleCount"
                                               :class="{mx_empty_filed: !peopleCount}"/>
                                        <small class="smallP">Fill in this field</small>
                                    </div>
                                    <div class="form-group">
                                        <h3>Price: {{ priceCount }}$</h3>
                                    </div>
                                    <div :class="{mx_recaptcha_failed: !recaptcha}">
                                        <vue-recaptcha sitekey="6Led-6QbAAAAAJHVwzSw1GMfzrtU83cfXAR1KRwL"
                                                       @verify="mxVerify"></vue-recaptcha>
                                        <br/>
                                        <small class="smallP">Complete please all fields !</small>
                                        <p v-if="dateV">Verify please check-in and check-out dates !</p>
                                    </div>
                                    <div slot="footer">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </modal>
                        <button @click="removeFromCart(hotels.id, $event)" class="btn btn-outline-danger">Remove hotel
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <transition name="fade" appear>
            <div class="modal-overlay" v-if="showModal" @click="showModal = false"></div>
        </transition>
    </div>
</template>

<script>

export default {
    name: "OrderComponent",
    props: ['productId', 'productName', 'productCountry', 'productAddress', 'productPrice'],
    data() {
        return {
            showModal: false,
            idValue: null,
            nameValue: null,
            formInv: false,
            dateV: false,
            recaptcha: null,
            countryValue: null,
            addressValue: null,
            checkIn: null,
            check2: null,
            peopleCount: null,
            priceValue: null
        }
    },
    methods: {
        removeFromCart(productId, event) {
            event.stopPropagation();
            this.$root.cart = this.$root.cart.filter(cart => cart.id !== productId);
            localStorage.setItem('cart', JSON.stringify(this.$root.cart));
            console.log(productId);
        },
        toggleModal() {
            this.showModal = !this.showModal
        },
        tableData(productId, productName, productCountry, productAddress, productPrice) {
            this.showModal = true;
            this.nameValue = productName;
            this.idValue = productId;
            this.countryValue = productCountry;
            this.addressValue = productAddress;
            this.priceValue = productPrice;
        },
        mxVerify(response) {
            this.recaptcha = response
        },
        mxSubmit() {
            if (this.recaptcha && this.check2 && this.checkIn && this.checkIn < this.check2) {
                console.log("Name = " + this.nameValue + "\nCountry = " + this.countryValue + "\nAddress = " + this.addressValue + "\nCheck in = " + this.checkIn + "\nCheck out = " + this.check2 + "\nPeople = " + this.peopleCount + "\nPrice = " + this.priceCount);
                this.showModal = !this.showModal;

            } else {
                this.dateV = true;
                this.formInv = true
            }
        },

    },
    computed: {
        priceCount() {
            if(this.checkIn < this.check2){
            const dat1 = new Date(this.checkIn);
            const dat2 = new Date(this.check2);
            const Difference_In_Time = dat2.getTime() - dat1.getTime();
            const Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
            return (Difference_In_Days * this.priceValue) * this.peopleCount;
            }
        }
    }
}
</script>

<style>
#modal {
    position: relative;
    display: flex;
    justify-content: center;
    width: 100vw;
    min-height: 100vh;
    overflow-x: hidden;
}

.modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 98;
    background-color: rgba(0, 0, 0, 0.3);
}

.smallP {
    color: red;
    display: none;
}

.mx_form_inv .mx_empty_filed ~ small {
    display: block;
}

.mx_form_inv .mx_recaptcha_failed small {
    display: block;
}
</style>
