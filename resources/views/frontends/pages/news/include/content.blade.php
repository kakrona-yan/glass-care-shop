<div class="blog-content">
    @php
        $color = 1;    
    @endphp
    @foreach ($blogs as $blog)
    <div class="row">
        <div class="col-xs-12 col-md-5">
            <a href="{{ route('blog.detail', $blog->permalink )}}">
                <div class="post-day {{$color > 3 ? 'color-blue' : ''}}">{{date('d', strtotime($blog->created_at))}}</div>
                <img src="{{$blog->thumbnail? asset(getUploadUrl($blog->thumbnail, config('upload.news'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" alt="{{$blog->title}}">
            </a>
        </div>
        <div class="col-xs-12 col-md-7">
            <div class="blog--category">{{$blog->category ? $blog->category->name : ''}}</div>
            <div class="blog-title"><a href="{{ route('blog.detail', $blog->permalink )}}">{{$blog->title}}</a></div>
            <div class="blog--inline">
                <span class="inline"><i class="far fa-calendar-alt"></i><span> {{date('M, d Y', strtotime($blog->created_at))}}</span></span>
                <span class="inline"><i class="far fa-user"></i><span> {{$blog->author}}</span></span>
            </div>
            <div class="blog-description"> <p>{!! Str::limit(nl2br($blog->content), 245) !!}</p></div>
            <a href="{{ route('blog.detail', $blog->permalink )}}" class="read-more"><i class="fas fa-long-arrow-alt-right"></i> Read more</a>
        </div>
    </div>
    <div class="row-border-buttom"></div>
    @php
        $color ++;    
    @endphp
    @endforeach
    <div class="mt-20">
        {{ $blogs->appends(request()->query())->links() }}
    </div>
</div>