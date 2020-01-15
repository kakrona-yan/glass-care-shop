@extends('frontends.layouts.master')
@section('title', 'Swipe | news detail')
@section('content')
<div class="blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="blog-detail--content">
                    <div class="blog-detail--title">{!! $news->title !!}</div>
                    <div class="blog-detail--categoy">{{$news->category ? $news->category->name : ''}}</div>
                    <div class="blog-header-text">
                        <span class="blog-detail-creator"><i class="far fa-user"></i> {{$news->author}}</span>
                        <span class="blog-detail-date"><i class="far fa-calendar-alt"></i><span> {{date('M, d Y', strtotime($news->created_at))}}</span>
                    </div>
                    <div class="mb-10">
                        <img src="{{$news->thumbnail? asset(getUploadUrl($news->thumbnail, config('upload.news'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" alt="{{$news->title}}">
                    </div>
                    <div class="blog-detail-description">
                        {!! nl2br($news->content) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                @include('frontends.pages.news.include.sidebar-right')
            </div>
        </div>
    </div>
</div>
@endsection