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
        <div class="glass-quarter">
            <img src="{{ URL('theme/img/product1.jpg') }}" style="width:100%">
        </div>
        <div class="glass-quarter">
            <img src="{{ URL('theme/img/product3.jpg') }}" style="width:100%">
        </div>
        <!-- Modal for full size images on click-->
        <div id="modal01" class="glass-modal glass-black" style="padding-top:0" onclick="this.style.display='none'">
            <span class="glass-button glass-black glass-xlarge glass-display-topright btn-red">&times;</span>
            <div class="glass-modal-content glass-animate-zoom glass-center glass-transparent glass-padding-64">
                <img id="img01" class="glass-image">
                <p id="caption"></p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('footer-script')
<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }
</script>
@endpush