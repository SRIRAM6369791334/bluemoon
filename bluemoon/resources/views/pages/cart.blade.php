@extends('layouts.app')
@section('title', 'Shopping Cart - Bluemoon Crackers')
@section('main-content')

<style>
    .cart-page-area {
        padding: 50px 0 70px;
        background: #fdfdfd;
    }
    .cart-table-wrap {
        background: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 20px rgba(45, 53, 107, 0.06);
        margin-bottom: 40px;
    }
    .cart-table-wrap table thead th {
        background: #2d356b !important;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 15px;
        padding: 16px;
        border: none;
    }
    .cart-table-wrap table tbody td {
        vertical-align: middle;
        padding: 16px;
        border-bottom: 1px solid #e2e8f0;
    }
    .cart-product-title {
        color: #2d356b;
        font-weight: 700;
        font-size: 16px;
        text-decoration: none;
    }
    .cart-product-price {
        color: #e25d26;
        font-weight: 700;
        font-size: 16px;
    }
    .remove-btn {
        color: #ef4444;
        font-size: 18px;
        transition: transform 0.2s ease;
    }
    .remove-btn:hover {
        transform: scale(1.2);
        color: #dc2626;
    }
    .cart-card-box {
        background: #ffffff;
        border-radius: 16px;
        padding: 28px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 20px rgba(45, 53, 107, 0.06);
        height: 100%;
    }
    .cart-card-title {
        color: #2d356b;
        font-weight: 800;
        font-size: 20px;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #e25d26;
    }
    .btn-checkout-theme {
        background: linear-gradient(135deg, #e25d26 0%, #ff7838 100%) !important;
        color: #ffffff !important;
        font-weight: 700;
        padding: 12px 28px;
        border-radius: 10px;
        text-decoration: none;
        display: inline-block;
        box-shadow: 0 4px 14px rgba(226, 93, 38, 0.3);
        transition: all 0.3s ease;
    }
    .btn-checkout-theme:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(226, 93, 38, 0.45);
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

    <section class="cart-page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cart-table-wrap table-responsive">
                        <form action="#" method="post">
                            <table class="table text-center align-middle m-0">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumb">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart-product-item">
                                        <td class="product-remove">
                                            <a href="#/" class="remove-btn"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product-thumb">
                                            <a href="/quickcheckout">
                                                <img src="/assets/img/prod_ban.webp" width="70" height="70" style="border-radius:8px; object-fit:cover;" alt="Product">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="/quickcheckout" class="cart-product-title">Standard Crackers Pack</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="cart-product-price">₹1,499</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="pro-qty d-inline-block">
                                                <input type="text" class="form-control text-center" style="width: 70px;" value="1">
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="cart-product-price">₹1,499</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-end">
                <div class="col-md-6 col-lg-5">
                    <div class="cart-card-box">
                        <h5 class="cart-card-title">Cart Totals</h5>
                        <div class="d-flex justify-content-between py-2 border-bottom">
                            <span class="fw-bold text-secondary">Subtotal</span>
                            <span class="fw-bold text-dark">₹1,499.00</span>
                        </div>
                        <div class="d-flex justify-content-between py-2 border-bottom">
                            <span class="fw-bold text-secondary">Shipping</span>
                            <span class="text-success fw-semibold">Calculated at Checkout</span>
                        </div>
                        <div class="d-flex justify-content-between py-3 mb-3">
                            <span class="fw-bold fs-5" style="color:#2d356b">Overall Total</span>
                            <span class="fw-bold fs-5" style="color:#e25d26">₹1,499.00</span>
                        </div>
                        <div class="text-end">
                            <a class="btn-checkout-theme w-100 text-center" href="/checkout"><i class="fa fa-credit-card me-2"></i>Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection