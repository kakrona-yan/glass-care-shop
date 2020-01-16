<div class="sidebar">
    <div id="sidebar-1" class="widget">
        <h2 class="widget-title">ABOUT ME</h2>			
        <div class="textwidget">
            <a href="{{route('about')}}">
                <img src="{{ URL('images/about.jpg') }}" alt="Swipe">
            </a>
            <h3>Swipe</h3>
            <p>Swipe company is a company which provides phone accessories such as screen protector and phone cables. </p>
        </div>
    </div>
    <div id="sidebar-1-2" class="widget wellcome">
        <h2 class="widget-title">OUR SOCIAL</h2>
        <div class="social-well">
            <a href="#" id="link-insta2" target="_blank"></a>
            <a href="https://www.facebook.com/Swipe-111849350266066/" id="link-fb2" target="_blank"></a>
            <a href="#" id="link-tw2" target="_blank"></a>
        </div>
    </div>
    <div id="sidebar-1-2" class="widget">
        <h2 class="widget-title">LATEST POSTS</h2>
        @foreach ($latestNews as $latestPost)
        <div class="row mb-10">
            <div class="col-xs-12 col-md-4">
                <a href="{{ route('blog.detail', $latestPost->permalink )}}">
                    <img src="{{$latestPost->thumbnail? asset(getUploadUrl($latestPost->thumbnail, config('upload.news'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" alt="{{$latestPost->title}}">
                </a>
            </div>
            <div class="col-xs-12 col-md-8">
                <div class="blog-last-title"><a href="{{ route('blog.detail', $latestPost->permalink )}}">{!! Str::limit(nl2br($latestPost->title), 145) !!}</a></div>
                <span class="post-category">{{$latestPost->category ? $latestPost->category->name : ''}}</span></span>
                <span class="post-date"><i class="far fa-calendar-alt"></i><span> {{date('M, d Y', strtotime($latestPost->created_at))}}</span></span>
                
            </div>
        </div>
        @endforeach
    </div>
</div>