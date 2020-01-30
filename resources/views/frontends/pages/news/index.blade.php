@extends('frontends.layouts.master')
@section('title', 'Blog | swipe-shop.com')
@section('ogTitle', 'Blog | swipe-shop.com')
@section('ogUrl', route('blog.index'))
@section('content')
<div class="swipe-load">
    <div class="loading-swipe">
    <div class="item item-1"></div>
    <div class="item item-2"></div>
    <div class="item item-3"></div>
    <div class="item item-4"></div>
    </div>
</div>
<section class="banner-top">
    <div class="container">
        <div class="title-banner text-center">
            <h1>{{ __('page.news') }}</h1>
        </div>
        <nav aria-label="breadcrumb" class="row">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item active">
                    <a href="{{ route('home') }}"><i class="fas fa-home"></i> {{ __('page.home') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    {{ __('page.news') }}
                </li>
            </ol>
        </nav>
    </div>
</section>
<section class="blog">
    @include('frontends.pages.news.include.slider')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                @include('frontends.pages.news.include.content')
            </div>
            <div class="col-xs-12 col-md-4">
                @include('frontends.pages.news.include.sidebar-right')
            </div>
        </div>
    </div>
</section>
            
@endsection
@push('footer-script')
<script>
    $( window ).on( "load", function(){
        setTimeout(function() {

            $('.swipe-load').fadeOut(300);
        }, 700);
    });
</script>
@endpush