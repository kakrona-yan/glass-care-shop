@extends('frontends.layouts.master')
@section('title', 'Swipe | Shop')
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
                PHNOM PENH
            </div>
            <ul class="list-group mt-30">
                <li class="list-group-item p-30">
                    <p><i class="fas fa-map-marker-alt text-bold"></i> Street 213 and street 182</p>
                </li>
            </ul>
        </div>
    </div> 
    <div class="shop-map container">
        <div class="row mlr-0">
            <div class="col-md-6 plr-0">
                <figure class="img-cavas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.8472441504596!2d104.90595391480795!3d11.562806391790904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109518503c7d2ed%3A0xbffc2d145fbc6aad!2sSwipe%20Company!5e0!3m2!1sen!2skh!4v1576987759176!5m2!1sen!2skh" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
@include('frontends.includes.blog')
@endsection