@extends('frontends.layouts.master')
@section('title', 'Swipe home | swipe-shop.com')
@section('ogTitle', 'Swipe home | swipe-shop.com')
@section('ogUrl', route('home'))
@push('head-styles')
<link rel="stylesheet" type="text/css" href="{{ URL('theme/slick/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL('theme/slick/slick-theme.css') }}">   
@endpush
@section('content')
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
@endpush