<template>
    <div>
        <div class="sidebar-cart-active" :class="{'inside':showSideCart}">
            <div class="sidebar-cart-all">
                <a class="cart-close" @click="toggleSideCart" href="javascript:;"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Simple Black T-Shirt</a></h4>
                                <span> 1 × $49.00 </span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Norda Backpack</a></h4>
                                <span> 1 × $49.00 </span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>$170.00</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="">checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import {mapState, mapMutations} from 'vuex'
export default {
    computed: {
        ...mapState('Cart', [
            'showSideCart'
        ]),
    },
    methods: {
        ...mapMutations('Cart', [
            'toggleSideCart'
        ]),
    },
    mounted() {
        
    }
}
</script>

<style scoped>

</style>