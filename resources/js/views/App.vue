<template>
    <main>
        <app-header></app-header>
        <app-mobile-header></app-mobile-header>
        <app-side-bar-cart></app-side-bar-cart>
        <router-view></router-view>
        <app-footer></app-footer>
    </main>
</template>

<script>
    import AppHeader from '../components/Header'
    import AppFooter from '../components/Footer'
    import AppMobileHeader from '../components/MobileHeader'
    import AppSideBarCart from '../components/SideBarCart'

    export default {
        components: {
            AppHeader,
            AppFooter,
            AppMobileHeader,
            AppSideBarCart,
        },
        methods: {
            runScript() {
                
            }
        },
        mounted() {

        }
    }
</script>

<style>
.form-control:focus {
    background: rgba(222,222,222,0.76);
    box-shadow: none;
    border: 1px solid #ced4da;
}
</style>