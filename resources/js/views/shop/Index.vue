<template>
    <div>
         <div class="shop-area pt-120 pb-120">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">
                                        <template v-if="products.length">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                                
                                            </div>
                                        </template>
                                        <template v-else>
                                            <div class="col-12 text-center my-5">
                                                <h1 class="text-muted">
                                                    No product found
                                                </h1>
                                                <router-link :to="{name:'new.product'}" class="btn btn-danger px-5 mt-2">
                                                    Add A Product
                                                </router-link>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-pagination-style text-center mt-10 d-none">
                                <ul>
                                    <li><a class="prev" href="#"><i class="icon-arrow-left"></i></a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a class="next" href="#"><i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
                            <div class="sidebar-widget mb-40">
                                <h4 class="sidebar-widget-title">Search </h4>
                                <div class="sidebar-search">
                                    <form class="sidebar-search-form" action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button>
                                            <i class="icon-magnifier"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            
                            <category-widget></category-widget>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions, mapState } from 'vuex'
import CategoryWidget from './CategoryWidget'

export default {
    components: {
        CategoryWidget,
    },
    computed: {
        ...mapState('Product', [
            'products',
        ]),
    },
    methods: {
        ...mapActions('Product', [
            'getProducts'
        ])
    },
    beforeMount() {
        this.getProducts()
    }
}
</script>

<style scoped>

</style>