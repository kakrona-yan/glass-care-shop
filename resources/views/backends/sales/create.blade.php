@extends('backends.layouts.master')
@section('title', 'Create Sale Product')
@section('content')
<div id="category-list">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('dashboard.title') }}
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="sub-title"> Sale Product</span>
                </li>
            </ol>
        </nav>
        <a href="{{route('sale.index')}}" 
            class="btn btn-circle btn-primary"
            data-toggle="tooltip" 
            data-placement="left" title="" 
            data-original-title="Sale Product"
        ><i class="fas fa-list mr-1"></i> Sale Product</a>
    </div>
    <div class="row mb-2">
        <div class="col-12 tab-card">
            <!-- Circle Buttons -->
            <div class="card mb-4">
                <div id="supplierList" class="card-body collapse show">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="addsupplier" class="tab-pane active">
                            <form class="form-main" action="{{route('sale.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-7 mb-3">
                                        <fieldset class="edit-master-registration-fieldset">
                                            <legend class="edit-application-information-legend text-left">Sale:</legend>
                                            <div class="form-group select-group">
                                            <div for="category text-center"><i class="fas fa-tags"></i> {{__('product.list.category')}}</div>
                                            <select class="form-control w-50" id="category_id" name="category_id">
                                                <option value="">Please select</option>
                                                @foreach($categories as $id => $name)
                                                    <option value="{{ $id }}" {{ $id == $request->category_id ? 'selected' : '' }}>{{ $name }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="form-group select-group">
                                            <div for="category text-center"><i class="fas fa-user"></i> Customer</div>
                                            <select class="form-control w-50" id="customer_id" name="customer_id">
                                                <option value="">Please select</option>
                                                @foreach($customers as $id => $name)
                                                    <option value="{{ $id }}" {{ $id == $request->customer_id ? 'selected' : '' }}>{{ $name }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-md-5 mb-3">
                                        <fieldset class="edit-master-registration-fieldset">
                                            <legend class="edit-application-information-legend text-left">Product:</legend>
                                            <div class="form-group select-group list-product">
                                                <div id="list_product"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </form><!--/form-main-->
                        </div><!--/tab-add-category-->
                    </div>
                </div>
            </div>
        </div>
    </div><!--/row-->
</div>
@endsection
@push('footer-script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function(){
        $("#category_id").select2({
            allowClear: false
        }).on('select2:select', function (e) {
            let routeUrl = "{{config('app.url')}}/admin/sales/product";
            let category_id = e.params.data.id;
            $.ajax({
                url     : routeUrl,
                type    : 'GET',
                data    : {category_id},
                dataType: 'json',
                success : function (data) {
                    if(data.code == 200) {
                        $('#list_product').html(renderProduct(data.productOrders));
                    }
                },
                error: function(json){
                }
            });
        });
        $('#customer_id').select2({
            allowClear: false
        });
    });
    /**
    * Render is html
    * @param productOrders
    * return {html}
    */
    function renderProduct(productOrders) {
       let html = '';
        html +='<div class="check-product">';
        html +='<ul class="m-0 p-0">';
        for (let index = 0; index < productOrders.length; index++) {
            const productOrder = productOrders[index];
            html +='<li>';
            html +=`<input type="checkbox" id="product_${productOrder.id}" />`;
            html +=`<label for="product_${productOrder.id}">`;
            html +=`<img src="{{config('app.url')}}/storage/images/product/${productOrder.thumbnail}" />`;
            html +=`<div class="py-1 text-center">${productOrder.title.slice(0, 10)+'...'}</div>`;
            html +=`<div class="py-1 text-center text-danger">${productOrder.price}$</div>`;
            html +='</label>';
            html +='</li>';
        }
        html +='</ul></div>';
        return html;
    }
</script>
@endpush