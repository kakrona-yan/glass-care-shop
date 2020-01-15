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
                    <div class="mb-30">
                        <img src="{{$news->thumbnail? asset(getUploadUrl($news->thumbnail, config('upload.news'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" alt="{{$news->title}}">
                    </div>
                    <div class="blog-detail-description">
                        {!! nl2br($news->content) !!}
                    </div>
                    <div class="blog-detail-related">
                        <section id="blog-list">
                            <div class="blog related-products mb-5">
                                <h1 class="slider-title">Related Articles</h1>
                                <div class="container">
                                    <div class="row">
                                        @foreach ($relatedPosts as $relatedPost)
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-blog">
                                            <a href="{{ route('blog.detail', $relatedPost->permalink )}}">
                                                <img src="{{$relatedPost->thumbnail? asset(getUploadUrl($relatedPost->thumbnail, config('upload.news'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" alt="{{$relatedPost->title}}">
                                            </a>
                                            <div class="time-blog">
                                                <span class="date-post"><i class="far fa-calendar-alt"></i><span> {{date('M, d Y', strtotime($relatedPost->created_at))}}</span></span>
                                            </div>
                                            <h5><a href="{{ route('blog.detail', $relatedPost->permalink )}}">{{Str::limit($relatedPost->title, 45)}}</a></h5>
                                        </div>
                                        @endforeach
                                    
                                    </div>
                                </div>
                            </div>
                        </section>
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