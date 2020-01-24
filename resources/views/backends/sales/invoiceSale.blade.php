<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice - #{{ $sale->quotaion_no }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style type="text/css">
        body {
            margin: 0px;
            color: #333;
            text-align: left
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
            font-weight: bold;
        }
        .company-info h1{
            font-family: Anton, sans-serif;
        }
        *,
        *::before,
        *::after {
        box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
        .container{
            padding-left: 10px;
            padding-right: 10px;
            max-width: 794px;
            width: 100%;
            margin: 0px auto;
        }
        h1{
            font-size: 2.5rem;
        }
        p {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            table-layout: fixed;
        }
        .table-bordered {
            border: 1px solid #e3e6f0;
        }
        .table th, .table td {
            padding: 0.75rem;
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
            padding-left: 0.75rem;
            padding-right: 0px ;
        }
    </style>

</head>
<body>
    <div class="container mt-5">
        <div class="company-info mb-3">
            <div class="company-info--name">
                <h1>Ratanak Ratana Co., Ltd</h1>
            </div>
            <div class="company-info--address">
                <p>Address :#112 , St.215 , Sangkat VealVong , Khan 7 Makara , Phnom Penh</p>
                <p>Tel : 012-599779 - 060-599779 - 086-774297</p>
            </div>
        </div>
        <table class="table">
            <tr>
                <td class="pd-left">
                    <table class="table table-bordered">
                        <thead style="background:#eee">
                            <tr>
                                <th>Customer</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="height: 106px;">
                                <p>{{ $sale->customer ? $sale->customer->name : '' }}</p>
                                <p>{{ $sale->customer ? $sale->customer->phone1 : '' }}</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td class="pd-right">
                    <table class="table table-bordered">
                        <thead style="background:#eee">
                            <tr>
                                <th>Date</th>
                                <th>Invoice Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ date('d/m/Y', strtotime($sale->sale_date))}}</td>
                                <td>{{ $sale->quotaion_no }}</td>
                            </tr>
                            <tr style="background:#eee">
                                <th colspan="2">Staff</th>
                            </tr>
                            <tr>
                                <td colspan="2">{{ $sale->staff ? $sale->staff->lastname $sale->staff->firstname: \Auth::user()->name} }}</td>
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
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
            @php
                $total = 0;
            @endphp
            @foreach ($sale->productSales as $productSale)
                @php
                    $total +=$productSale->amount;
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
                    <td colspan="3" class="text-right">Total</td>
                    <td class="text-right">${{$total}}</td>
                </tr>
            </tfoot>
        </table>
        </div>
    </div>
</body>
</html>