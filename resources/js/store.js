import Vue from 'vue'
import Vuex from 'vuex'

import Cart from './states/Cart'
import Category from './states/Category'
import Product from './states/Product'
import Auth from './states/Auth'
import Supplier from './states/Supplier'

Vue.use(Vuex)

export default new Vuex.Store({
    strict: true,
    modules: {
        Cart,
        Category,
        Product,
        Auth,
        Supplier,
    }
})