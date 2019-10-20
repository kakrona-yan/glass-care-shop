@extends('frontends.layouts.master')
@section('title', 'Glass care shop | contact us')
@section('content')
<section class="banner-top">
    <div class="container">
        <div class="title-banner text-center">
            <h1>{{ __('page.contact') }}</h1>
        </div>
        <nav aria-label="breadcrumb" class="row">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item active">
                    <a href="{{ route('home') }}"><i class="fas fa-home"></i> {{ __('page.home') }}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    {{ __('page.contact') }}
                </li>
            </ol>
        </nav>
    </div>
</section>
@endsection