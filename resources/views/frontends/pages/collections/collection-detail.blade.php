@extends('frontends.layouts.master')
@section('title', 'Swipe | collection')
@push('head-styles')
    <link rel="stylesheet" type="text/css" href="{{ URL('theme/css/product-zoom.css') }}">
@endpush
@section('content')
<section class="banner-top">
    <div class="container">
        <div class="title-banner text-center">
            <h1>{{ __('page.collection') }}</h1>
        </div>
        <nav aria-label="breadcrumb" class="row">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item active">
                    <a href="{{ route('home') }}"><i class="fas fa-home"></i> {{ __('page.home') }}</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{ route('collections.index') }}"> {{ __('page.collection') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">{{$product->title}}</li>
            </ol>
        </nav>
    </div>
</section>
<section class="content-product mb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12 mb-10">
                <div class="">
                    <ul id="glasscase" class="gc-start">
                        <li><img src="{{$product->thumbnail? asset(getUploadUrl($product->thumbnail, config('upload.product'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" alt="Text" data-gc-caption="{{$product->title}}"></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-xs-12 mb-10">
                <div class="product-title">
                    <h5><a href="{{ route('collections.detail', $slug) }}">{{$product->title}}</a></h5>
                    <p class="product-box--user">By Ower</p>
                    <p class="product-box--category">
                        <i class="fas fa-bullhorn mr-1 text-blue-100"></i>
                        <span>{{$product->category ? $product->category->name : ''}}</span>
                    </p>
                    <p>{{$product->product_code}}</p>
                    <div class="prince">Price: ${{$product->price}}</div>
                    <div class="in_store text-blue-100">Store: {{$product->in_store}}</div>
                    <div class="product-decription">
                        <h5><i class="fas fa-atom"></i> Specifications</h5>
                        <div class="list-detail">
                            <p>{!! nl2br($product->description) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('footer-script')
<script src="{{ URL('theme/js/product-zoom.js') }}"></script>
<script>
    $(function(){
         $('#glasscase').glassCase({ 'thumbsPosition': 'bottom', 'widthDisplay' : 575});
    });
</script>
@endpush