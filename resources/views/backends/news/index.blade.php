@extends('backends.layouts.master')
@section('title', __('news.title'))
@section('content')
<div id="news-list">
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('dashboard.title') }}
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="sub-title">{{ __('news.sub_title') }}</span>
                </li>
            </ol>
        </nav>
        <a href="{{route('news.create')}}" 
            class="btn btn-circle btn-primary"
            data-toggle="tooltip" 
            data-placement="left" title="" 
            data-original-title="{{__('button.add_new')}}"
        ><i class="fas fa-plus-circle"></i> {{__('button.add_new')}}</a>
    </div>
    <!--list news-->
    @include('backends.news.include._list_news')
</div>

@endsection