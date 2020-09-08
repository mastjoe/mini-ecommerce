<template>
    <div style="margin-top:100px">
         <footer class="footer-area pt-85 pb-90">
            <div class="container">
                <div class="footer-top text-center">
                    <div class="footer-menu footer-menu-mrg footer-menu-hover-border">
                        <nav>
                            <ul>
                                <li><router-link class="active" :to="{name: 'home'}">home</router-link></li>
                                <li><router-link :to="{name: 'shop'}">Shop</router-link></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="footer-middle footer-middle-mrg">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="social-style-3-wrap xs-center">
                                <span>follow us</span>
                                <div class="social-style-1">
                                    <a href="#"><i class="icon-social-twitter"></i></a>
                                    <a href="#"><i class="icon-social-facebook"></i></a>
                                    <a href="#"><i class="icon-social-instagram"></i></a>
                                    <a href="#"><i class="icon-social-youtube"></i></a>
                                    <a href="#"><i class="icon-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="contact-info-wrap-2 text-center">
                                <div class="footer-logo footer-logo-mrg">
                                    <a href="#"><img src="../../compilables/images/test-shop-logo.png" alt="logo"></a>
                                </div>
                                <p>29 Our Saviour Lekki, Lagos Nigeria</p>
                                <p><a href="tel:+2347038873844">07038873844</a></p>
                                <p><a href="mailto:mastjoe.dev@gmail.com">mastjoe.dev@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="language-style-2-wrap language-style-2-right"></div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom copyright text-center">
                    <p>Copyright © 2020</p>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
.footer-menu nav ul li a {
    font-size: 10px;
}
</style>