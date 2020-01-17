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
    $(function(){
        $("[name='parent_id'], [name='category_type']").select2({
            allowClear: false
        });
    });
    
</script>
@endpush