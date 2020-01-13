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
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Products</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$productCount}}</div>
                    </div>
                    <div class="col-auto">
                    <i class="fab fa-product-hunt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Prices</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">0$</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
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
        </div>
    </div>
</div>
@endsection
