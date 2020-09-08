<template>
    <div>
        <div class="product-area pt-115 pb-110">
            <div class="container">
                <div class="section-title-2 text-center mb-45">
                    <h2><span>New</span> Arrivals</h2>
                    <p>We alway up to date new arrivals follows trending</p>
                </div>
                <div
                    class="product-slider-active dot-style-2 dot-style-2-position-static dot-style-2-mrg-1 dot-style-2-active-black">
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-20">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-9.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content-2 text-center">
                                <h3><a href="product-details.html"><span class="blod">Men</span> Clothings <span
                                            class="available-product">(56)</span></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-20">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-10.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content-2 text-center">
                                <h3><a href="product-details.html"><span class="blod">Women</span> Shoes <span
                                            class="available-product">(55)</span></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-20">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-11.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content-2 text-center">
                                <h3><a href="product-details.html"><span class="blod">Kid</span> Caps <span
                                            class="available-product">(56)</span></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-20">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-12.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content-2 text-center">
                                <h3><a href="product-details.html"><span class="blod">Women</span> Accessories <span
                                            class="available-product">(24)</span></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-20">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-11.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content-2 text-center">
                                <h3><a href="product-details.html"><span class="blod">Women</span> Shoes <span
                                            class="available-product">(55)</span></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        $('.product-slider-active').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            fade: false,
            loop: true,
            dots: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }
}
</script>

<style scoped>

</style>