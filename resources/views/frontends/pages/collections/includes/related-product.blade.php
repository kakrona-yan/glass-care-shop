@push('head-styles')
<link rel="stylesheet" type="text/css" href="{{ URL('theme/slick/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL('theme/slick/slick-theme.css') }}">   
@endpush
<section class="related-products mt-5">
    <div class="container">
        <h3 class="slider-title">Related products</h3>
         @if( Session::has('flash_danger') )
            <p class="alert text-center {{ Session::get('alert-class', '') }}">
                <span class="spinner-border spinner-border-sm text-danger align-middle"></span> {{ Session::get('flash_danger') }}
            </p>
        @else
            <div class="container">
                <div class="row">
                    <div class="product-slick slider">
                        @foreach ($relatedProducts as $relatedProduct)
                        <div class="product-slic product-box">
                            <div class="product-image-slic">
                                <figure class="img-cavas mx-h-200">
                                    <a href="{{ route('collections.detail', $relatedProduct->slug) }}">
                                        <img src="{{$relatedProduct->thumbnail? asset(getUploadUrl($relatedProduct->thumbnail, config('upload.product'))) : asset('images/no-thumbnail.jpg') }}" class="img-responsive" 
                                        alt="{{$relatedProduct->title}}">
                                    </a>
                                </figure>
                            </div>
                            <div class="product-title-slic">
                                <h5><a href="{{ route('collections.detail', $relatedProduct->slug) }}">{{$relatedProduct->title}}</a></h5>
                                <div class="prince">${{$relatedProduct->price}}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
@push('footer-script')
<script src="{{ URL('theme/js/function-slick.js') }}"></script>
@endpush