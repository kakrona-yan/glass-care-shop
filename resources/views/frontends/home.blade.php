@extends('frontends.layouts.master')
@section('title', 'Swipe home | swipe-shop.com')
@section('ogTitle', 'Swipe home | swipe-shop.com')
@section('ogUrl', route('home'))
@push('head-styles')
<link rel="stylesheet" type="text/css" href="{{ URL('theme/slick/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL('theme/slick/slick-theme.css') }}">   
@endpush
@section('content')
<div class="swipe-load">
    <div class="loading-swipe">
    <div class="item item-1"></div>
    <div class="item item-2"></div>
    <div class="item item-3"></div>
    <div class="item item-4"></div>
    </div>
</div>
<!--Slider-->
@include('frontends.includes.slider')
<!--Show Menu Detail-->
@include('frontends.includes.menuDetail')
<!--New Arrival-->
@include('frontends.includes.newArrival')
<!--Blog-->
@include('frontends.includes.blog')
@endsection
@push('footer-script')
<script src="{{ URL('theme/js/function-slick.js') }}"></script>
<script>
    $( window ).on( "load", function(){
        setTimeout(function() {

            $('.swipe-load').fadeOut(300);
        }, 700);
    });
</script>
@endpush