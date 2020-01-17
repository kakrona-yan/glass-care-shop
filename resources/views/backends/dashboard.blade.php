@extends('backends.layouts.master')
@section('title', 'Glass care | shop')
@section('content')
<div id="dashboard">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="mb-0 text-gray-800">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            Swipe
        </h5>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Product -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="fa-1x font-weight-bold text-primary text-uppercase mb-1"><a href="{{route('product.index')}}">Total Products</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$productCount}}</div>
                        </div>
                        <div class="col-auto">
                            <a href="{{route('product.index')}}"><i class="fab fa-product-hunt fa-3x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="fa-1x font-weight-bold text-danger text-uppercase mb-1"><a href="{{route('customer.index')}}">Total Customers</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$userCount}}</div>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('customer.index')}}"><i class="fas fa-users fa-3x text-danger"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="fa-1x font-weight-bold text-info text-uppercase mb-1"><a href="{{route('customer.index')}}">Total Customers</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$customerCount}}</div>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('customer.index')}}"><i class="fas fa-user fa-3x text-info"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="fa-1x font-weight-bold text-warning text-uppercase mb-1"><a href="{{route('staff.index')}}">Total Staffs</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$staffCount}}</div>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('staff.index')}}"><i class="fas fa-users fa-3x text-warning"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-header text-white bg-danger">
                    <div class="font-weight-bold">
                        <span>Total Category</span>
                    </div>
                </div>
                <div class="card-block py-0 px-4 b-t-1">
                    <div class="row">
                        <div class="col-4 b-r-1 py-3">
                            <a href="{{route('category.index')}}"><i class="fas fa-tags fa-1x text-danger"></i></a>
                        </div>
                        <div class="col-8 py-3 text-right">
                            <div class="font-weight-bold">{{$categoryCount}}</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="{{route('category.index')}}">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-header text-white bg-warning">
                    <div class="font-weight-bold">
                        <span>Total News</span>
                    </div>
                </div>
                <div class="card-block py-0 px-4 b-t-1">
                    <div class="row">
                        <div class="col-4 b-r-1 py-3">
                            <a href="{{route('news.index')}}"><i class="fas fa-newspaper fa-1x text-warning"></i></a>
                        </div>
                        <div class="col-8 py-3 text-right">
                            <div class="font-weight-bold">{{$newsCount}}</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="{{route('news.index')}}">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
        </div>
        <!-- Sale -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-header text-white bg-success">
                    <div class="font-weight-bold">
                        <span>Total Sales</span>
                    </div>
                </div>
                <div class="card-block py-0 px-4 b-t-1">
                    <div class="row">
                        <div class="col-4 b-r-1 py-3">
                            <div class="font-weight-bold">Total</div>
                        </div>
                        <div class="col-8 py-3 text-right">
                            <div class="font-weight-bold">0$</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="{{route('sale.index')}}">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card">
                <div class="card-header text-white bg-info">
                    <div class="font-weight-bold">
                        <span>Sales</span>
                        <span class="label pull-right">This Month</span>
                    </div>
                </div>
                <div class="card-block py-0 px-4 b-t-1">
                    <div class="row">
                        <div class="col-4 b-r-1 py-3">
                            <div class="font-weight-bold">Total</div>
                        </div>
                        <div class="col-8 py-3 text-right">
                            <div class="font-weight-bold">0$</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="{{route('sale.index')}}">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-7 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive cus-table">
                    <table class="table table-striped table-bordered">
                        <thead class="bg-primary text-light">
                            <tr>
                                <th>{{ __('product.list.thumbnail') }}</th>
                                <th>{{ __('product.list.product_title') }}</th>
                                <th>{{ __('product.list.category') }}</th>
                                <th>{{ __('product.list.product_code') }}</th>
                                <th>{{ __('product.list.product_import') }}</th>
                                <th>{{ __('product.list.price') }}</th>
                                <th>{{ __('product.list.price_discount') }}</th>
                                <th class="text-center">{{ __('product.list.active') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <div class="thumbnail-cicel">
                                            <img class="thumbnail" src="{{$product->thumbnail? getUploadUrl($product->thumbnail, config('upload.product')) : asset('images/no-thumbnail.jpg') }}" alt="{{$product->thumbnail}}" width="45"/>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->category ? $product->category->name : ""}}</td>
                                <td>{{$product->product_code}}</td>
                                <td>{{$product->product_import}}</td>
                                <td class="text-right">{{$product->price}}</td>
                                <td class="text-right">{{$product->price_discount}}</td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success" name="active"
                                            {{ $product->is_active == 1 ? 'checked' : '' }}
                                        > 
                                        <span class="slider"><span class="on">ON</span><span class="off">OFF</span>
                                        </span>
                                    </label>
                                </td>
                            </tr>
                        @endforeach 
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $products->appends(request()->query())->links() }}
                </div>
                </div>
            </div>
        </div><!--/col-12-->
        <div class="col-12 col-md-5 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Sales</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive cus-table">
                  
                    </div>
                </div>
            </div>
        </div><!--/col-12-->
    </div>
</div>
@endsection
