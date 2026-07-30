@extends('layouts.app')
@section('title', 'Bluemoon Crackers Products')
@section('main-content')

    @php
        $page = App\Models\PageOff::where('status', 1)->first();
        $user = Auth::guard('customer')->user();

    @endphp

    <style>
        .header,
        .footer {
            text-align: center;
        }

        .company-info {
            text-align: center;
            font-size: 18px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .details-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .details-table td {
            padding: 5px 10px;
            vertical-align: top;
        }

        .estimate-title {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            margin: 10px 0;
        }

        table.invoice {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        table.invoice th,
        table.invoice td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        table.invoice th {
            background-color: #f2f2f2;
        }

        .totals {
            width: 100%;
            margin-top: 10px;
            font-weight: bold;
        }

        .totals td {
            padding: 6px 10px;
            text-align: right;
        }

        .contact,
        .bank-details {
            width: 48%;
            display: inline-block;
            vertical-align: top;
            font-size: 14px;
            margin-top: 10px;
        }

        .footer {
            margin-top: 40px;
            font-size: 13px;
            color: #666;
        }

        hr {
            margin: 20px 0;
        }
        p{
                margin-bottom: 0px;
    line-height: 32px;
        }

         .invoice th,
    .invoice td {
        padding: 8px;
        text-align: center;
        border: 1px solid #ccc;
        white-space: nowrap;
    }

    .invoice thead {
        background-color: #f8f8f8;
    }

    @media (max-width: 768px) {
        .invoice {
            font-size: 14px;
        }
    }
    </style>



    <section class="product-area product-category-area">
        <div class="container">
            <div class="row mt-5 mb-5">

                <div class="col-lg-12 text-center">
                    <h1 style="color: #7462e3;">THANK YOU!</h1>
                    <p>for choosing Bluemoon Crackers
                    </p>
                    <p>Thank You! Your enquiry has been received Please make the payment of #bill amount using the below QR
                        code or any one of the Bank Aaccount given below. Once payment is done kindly inform us through
                        phone call or whatsapp at 9087873737, 9087980098 Please note that your order will not dispatch until
                        make the full payment.
                        🥳</p>
                </div>

                <div class="col-lg-12 text-center pt-5">
                    <img src="/assets/img/payment.png"
                        style="border-radius: 100px; width:34%">
                </div>
                <div class="col-lg-12 text-center pt-5">
                    <img src="/assets/img/qrcode.webp"
                        style="border-radius: 10px; width:30%">
                </div>
                <div class="col-lg-6 col-sm-12 text-center pt-5" style="text-align:left">
                    <img src="/assets/img/axis.jpg" style="border-radius: 10px;width:30%">
                    <p>Account Number (Current Account)</p>
                    <p style="font-weight: bold">922020057877047</p>
                    <p>Account Name :<span style="font-weight: bold">PRAKASH</span> </p>
                    <p>IFSC Code:<span style="font-weight: bold">UTIB0000089</span> </p>
                    <p>Branch Name:<span style="font-weight: bold">Sivakasi Branch</span> </p>

                </div>
                <div class="col-lg-6 col-sm-12 text-center pt-5" style="text-align:left">
                    <img src="/assets/img/indianbank.png" style="border-radius: 10px;width:30%">
                    <p>Account Number (Current Account)</p>
                    <p style="font-weight: bold">50392558001</p>
                    <p>Account Name :<span style="font-weight: bold">KRISHNA TRADERS</span> </p>
                    <p>IFSC Code: <span style="font-weight: bold"> IDIBOOOS733</span></p>
                    <p>Branch Name:<span style="font-weight: bold">Sivakasi Branch</span></p>

                </div>

                <div class="col-lg-12 " style="border: 1px solid;margin-top:20px">

                     @php
                         $estimate = App\Models\ProductOrder::where('user_id', $user->id)->orderBy('oeder_id', 'desc')->first();

                    @endphp

                    <div class="row">
                        <div class="col-lg-4 co-md-4 col-sm-12 text-center mt-2">
                            <strong >Order No:</strong> {{ $estimate->oeder_id }}
                        </div>
                         <div class="col-lg-4 co-md-4 col-sm-12 text-center mt-2">
                             <div class="" style="font-weight: 600">ESTIMATE</div>
                        </div>
                         <div class="col-lg-4 co-md-4 col-sm-12 text-center mt-2">
                            Date: <strong>{{ $estimate->created_at->format('d-m-Y') }}</strong>
                        </div>

                    </div>
                    <hr>
                       <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 text-center mt-0">
                            <strong > Mobile:</strong> 9087605060
                        </div>
                         <div class="col-lg-4 col-md-4 col-sm-12 text-center ">
                            <p style="font-weight: 600">Bluemooncrackers</p>
                            <p>2/630-H, Balaji Nagar 7th Street, Near SR Palace, Sithurajapuram, Sivakasi – 626 123</p>
                        </div>
                         <div class="col-lg-4 col-sm-12 text-center mt-0">
                           E-mail: <strong>orders@bluemooncrackers.com</strong>
                        </div>

                    </div>


{{--
                    <table class="details-table">
                        <tr>
                            <td><strong>Order No:</strong> {{ $estimate->oeder_id }}</td>
                            <td><strong>E-mail:</strong> orders@bluemooncrackers.com</td>
                        </tr>
                        <tr>
                            <td><strong>Mobile:</strong> 9087605060</td>
                        </tr>
                    </table> --}}

                    <hr>
                    <div class="row details-table">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                             <strong>Customer Details</strong><br>
                                {{ $user->name }}<br>
                                {{ $user->phone_number }}<br>
                                {{ $user->email }}<br>
                                {{ $user->address }}<br>
                                 {{ $user->city }},{{ $user->state }}

                        </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                             <strong>Bank Details</strong><br>
                                A/C Name: Prakash<br>
                                A/C Number: 922020057877047<br>
                                A/C Type: Current<br>
                                Bank: Axis Bank<br>
                                IFSC: UTIB0000089

                        </div>

                    </div>

                    {{-- <table class="details-table">
                        <tr>
                            <td>
                                <strong>Customer Details</strong><br>
                                {{ $user->name }}<br>
                                {{ $user->phone_number }}<br>
                                {{ $user->email }}<br>
                                {{ $user->address }}<br>
                                {{ $user->state }}, {{ $user->city }}, {{ $user->pincode }}
                            </td>
                            <td class="text-end">
                                <strong>Bank Details</strong><br>
                                A/C Name: Prakash<br>
                                A/C Number: 922020057877047<br>
                                A/C Type: Current<br>
                                Bank: Axis Bank<br>
                                IFSC: UTIB0000089
                            </td>
                        </tr>
                    </table> --}}
                    <div style="overflow-x: auto; width: 100%;">
                    <table class="invoice" style="width: 100%; min-width: 600px; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th>S.No</th>

                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Rate / Qty</th>
                                <th>Discount</th>
                                <th>Final Rate</th>
                                <th>Amount (Rs)</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $latestOrderId = App\Models\ProductSlot::where('user_id', $user->id)
                                    ->orderBy('order_id', 'desc')
                                    ->value('order_id');

                                // Step 2: Get related data only for that order_id
                                $productdata = App\Models\ProductSlot::join(
                                    'product_orders',
                                    'product_orders.oeder_id',
                                    '=',
                                    'product_slots.order_id',
                                )
                                    ->join('products', 'products.id', '=', 'product_slots.product_id')
                                    ->select(
                                        'product_slots.*',
                                        'product_orders.sub_total',
                                        'product_orders.discount',
                                        'product_orders.total',
                                        'products.product_name',
                                        'products.product_mrp_price',
                                        'products.product_regular_price',
                                        'product_orders.shipping'

                                    )
                                    ->where('product_slots.user_id', $user->id)
                                    ->where('product_slots.order_id', $latestOrderId)
                                    ->get();

                                $count = App\Models\ProductSlot::where('user_id', $user->id)->where('order_id', $latestOrderId)->count();
                                $qty = App\Models\ProductSlot::where('user_id', $user->id)->where('order_id', $latestOrderId)->sum('qty');

                                $i = 1;

                                $tot = 0;

                            @endphp

                            @foreach ($productdata as $product)
                                @php
                                    $rate = $product->qty * $product->product_mrp_price;
                                    $final = $product->qty * $product->product_regular_price;
                                    $discount = $rate - $final;
                                    $tot += $final;
                                @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>

                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->qty }}</td>
                                    <td>{{ $rate }}</td>
                                    <td>{{ $discount }}</td>
                                    <td>{{ $final }}</td>
                                    <td>{{ $final }}</td>
                                </tr>
                            @endforeach
                              <tr>
                                <td colspan="6" class="text-end">SubToatl </td>
                                 <td colspan="6" class="text-center"> {{  $tot }}.00</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-end">Shipping </td>
                                 <td colspan="6" class="text-center"> {{ $product->shipping }}.00</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-end"> Total</td>
                                 <td colspan="6" class="text-center"> {{ $product->total }}.00</td>
                            </tr>

                        </tbody>
                    </table>
                    </div>

                    <table class="totals">
                        <tr>
                            <td style="text-align: left;">Total Items: {{ $count }}</td>
                            <td>Total Quantity: {{ $qty }}</td>
                        </tr>
                        {{-- <tr>
        <td style="text-align: right;">Sub Total:</td>
        <td>6,400.00</td>
    </tr> --}}
                        {{-- <tr>
                            <td style="text-align: right;">Overall Total:</td>
                            <td></td>
                        </tr> --}}
                    </table>



                </div>
            </div>
        </div>
    </section>

@endsection
