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
    <div id="sidebar-2" class="widget wellcome">
        <h2 class="widget-title">OUR SOCIAL</h2>
        <div class="social-well">
            <a href="#" id="link-insta2" target="_blank"></a>
            <a href="https://www.facebook.com/Swipe-111849350266066/" id="link-fb2" target="_blank"></a>
            <a href="#" id="link-tw2" target="_blank"></a>
        </div>
    </div>
    <div id="sidebar-3" class="widget">
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
    <div id="sidebar-4" class="widget">
        <h2 class="widget-title">LETS BE FRIENDS</h2>
        <div class="fb-box">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSwipe-111849350266066%2F&tabs&width=390&height=120&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1447500041927298" width="390" height="120" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
    </div>
    <div id="sidebar-4" class="widget">
        <h2 class="widget-title">Category Types</h2>
        <div class="category-box">
            <h3>Products</h3>
            <div class="category-type">
                @foreach ($productCategories as $productCategory)
                <a href="{{ route('collections.index')}}?category={{$productCategory->id}}">{{$productCategory->name}}</a>
                @endforeach
            </div>
            <h3>Blogs</h3>
            <div class="category-type">
                @foreach ($newsCategories as $newsCategory)
                <a href="{{ route('blog.index')}}?category={{$newsCategory->id}}">{{$newsCategory->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>