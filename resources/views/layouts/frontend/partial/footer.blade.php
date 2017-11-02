<footer id="footer" class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div id="main-footer">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <h4>{{ trans('frontend.information') }}</h4>
                    <ul>
                        <li><a href="#"><i class="icons icon-right-dir"></i> {{ trans('frontend.about_us') }}</a></li>
                        <li><a href="#"><i class="icons icon-right-dir"></i> {{ trans('frontend.new_collection') }}</a></li>
                        <li><a href="#"><i class="icons icon-right-dir"></i> {{ trans('frontend.bestsellers') }}</a></li>
                        <li><a href="#"><i class="icons icon-right-dir"></i> {{ trans('frontend.manufacturers') }}</a></li>
                        <li><a href="#"><i class="icons icon-right-dir"></i> {{ trans('frontend.privacy_policy') }}</a></li>
                        <li><a href="#"><i class="icons icon-right-dir"></i> {{ trans('frontend.term_conditions') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 facebook-iframe">
                    <h4>{{ trans('frontend.like_facebook') }}</h4>
                    <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=270&amp;height=250&amp;colorscheme=light&amp;header=false&amp;show_faces=true&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:100%; height:290px;"></iframe>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 contact-footer-info">
                    <h4>{{ trans('frontend.contact_us') }}</h4>
                    <ul>
                        <li><i class="icons icon-location"></i> {{ trans('frontend.address') }}</li>
                        <li><i class="icons icon-phone"></i> {{-- +1 800 603 6035 --}}</li>
                        <li><i class="icons icon-mail-alt"></i><a href="mailto:mail@company.com"> {{-- mail@companyname.com --}}</a></li>
                        <li><i class="icons icon-skype"></i> {{ trans('frontend.homeshop') }}</li>
                    </ul>
                    <div class="social-media">
                        <ul>
                            <li class="social-googleplus tooltip-hover" data-toggle="tooltip" data-placement="top" title="Google+"><a href="#"></a></li>
                            <li class="social-facebook tooltip-hover" data-toggle="tooltip" data-placement="top" title="Facebook"><a href="#"></a></li>
                            <li class="social-pinterest tooltip-hover" data-toggle="tooltip" data-placement="top" title="Pinterest"><a href="#"></a></li>
                            <li class="social-twitter tooltip-hover" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="#"></a></li>
                            <li class="social-youtube tooltip-hover" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <form id="newsletter" action="php/newsletter.php">
                        <h4>{{ trans('frontend.newsletter_signup') }}</h4>
                        <p>{{-- Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox! --}}</p>
                        <input type="text" name="newsletter-email" placeholder="Enter your email address">
                        <input type="submit" name="newsletter-submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div id="lower-footer">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p class="copyright"><a href="#">{{ trans('frontend.homeshop') }}</a>{{-- . All Rights Reserved. --}}</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul class="payment-list">
                        <li class="payment1"></li>
                        <li class="payment2"></li>
                        <li class="payment3"></li>
                        <li class="payment4"></li>
                        <li class="payment5"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="back-to-top">
    <i class="icon-up-dir"></i>
</div>
