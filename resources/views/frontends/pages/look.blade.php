@extends('frontends.layouts.master')
@section('title', 'Swipe | Look')
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
        <div class="glass-row glass-grayscale-min">
        @foreach ($products as $product)
            <div class="glass-quarter">
                <a data-fslightbox="gallery" href="{{$product->thumbnail? asset(getUploadUrl($product->thumbnail, config('upload.product'))) : asset('images/no-thumbnail.jpg') }}">
                    <img src="{{$product->thumbnail? asset(getUploadUrl($product->thumbnail, config('upload.product'))) : asset('images/no-thumbnail.jpg') }}" alt="{{$product->title}}">
                </a>
            </div>
        @endforeach
        
    </div>
</section>
@endsection

@push('footer-script')
<script src="{{ URL('vendor/fslightbox/index.js') }}"></script>
@endpush