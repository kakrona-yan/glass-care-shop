@extends('frontends.layouts.master')
@section('title', 'Swipe | news')
@section('content')
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
    <div class="container">
        @include('frontends.pages.news.include.slider')
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