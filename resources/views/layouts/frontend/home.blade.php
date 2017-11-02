@extends('layouts.frontend.master')
@section('title', 'Home')
@section('content')
<section class="slider col-lg-12 col-md-12 col-sm-12">
    <div class="flexslider flexsliderBig">
        <ul class="slides">
            <li id="slide1">
                <div class="text">
                    <div class="bg"></div>
                    <div class="title">
                        <h2><strong>{{ trans('frontend.product_name') }}</strong></h2>
                    </div>
                    <div class="desc">
                        <h3>{{ trans('frontend.product_desription') }}</h3>
                        <span>{{ trans('frontend.from') }} <span class="price">{{ trans('frontend.product_price') }}</span></span>
                    </div>
                    <div class="button">
                        <a class="button big red" href="#">{{ trans('frontend.buy_now') }}</a>
                    </div>
                </div>
            </li>
            <li id="slide2">
                <div class="text">
                    <div class="bg"></div>
                    <div class="title">
                        <h2><strong>{{ trans('frontend.product_name') }}</strong></h2>
                    </div>
                    <div class="desc">
                        <h3>{{ trans('frontend.product_desription') }}</h3>
                        <span>{{ trans('frontend.from') }} <span class="price">{{ trans('frontend.product_price') }}</span></span>
                    </div>
                    <div class="button">
                        <a class="button big red" href="#">{{ trans('frontend.buy_now') }}</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="banner col-lg-12 col-md-12 col-sm-12">
    <div class="left-side-banner banner-item icon-on-right gray">
        <h4>{{ trans('frontend.phone_number') }}</h4>
        <p>{{ trans('frontend.time_sheet') }}</p>
        <i class="icons icon-phone-outline"></i>
    </div>
    <a href="#">
        <div class="middle-banner banner-item icon-on-left light-blue">
            <h4>{{ trans('frontend.free_shipping') }}</h4>
            <p>{{ trans('frontend.free_shipping_content') }}</p>
            <span class="button">{{ trans('frontend.learn_more') }}</span>
            <i class="icons icon-truck-1"></i>
        </div>
    </a>
    <a href="#">
        <div class="right-side-banner banner-item orange">
            <h4>{{ trans('frontend.crazy_sale') }}</h4>
            <p>{{ trans('frontend.crazy_sale_content') }}</p>
            <span class="button">{{ trans('frontend.shop_now') }}</span>
        </div>
    </a>
</section>
<section class="main-content col-lg-9 col-md-9 col-sm-9">
    <div class="products-row row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="carousel-heading">
                <h4>{{ trans('frontend.featured_products') }}</h4>
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
                            <img src="{{ Url('images/sample1.jpg') }}" alt="Product1">
                            <a href="products_page_v1.html" class="product-hover">
                                <i class="icons icon-eye-1"></i> {{ trans('frontend.quick_view') }}
                            </a>
                        </div>
                        <div class="product-info">
                            <h5><a href="products_page_v1.html">{{ trans('frontend.product_name') }}</a></h5>
                            <span class="price">{{ trans('frontend.product_price') }}</span>
                            <div class="rating readonly-rating" data-score="4"></div>
                        </div>
                        <div class="product-actions">
                            <span class="add-to-cart">
                                <span class="action-wrapper">
                                    <i class="icons icon-basket-2"></i>
                                    <span class="action-name">{{ trans('frontend.add_to_cart') }}</span>
                                </span >
                            </span>
                            <span class="add-to-favorites">
                                <span class="action-wrapper">
                                    <i class="icons icon-heart-empty"></i>
                                    <span class="action-name">{{ trans('frontend.add_to_wishlist') }}</span>
                                </span>
                            </span>
                            <span class="add-to-compare">
                                <span class="action-wrapper">
                                    <i class="icons icon-docs"></i>
                                    <span class="action-name">{{ trans('frontend.add_to_compare') }}</span>
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
                <h4>{{ trans('frontend.new_collection') }}</h4>
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
                            <span class="product-tag">{{ trans('frontend.sale') }}</span>
                            <img src="{{ Url('images/sample1.jpg') }}" alt="Product1">
                            <a href="products_page_v1.html" class="product-hover">
                                <i class="icons icon-eye-1"></i> {{ trans('frontend.quick_view') }}
                            </a>
                        </div>
                        <div class="product-info">
                            <h5><a href="products_page_v1.html">{{ trans('frontend.product_name') }}</a></h5>
                            <span class="price">{{ trans('frontend.product_price') }}</span>
                            <div class="rating readonly-rating" data-score="4"></div>
                        </div>
                        <div class="product-actions">
                            <span class="add-to-cart">
                                <span class="action-wrapper">
                                    <i class="icons icon-basket-2"></i>
                                    <span class="action-name">{{ trans('frontend.add_to_cart') }}</span>
                                </span >
                            </span>
                            <span class="add-to-favorites">
                                <span class="action-wrapper">
                                    <i class="icons icon-heart-empty"></i>
                                    <span class="action-name">{{ trans('frontend.add_to_wishlist') }}</span>
                                </span>
                            </span>
                            <span class="add-to-compare">
                                <span class="action-wrapper">
                                    <i class="icons icon-docs"></i>
                                    <span class="action-name">{{ trans('frontend.add_to_compare') }}</span>
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
                <h4>{{ trans('frontend.random_products') }}</h4>
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
                            <img src="{{ Url('images/sample1.jpg') }}" alt="Product1">
                            <a href="products_page_v1.html" class="product-hover">
                                <i class="icons icon-eye-1"></i> {{ trans('frontend.quick_view') }}
                            </a>
                        </div>
                        <div class="product-info">
                            <h5><a href="products_page_v1.html">{{ trans('frontend.product_name') }}</a></h5>
                            <span class="price">{{ trans('frontend.product_price') }}</span>
                            <div class="rating readonly-rating" data-score="4"></div>
                        </div>
                        <div class="product-actions">
                            <span class="add-to-cart">
                                <span class="action-wrapper">
                                    <i class="icons icon-basket-2"></i>
                                    <span class="action-name">{{ trans('frontend.add_to_cart') }}</span>
                                </span >
                            </span>
                            <span class="add-to-favorites">
                                <span class="action-wrapper">
                                    <i class="icons icon-heart-empty"></i>
                                    <span class="action-name">{{ trans('frontend.add_to_wishlist') }}</span>
                                </span>
                            </span>
                            <span class="add-to-compare">
                                <span class="action-wrapper">
                                    <i class="icons icon-docs"></i>
                                    <span class="action-name">{{ trans('frontend.add_to_compare') }}</span>
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
                <h4>{{ trans('frontend.latest_reviews') }}</h4>
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
                                    <a href="#"><img src="{{ Url('images/sample1.jpg') }}" alt="News1"></a>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 news-content">
                                    <h5><a href="blog_post.html">{{ trans('frontend.product_name') }}</a></h5>
                                    <span class="date"><i class="icons icon-clock-1"></i> {{-- 23 April, 2012 --}}</span>
                                    <p>{{-- Vestibulum ante ipsum primis in faucibus --}}</p>
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
                <h4>{{ trans('frontend.product_brands') }}</h4>
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
                        <a href="#"><img src="{{ Url('images/sample.jpg') }}" alt="Brand1"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
