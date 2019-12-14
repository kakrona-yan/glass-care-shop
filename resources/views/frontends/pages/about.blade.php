@extends('frontends.layouts.master')
@section('title', 'Swipe | about')
@section('content')
<section class="banner-top">
    <div class="container">
        <div class="title-banner text-center">
            <h1>{{ __('page.about') }} Us</h1>
        </div>
        <nav aria-label="breadcrumb" class="row">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item active">
                    <a href="{{ route('home') }}"><i class="fas fa-home"></i> {{ __('page.home') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    {{ __('page.about') }}
                </li>
            </ol>
        </nav>
    </div>
</section>
<section class="wellcome">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-well">
                <div class="media">
                    <div class="media-left">
                        <figure class="img-cavas">
                            <a href="#" class="img-cicle-100">
                                <img src="{{ URL('theme/img/115x115.png') }}" alt="img-holiwood">
                            </a>
                        </figure>
                    </div>
                    <div class="media-body">
                        <h1>WELLCOME TO Swipe</h1>
                        <h2>MR.OWNER</h2>
                    </div>
                </div>
                <p>Floristry can involve the cultivation of flowers as well as their arrange-ment, and to the business of selling them. Much of the raw material supplied for the floristry trade comes from the cut flowers industry<br><br>
                    Florist shops are the main flower-only outlets, but supermarkets, garden supply stores also sell flowers</p>
                    <div class="social-well">
                        <span>SOCIAL:</span>
                        <a href="#" id="link-insta2"></a>
                        <a href="#" id="link-fb2"></a>
                        <a href="#" id="link-tw2"></a>
                    </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 img-well">
                <figure class="img-cavas">
                    <a href="#">
                        <img src="{{ URL('theme/img/660x360.png') }}" alt="img-holiwood">
                    </a>
                </figure>
            </div>
        </div>
    </div>
</section>
<!--Blog-->
@include('frontends.includes.blog')
@endsection