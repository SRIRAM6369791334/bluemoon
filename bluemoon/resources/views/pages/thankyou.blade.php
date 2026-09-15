@extends('layouts.app')
@section('title', 'Order Confirmation - Bluemoon Crackers')
@section('main-content')

    @php
        $page = App\Models\PageOff::where('status', 1)->first();
        $user = Auth::guard('customer')->user();
    @endphp

    <style>
        .thankyou-wrapper {
            background: #f8fafc;
            padding: 50px 0 80px;
        }
        .thankyou-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 30px rgba(45, 53, 107, 0.08);
            text-align: center;
            margin-bottom: 40px;
        }
        .thankyou-icon-box {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            color: #ffffff;
            font-size: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 6px 20px rgba(34, 197, 94, 0.3);
        }
        .thankyou-title {
            color: #2d356b;
            font-weight: 800;
            font-size: 32px;
            margin-bottom: 10px;
        }
        .thankyou-subtitle {
            color: #475569;
            font-size: 16px;
            line-height: 1.6;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        /* Payment Details Box */
        .payment-info-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 20px rgba(45, 53, 107, 0.05);
            height: 100%;
        }
        .bank-logo-img {
            height: 45px;
            object-fit: contain;
            margin-bottom: 15px;
        }
        .account-detail-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px dashed #e2e8f0;
            font-size: 14.5px;
        }
        .account-detail-item:last-child {
            border-bottom: none;
        }

        /* Invoice Container */
        .invoice-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 35px;
            border: 1px solid #cbd5e1;
            box-shadow: 0 6px 25px rgba(45, 53, 107, 0.07);
        }
        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e25d26;
            margin-bottom: 25px;
        }
        .invoice-badge {
            background: #2d356b;
            color: #ffffff;
            padding: 6px 16px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 14px;
        }

        /* Table Styling */
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        .invoice-table thead th {
            background: #2d356b !important;
            color: #ffffff !important;
            font-size: 14px;
            font-weight: 700;
            padding: 12px 14px;
            text-align: center;
        }
        .invoice-table tbody td {
            padding: 12px 14px;
            border-bottom: 1px solid #e2e8f0;
            text-align: center;
            color: #334155;
            font-size: 14px;
        }
        .invoice-table tfoot td {
            padding: 10px 14px;
            font-weight: 700;
            font-size: 15px;
        }
    </style>

    <main class="main-content">
        <section class="product-area product-category-area">
            <div class="container-fluid p-0">
                <div class="row g-0 mb-2">
                    <img src="/assets/img/seo.jpg" style="width:100%; display:block; border-radius: 0px; filter: drop-shadow(0px 0px 6px black);">
                </div>
            </div>
        </section>

        <section class="thankyou-wrapper">
            <div class="container">
                <!-- Top Thank You Banner -->
                <div class="thankyou-card">
                    <div class="thankyou-icon-box">
                        <i class="fa fa-check"></i>
                    </div>
                    <h1 class="thankyou-title">THANK YOU FOR YOUR ORDER!</h1>
                    <p class="thankyou-subtitle">Your enquiry has been received successfully. Please make the bill amount payment using the QR Code or Bank Accounts listed below, then notify us at <strong>9087605060</strong>. Orders are dispatched after payment confirmation.</p>
                    
                    <!-- <div class="d-flex justify-content-center gap-4 flex-wrap mt-3">
                        <img src="/assets/img/payment.png" style="max-height: 50px; width: auto;" alt="Payment">
                        <img src="/assets/img/qrcode.webp" style="max-height: 120px; border-radius: 12px; border: 2px solid #e2e8f0;" alt="QR Code">
                    </div> -->
                </div>

                <!-- Bank Accounts Grid -->
                <!-- <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <div class="payment-info-card">
                            <img src="/assets/img/axis.jpg" class="bank-logo-img" alt="Axis Bank">
                            <h5 class="fw-bold text-dark mb-3">Axis Bank Details</h5>
                            <div class="account-detail-item">
                                <span class="text-secondary">Account Number</span>
                                <span class="fw-bold text-dark">922020057877047</span>
                            </div>
                            <div class="account-detail-item">
                                <span class="text-secondary">Account Name</span>
                                <span class="fw-bold text-dark">PRAKASH</span>
                            </div>
                            <div class="account-detail-item">
                                <span class="text-secondary">IFSC Code</span>
                                <span class="fw-bold text-dark">UTIB0000089</span>
                            </div>
                            <div class="account-detail-item">
                                <span class="text-secondary">Branch</span>
                                <span class="fw-bold text-dark">Sivakasi Branch</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="payment-info-card">
                            <img src="/assets/img/indianbank.png" class="bank-logo-img" alt="Indian Bank">
                            <h5 class="fw-bold text-dark mb-3">Indian Bank Details</h5>
                            <div class="account-detail-item">
                                <span class="text-secondary">Account Number</span>
                                <span class="fw-bold text-dark">50392558001</span>
                            </div>
                            <div class="account-detail-item">
                                <span class="text-secondary">Account Name</span>
                                <span class="fw-bold text-dark">KRISHNA TRADERS</span>
                            </div>
                            <div class="account-detail-item">
                                <span class="text-secondary">IFSC Code</span>
                                <span class="fw-bold text-dark">IDIBOOOS733</span>
                            </div>
                            <div class="account-detail-item">
                                <span class="text-secondary">Branch</span>
                                <span class="fw-bold text-dark">Sivakasi Branch</span>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Invoice Section -->
                <div class="invoice-card">
                    @php
                        $estimate = App\Models\ProductOrder::where('user_id', $user->id)->orderBy('oeder_id', 'desc')->first();
                    @endphp

                    @if($estimate)
                    <div class="invoice-header">
                        <div>
                            <h3 class="fw-bold m-0" style="color: #2d356b;">BLUEMOON CRACKERS</h3>
                            <small class="text-secondary">Sithurajapuram, Sivakasi – 626 123</small>
                        </div>
                        <div class="text-end">
                            <span class="invoice-badge">Estimate</span>
                            <div class="mt-2 text-secondary font-sm">Order ID: <strong>#{{ $estimate->oeder_id }}</strong></div>
                            <div class="text-secondary font-sm">Date: <strong>{{ $estimate->created_at->format('d-m-Y') }}</strong></div>
                        </div>
                    </div>

                    <div class="row g-3 mb-4 p-3 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                        <div class="col-md-6">
                            <strong class="text-dark d-block mb-1">Customer Details:</strong>
                            <div class="text-secondary font-sm">Name: <strong>{{ $user->name }}</strong></div>
                            <div class="text-secondary font-sm">Phone: <strong>{{ $user->phone_number }}</strong></div>
                            <div class="text-secondary font-sm">Address: <strong>{{ $user->address }}, {{ $user->city }}, {{ $user->state }}</strong></div>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <strong class="text-dark d-block mb-1">Support Contact:</strong>
                            <div class="text-secondary font-sm">Phone: <strong>(+91) 9087605060</strong></div>
                            <div class="text-secondary font-sm">Email: <strong>orders@bluemooncrackers.com</strong></div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="invoice-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="text-start">Product Name</th>
                                    <th>Qty</th>
                                    <th>MRP Rate</th>
                                    <th>Discount</th>
                                    <th>Final Rate</th>
                                    <th class="text-end">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $latestOrderId = App\Models\ProductSlot::where('user_id', $user->id)
                                        ->orderBy('order_id', 'desc')
                                        ->value('order_id');

                                    $productdata = App\Models\ProductSlot::join(
                                        'product_orders',
                                        'product_orders.oeder_id',
                                        '=',
                                        'product_slots.order_id'
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
                                        <td class="text-start fw-semibold text-dark">{{ $product->product_name }}</td>
                                        <td>{{ $product->qty }}</td>
                                        <td>₹{{ $rate }}</td>
                                        <td class="text-success">₹{{ $discount }}</td>
                                        <td>₹{{ $final }}</td>
                                        <td class="text-end fw-bold">₹{{ $final }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                @if(isset($product))
                                <tr>
                                    <td colspan="6" class="text-end text-secondary">Subtotal:</td>
                                    <td class="text-end font-bold">₹{{ $tot }}.00</td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-end text-secondary">Shipping:</td>
                                    <td class="text-end font-bold text-success">₹{{ $product->shipping }}.00</td>
                                </tr>
                                <tr style="background:#fff8f5;">
                                    <td colspan="6" class="text-end fs-5 fw-bold" style="color:#2d356b;">Overall Total:</td>
                                    <td class="text-end fs-5 fw-bold" style="color:#e25d26;">₹{{ $product->total }}.00</td>
                                </tr>
                                @endif
                            </tfoot>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between mt-3 font-sm text-secondary">
                        <span>Total Unique Items: <strong>{{ $count }}</strong></span>
                        <span>Total Quantity: <strong>{{ $qty }}</strong></span>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </main>

@endsection
