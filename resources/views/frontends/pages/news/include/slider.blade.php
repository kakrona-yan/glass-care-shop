@push('head-styles')
<link rel="stylesheet" type="text/css" href="{{ URL('theme/slick/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL('theme/slick/slick-theme.css') }}">   
@endpush

<div id="blog-slider" class="mb-50">
    <div class="container">
        <div class="slider responsive-slick-banner">
            @foreach ($blogSliders as $blogSlider)
                <div class="slider-item">
                    <a href="{{ route('blog.detail', $blogSlider->permalink )}}">
                        <img src="{{$blogSlider->thumbnail? asset(getUploadUrl($blogSlider->thumbnail, config('upload.news'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" alt="{{$blogSlider->title}}">
                    </a>
                    <div class="blog-box">
                        <div class="blog--title">
                            <a href="{{ route('blog.detail', $blogSlider->permalink )}}">{{Str::limit($blogSlider->title, 45)}}</a>
                        </div>
                        <div class="blog--time">
                            <span class="time"><i class="far fa-calendar-alt"></i><span> {{date('M, d Y', strtotime($blogSlider->created_at))}}</span></span>
                            <span class="time"><i class="far fa-user"></i><span> {{$blogSlider->author}}</span></span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@push('footer-script')
<script>
$(function () {
    // slick banner slider
    $('.responsive-slick-banner').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        speed: 1200,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        alwaysSlide: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 980,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
});
</script>
@endpush