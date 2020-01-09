@extends('frontends.layouts.master')
@section('title', 'Swipe | contact us')
@section('content')
<section class="banner-top">
    <div class="container">
        <div class="title-banner text-center">
            <h1>{{ __('page.contact') }}</h1>
        </div>
        <nav aria-label="breadcrumb" class="row">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item active">
                    <a href="{{ route('home') }}"><i class="fas fa-home"></i> {{ __('page.home') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    {{ __('page.contact') }}
                </li>
            </ol>
        </nav>
    </div>
</section>
<section class="contact">
    <div class="contact-link">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-50">
                    <div class="contact--box">
                        <div class="color-1">
                            <i class="fas fa-map-marker-alt icon-bold"></i>
                        </div>
                        <div class="contact--text">
                            <h1>Our Address</h1>
                            <h2><a href="https://www.google.com/maps?q=Swipe+Company,+182+Oknha+Tep+Phan+St.+(182),+Phnom+Penh,+Cambodia&ftid=0x3109518503c7d2ed:0xbffc2d145fbc6aad&hl=en-KH&gl=kh&shorturl=1" target="_blank">Street 213 and street 182</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-50">
                    <div class="contact--box">
                        <div class="color-2">
                            <i class="fas fa-phone-alt icon-bold"></i>
                        </div>
                        <div class="contact--text">
                            <h1>Phone Number</h1>
                            <h2>Office: <a href="tel:+85593399330">(+855) 093 399 330</a></h2>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-50">
                    <div class="contact--box">
                        <div class="color-3">
                            <i class="fas fa-mail-bulk icon-bold"></i>
                        </div>
                        <div class="contact--text">
                            <h1>Email Address</h1>
                            <h2><a href = "mailto:Swipe1shop@gmail.com">Swipe1shop@gmail.com</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-50">
                    <div class="contact--box">
                        <div class="color-4">
                            <i class="fab fa-facebook-f icon-bold"></i>
                        </div>
                        <div class="contact--text">
                            <h1>Our Facebook</h1>
                            <h2><a href="https://www.facebook.com/Swipe-111849350266066/" target="_blank">fb.com</a></h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="message">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <figure class="img-cavas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.8472441504596!2d104.90595391480795!3d11.562806391790904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109518503c7d2ed%3A0xbffc2d145fbc6aad!2sSwipe%20Company!5e0!3m2!1sen!2skh!4v1576987759176!5m2!1sen!2skh" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </figure>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 message-contact">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible">
                            <strong><i class="fas fa-info-circle"></i> {{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <h1>Send us a message</h1>
                    <form class="form-group" action="{{route('post.contact')}}" method="post">
                        @csrf
                        <div class="col-xs-12">
                            <label for="name-ip">Name<span>*</span></label><br>
                            <input type="text" name="name" id="name-ip" class="input-lg form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="name">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-xs-12">
                            <label for="mail-ip">Mail<span>*</span></label><br>
                            <input type="text" name="email" id="mail-ip" class="input-lg form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="email">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-xs-12">
                            <label>What's on your mind?</label>
                            <textarea name="message" placeholder="Write your message here..." class="form-control"></textarea>
                        </div>
                        <div class="col-xs-12">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div id="map"></div> --}}
</section>
@endsection