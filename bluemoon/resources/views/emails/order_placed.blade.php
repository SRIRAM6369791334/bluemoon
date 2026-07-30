@php
use App\Models\ProductSlot;
use App\Models\Product;

$latestOrderId = $order->oeder_id;

$productdata = ProductSlot::join('products', 'products.id', '=', 'product_slots.product_id')
    ->where('product_slots.user_id', $customer->id)
    ->where('product_slots.order_id', $latestOrderId)
    ->select('product_slots.*', 'products.product_name', 'products.product_mrp_price', 'products.product_regular_price')
    ->get();

$count = $productdata->count();
$qty = $productdata->sum('qty');
$i = 1;
$tot = 0;
@endphp

<!DOCTYPE html>
<html>
<head>
    <title>Order Estimate</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; padding: 8px; font-size: 16px}
        th { background-color: #f2f2f2; font-size: 16px}
        .text-center { text-align: center; }
        p{
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="text-center">
    {{-- <img src="/assets/img/ram_logo1.png" width="200" style="border-radius: 100px; box-shadow: 0 0 6px black;"> --}}
    <h1 style="color: #7462e3;">THANK YOU!</h1>
    <p>for choosing Bluemoon Crackers</p>
    <p>Thank you! Your Order has been received. Please make the payment of ₹{{ $order->total }} using the QR code or bank details below. Once payment is done, kindly inform us via phone or WhatsApp at 9087605060 Your order will be dispatched only after full payment. 🥳</p>
</div>

<div class="text-center">
    {{-- <img src="https://yourdomain.com/assets/img/payment.png" width="200" style="border-radius: 100px; box-shadow: 0 0 6px black;"> --}}
    {{-- <img src="/assets/img/qrcode.webp" width="150" style="border-radius: 10px; box-shadow: 0 0 6px black;"> --}}
</div>

<hr>

<h3>Estimate Details</h3>
<table>
    <tr>
        <td><strong>Enquiry No:</strong> {{ $order->oeder_id }}</td>
        <td><strong>E-mail:</strong> orders@bluemooncrackers.com</td>
        <td><strong>Mobile:</strong> 9087605060</td>
    </tr>
</table>

<h3>Customer & Bank Details</h3>
<table>
    <tr>
        <td>
            <strong>Customer Details</strong><br>
            {{ $customer->name }}<br>
            {{ $customer->phone_number }}<br>
            {{ $customer->email }}<br>
            {{ $customer->address }}<br>
            {{ $customer->state }}, {{ $customer->city }}, {{ $customer->pincode }}
        </td>
        <td>
            <strong>Bank Details</strong><br>
            A/C Name: Prakash<br>
            A/C Number: 922020057877047<br>
            A/C Type: Current<br>
            Bank: Axis Bank<br>
            IFSC: UTIB0000089
        </td>
    </tr>
</table>

<h3>Product Summary</h3>
<table>
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
    </tbody>
</table>

<h3>Summary</h3>
<table>
    <tr><td>Total Items</td><td>{{ $count }}</td></tr>
    <tr><td>Total Quantity</td><td>{{ $qty }}</td></tr>
    <tr><td>Overall Total</td><td>₹{{ $tot }}</td></tr>
</table>

</body>
</html>
