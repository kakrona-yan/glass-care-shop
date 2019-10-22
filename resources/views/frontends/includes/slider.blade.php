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
                <div class="item slide1 active">
                    <div class="item-slide">
                        <img src="{{ URL('theme/img/slider-1.jpg') }}" alt="About glass care shop">
                        <div class="carousel-caption">
                            <h1>About of Glass<br>care shop.</h1>
                            <a href="{{ route('about') }}">About</a>
                        </div>
                    </div>
                </div>
                <div class="item slide1">
                    <div class="item-slide">
                        <img src="{{ URL('theme/img/slider-2.jpg') }}" alt="About glass care shop">
                        <div class="carousel-caption">
                            <h1>Collection of Glass<br>care shop.</h1>
                            <a href="{{ route('collection') }}">Collection</a>
                        </div>
                    </div>
                </div>
                <div class="item slide1">
                    <div class="item-slide">
                        <img src="{{ URL('theme/img/slider-1.jpg') }}" alt="About glass care shop">
                        <div class="carousel-caption">
                            <h1>Shop of Glass<br>care shop.</h1>
                            <a href="{{ route('shop') }}">shop</a>
                        </div>
                    </div>
                </div>
                <div class="item slide1">
                    <div class="item-slide">
                        <img src="{{ URL('theme/img/slider-3.jpg') }}" alt="About glass care shop">
                        <div class="carousel-caption">
                            <h1>news of Glass<br>care shop.</h1>
                            <a href="{{ route('news') }}">News</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>