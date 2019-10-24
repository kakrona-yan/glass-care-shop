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
                <li class="breadcrumb-item active">
                    <a href="{{ route('collection') }}"> {{ __('page.collection') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Glass iPhone X</li>
            </ol>
        </nav>
    </div>
</section>
<section class="content-product mb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12 mb-10">

            </div>
            <div class="col-md-5 col-xs-12 mb-10">
                <div class="product-title">
                    <h5><a href="{{ route('collection.detail', $slug) }}">iPhone X</a></h5>
                    <p>HL34-LS-0428</p>
                    <div class="prince">$207.2<s class="strike">$250.9</s></div>
                    <div class="product-decription">
                        <h5><i class="fas fa-atom"></i> Specifications</h5>
                        <ul class="list-detail">
                            <li>DESIGNED FOR iPHONE - The Purity Screen Protector for iPhone 8 / 7 is an ultra-thin tempered glass screen protector designed to provide ultimate protection for your iPhone's screen.</li>     
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
