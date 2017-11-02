<header class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div id="top-header">
            <div class="row">
                <nav id="top-navigation" class="col-lg-7 col-md-7 col-sm-7">
                    <ul class="pull-left">
                        <li><a href="create_an_account.html">{{ trans('frontend.my_account') }}</a></li>
                        <li><a href="orders_list.html">{{ trans('frontend.list_order') }}</a></li>
                        <li><a href="order_info.html">{{ trans('frontend.checkout') }}</a></li>
                        <li><a href="text_page.html">{{ trans('frontend.about_us') }}</a></li>
                        <li><a href="contact.html">{{ trans('frontend.Contact') }}</a></li>
                    </ul>
                </nav>
                <nav class="col-lg-5 col-md-5 col-sm-5">
                    <ul class="pull-right">
                        <li>
                            <a class="flag" href="#"><span class="english-flag"></span>{{ trans('frontend.english') }} <i class="icons icon-down-dir"></i></a>
                            <ul class="box-dropdown parent-arrow">
                                <li>
                                    <div class="box-wrapper no-padding parent-border">
                                        <table class="language-table">
                                            <tr>
                                                <td class="flag"><span class="english-flag"></span></td>
                                                <td class="country"><a href="#">{{ trans('frontend.english') }}</a></td>
                                            </tr>
                                            <tr>
                                                <td class="flag"><span class="german-flag"></span></td>
                                                <td class="country"><a href="#">{{ trans('frontend.french') }}</a></td>
                                            </tr>
                                        </table>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">{{ trans('frontend.us_dollar') }}<i class="icons icon-down-dir"></i></a>
                            <ul class="box-dropdown parent-arrow">
                                <li>
                                    <div class="box-wrapper no-padding parent-border">
                                        <table class="currency-table">
                                            <tr>
                                                <td><a href="#">{{ trans('frontend.us_dollar') }}</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">{{ trans('frontend.euro') }}</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">{{ trans('frontend.pound') }}</a></td>
                                            </tr>
                                        </table>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="main-header">
            <div class="row">
                <div id="logo" class="col-lg-4 col-md-4 col-sm-4">
                    <a href="home_v1.html"><img src="{{ Url('images/logo.png') }}" alt="Logo"></a>
                </div>
                <nav id="middle-navigation" class="col-lg-8 col-md-8 col-sm-8">
                    <ul class="pull-right">
                        <li class="blue">
                            <a href="compare_products.html"><i class="icons icon-docs"></i>{{ trans('frontend.number_item') }}</a>
                        </li>
                        <li class="red">
                            <a href="wishlist.html"><i class="icons icon-heart-empty"></i>{{ trans('frontend.number_item_love') }}</a>
                        </li>
                        <li class="orange">
                            <a href="order_info.html"><i class="icons icon-basket-2"></i>{{ trans('frontend.number_item_buy') }}</a>
                            <ul id="cart-dropdown" class="box-dropdown parent-arrow">
                                <li>
                                    <div class="box-wrapper parent-border">
                                        <p>{{ trans('frontend.title_cart') }}</p>
                                        <table class="cart-table">
                                            <tr>
                                                <td><img src="{{ Url('images/sample1.jpg') }}" alt="product"></td>
                                                <td>
                                                    <h6>{{ trans('frontend.product_name') }}</h6>
                                                    <p>{{ trans('frontend.product_code') }}</p>
                                                </td>
                                                <td>
                                                    <span class="quantity"><span class="light">{{ trans('frontend.quantity') }}</span> {{ trans('frontend.product_price') }}</span>
                                                    <a href="#" class="parent-color">{{ trans('frontend.remove') }}</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <br class="clearfix">
                                    </div>
                                    <div class="footer">
                                        <table class="checkout-table pull-right">
                                            <tr>
                                                <td class="align-right"><strong>{{ trans('frontend.total_price') }}</strong></td>
                                                <td><strong class="parent-color">{{-- $999.00 --}}</strong></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="box-wrapper no-border">
                                        <a class="button pull-right parent-background" href="#">{{ trans('frontend.checkout') }}</a>
                                        <a class="button pull-right" href="order_info.html">{{ trans('frontend.view_cart') }}</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="login-create purple">
                            <i class="icons icon-user"></i>
                            <p>{{ trans('frontend.hello_guest') }} <a href="#">{{ trans('frontend.login') }}</a> or<br><a href="#">{{ trans('frontend.create_account') }}</a></p>
                            <ul id="login-dropdown" class="box-dropdown">
                                <li>
                                    <div class="box-wrapper">
                                        <h4>{{ trans('frontend.login') }}</h4>
                                        <div class="iconic-input">
                                            <input type="text" placeholder="Username">
                                            <i class="icons icon-user-3"></i>
                                        </div>
                                        <div class="iconic-input">
                                            <input type="text" placeholder="Password">
                                            <i class="icons icon-lock"></i>
                                        </div>
                                        <input type="checkbox" id="loginremember"> <label for="loginremember">{{ trans('frontend.remember_me') }}</label>
                                        <br>
                                        <br>
                                        <div class="pull-left">
                                            <input type="submit" class="orange" value="Login">
                                        </div>
                                        <div class="pull-right">
                                            <a href="#">{{ trans('frontend.forgot_your_password') }}</a>
                                            <br>
                                            <a href="#">{{ trans('frontend.forgot_your_username') }}</a>
                                            <br>
                                        </div>
                                        <br class="clearfix">
                                    </div>
                                    <div class="footer">
                                        <h4 class="pull-left">{{ trans('frontend.new_customer') }}</h4>
                                        <a class="button pull-right" href="create_an_account.html">{{ trans('frontend.create_an_account') }}</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <nav id="main-navigation" class="style3">
            <ul>
                <li class="home-green current-item">
                    <a href="home_v1.html">
                        <span class="nav-caption">{{ trans('frontend.home') }}</span>
                    </a>
                </li>
                <li class="red">
                    <a href="#">
                        <span class="nav-caption">{{ trans('frontend.categories') }}</span>
                    </a>
                    <ul class="wide-dropdown normalAniamtion">
                        <li>
                            <ul>
                                <li><span class="nav-caption">{{ trans('frontend.categories_1') }}</span></li>
                                <li><a href="#"><i class="icons icon-right-dir"></i> {{-- Digital SLR --}}</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><span class="nav-caption">{{ trans('frontend.categories_2') }}</span></li>
                                <li><a href="#"><i class="icons icon-right-dir"></i> {{-- Background Material --}}</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><span class="nav-caption">{{ trans('frontend.categories_3') }}</span></li>
                                <li><a href="#"><i class="icons icon-right-dir"></i> {{-- Cables &amp; Adapters --}}</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="blue">
                    <a href="category_v2.html">
                    <span class="nav-caption">{{-- Computers --}}</span>
                    </a>
                </li>
                <li class="orange">
                    <a href="category_v1.html">
                    <span class="nav-caption">{{-- Cell phones --}}</span>
                    </a>
                </li>
                <li class="green">
                    <a href="blog.html">
                    <span class="nav-caption">{{ trans('frontend.news') }}</span>
                    </a>
                </li>
                <li class="purple">
                    <a href="contact.html">
                    <span class="nav-caption">{{ trans('frontend.contact') }}</span>
                    </a>
                </li>
                <li class="nav-search">
                    <i class="icons icon-search-1"></i>
                </li>
            </ul>
            <div id="search-bar">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <table id="search-bar-table">
                        <tr>
                            <td class="search-column-1">
                                <p>
                                    <span class="grey">{{ trans('frontend.popular_searches') }}</span>
                                    <a href="#">{{ trans('frontend.iphone') }}</a>,
                                    <a href="#">{{-- audio --}}</a>,
                                </p>
                                <input type="text" placeholder="Enter your keyword">
                            </td>
                            <td class="search-column-2">
                                <p class="align-right"><a href="#">{{ trans('frontend.advanced_search') }}</a></p>
                                <select class="chosen-select-search">
                                    <option>{{ trans('frontend.categories_name') }}</option>
                                    <option>{{ trans('frontend.categories_name') }}</option>
                                    <option>{{ trans('frontend.categories_name') }}</option>
                                    <option>{{ trans('frontend.categories_name') }}</option>
                                    <option>{{ trans('frontend.categories_name') }}</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="search-button">
                    <input type="submit" value="">
                    <i class="icons icon-search-1"></i>
                </div>
            </div>
        </nav>
    </div>
</header>
