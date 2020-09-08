import * as AuthService from '../services/Auth'

export default  {
    namespaced: true,
    state: {
        loggedUser: null,
        token: null,
    },
    getters: {
        isLoggedIn (state) {
            if (state.loggedUser) return true
            return false
        },
       
    },
    mutations: {
        setLoggedUser(state, payload=null) {
            if (payload) {
                state.loggedUser = payload.user
                state.token = payload.token
            } else {
                state.token = null
                state.loggedUser = null
            }
        },
    },
    actions: {
        getLoggedUser({commit}) {
            if (AuthService.authExist()) {
                commit('setLoggedUser', AuthService.getAuth())
            } else {
                commit('setLoggedUser', null)
            }
        }
    }
}