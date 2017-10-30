@extends('layouts.frontend.master')
@section('title', 'Framgia Phone')
@section('content')
<div class="row content">
    <section class="slider col-lg-12 col-md-12 col-sm-12">
        <div class="flexslider flexsliderBig">
            <ul class="slides">
                <li id="slide1">
                    <div class="text">
                        <div class="bg"></div>
                        <div class="title">
                            <h2><strong>Lorem Ipsum Dolor</strong></h2>
                        </div>
                        <div class="desc">
                            <h3>All the power in your hands!</h3>
                            <span>From <span class="price">$960.00</span></span>
                        </div>
                        <div class="button">
                            <a class="button big red" href="#">Buy Now</a>
                        </div>
                    </div>
                </li>
                <li id="slide2">
                    <div class="text">
                        <div class="bg"></div>
                        <div class="title">
                            <h2><strong>The New Studio<br>Original Headphones</strong></h2>
                        </div>
                        <div class="desc">
                            <h3>Lorem ipsum dolor</h3>
                            <span>From <span class="price">$399.00</span></span>
                        </div>
                        <div class="button">
                            <a class="button big red" href="#">Buy Now</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="banner col-lg-12 col-md-12 col-sm-12">
        <div class="left-side-banner banner-item icon-on-right gray">
            <h4>8(802)234-5678</h4>
            <p>Monday - Saturday: 8am - 5pm PST</p>
            <i class="icons icon-phone-outline"></i>
        </div>
        <a href="#">
            <div class="middle-banner banner-item icon-on-left light-blue">
                <h4>Free shipping</h4>
                <p>on all orders over $99</p>
                <span class="button">Learn more</span>
                <i class="icons icon-truck-1"></i>
            </div>
        </a>
        <a href="#">
            <div class="right-side-banner banner-item orange">
                <h4>Crazy sale!</h4>
                <p>on selected items</p>
                <span class="button">Shop now</span>
            </div>
        </a>
    </section>
    <section class="main-content col-lg-9 col-md-9 col-sm-9">
        <div class="products-row row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="carousel-heading">
                    <h4>Featured Products</h4>
                    <div class="carousel-arrows">
                        <i class="icons icon-left-dir"></i>
                        <i class="icons icon-right-dir"></i>
                    </div>
                </div>
            </div>
            <div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
                <div class="owl-carousel" data-max-items="3">
                    <div>
                        <div class="product">
                            <div class="product-image">
                                <img src="#" alt="Product1"/>
                                <a href="products_page_v1.html" class="product-hover">
                                    <i class="icons icon-eye-1"></i>Quick View
                                </a>
                            </div>
                            <div class="product-info">
                                <h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
                                <span class="price">$281.00</span>
                                <div class="rating readonly-rating" data-score="4"></div>
                            </div>
                            <div class="product-actions">
                                <span class="add-to-cart">
                                    <span class="action-wrapper">
                                        <i class="icons icon-basket-2"></i>
                                        <span class="action-name">Add to cart</span>
                                    </span>
                                </span>
                                <span class="add-to-favorites">
                                    <span class="action-wrapper">
                                        <i class="icons icon-heart-empty"></i>
                                        <span class="action-name">Add to wishlist</span>
                                    </span>
                                </span>
                                <span class="add-to-compare">
                                    <span class="action-wrapper">
                                        <i class="icons icon-docs"></i>
                                        <span class="action-name">Add to Compare</span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product">
                            <div class="product-image">
                                <span class="product-tag">Sale</span>
                                <img src="#" alt="Product1"/>
                                <a href="products_page_v1.html" class="product-hover">
                                    <i class="icons icon-eye-1"></i> Quick View
                                </a>
                            </div>
                            <div class="product-info">
                                <h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
                                <span class="price">$281.00</span>
                                <div class="rating readonly-rating" data-score="4"></div>
                            </div>
                            <div class="product-actions">
                                <span class="add-to-cart">
                                    <span class="action-wrapper">
                                        <i class="icons icon-basket-2"></i>
                                        <span class="action-name">Add to cart</span>
                                    </span >
                                </span>
                                <span class="add-to-favorites">
                                    <span class="action-wrapper">
                                        <i class="icons icon-heart-empty"></i>
                                        <span class="action-name">Add to wishlist</span>
                                    </span>
                                </span>
                                <span class="add-to-compare">
                                    <span class="action-wrapper">
                                        <i class="icons icon-docs"></i>
                                        <span class="action-name">Add to Compare</span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-row row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="carousel-heading">
                    <h4>New Collection</h4>
                    <div class="carousel-arrows">
                        <i class="icons icon-left-dir"></i>
                        <i class="icons icon-right-dir"></i>
                    </div>
                </div>
            </div>
            <div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
                <div class="owl-carousel" data-max-items="3">
                    <div>
                        <div class="product">
                            <div class="product-image">
                                <span class="product-tag">Sale</span>
                                <img src="#" alt="Product1"/>
                                <a href="products_page_v1.html" class="product-hover">
                                    <i class="icons icon-eye-1"></i> Quick View
                                </a>
                            </div>
                            <div class="product-info">
                                <h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
                                <span class="price">$281.00</span>
                                <div class="rating readonly-rating" data-score="4"></div>
                            </div>
                            <div class="product-actions">
                                <span class="add-to-cart">
                                    <span class="action-wrapper">
                                        <i class="icons icon-basket-2"></i>
                                        <span class="action-name">Add to cart</span>
                                    </span >
                                </span>
                                <span class="add-to-favorites">
                                    <span class="action-wrapper">
                                        <i class="icons icon-heart-empty"></i>
                                        <span class="action-name">Add to wishlist</span>
                                    </span>
                                </span>
                                <span class="add-to-compare">
                                    <span class="action-wrapper">
                                        <i class="icons icon-docs"></i>
                                        <span class="action-name">Add to Compare</span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-row row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="carousel-heading">
                    <h4>Random Products</h4>
                    <div class="carousel-arrows">
                        <i class="icons icon-left-dir"></i>
                        <i class="icons icon-right-dir"></i>
                    </div>
                </div>
            </div>
            <div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
                <div class="owl-carousel" data-max-items="3">
                    <div>
                        <div class="product">
                            <div class="product-image">
                                <img src="#" alt="Product1"/>
                                <a href="products_page_v1.html" class="product-hover">
                                    <i class="icons icon-eye-1"></i> Quick View
                                </a>
                            </div>
                            <div class="product-info">
                                <h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
                                <span class="price">$281.00</span>
                                <div class="rating readonly-rating" data-score="4"></div>
                            </div>
                            <div class="product-actions">
                                <span class="add-to-cart">
                                    <span class="action-wrapper">
                                        <i class="icons icon-basket-2"></i>
                                        <span class="action-name">Add to cart</span>
                                    </span >
                                </span>
                                <span class="add-to-favorites">
                                    <span class="action-wrapper">
                                        <i class="icons icon-heart-empty"></i>
                                        <span class="action-name">Add to wishlist</span>
                                    </span>
                                </span>
                                <span class="add-to-compare">
                                    <span class="action-wrapper">
                                        <i class="icons icon-docs"></i>
                                        <span class="action-name">Add to Compare</span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-row row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="carousel-heading">
                    <h4>Latest news &amp; Reviews</h4>
                    <div class="carousel-arrows">
                        <i class="icons icon-left-dir"></i>
                        <i class="icons icon-right-dir"></i>
                    </div>
                </div>
            </div>
            <div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
                <div class="owl-carousel" data-max-items="2">
                    <div>
                        <article class="news">
                            <div class="news-background">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 news-thumbnail">
                                        <a href="#"><img src="#" alt="News1"></a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 news-content">
                                        <h5><a href="blog_post.html">Lorem Ipsum</a></h5>
                                        <span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div>
                        <article class="news">
                            <div class="news-background">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 news-thumbnail">
                                        <a href="#"><img src="#" alt="News1"></a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 news-content">
                                        <h5><a href="blog_post.html">Lorem Ipsum</a></h5>
                                        <span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-row row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="carousel-heading">
                    <h4>Product Brands</h4>
                    <div class="carousel-arrows">
                        <i class="icons icon-left-dir"></i>
                        <i class="icons icon-right-dir"></i>
                    </div>
                </div>
            </div>
            <div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
                <div class="owl-carousel" data-max-items="5">
                    <div>
                        <div class="product">
                            <a href="#"><img src="#" alt="Brand1"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.frontend.partial.sidebar')
</div>
@endsection
