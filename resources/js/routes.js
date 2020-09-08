import HomeComponent from './views/home/Index.vue'
import ShopComponent from './views/shop/Index.vue'
import LoginComponent from './views/auth/Login.vue'
import RegisterComponent from './views/auth/Register.vue'
import CartComponent from './views/shop/Cart.vue'
import AccountComponent from './views/account/Index.vue'
import NewProductComponent from  './views/shop/NewProduct.vue'


export default {
    base: '',
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeComponent,
            meta: {
                title: 'Home',
                requiresAuth: false,
                isAuthLink: false,
            }
        },
        {
            path: '/login',
            name: 'login',
            component: LoginComponent,
            meta: {
                title: 'Login',
                requiresAuth: false,
                isAuthLink: true,
            }
        },
        {
            path: '/register',
            name: 'register',
            component: RegisterComponent,
            meta: {
                title: 'Register',
                requiresAuth: false,
                isAuthLink: true,
            }
        },
        {
            path: '/shop',
            name: 'shop',
            component: ShopComponent,
            meta: {
                title: 'Shop',
                requiresAuth: false,
            },
        },
        {
            path: '/shop/products/new',
            name: 'new.product',
            component: NewProductComponent,
            meta: {
                title: 'New Product',
                requiresAuth: true,
            }
        },
        {
            path: '/cart',
            name: 'cart',
            component: CartComponent,
            meta: {
                title: 'Cart',
                requiresAuth: false
            }
        },
        {
            path: '/account',
            name: 'account',
            component: AccountComponent,
            meta: {
                title: 'My Account',
                requiresAuth: true,
            }
        },
    ]
}