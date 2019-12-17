<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 float-right">
    <div class="row content-flower">
        @foreach ($products as $product)
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 product-flower">
            <div class="product-box">
                <div class="product-image-flower">
                    <figure class="img-cavas mx-h-180">
                        <a href="{{ route('collections.detail', $product->slug) }}">
                            <img src="{{$product->thumbnail? asset(getUploadUrl($product->thumbnail, config('upload.product'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" alt="img-holiwood">
                        </a>
                    </figure>
                    <p class="product-box--category d-rs-none">
                        <i class="fas fa-tags mr-1"></i>
                        <span>{{$product->category ? $product->category->name : ''}}</span>
                    </p>
                </div>
                <div class="product-box--content">
                    <div class="product-title-flower">
                        <h5><a href="{{ route('collections.detail', $product->slug) }}">{{$product->title}}</a></h5>
                        <p class="product-box--user">By Ower</p>
                        <p class="p-title">{{$product->product_code}}</p>
                        <div class="prince">${{$product->price}}</div>
                        <div class="product-decription p-title">
                            <h4><i class="fas fa-atom"></i> Specifications</h4>
                            <p>{{$product->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @if( Session::has('flash_danger') )
        <p class="alert text-center {{ Session::get('alert-class', '') }}">
            <span class="spinner-border spinner-border-sm text-danger align-middle"></span> {{ Session::get('flash_danger') }}
        </p>
    @endif
    <div class="row">
        <!-- pagination collection-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pagi">
            {{ $products->appends(request()->query())->links() }}
        </div>
    </div>
</div>