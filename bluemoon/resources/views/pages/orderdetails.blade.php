@extends('layouts.app')
@section('title', 'Bluemoon Crackers')
@section('main-content')

  <section class="product-area product-category-area">
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <img src="/assets/img/prod_ban.webp" style=" filter: drop-shadow(0px 0px 6px black);">
            </div>
        </div>
    </section>
<section class="shopping-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shopping-cart-form table-responsive">
                    <form action="#" method="post">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumb">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                     <th class="product-quantity">Quantity</th>
                                    <th class="product-price">Price</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderdetails as $order )
                                 <tr class="cart-product-item">
                                    <td class="product-remove">

                                    </td>
                                    <td class="product-thumb">
                                        <a href="">
                                            <img src="{{ env('MAIN_URL') . $order->product_image }}" width="90" height="110"
                                                alt="Image-HasTech">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <h4 class="title"><a href="">{{ $order->product_name }}</a></h4>
                                    </td>
                                    <td class="product-price">
                                        <span class="price">{{ $order->qty }}</span>
                                    </td>
                                    @php
                                        $price = $order->qty * $order->product_regular_price
                                    @endphp
                                    <td class="product-quantity">
                                        <span class="price">{{ $order->product_regular_price }}</span>
                                    </td>

                                </tr>
                                @endforeach




                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
