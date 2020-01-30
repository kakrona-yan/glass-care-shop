<section id="blog-list">
    <div class="blog related-products mb-5">
        <h1 class="slider-title" style="border-top:none;">Latest Blogs</h1>
        <div class="container">
            <div class="row">
                @php
                    $color = 1;    
                @endphp
                @foreach ($blogs as $blog)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-blog mb-30">
                        <div class="product-blog-box">
                            <a href="{{ route('blog.detail', $blog->permalink )}}">
                                <div class="post-day {{$color > 3 || $color % 2 == 0 ? 'color-blue' : ''}}">
                                    <div class="day">{{date('d', strtotime($blog->created_at))}}</div>
                                    <div class="month">{{date('M', strtotime($blog->created_at))}}</div>
                                </div>
                                <img src="{{$blog->thumbnail? asset(getUploadUrl($blog->thumbnail, config('upload.news'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" alt="{{$blog->title}}">
                            </a>
                            <div class="product-blog-detail">
                                <div class="time-blog">
                                    <span class="time"><i class="far fa-calendar-alt"></i><span> {{date('M, d Y', strtotime($blog->created_at))}}</span></span>
                                    <span class="time"><i class="far fa-user"></i><span> {{$blog->author}}</span></span>
                                </div>
                                <h5><a href="{{ route('blog.detail', $blog->permalink )}}">{{Str::limit($blog->title, 45)}}</a></h5>
                                <a href="{{ route('blog.detail', $blog->permalink )}}" class="read-more"><i class="fas fa-long-arrow-alt-right"></i> Read more</a>
                            </div>
                        </div>
                    </div>
                    @php
                        $color ++;
                    @endphp
                @endforeach
               
            </div>
        </div>
    </div>
</section>