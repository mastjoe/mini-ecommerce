<template>
    <div>
        <div class="slider-area">
            <div class="container">
                <div class="hero-slider-active-1 nav-style-2 dot-style-2 dot-style-2-position-1 dot-style-2-active-black">
                    <div class="single-hero-slider single-animation-wrap slider-height-1  bg-img hm2-slider-bg"
                        :style="{backgroundImage: `url(${firstImage})`}">
                        <div class="inner-overlay custom-d-flex custom-align-item-center">
                            <div class="row">
                                <div class="col-12">
                                    <div class="hero-slider-content-2 slider-animated-1">
                                        <h1 class="animated"><span>Basic</span> Color <br>Teen Collection</h1>
                                        <p class="animated">Lorem ipsum dolor sit amet, consectetur adipis elit. Nunc
                                            imperdiet, nulla.</p>
                                        <div class="btn-style-2">
                                            <a class="animated" href="">explore now <i
                                                    class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-hero-slider single-animation-wrap slider-height-1 custom-d-flex custom-align-item-center bg-img hm2-slider-bg"
                        :style="{backgroundImage: `url(${secondImage})`}">
                        <div class="inner-overlay custom-d-flex custom-align-item-center">
                            <div class="row">
                                <div class="col-12">
                                    <div class="hero-slider-content-2 slider-animated-1">
                                        <h1 class="animated"><span>Basic</span> Color <br>Teen Collection</h1>
                                        <p class="animated">Lorem ipsum dolor sit amet, consectetur adipis elit. Nunc
                                            imperdiet, nulla.</p>
                                        <div class="btn-style-2">
                                            <a class="animated" href="">explore now <i
                                                    class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-hero-slider single-animation-wrap slider-height-1 custom-d-flex custom-align-item-center bg-img hm2-slider-bg"
                        :style="{backgroundImage: `url(${thirdImage})`}">
                        <div class="inner-overlay custom-d-flex custom-align-item-center">                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="hero-slider-content-2 slider-animated-1">
                                        <h1 class="animated"><span>Basic</span> Color <br>Teen Collection</h1>
                                        <p class="animated">Lorem ipsum dolor sit amet, consectetur adipis elit. Nunc
                                            imperdiet, nulla.</p>
                                        <div class="btn-style-2">
                                            <a class="animated" href="">explore now <i
                                                    class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import firstImage from '../../../compilables/images/374677.jpg'
import secondImage from '../../../compilables/images/135620.jpg'
import thirdImage from '../../../compilables/images/1051747-1.jpg'

export default {
    data() {
        return {
            firstImage: firstImage,
            secondImage: secondImage,
            thirdImage: thirdImage,
        }
    },
    mounted() {
        $('.hero-slider-active-1').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            loop: true,
            dots: true,
            arrows: true,
            prevArrow: '<span class="slider-icon-1-prev"><i class="icon-arrow-left"></i></span>',
            nextArrow: '<span class="slider-icon-1-next"><i class="icon-arrow-right"></i></span>',
        });

        $('.hero-slider-active-2').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            loop: true,
            dots: false,
            arrows: true,
            prevArrow: '<span class="slider-icon-1-prev"><i class="icon-arrow-left"></i></span>',
            nextArrow: '<span class="slider-icon-1-next"><i class="icon-arrow-right"></i></span>',
        });
    }
}

</script>
<style scoped>
.single-hero-slider .inner-overlay {
    width: 100%;
    height: 100%;
    background: rgba(250, 250, 250, 0.85);
    position: absolute;
    top: 0;
    left: 0;
}

</style>