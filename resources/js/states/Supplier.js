import Axios from 'axios'
import Config from '../config'

export default {
    namespaced: true,
    state: {
        suppliers: [],
        loadingSuppliers: false,
        suppliersError: null,
    },
    getters: {},
    mutations: {
        setSuppliers(state, payload) {
            state.suppliers = payload
        },
        setLoadingSuppliers (state, payload) {
            state.loadingSuppliers = payload
        },
        setSuppliersError(state, payload) {
            state.suppliersError = payload
        }
    },
    actions: {
        getSuppliers({commit}) {
            const url = `${Config.apiBaseUrl}/suppliers`
            commit('setLoadingSuppliers', true)
            Axios.get(url)
                .then(({data}) => {
                    commit('setSuppliers', data.data)
                })
                .catch((e) => {
                    console.log(e)
                    commit('setSuppliersError', e)
                })
                .finally(() => {
                    commit('setLoadingSuppliers', false)
                })
        }
    }
}