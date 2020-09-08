import Axios from 'axios'
import Config from '../config'

export default {
    namespaced: true,
    state: {
        products:[],
        loadingProducts: false,
        productError: null,
    },
    getters: {},
    mutations: {
        setProducts(state, payload) {
            state.products = payload
        },
        setLoadingProducts(state, payload) {
            state.loadingProducts = payload
        },
        setProductError(state, payload) {
            state.productError = payload
        }
    },
    actions: {
        getProducts({commit}) {
            const url = `${Config.apiBaseUrl}/products`
            commit('setLoadingProducts', true)

            Axios.get(url)
                .then(({data}) => {
                    console.log(data)
                    commit('setProducts', data.data)
                })
                .catch((e) => {
                    console.log(e)
                    commit('setProductError', e)
                })
                .finally(() => {
                    commit('setLoadingProducts', false)
                })
        }
    },
}