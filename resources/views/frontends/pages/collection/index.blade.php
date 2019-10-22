@extends('frontends.layouts.master')
@section('title', 'Glass care shop | collection')
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
                <button class="sp1 hidden-sm hidden-xs">Show Sidebar</button>
                <button class="btn-hide hidden-sm hidden-xs">Hide Sidebar</button>
                <button id="btn-list"><i class="fas fa-list"></i></button>
                <button id="btn-grid"><i class="fas fa-th"></i></button>
                <span class="sp2 hidden-xs">Showing 1 - 12 of 30 results</span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                
            </div>
        </div>
        <div class="row">
            <!-- sidebar -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar" style="clear: left;">
                <div class="collapse navbar-collapse" id="mysidebar">
                    <ul class="list-group list-3">
                        <li class="list-group-item">GlASS SCREEN</li>
                        <li class="list-group-item list-item">
                            <a href="#">iPhone x</a><span>(15)</span>
                        </li>
                        <li class="list-group-item list-item">
                            <a href="#">iPhone 11</a><span>(29)</span>
                        </li>
                        <li class="list-group-item list-item">
                            <a href="#">iPhone 7</a><span>(10)</span>
                        </li>
                        <li class="list-group-item list-item">
                            <a href="#">iPad</a><span>(16)</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- content collection-->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content-flower">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 product-flower">
                    <div class="product-image-flower">
                        <figure class="img-cavas">
                            <a href="#">
                                <img src="{{ URL('theme/img/430x490.png') }}" class="img-responsive" alt="img-holiwood">
                            </a>
                        </figure>
                    </div>
                    <div class="product-title-flower">
                        <h5><a href="#">Queen Rose - Pink</a></h5>
                        <p class="p-title">It is a long established fact that a reader will be distracted by the
                            readable content of a<br class="hidden-sm hidden-xs"> page when looking at its layout.
                        </p>
                        <div class="prince">$207.2<s class="strike">$250.9</s></div>
                    </div>
                </div>
                <!-- pagination collection-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pagi">
                    <ul class="pagination">
                      
                    </ul>
                </div>
            </div>
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