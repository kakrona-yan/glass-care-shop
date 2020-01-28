@extends('frontends.layouts.master')
@section('title', 'Swipe shop | swipe-shop.com')
@section('ogTitle', 'Swipe shop | swipe-shop.com')
@section('ogUrl', route('shop'))
@section('content')
<section class="banner-top">
    <div class="container">
        <div class="title-banner text-center">
            <h1>{{ __('page.shop') }}</h1>
        </div>
        <nav aria-label="breadcrumb" class="row">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item active">
                    <a href="{{ route('home') }}"><i class="fas fa-home"></i> {{ __('page.home') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    {{ __('page.shop') }}
                </li>
            </ol>
        </nav>
    </div>
</section>
<section class="content-shop">
    <div class="container">
        <div class="title">
            <h2>{{ __('page.shop') }}-Dealer list</h2>
        </div>
        <div class="shop">
            <div class="shop-box">
                <a href="https://www.google.com/maps?q=Swipe+Company,+182+Oknha+Tep+Phan+St.+(182),+Phnom+Penh,+Cambodia&ftid=0x3109518503c7d2ed:0xbffc2d145fbc6aad&hl=en-KH&gl=kh&shorturl=1" target="_blank">PHNOM PENH</a>
            </div>
            <ul class="list-group mt-30">
                <li class="list-group-item p-30">
                    <p><i class="fas fa-map-marker-alt text-bold"></i><a href="https://www.google.com/maps?q=Swipe+Company,+182+Oknha+Tep+Phan+St.+(182),+Phnom+Penh,+Cambodia&ftid=0x3109518503c7d2ed:0xbffc2d145fbc6aad&hl=en-KH&gl=kh&shorturl=1" target="_blank"> Street 213 and street 182</a></p>
                </li>
            </ul>
        </div>
    </div> 
    <div class="shop-map container">
        <div class="row mlr-0">
            <div class="col-md-6 plr-0">
                <figure class="img-cavas">
                    <a data-fslightbox href="{{ URL('theme/img/map-cambodia.jpg') }}">
                        <img src="{{ URL('theme/img/map-cambodia.jpg') }}" alt="Swipe">
                    </a>
                </figure>
            </div>
            <div class="col-md-6 plr-0 shop-bg-right">
                <div class="title-shop">
                    <i class="fas fa-sun"></i> Why Choose Us
                </div>
                <ul class="list-group mt-3">
                    <li class="list-group-item">Up-to-date</li>
                    <li class="list-group-item">Premium quality</li>
                    <li class="list-group-item">We care about customer need</li>
                    <li class="list-group-item">Safe and convenient to use</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Blog-->
{{-- @include('frontends.includes.blog') --}}
@endsection
@push('footer-script')
<script src="{{ URL('vendor/fslightbox/index.js') }}"></script>
@endpush