@extends('frontends.layouts.master')
@section('title', 'Glass care shop | Shop')
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
                    <p><i class="fas fa-map-marker-alt text-bold"></i> str 200, Phnom Penh, Cambodia</p>
                </li>
            </ul>
        </div>
    </div> 
    <div class="shop-map">
        <div class="row mlr-0">
            <div class="col-md-6 plr-0">
                <figure class="img-cavas flex-img">
                    <img src="{{ URL('theme/img/map-cambodia.jpg') }}" alt="img-holiwood">
                </figure>
            </div>
            <div class="col-md-6 plr-0 shop-bg-right">
                <div class="title-shop">
                    <i class="fas fa-sun"></i> Why Choose Us
                </div>
                <ul class="list-group mt-3">
                    <li class="list-group-item">New screen <span class="badge">12</span></li>
                    <li class="list-group-item">Protect your Phone <span class="badge">5</span></li>
                    <li class="list-group-item">Protect your Phone <span class="badge">3</span></li>
                    <li class="list-group-item">Protect your Phone <span class="badge">5</span></li>
                    <li class="list-group-item">Protect your Phone <span class="badge">5</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Blog-->
@include('frontends.includes.blog')
@endsection