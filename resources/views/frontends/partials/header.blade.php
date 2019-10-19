<header class="container" id="header-v3">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu-mobile flex-center">
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav menu-main">
                        <li>
                            <a href="{{ route('about') }}">{{ __('page.about') }}</a>
                            <figure class="hidden-sm hidden-md hidden-xs hv-menu"></figure>
                        </li>
                        <li>
                            <a href="{{ route('collection') }}">{{ __('page.collection') }}</a>
                            <figure class="hidden-sm hidden-md hidden-xs hv-menu"></figure>
                        </li>
                        <li>
                            <a href="{{ route('look') }}">{{ __('page.look') }}</a>
                            <figure class="hidden-sm hidden-md hidden-xs hv-menu"></figure>
                        </li>
                        <li class="contact-menu menu-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ URL('theme/img/logo.png')}}" alt="Glass care shop" />
                            </a>
                        </li>
						<li>
                            <a href="{{ route('contact') }}">{{ __('page.contact') }}</a>
							<figure class="hidden-sm hidden-md hidden-xs hv-menu"></figure>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}">{{ __('page.shop') }}</a>
                            <figure class=" hidden-sm hidden-md hidden-xs hv-menu"></figure>
                        </li>
                        <li>
                            <a href="{{ route('news') }}">{{ __('page.news') }}</a>
                            <figure class=" hidden-sm hidden-md hidden-xs hv-menu"></figure>
                        </li>
						<li>
							<figure id="btn-close-menu" class="hidden-lg hidden-md"><i class="far fa-times-circle"></i></figure>
						</li>
					</ul>
				</div>
			</div>
			<div class="navbar-header mobile-menu">
				<button type="button" class="navbar-toggle btn-menu-mobile" data-toggle="collapse"
					data-target="#myNavbar">
					<i class="fas fa-bars"></i>
				</button>
			</div>
		</div>

	</header>