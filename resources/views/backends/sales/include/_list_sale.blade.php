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
                        <table class="table table-bordered">
                            <thead class="bg-primary text-light">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Invoice Code</th>
                                    <th>Customer Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Sale Date</th>
                                    <th>Staff</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $sales as $sale)
                                    <tr>
                                        <td class="text-center">
                                            @if ($sale->productSales->count() > 0)
                                            <a href="#slae_{{$sale->id}}" data-toggle="collapse" style="text-decoration: none !important;"><i class="fas fa-plus-circle"></i></a>
                                            @endif
                                        </td>
                                        <td>{{$sale->quotaion_no}}</td>
                                        <td>{{$sale->customer ? $sale->customer->name : ''}}</td>
                                        <td>{{$sale->total_quantity}}</td>
                                        <td>{{$sale->total_amount}}</td>
                                        <td>{{date('Y-m-d', strtotime($sale->sale_date))}}</td>
                                        <td>{{$sale->staff ? $sale->staff->getFullnameAttribute() : ''}}</td>
                                        <td rowspan="{{$sale->productSales->count() > 0 ? 2 : 1}}">Coming</td>
                                    </tr>
                                    @if ($sale->productSales->count() > 0)
                                    <tr>
                                        <td colspan="7" id="slae_{{$sale->id}}" class="collapse">
                                            <table class="table table-borderless" style="table-layout: fixed;">
                                                <thead>
                                                    <tr>
                                                        <th class="text-success">Product Name</th>
                                                        <th class="text-success">Quantity</th>
                                                        <th class="text-success">Rate</th>
                                                        <th class="text-success">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($sale->productSales as $productSale)
                                                    <tr>
                                                        <td>{{$productSale->product ? $productSale->product->title : '' }}</td>
                                                        <td>{{$productSale->quantity}}</td>
                                                        <td>{{$productSale->rate}}</td>
                                                        <td>{{$productSale->amount}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $sales->appends(request()->query())->links() }}
                    </div>
                    @if( Session::has('flash_danger') )
                        <p class="alert text-center {{ Session::get('alert-class', 'alert-danger') }}">
                            <span class="spinner-border spinner-border-sm text-darktext-danger align-middle"></span> {{ Session::get('flash_danger') }}
                        </p>
                    @endif
                </fieldset>
            </div>
        </div>
    </div>
</div><!--/row-->