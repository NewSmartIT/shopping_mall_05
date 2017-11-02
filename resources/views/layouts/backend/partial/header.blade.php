<header class="header fixed-top clearfix">
    <div class="brand">
        <a href="index.html" class="logo">{{ trans('backend.title') }}</a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <div class="nav notify-row" id="top_menu">
        <ul class="nav top-menu">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-tasks"></i>
                    <span class="badge bg-success">{{ trans('backend.number_task') }}</span>
                </a>
                <ul class="dropdown-menu extended tasks-bar">
                    <li>
                        <p class="">{{ trans('backend.title_task') }}</p>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>{{-- Target Sell --}}</h5>
                                    <p>{{-- 25% , Deadline  12 June’13 --}}</p>
                                </div>
                                <span class="notification-pie-chart pull-right" data-percent="45">
                                    <span class="percent"></span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="external">
                        <a href="#">{{ trans('backend.all_task') }}</a>
                    </li>
                </ul>
            </li>
            <li id="header_inbox_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-important">{{ trans('backend.number_email') }}</span>
                </a>
                <ul class="dropdown-menu extended inbox">
                    <li>
                        <p class="red">{{ trans('backend.title_email') }}</p>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="{{ Url('images/backend/3.png') }}"></span>
                            <span class="subject">
                                <span class="from">{{-- Jonathan Smith --}}</span>
                                <span class="time">{{-- Just now --}}</span>
                            </span>
                            <span class="message">
                                {{-- Hello, this is an example msg. --}}
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">{{ trans('backend.title_email') }}</a>
                    </li>
                </ul>
            </li>
            <li id="header_notification_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-warning">{{ trans('backend.number_noti') }}</span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <li>
                        <p>{{ trans('backend.title_noti') }}</p>
                    </li>
                    <li>
                        <div class="alert alert-info clearfix">
                            <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                            <div class="noti-info">
                                <a href="#">{{ trans('backend.content_noti') }}</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="top-nav clearfix">
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder=" Search">
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="{{ Url('images/backend/2.png') }}">
                    <span class="username">{{ trans('backend.username') }}</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a href="#"><i class=" fa fa-suitcase"></i>{{ trans('backend.profile') }}</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i>{{ trans('backend.settings') }}</a></li>
                    <li>
                        <a href="{{ route('logout') }}" id="click-logout">{{ trans('backend.logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>
