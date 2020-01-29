<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice - #{{ $sale->quotaion_no }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style type="text/css">
        @font-face {
			font-family: "KhmerOSBattambang";
			font-style: normal;
			font-weight: normal;
			src: url("{{ asset('fonts/KhmerOSBattambang-Regular.ttf') }}") format('truetype');
		}
		@page {
			margin: 0cm 0cm;
		}
		*,
		*::before,
		*::after {
		-webkit-box-sizing: border-box;
				box-sizing: border-box;
			margin: 0px;
			padding: 0px;
		}
        html, body {
            margin: 0px;
            color: #333;
            text-align: left;
            line-height: 24px;
            font-family: "KhmerOSBattambang", sans-serif !important;
            font-size: 14px;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            color: #333;
            border-collapse: collapse;
        }
        table th, table td{           
            color: #333;
        }
        tfoot tr td {
            color: #333;
        }
        .container{
            padding-left: 10px;
            padding-right: 10px;
            max-width: 794px;
            width: 100%;
            margin: 0px auto;
        }
        h1{
            font-size: 25px;
            margin: 5px 0px;
        }
        p {
            margin-top: 0;
            margin-bottom: 5px;
        }
        .table {
            width: 100%;
            margin-bottom: 5px;
        }
        .table-bordered {
            border: 1px solid #e3e6f0;
        }
        .table th, .table td {
            padding: 6px;
            vertical-align: top;
            border-top: 1px solid #e3e6f0;
        }
        .table-bordered th, .table-bordered td {
            border: 1px solid #e3e6f0;
        }
        .text-right {
            text-align: right;
        }
        .table td.pd-left {
            padding-left: 0px;
        }
        .table td.pd-right {
            padding-left: 6px;
            padding-right: 0px ;
        }
        .mt-5{
            margin-top: 50px;
        }
        .company-info--name{
            margin-bottom: 20px;
        }
    </style>

</head>
<body style="font-family: KhmerOSBattambang, sans-serif !important;">
    <div class="container mt-5">
        <div class="company-info mb-3">
            <div class="company-info--name">
                <h1>RRPS PHARMA CO., LTD</h1>
            </div>
            <div class="company-info--address">
                <p>អាស័យដ្ឋាន: ផ្ទះលេខ ១១២ ផ្លូវ ២២៥ សង្កាត់ វាលវង់ ខណ្ឌ ៧ មករា រាជធានីភ្នំពេញ</p>
                <p>ទូរស័ព្ទលេខ: ០៩៣ ៣៩៩ ៣៣០</p>
            </div>
        </div>
        <table class="table">
            <tr>
                <td class="pd-left" style="width: 400px;">
                    <table class="table table-bordered">
                        <thead style="background:#eee">
                            <tr>
                                <th>អតិថិជន / Customer</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="height:145px;">
                                <p>
                                    {{ $sale->customer ? $sale->customer->name : '' }}
                                </p>
                                <p>
                                    {{ $sale->customer ? $sale->customer->phone1 : '' }}
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td class="pd-right">
                    <table class="table table-bordered">
                        <thead style="background:#eee">
                            <tr style="text-align: center;">
                                <th>កាលបរិច្ឆេទ<br/>Date</th>
                                <th>លេខកូតវិក័យបត្រ័<br/>Invoice #</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="text-align: center;">
                                <td>{{ date('d/m/Y', strtotime($sale->sale_date))}}</td>
                                <td>{{ $sale->quotaion_no }}</td>
                            </tr>
                            <tr style="background:#eee; text-align: center;">
                                <th style="text-align: center;">បុគ្គលិក<br/>Staff</th>
                                <th>ស្តុក<br/>Stock</th>
                            </tr>
                            <tr>
                                <td>{{$sale->staff ? $sale->staff->getFullnameAttribute() : \Auth::user()->name}}</td>
                                <td>Stock</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
        <div class="list-sale">
            <table class="table table-bordered">
            <thead style="background:#eee">
                <tr>
                    <th>ឈ្មោះ​ផលិតផល / Product Name</th>
                    <th>បរិមាណ / Quantity</th>
                    <th>ប្រាក់ / Rate</th>
                    <th>ចំនួនទឹកប្រាក់ / Amount</th>
                </tr>
            </thead>
            <tbody>
            @php
                $total = 0;
                $totalQuantity=0;
            @endphp
            @foreach ($sale->productSales as $productSale)
                @php
                    $total +=$productSale->amount;
                    $totalQuantity +=$productSale->quantity;
                @endphp
                <tr>
                    <td>{{$productSale->product ? $productSale->product->title : '' }}</td>
                    <td class="text-right">{{$productSale->quantity}}</td>
                    <td class="text-right">{{$productSale->rate}}</td>
                    <td class="text-right">{{$productSale->amount}}</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right">សរុប/Total</td>
                    <td class="text-right">USA {{money_format('%.2n', $total)}}</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">ចំនួនទំនិញដែលបានប្រគល់អោយ</td>
                    <td class="text-right" style="background:#b9b9b9">{{$totalQuantity}}</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">ចំនួនលុយដែលបានទទួល</td>
                    <td class="text-right" style="background:#b9b9b9">USA {{$sale->money_change}}</td>
                </tr>
                
            </tfoot>
        </table>
        <div style="text-align: right; margin-top: 50px;">
            <p>ចុះហត្ថលេខា / Sign ..............................................</p>
        </div>
        </div>
    </div>
</body>
</html>