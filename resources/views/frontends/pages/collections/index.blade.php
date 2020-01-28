@extends('frontends.layouts.master')
@section('title', 'Swipe collection shop | swipe-shop.com')
@section('ogTitle', 'Swipe collection shop | swipe-shop.com')
@section('ogUrl', route('collections.index'))
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
                <li class="breadcrumb-item" aria-current="page">
                    {{ __('page.collection') }}
                </li>
            </ol>
        </nav>
    </div>
</section>
<section class="content">
    <div class="container">
        <div class="row mb-30">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 show-side">
                <button class="sp1 hidden-sm hidden-xs">Sidebar</button>
                <button id="btn-list"><i class="fas fa-list"></i></button>
                <button id="btn-grid"><i class="fas fa-th"></i></button>
                @if($products->count() > 0)
                <span class="sp2 hidden-xs">Showing {{$products->currentPage()}} - {{$products->lastItem()}} of {{$products->total()}} results</span>
                @endif
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6"></div>
        </div>
        <div class="row">
            <!-- content collection-->
            @include('frontends.pages.collections.includes.content')
             <!-- sidebar -->
            @include('frontends.pages.collections.includes.sidebar-left')
        </div>
    </div>
</section>
@endsection
@push('footer-script')
<script>
    $(document).ready(function(){
        'use trick';
        $("#btn-list").on("click",function(){
            $(".product-flower").addClass("pro-list");
            $("#btn-list").addClass("active-btn");
            $("#btn-grid").removeClass("active-btn");
        });
        $("#btn-grid").on("click",function(){
            $(".product-flower").removeClass("pro-list");
            $("#btn-list").removeClass("active-btn");
            $("#btn-grid").addClass("active-btn");
        });
    });
</script>
@endpush