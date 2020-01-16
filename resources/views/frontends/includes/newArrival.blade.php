<section id="new-arrival">
    <div class="deal-day count">
        <div class="title-center">
            <h1>Shop New Arrivals</h1>
            <p>More recently with Shop Best Sellers</p>
        </div>
        @if( Session::has('flash_danger') )
            <p class="alert text-center {{ Session::get('alert-class', '') }}">
                <span class="spinner-border spinner-border-sm text-danger align-middle"></span> {{ Session::get('flash_danger') }}
            </p>
        @else
            <div class="container">
                <div class="row">
                    <div class="product-slick slider">
                        @php
                            $color = 1;    
                        @endphp
                        @foreach ($products as $product)
                        <div class="product-slic product-box">
                            <div class="product-image-slic {{$color > 2 ? 'border-pink' : ''}}">
                                <div class="product-cagegory {{$color > 2 ? 'color-pink' : ''}}">
                                    <a href="{{ route('collections.index')}}?category={{$product->category->id}}"><i class="fas fa-bullhorn mr-1"></i>{{$product->category->name }}</a>
                                </div>
                                <figure class="img-cavas mx-h-200">
                                    <a href="{{ route('collections.detail', $product->slug) }}">
                                        <img src="{{$product->thumbnail? asset(getUploadUrl($product->thumbnail, config('upload.product'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" alt="{{$product->title}}">
                                    </a>
                                </figure>
                                <div class="product-icon-slic">
                                    <a href="#product_{{$product->id}}" data-toggle="modal" data-target="#product_{{$product->id}}"><i class="far fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-title-slic">
                                <h5><a href="{{ route('collections.detail', $product->slug) }}">{{$product->title}}</a></h5>
                                <div class="prince">${{$product->price}}</div>
                            </div>
                        </div>
                        @php
                            $color ++;
                        @endphp
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="category">
                <!-- Modal quick view -->
                @foreach ($products as $product)
                    <div id="product_{{$product->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="product-content row">
                                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                            <div class="img-content">
                                                <img src="{{$product->thumbnail? asset(getUploadUrl($product->thumbnail, config('upload.product'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" alt="img-holiwood">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
                                            <h1>{{$product->title}}</h1>
                                            <div class="product-box--user">By Ratanak</div>
                                            <div class="product-box--category">
                                                <i class="fas fa-bullhorn mr-1 text-blue-100"></i>
                                                <span>{{$product->category ? $product->category->name : ''}}</span>
                                            </div>
                                            <p class="p-title">{{$product->product_code}}</p>
                                            <div class="prince">Price:<span>${{$product->price}}</span></div>
                                            <div class="product-decription p-title">
                                                <h4><i class="fas fa-atom"></i> Specifications</h4>
                                                <p>{!! nl2br($product->description) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>