<div class="footer-on">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <div class="footer-menu">
                    <h3>{{ __('page.footer.site_map') }}</h3>
                    <ul> 
                        <li><a href="{{ route('home') }}">{{ __('page.home') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('page.about') }}</a></li>
                        <li><a href="{{ route('collection') }}">{{ __('page.collection') }}</a></li>
                        <li><a href="{{ route('look') }}">{{ __('page.look') }}</a></li>
                        <li><a href="{{ route('shop') }}">{{ __('page.shop') }}</a></li>
                        <li><a href="{{ route('news') }}">{{ __('page.news') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-5 mb-2">
                <div class="footer-menu">
                    <h3>{{ __('page.footer.for_customer') }}</h3>
                    <ul> 
                        <li><a href="{{ route('contact') }}">{{ __('page.contact') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 mb-2">
                <div class="info-footer footer-menu">
                    <h3>{{ __('page.footer.follow_us') }}</h3>
                    <div class="social">
                        <a href="#" id="link-insta"></a>
                        <a href="#" id="link-fb"></a>
                        <a href="#" id="link-tw"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 logo-footer">
                <a href="/" class="logo-bot">
                    <img src="{{ URL('theme/img/logo.png') }}">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 copy">
                <span>{{__('page.footer.copy_right')}}</span><i class="far fa-copyright"></i><span class="engo">{{__('page.footer.power_by')}}</span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gmail-footer">
                <span id="gmail-footer"><a href="mailto:{{__('page.footer.mail')}}">{{__('page.footer.mail')}}</a></span>
            </div>
        </div>
    </div>
    <div class="back-to-top fade"><i class="fas fa-caret-up"></i></div>
    <div class="BG-menu"></div>
</footer>
<!-- boostrap & jquery -->
<script src="{{ URL('theme/js/jquery.min.all.js') }}"></script>
<script src="{{ URL('theme/js/bootstrap.min.call.js') }}"></script>
<script src="{{ URL('theme/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>
<!-- js file -->
<script src="{{ URL('theme/js/function-back-top.js') }}"></script>
<script src="{{ URL('theme/js/function-sidebar.js') }}"></script>
<script src="{{ URL('theme/js/funtion-header-v3.js') }}"></script>
@stack('footer-script')