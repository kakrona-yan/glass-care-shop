<div class="footer-on">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <div class="foter-menu">
                    <h3>SITE MAP</h3>
                    <ul> 
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">COLLECTION</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">LOOK</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">SHOP</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-5 mb-2">
                <div class="foter-menu">
                    <h3>FOR CUSTOMER</h3>
                    <ul> 
                        <li><a href="#">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="info-footer foter-menu">
                    <h3>FOLLOW US</h3>
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
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo-footer">
            <a href="/" class="logo-bot">
                <img src="{{ URL('theme/img/logo.png') }}">
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 copy">
            <span>Copyright</span><i class="far fa-copyright"></i><span class="engo">2019 By GCS</span>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gmail-footer">
            <span id="gmail-footer"><a href="#">E: galss-care-shop@gmail.com</a></span>
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