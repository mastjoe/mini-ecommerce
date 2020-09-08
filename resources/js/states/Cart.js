export default {
    namespaced: true,
    state: {
        showSideCart: false,
    },
    getters: {
        
    },
    mutations: {
        setShowSideCart(state, payload) {
            state.showSideCart = payload
        },
        toggleSideCart(state) {
            state.showSideCart  = !state.showSideCart
        }
    },
    actions: {

    }
}