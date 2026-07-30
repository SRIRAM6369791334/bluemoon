@extends('layouts.app')
@section('title', 'Bluemoon Crackers Products')
@section('main-content')

@php use Illuminate\Support\Str; @endphp

    <section class="product-area product-category-area">
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <img src="/assets/img/sp_ban.png" style=" filter: drop-shadow(0px 0px 6px black);">
            </div>
        </div>
    </section>

    <section class="product-area product-single-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-single-item">
                        <div class="row">
                            <div class="col-xl-6">
                                <!--== Start Product Thumbnail Area ==-->
                                <div class="product-single-thumb">
                                    <div class="swiper-container single-product-thumb single-product-thumb-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="lightbox-image" data-fancybox="gallery"
                                                    href="{{ env('MAIN_URL') . $singlepro->product_image }}">
                                                    <img src="{{ env('MAIN_URL') . $singlepro->product_image }}" width="570"
                                                        height="541" alt="Image-HasTech">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="lightbox-image" data-fancybox="gallery"
                                                    href="/assets/img/shop/product-single/2.webp">
                                                    <img src="/assets/img/shop/product-single/2.webp" width="570"
                                                        height="541" alt="Image-HasTech">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="lightbox-image" data-fancybox="gallery"
                                                    href="/assets/img/shop/product-single/3.webp">
                                                    <img src="/assets/img/shop/product-single/3.webp" width="570"
                                                        height="541" alt="Image-HasTech">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="lightbox-image" data-fancybox="gallery"
                                                    href="/assets/img/shop/product-single/4.webp">
                                                    <img src="/assets/img/shop/product-single/4.webp" width="570"
                                                        height="541" alt="Image-HasTech">
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="lightbox-image" data-fancybox="gallery"
                                                    href="/assets/img/shop/product-single/5.webp">
                                                    <img src="/assets/img/shop/product-single/5.webp" width="570"
                                                        height="541" alt="Image-HasTech">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container single-product-nav single-product-nav-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/shop/product-single/nav-1.webp" width="127"
                                                    height="127" alt="Image-HasTech">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/shop/product-single/nav-2.webp" width="127"
                                                    height="127" alt="Image-HasTech">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/shop/product-single/nav-3.webp" width="127"
                                                    height="127" alt="Image-HasTech">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/shop/product-single/nav-4.webp" width="127"
                                                    height="127" alt="Image-HasTech">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/shop/product-single/nav-5.webp" width="127"
                                                    height="127" alt="Image-HasTech">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Product Thumbnail Area ==-->
                            </div>
                            <div class="col-xl-6">
                                <!--== Start Product Info Area ==-->
                                <div class="product-single-info">
                                    <h3 class="main-title">{{ $singlepro->product_name  }}</h3>
                                    <div class="prices">
                                                    <span class="price-old">Rs{{ $singlepro->product_mrp_price }}</span>
                                                    <span class="sep">-</span>
                                                    <span class="price">Rs{{ $singlepro->product_regular_price}}</span>
                                                </div>

                                    <p>{{  $singlepro->pro_details}}</p>

                                    <div class="product-quick-action">
                                        <div class="qty-wrap">
                                            <div class="pro-qty">
                                                <input type="text" title="Quantity" value="1">
                                            </div>
                                        </div>
                                        <a class="btn-theme" href="shop-cart.html">Add to Cart</a>
                                    </div>


                                </div>
                                <!--== End Product Info Area ==-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <section class="product-area product-best-seller-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">Related Products</h3>
                        <div class="desc">
                            <p>Let's Crack the Diwali with Ramji Crackers</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-wrap">
                        <div class="swiper-container product-slider-col4-container">
                            <div class="swiper-wrapper">

                                @php
                                  $relate = App\Models\Product::where('category_id', $singlepro->category_id)
            ->where('id', '!=', $singlepro->id)
            ->get();
                                @endphp
                                @foreach ($relate as $new)
                                <div class="swiper-slide">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="/singleprod/{{ Str::slug($new->product_name) }}">
                                                            <img src="{{ env('MAIN_URL') . $new->product_image }}"
                                                                width="270" height="274" alt="Image-HasTech"
                                                                style=" width: 270px; height: 274px;">
                                                        </a>
                                                        <div class="product-flag">
                                                            @php
                                                                $reduceamt =
                                                                    $new->product_mrp_price -
                                                                    $new->product_regular_price;
                                                            @endphp
                                                            <ul>
                                                                <li class="discount">-{{ $reduceamt }}</li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="product-info text-center">
                                                        <div class="category">
                                                            <ul>
                                                                <li><a href="/singleprod/{{ Str::slug($new->product_name) }}">{{ $new->category_name }}</a></li>

                                                            </ul>
                                                        </div>

                                                        <h4 class="title"><a
                                                                href="/singleprod/{{ Str::slug($new->product_name) }}">{{ $new->product_name }}</a>
                                                        </h4>
                                                        <div class="prices">
                                                            <span class="price-old">₹{{ $new->product_mrp_price }}.00</span>
                                                            <span class="sep">-</span>
                                                            <span
                                                                class="price">₹{{ $new->product_regular_price }}.00</span>
                                                        </div>
                                                    </div>
                                                @if ($user)
                                                        <div class="button mt-3 text-center cart-button"
                                                            data-product-id="{{ $list->id }}"
                                                            data-price="{{ $list->product_regular_price }}"
                                                             data-mrp="{{ $list->product_mrp_price }}"
                                                            style="border: 1px solid; border-radius: 5px; cursor: pointer; padding: 5px 0;">
                                                            <div class="cart-content">
                                                                <p class="cart-text" style="color: black; margin: 0;">Add to
                                                                    Cart
                                                                </p>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="button mt-3 text-center"
                                                            style="border: 1px solid; border-radius: 5px; cursor: pointer; padding: 5px 0;">
                                                            <div class="cart-content">
                                                                <a href="/login">
                                                                    <p class="cart-text" style="color: black; margin: 0;">
                                                                        Add to
                                                                        Cart
                                                                    </p>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                    <!--== End prPduct Item ==-->
                                </div>
                                @endforeach






                            </div>
                        </div>
                        <!--== Add Swiper Arrows ==-->
                        <div class="product-swiper-btn-wrap">
                            <div class="product-swiper-btn-prev">
                                <i class="fa fa-arrow-left"></i>
                            </div>
                            <div class="product-swiper-btn-next">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
