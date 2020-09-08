<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mini -Ecommerce</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="main-wrapper" id="app-wrapper">
        {{-- <header></header> --}}
        <!-- mini cart start -->
        {{-- <sidebarcart></sidebarcart> --}}
        <!-- Mobile menu start -->
        {{-- <mobile-header></mobile-header> --}}

        {{-- 
        <div class="product-area pb-80">
            <div class="container">
                <div class="section-title-2 text-center mb-45">
                    <h2><span>Best</span> Seller</h2>
                    <p>Top our product best selling</p>
                </div>
                <div class="tab-btn-wrap mb-40">
                    <div class="tab-style-2 nav">
                        <a class="active" href="#product-1" data-toggle="tab">All Products</a>
                        <a href="#product-2" data-toggle="tab"> Clothing </a>
                        <a href="#product-3" data-toggle="tab">Shoes </a>
                        <a href="#product-4" data-toggle="tab">Bags</a>
                        <a href="#product-5" data-toggle="tab">Accessorirs</a>
                    </div>
                    <div class="btn-style-2">
                        <a class="animated" href="shop.html">see all product <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="product-1" class="tab-pane active">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-13.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-14.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-15.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span>$35.45</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span>$35.45</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-16.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span>$45.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span>$45.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-17.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-18.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                        <div class="product-price-2">
                                            <span>$55.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                        <div class="product-price-2">
                                            <span>$55.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-19.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$65.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$65.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-20.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span>$75.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span>$75.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-2" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-20.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-19.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-18.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                        <div class="product-price-2">
                                            <span>$35.45</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                        <div class="product-price-2">
                                            <span>$35.45</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-17.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                        <div class="product-price-2">
                                            <span>$45.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                        <div class="product-price-2">
                                            <span>$45.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-16.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-15.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span>$55.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span>$55.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-14.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$65.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$65.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-13.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span>$75.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span>$75.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-3" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-16.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-15.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-14.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$35.45</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$35.45</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-13.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span>$45.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span>$45.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-20.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-19.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$55.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$55.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-18.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                        <div class="product-price-2">
                                            <span>$65.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                        <div class="product-price-2">
                                            <span>$65.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-17.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                        <div class="product-price-2">
                                            <span>$75.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                        <div class="product-price-2">
                                            <span>$75.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-4" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-14.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-13.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-16.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span>$35.45</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span>$35.45</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-15.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span>$45.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span>$45.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-18.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-17.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                        <div class="product-price-2">
                                            <span>$55.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                        <div class="product-price-2">
                                            <span>$55.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-20.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span>$65.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span>$65.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-19.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$75.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$75.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-5" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-15.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                        <div class="product-price-2">
                                            <span>$20.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-13.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-16.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span>$35.45</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                        <div class="product-price-2">
                                            <span>$35.45</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-14.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$45.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span>$45.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-19.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                        <div class="product-price-2">
                                            <span class="new-price">$35.45</span>
                                            <span class="old-price">$45.80</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-17.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                        <div class="product-price-2">
                                            <span>$55.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                        <div class="product-price-2">
                                            <span>$55.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-20.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span>$65.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                        <div class="product-price-2">
                                            <span>$65.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-18.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal"><i
                                                    class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                        <div class="product-price-2">
                                            <span>$75.50</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-2 product-content-position text-center">
                                        <div class="product-rating-wrap">
                                            <div class="product-rating">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                        <div class="product-price-2">
                                            <span>$75.50</span>
                                        </div>
                                        <div class="pro-add-to-cart">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <footer></footer> --}}
        <!-- Modal -->
        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/images/product/product-1.jpg" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="assets/images/product/product-3.jpg" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="assets/images/product/product-6.jpg" alt="">
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="assets/images/product/product-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active nav-style-6">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img
                                                src="assets/images/product/quickview-s1.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-2"><img
                                                src="assets/images/product/quickview-s2.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-3"><img
                                                src="assets/images/product/quickview-s3.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-4"><img
                                                src="assets/images/product/quickview-s2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Simple Black T-Shirt</h2>
                                    <div class="product-ratting-review-wrap">
                                        <div class="product-ratting-digit-wrap">
                                            <div class="product-ratting">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <div class="product-digit">
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                        <div class="product-review-order">
                                            <span>62 Reviews</span>
                                            <span>242 orders</span>
                                        </div>
                                    </div>
                                    <p>Seamlessly predominate enterprise metrics without performance based process
                                        improvements.</p>
                                    <div class="pro-details-price">
                                        <span class="new-price">$75.72</span>
                                        <span class="old-price">$95.72</span>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="dolly" href="#">dolly</a></li>
                                                <li><a class="white" href="#">white</a></li>
                                                <li><a class="azalea" href="#">azalea</a></li>
                                                <li><a class="peach-orange" href="#">Orange</a></li>
                                                <li><a class="mona-lisa active" href="#">lisa</a></li>
                                                <li><a class="cupid" href="#">cupid</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">XS</a></li>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Categories:</span> <a href="#">Woman,</a> <a href="#">Dress,</a>
                                                <a href="#">T-Shirt</a></li>
                                            <li><span>Tag: </span> <a href="#">Fashion,</a> <a href="#">Mentone</a> , <a
                                                    href="#">Texas</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-action-wrap">
                                        <div class="pro-details-add-to-cart">
                                            <a title="Add to Cart" href="#">Add To Cart </a>
                                        </div>
                                        <div class="pro-details-action">
                                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                            <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                            <div class="product-dec-social">
                                                <a class="facebook" title="Facebook" href="#"><i
                                                        class="icon-social-facebook"></i></a>
                                                <a class="twitter" title="Twitter" href="#"><i
                                                        class="icon-social-twitter"></i></a>
                                                <a class="instagram" title="Instagram" href="#"><i
                                                        class="icon-social-instagram"></i></a>
                                                <a class="pinterest" title="Pinterest" href="#"><i
                                                        class="icon-social-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Modal end -->
    </div>

    <!-- All JS is here
============================================ -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>