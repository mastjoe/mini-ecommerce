import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routes'
import * as AuthService from './services/Auth'

Vue.use(VueRouter)

const router = new VueRouter(routes)

router.beforeEach((to, from, next) => {
    
    if (AuthService.getAuth() && to.meta.isAuthLink) {
        router.push({name: 'account'})
        return false
    } else if (!AuthService.authExist() && to.meta.requiresAuth) {
        router.push({name: 'login'})
        return false
    } 
    next()
})

router.afterEach((to, from, next) => {
    window.document.title = to.meta.title
})

export default router