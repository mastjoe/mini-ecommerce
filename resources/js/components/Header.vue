<template>
    <div>
         <header class="header-area">
            <div class="container">
                <div class="header-large-device">
                    <div class="header-top header-top-ptb-2 border-bottom-1">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-5">
                                <div class="search-wrap-2">
                                    <form action="#">
                                        <input placeholder="Type anything & Hit enter" type="text">
                                        <button class="button-search"><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-2">
                                <div class="logo text-center">
                                    <router-link :to="{name: 'home'}">
                                        <img src="../../compilables/images/test-shop-logo.png" alt="logo">
                                    </router-link>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="header-top-right">
                                    <div class="header-login-regi">
                                        <template v-if="loggedUser">
                                            <a href="javascript:;" @click="logOut()">Log out</a>
                                        </template>
                                        <template v-else>
                                            <router-link :to="{name: 'login'}"><i class="icon-user"></i> Log In / Register</router-link>
                                        </template>
                                    </div>
                                    <div class="header-cart-2" @click="toggleSideCart()">
                                        <a class="cart-active" href="#">
                                            <i class="icon-basket-loaded"></i> 
                                            <span class="black">02</span> $264.50
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div
                                    class="main-menu main-menu-padding-2 main-menu-center main-menu-font-width-400 main-menu-lh-1">
                                    <nav>
                                        <ul>
                                            <li>
                                                <router-link :to="{name: 'home'}">HOME </router-link>
                                            </li>
                                            <li>
                                                <router-link to="#">CATEGORIES </router-link>
                                                <template v-if="categories.length">
                                                    <ul class="dropdown">
                                                        <li v-for="category in categories" :key="category.id">
                                                            <router-link to="">{{ category.name }}</router-link>
                                                        </li>
                                                    </ul>
                                                </template>
                                            </li>
                                            <li>
                                                <router-link :to="{name: 'shop'}">SHOP </router-link>
                                            </li>
                                            <li>
                                                <router-link to="">CONTACT </router-link>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-small-device small-device-ptb-1">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img alt="" src="assets/images/logo/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-action header-action-flex">
                                <div class="same-style-2">
                                    <router-link :to="{name: 'login'}"><i class="icon-user"></i></router-link>
                                </div>
                                <div class="same-style-2 header-cart" @click="toggleSideCart()">
                                    <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count black">02</span>
                                    </a>
                                </div>
                                <div class="same-style-2 main-menu-icon">
                                    <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</template>

<script>
import * as AuthService from '../services/Auth'
import {mapState, mapMutations, mapActions} from 'vuex'

export default {
    computed: {
        ...mapState('Cart', [
            'showSideCart'
        ]),
        ...mapState('Category', [
            'categories'
        ]),
        ...mapState('Auth', [
            'loggedUser',
        ])
    },
    methods: {
        ...mapMutations('Cart', [
            'toggleSideCart',
        ]),
        ...mapActions('Category', [
            'getCategories',
        ]),
        ...mapActions('Auth', [
            'getLoggedUser',
        ]),
        ...mapActions('Supplier', [
            'getSuppliers'
        ]),
        logOut() {
            AuthService.logOut();
            this.getLoggedUser()
            this.$forceUpdate()
            this.$router.push({name:'home'})
        },
    },
    mounted() {
        this.getCategories()
        this.getLoggedUser()
        this.getSuppliers()
    }
}
</script>

<style scoped>
.search-wrap-2 input {
    border: 0;
}
.search-wrap-2 input:focus {
    border-bottom: 1px solid #dedede;
}
</style>