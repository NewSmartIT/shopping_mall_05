<aside class="sidebar right-sidebar col-lg-3 col-md-3 col-sm-3">
    <div class="row sidebar-box purple">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="sidebar-box-heading">
                <i class="icons icon-folder-open-empty"></i>
                <h4>{{ trans('frontend.categories') }}</h4>
            </div>
            <div class="sidebar-box-content">
                <ul>
                    <li><a href="#">{{ trans('frontend.categories_1') }}<i class="icons icon-right-dir"></i></a></li>
                    <li>
                        <a href="#">{{ trans('frontend.categories_1') }}<i class="icons icon-right-dir"></i></a>
                        <ul class="sidebar-dropdown">
                            <li>
                                <ul>
                                    <li><a href="#">{{ trans('frontend.product_name') }}</a></li>
                                    <li><a href="#">{{ trans('frontend.product_name') }}</a></li>
                                    <li><a href="#">{{ trans('frontend.product_name') }}</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="#">{{ trans('frontend.product_name') }}</a></li>
                                    <li><a href="#">{{ trans('frontend.product_name') }}</a></li>
                                    <li><a href="#">{{ trans('frontend.product_name') }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="purple" href="#">{{ trans('frontend.all_categories') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row sidebar-box blue">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="sidebar-box-heading">
                <i class="icons icon-docs"></i>
                <h4>{{ trans('frontend.compare_products') }}</h4>
            </div>
            <div class="sidebar-box-content">
                <table class="compare-table">
                    <tr>
                        <td class="product-thumbnail"><img src="{{ Url('images/sample1.jpg') }}" alt="Product1"></td>
                        <td class="product-info">
                            <p><a href="#">{{ trans('frontend.product_name') }}</a></p>
                            <a href="#" class="remove">{{ trans('frontend.remove') }}</a>
                        </td>
                    </tr>
                </table>
                <div class="padding-box">
                    <a class="button grey">{{ trans('frontend.go_compare') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row sidebar-box red">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="sidebar-box-heading">
                <i class="icons icon-award-2"></i>
                <h4>{{ trans('frontend.bestsellers') }}</h4>
            </div>
            <div class="sidebar-box-content">
                <table class="bestsellers-table">
                    <tr>
                        <td class="product-thumbnail"><a href="#"><img src="{{ Url('images/sample1.jpg') }}" alt="Product1"></a></td>
                        <td class="product-info">
                            <p><a href="#">{{ trans('frontend.product_name') }}</a></p>
                            <span class="price">{{ trans('frontend.product_price') }}</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row sidebar-box green">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="sidebar-box-heading">
                <i class="icons icon-tag-6"></i>
                <h4>{{ trans('frontend.tags_cloud') }}</h4>
            </div>
            <div class="sidebar-box-content sidebar-padding-box">
                <a href="#" class="tag-item">{{ trans('frontend.tags_name') }}</a>
                <a href="#" class="tag-item">{{ trans('frontend.tags_name') }}</a>
            </div>
        </div>
    </div>
</aside>
