<form id="category-search" action="{{ route('collections.index') }}" method="GET" class="form form-horizontal form-search form-inline mb-2">
 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar" style="clear: left;">
    <div class="collapse navbar-collapse" id="mysidebar">
        <ul class="list-group list-3">
            <li class="list-group-item">GlASS SCREEN</li>
            @foreach ($categories as $category)
                <li class="list-group-item list-item">
                <a href="{{ route('collections.index')}}?category={{$category->id}}">{{ $category->name}}</a><span>{{$category->products_count}}</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>
</form>