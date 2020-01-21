@extends('backends.layouts.master')
@section('title', 'Sale Management')
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
                    <span class="sub-title">Sale Product</span>
                </li>
            </ol>
        </nav>
        <a href="{{route('sale.create')}}" class="btn btn-circle btn-primary" data-toggle="tooltip" data-placement="left" title="" data-original-title="{{__('button.add_new')}}"><i class="fas fa-plus-circle"></i> {{__('button.add_new')}}</a>
    </div>
</div>
<div class="row mb-2">
    <div class="col-12">
        <!-- Circle Buttons -->
        <div class="card mb-4">
            <div class="card-body">
                <form id="product-search" action="{{ route('sale.index') }}" method="GET" class="form form-horizontal form-search form-inline mb-2">
                    
                </form>
               <fieldset class="edit-master-registration-fieldset">
                    <legend class="edit-application-information-legend text-left">Sale Product:</legend>
                    <div class="table-responsive cus-table">
                    <table class="table table-striped table-bordered">
                        <thead class="bg-primary text-light">
                            <tr>
                                <th>#No</th>
                                <th>Invoice Code</th>
                                <th>Customer Name</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Sale Date</th>
                                <th>Staff</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </fieldset>
                <div class="d-flex justify-content-center">
                    
                </div>
                @if( Session::has('flash_danger') )
                    <p class="alert text-center {{ Session::get('alert-class', 'alert-danger') }}">
                        <span class="spinner-border spinner-border-sm text-darktext-danger align-middle"></span> {{ Session::get('flash_danger') }}
                    </p>
                @endif
            </div>
        </div>
    </div>
</div><!--/row-->

@endsection