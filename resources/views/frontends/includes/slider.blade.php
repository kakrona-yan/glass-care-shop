<section id="slider-baner">
    <div class="slider-banner">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active slide1">
                    <img src="{{ URL('theme/img/1920x830.png') }}" alt="About glass care shop">
                    <div class="carousel-caption">
                        <h1>About of Glass<br>care shop.</h1>
                        <a href="{{ route('about') }}">About</a>
                    </div>
                </div>
                <div class="item slide1">
                    <img src="{{ URL('theme/img/1920x830.png') }}" alt="About glass care shop">
                    <div class="carousel-caption">
                        <h1>Collection of Glass<br>care shop.</h1>
                        <a href="{{ route('collection') }}">Collection</a>
                    </div>
                </div>
                <div class="item slide1">
                        <img src="{{ URL('theme/img/1920x830.png') }}" alt="About glass care shop">
                        <div class="carousel-caption">
                            <h1>Shop of Glass<br>care shop.</h1>
                            <a href="{{ route('shop') }}">shop</a>
                        </div>
                    </div>
                <div class="item slide1">
                    <img src="{{ URL('theme/img/1920x830.png') }}" alt="About glass care shop">
                    <div class="carousel-caption">
                        <h1>news of Glass<br>care shop.</h1>
                        <a href="{{ route('news') }}">News</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>