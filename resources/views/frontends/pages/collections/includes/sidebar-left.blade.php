 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar" style="clear: left;">
    <div class="collapse navbar-collapse" id="mysidebar">
        <ul class="list-group list-3">
            <li class="list-group-item">CATEGORY PRODUCT</li>
            @foreach ($categories as $category)
            <li class="list-group-item list-item">
                <a href="{{ route('collections.index')}}?category={{$category->id}}">{{ $category->name}}</a><span>{{$category->products_count}}</span>
            </li>
            @endforeach
        </ul>
        <ul class="list-group list-3">
            <li class="list-group-item">CATEGORY BLOG</li>
            @foreach ($newsCategories as $category)
            <li class="list-group-item list-item">
                <a href="{{ route('blog.index')}}?category={{$category->id}}">{{ $category->name}}</a><span>{{$category->news_count}}</span>
            </li>
            @endforeach
        </ul>
         <div class="list-group list-3">
            <div class="list-group-item">ABOUT US</div>
            <div class="list-group-item list-item text-center">
                <a href="{{route('about')}}">
                    <img src="{{ URL('images/about.jpg') }}" alt="Swipe">
                </a>
                <h3>Swipe</h3>
                <p>Swipe company is a company which provides phone accessories such as screen protector and phone cables. </p>
            </div>
         </div>
    </div>
</div>