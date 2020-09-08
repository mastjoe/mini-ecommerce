<template>
    <div>
        <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
            <h4 class="sidebar-widget-title">Categories </h4>
            <div class="shop-catigory">
                <ul>
                    <li v-for="category in categories" :key="category.id">
                        <router-link to="">{{ category.name }}</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState } from 'vuex'
export default {
    computed: {
        ...mapState('Category', [
            'categories'
        ]),
    }

}
</script>

<style scoped>

</style>