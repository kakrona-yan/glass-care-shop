@extends('frontends.layouts.master')
@section('title', 'Glass care shop | contact us')
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
                            <h2>str 200, Phnom Penh, Cambodia</h2>
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
                            <h2>Office: (+855) 093 399 330</h2>
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
                            <h2>glasscarescreen@gmail.com</h2>
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
                            <h2>fb.com</h2>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.8444685267445!2d104.9054502153371!3d11.563005247342318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDMzJzQ2LjgiTiAxMDTCsDU0JzI3LjUiRQ!5e0!3m2!1sen!2skh!4v1571721327401!5m2!1sen!2skh" width="550" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </figure>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 message-contact">
                    <h1>Send us a message</h1>
                    <form class="form-group" action="" method="post">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name-ip">Name<span>*</span></label><br>
                            <input type="text" name="input-name" id="name-ip" class="input-lg form-control" placeholder="Mark Stevens">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="mail-ip">Mail<span>*</span></label><br>
                            <input type="text" name="input-mail" id="mail-ip" class="input-lg form-control" placeholder="Mark Stevens">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>What's on your mind?<span>*</span></label>
                            <textarea placeholder="Write your message here..." class="form-control"></textarea>
                        </div>
                        <button type="submit">Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div id="map"></div> --}}
</section>
@endsection