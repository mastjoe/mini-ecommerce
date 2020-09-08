<template>
    <div>
         <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="">Home</a>
                                </li>
                                <li class="menu-item-has-children ">
                                    <a href="">shop</a>
                                </li>
                                <li>
                                    <a href="">Contact us</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-social-icon">
                        <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from 'vuex'

export default {
    computed: {
        ...mapState('Cart', [
            'showSideCart'
        ])
    },
    methods: {
        ...mapMutations('Cart', [
            'setShowSideCart',
        ]),

        toggleSideCart() {
            this.setShowSideCart(!this.showSideCart)
        }
    }
}
</script>

<style scoped>

</style>