@extends('frontends.layouts.master')
@section('title', 'Swipe Look | swipe-shop.com')
@section('ogTitle', 'Swipe Look | swipe-shop.com')
@section('ogUrl', route('look'))
@push('head-styles')
<link rel="stylesheet" type="text/css" href="{{ URL('theme/css/style-portfolio.css') }}"> 
@endpush
@section('content')
<section class="banner-top">
    <div class="container">
        <div class="title-banner text-center">
            <h1>{{ __('page.look') }}</h1>
        </div>
        <nav aria-label="breadcrumb" class="row">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item active">
                    <a href="{{ route('home') }}"><i class="fas fa-home"></i> {{ __('page.home') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    {{ __('page.look') }}
                </li>
            </ol>
        </nav>
    </div>
</section>
<section class="container">
    <div class="glass-main glass-content">
        <!-- Photo grid -->
        <div class="gallery">
        @foreach ($products as $product)
            <div class="gallery-item">
                <a data-fslightbox="gallery" 
                    href="{{$product->thumbnail? asset(getUploadUrl($product->thumbnail, config('upload.product'))) : asset('images/no-thumbnail.jpg') }}">
                    <img class="gallery-image" src="{{$product->thumbnail? asset(getUploadUrl($product->thumbnail, config('upload.product'))) : asset('images/no-thumbnail.jpg') }}" alt="{{$product->title}}">
                </a>
                <div class="gallery-link">
                    <a href="{{ route('collections.detail', $product->slug) }}"><i class="fas fa-eye"></i></a>
                    <a href="https://www.facebook.com/Swipe-111849350266066/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        @endforeach
        
    </div>
</section>
@endsection

@push('footer-script')
<script src="{{ URL('vendor/fslightbox/index.js') }}"></script>
@endpush