import Config from '../config'
import Axios from 'axios'

export default {
    namespaced: true,
    state: {
        categories: [],
        loadingCategories: false,
        categoriesError: null,
    },
    getters: {},
    mutations: {
        setCategories(state, payload) {
            state.categories = payload
        },
        setLoadingCategories(state, payload) {
            state.loadingCategories = payload
        },
        setCategoriesError(state, payload) {
            state.categoriesError = payload
        },
    },
    actions: {
        getCategories({commit}) {
            const url = `${Config.apiBaseUrl}/categories`
            commit('setLoadingCategories', true)
            Axios.get(url)
                .then(({data}) => {
                    commit('setCategories', data.data)
                })
                .catch((e) => {
                    commit('setCategoriesError', e)
                    console.log(e)
                })
                .finally(() => {
                    commit('setLoadingCategories', false)
                })
        }
    },
    

}