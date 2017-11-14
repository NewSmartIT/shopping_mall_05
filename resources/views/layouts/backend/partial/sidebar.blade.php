<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>{{ trans('backend.dashboard') }}</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>{{ trans('backend.list_menu') }}</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.product.index') }}">{{ trans('backend.products') }}</a></li>
                        <li><a href="{{ route('admin.brand.index') }}">{{ trans('backend.categories') }}</a></li>
                        <li><a href="#">{{-- Grids --}}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
