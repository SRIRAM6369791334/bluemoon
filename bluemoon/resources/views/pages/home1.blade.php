@extends('layouts.app')
@section('title', 'Bluemoon Crackers')
@section('meta-title', 'Buy Sivakasi Crackers Online – Best Crackers at Wholesale Price | Bluemoon Crackers' )
@section('meta-description', 'Explore the best Sivakasi crackers online with Bluemoon Crackers. Shop top firecracker brands at wholesale price with delivery all over India.')
@section('meta-keywords', '' )
@section('main-content')


<style>
    /*.feat_container{*/
    /*    max-width: 1287px !important;*/
    /*}*/
    .ave i {
        font-size: xx-large;
        color: #db3131;
    }

    /* .text-center {
        border-color: cornsilk;
        filter: drop-shadow(2px 4px 6px #c5d9e7);
    } */

    .product-thumb {
        position: relative;
        overflow: hidden;
    }



    .front-img {
        z-index: 1;
        opacity: 1;
        display: block
    }

    .back-img {
        z-index: 2;
        opacity: 0;
        display: none
    }

    .product-thumb:hover .back-img {
        opacity: 1;
        display: block
    }

    .product-thumb:hover .front-img {
        opacity: 0;
        display: none
    }

    .product-flag::after {
        display: none !important;
    }

    /* .enquire-now-button {
       display: block;
    position: absolute;
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #ff7838;
    color: #fff;
    padding: 5px;
    border-radius: 6px;
    font-weight: bold;
    animation: pulse 2s infinite;
    z-index: 10;
    text-align: center;
    transition: all 0.3s ease;
    font-size: 15px;
    width: 100%;
    }

    .enquire-now-button a {
        color: #fff;
        text-decoration: none;
    }

    .price-old {
    text-decoration: line-through;
    color: #fff; /* Optional: faded gray color */


    /* .product-thumb:hover .enquire-now-button {
        display: block;
    } */

    @keyframes pulse {
        0% {
            transform: translateX(-50%) scale(1);
        }

        50% {
            transform: translateX(-50%) scale(1.05);
        }

        100% {
            transform: translateX(-50%) scale(1);
        }
    }



    .rotate-icon {
        transition: transform 0.5s ease;
        display: inline-block;
        font-size: 2rem;
    }

    .card:hover .rotate-icon {
        transform: rotate(360deg);
    }

    /* Banner Slider Styling - 100% Full Image Display (No Cropping on Any Device) */
    .home-slider-area .default-slider-container {
        width: 100%;
        position: relative;
        overflow: hidden;
        height: auto !important;
    }
    .home-slider-area .home-slider-container .home-slider-wrapper.slider-default,
    .home-slider-area .swiper-slide {
        height: auto !important;
    }
    .home-slider-area .slider-content-area-two {
        width: 100%;
        height: auto !important;
        min-height: unset !important;
        position: relative;
        overflow: hidden;
        display: block;
    }
    .home-slider-area .banner-slide-img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
    }
    .home-slider-area video.banner-video {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
    }

    .feature-service-title {
        color: #000000 !important;
        font-weight: 600 !important;
        position: relative;
        margin-bottom: 12px !important;
        box-shadow: 0 4px 15px rgba(45, 53, 107, 0.05) !important;
        font-size: 1.3rem;
        padding-top: 10px;
    }

    @media (max-width: 767px) {
        .cat-product-section {
            margin-top: 8px !important;
        }
        .cat-product-section .container {
            padding-top: 16px !important;
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
        .feature-service-card {
            border-radius: 10px !important;
            min-height: 60px !important;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.06);
        }
        .feature-service-card .card-body {
            padding: 8px 6px !important;
            width: 100%;
        }
        .feature-service-card .ave i {
            font-size: 1.25rem !important;
        }
        .feature-service-title {
            font-size: 0.8rem !important;
            margin-bottom: 0 !important;
            padding-top: 0 !important;
            box-shadow: none !important;
            line-height: 1.2 !important;
            font-weight: 700 !important;
            white-space: normal !important;
        }

        /* Mobile Product Slider & Cards (2 Columns) */
        .product-area .container {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
        .product-slider-col4-container .swiper-slide {
            height: auto !important;
        }
        .product-item {
            background: #ffffff;
            border-radius: 12px;
            padding: 8px !important;
            border: 1px solid #f0f0f0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .product-thumb {
            border-radius: 8px;
            overflow: hidden;
            background: #fafafa;
        }
        .product-thumb a img {
            width: 100% !important;
            height: 135px !important;
            max-height: 135px !important;
            object-fit: contain !important;
        }
        .product-info {
            margin-top: 8px !important;
            margin-bottom: 6px !important;
        }
        .product-info .title {
            font-size: 13px !important;
            line-height: 1.3 !important;
            min-height: 34px !important;
            margin-bottom: 4px !important;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .product-info .title a {
            color: #192040 !important;
            font-weight: 600;
        }
        .product-info .prices {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }
        .product-info .prices .price {
            font-size: 15px !important;
            font-weight: 700 !important;
        }
        .product-info .prices .price-old {
            font-size: 12px !important;
            color: #888 !important;
        }
        .product-item .button {
            margin-top: 6px !important;
            padding: 6px 0 !important;
            border-radius: 6px !important;
            border: none !important;
            background: #e25d26 !important;
        }
        .product-item .button .cart-text {
            color: #ffffff !important;
            font-size: 12px !important;
            font-weight: 700 !important;
            letter-spacing: 0.3px;
        }
        .product-flag ul li.discount {
            font-size: 10px !important;
            padding: 2px 5px !important;
            line-height: 1.1 !important;
        }
        .product-flag ul li.discount p {
            display: inline !important;
            font-size: 9px !important;
        }
        .product-swiper-btn-wrap {
            display: none !important;
        }
        .section-title {
            margin-bottom: 12px !important;
        }
        .section-title .title {
            font-size: 20px !important;
            font-weight: 800 !important;
        }

        /* Mid promo banner */
        .product-category-area img {
            border-radius: 12px !important;
            max-width: 100% !important;
            height: auto !important;
        }
        .product-category-area .row {
            margin-top: 8px !important;
            margin-bottom: 16px !important;
            padding: 0 10px;
        }

        /* Brand slider on mobile */
        .product-slider-col4-container2 .product-item {
            border: none !important;
            box-shadow: none !important;
            background: transparent !important;
            padding: 0 !important;
        }
        .product-slider-col4-container2 .inner-content {
            border: 1px solid #e8e8e8 !important;
            border-radius: 12px !important;
            padding: 8px 4px !important;
            background: #ffffff !important;
            box-shadow: 0 2px 6px rgba(0,0,0,0.04) !important;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80px !important;
        }
        .product-slider-col4-container2 .product-thumb {
            border: none !important;
            height: auto !important;
            background: transparent !important;
            padding: 0 !important;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .product-slider-col4-container2 .product-thumb a img {
            width: 65px !important;
            height: 65px !important;
            max-height: 65px !important;
            object-fit: contain !important;
            margin: 0 auto !important;
        }

        /* Testimonial slider on mobile */
        .testimonial-area .container {
            padding-top: 15px !important;
            padding-bottom: 15px !important;
        }
        .testi-content p {
            font-size: 13.5px !important;
            line-height: 1.6 !important;
        }
    }
</style>
@php
$page = App\Models\PageOff::where('status', 1)->first();
$user = Auth::guard('customer')->user();

@endphp


<main class="main-content">

    @php use Illuminate\Support\Str; @endphp
    @php
    $banners = App\Models\BannerImage::orderBy('banner_position', 'asc')->get();
    @endphp

    @if ($page)
    <section class="page-not-found-area">
        <div class="container pt--0 pb--0">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="page-not-found-wrap">
                        <div class="page-not-found-content">
                            {{-- <h3 class="not-found-text" data-aos="fade-down" data-aos-duration="1000">404</h3> --}}
                            <img src="{{ env('MAIN_URL') . $page->image }}"
                                style="border-radius: 100px; filter: drop-shadow(0px 0px 6px black);">
                            {{-- <h3 class="title" data-aos="fade-down" data-aos-duration="1200">Page Cannot Be Found!</h3>
                                    <p class="desc" data-aos="fade-down" data-aos-duration="1400">Seems like nothing was
                                        found at this location. Try something else or you can go back to the homepage
                                        following the button below!</p>
                                    <a class="btn-theme-border" href="index.html" data-aos="fade-down"
                                        data-aos-duration="1600">Back to home</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
        <div class="swiper-container home-slider-container default-slider-container">
            <div class="swiper-wrapper home-slider-wrapper slider-default">
                @foreach ($banners as $banner)
                    @if ($banner->banner_image)
                        @php
                            $bannerUrl = env('MAIN_URL') . $banner->banner_image;
                            $isVid = preg_match('/\.(mp4|webm|ogg)$/i', $banner->banner_image);
                        @endphp
                        <div class="swiper-slide">
                            <div class="slider-content-area slider-content-area-two position-relative overflow-hidden">
                                @if ($isVid)
                                <video autoplay muted loop playsinline class="banner-video">
                                    <source src="{{ $bannerUrl }}" type="video/mp4">
                                </video>
                                @else
                                <img src="{{ $bannerUrl }}" alt="Bluemoon Crackers Banner" class="banner-slide-img" />
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!--== Add Swiper Arrows ==-->
            <div class="swiper-btn-wrap">
                <div class="swiper-btn-prev">
                    <i class="pe-7s-angle-left"></i>
                </div>
                <div class="swiper-btn-next">
                    <i class="pe-7s-angle-right"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="cat-product-section" style="margin-top: -11px">
        <div class="container pt-5">
            <div class="row">
                <div class="col-6 col-md-6 col-lg-3 mb-3 mb-lg-4 px-1 px-sm-2 px-lg-3">
                    <div class="card text-center feature-service-card" style="border: 2px solid #85250c">
                        <div class="card-body">
                            <div class="row align-items-center g-1 g-lg-2">
                                <div class="col-3 col-lg-3 text-center">
                                    <div class="ave">
                                        <i class="fa-solid fa-truck-fast rotate-icon"></i>
                                    </div>
                                </div>
                                <div class="col-9 col-lg-9 text-center">
                                    <h4 class="feature-service-title">Quick Delivery</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-3 mb-lg-4 px-1 px-sm-2 px-lg-3">
                    <div class="card text-center feature-service-card" style="border: 2px solid #b900ff">
                        <div class="card-body">
                            <div class="row align-items-center g-1 g-lg-2">
                                <div class="col-3 col-lg-3 text-center">
                                    <div class="ave">
                                        <i class="fa-solid fa-lock rotate-icon"></i>
                                    </div>
                                </div>
                                <div class="col-9 col-lg-9 text-center">
                                    <h4 class="feature-service-title">Secure Payment</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-3 mb-lg-4 px-1 px-sm-2 px-lg-3">
                    <div class="card text-center feature-service-card" style="border: 2px solid #eb3e32">
                        <div class="card-body">
                            <div class="row align-items-center g-1 g-lg-2">
                                <div class="col-3 col-lg-3 text-center mx-auto d-block">
                                    <div class="ave">
                                        <i class="fa-solid fa-tags rotate-icon"></i>
                                    </div>
                                </div>
                                <div class="col-9 col-lg-9 text-center">
                                    <h4 class="feature-service-title">Order Discount</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-3 mb-lg-4 px-1 px-sm-2 px-lg-3">
                    <div class="card text-center feature-service-card" style="border: 2px solid #000000">
                        <div class="card-body">
                            <div class="row align-items-center g-1 g-lg-2">
                                <div class="col-3 col-lg-3 text-center mx-auto d-block">
                                    <div class="ave">
                                        <i class="fa-solid fa-headset rotate-icon"></i>
                                    </div>
                                </div>
                                <div class="col-9 col-lg-9 text-center">
                                    <h4 class="feature-service-title">24x7 Support</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Category Area Wrapper ==-->




    @php
    $sectionhome = App\Models\HomeSection::where('id', '!=', 5)->orderBy('id', 'asc')->get();
    @endphp

    @foreach ( $sectionhome as $section)
    @php
    $sectionproducts = App\Models\SectionProducts::join('products','products.id','section_products.product_id')
    ->where('section_products.section_id',$section->id)
    ->select('products.*')
    ->get();
    $discount = App\Models\Discount::orderBy('id', 'desc')->take(1)->first();
    @endphp

    @if($sectionproducts->count() > 0)
    <section class="product-area product-best-seller-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-left">
                        <h3 class="title">{{ $section->section_name }}</h3>
                        <div class="desc">
                            {{-- <p>Pyro-Price Party!</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-wrap">
                        <div class="swiper-container product-slider-col4-container">
                            <div class="swiper-wrapper">

                                @foreach ($sectionproducts as $sectiondata)
                                <div class="swiper-slide">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <div class="inner-content">
                                            <div class="product-thumb position-relative" style="position: relative;">
                                                <a href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">
                                                    <!-- Front image -->
                                                    <img src="{{ env('MAIN_URL') . $sectiondata->product_image }}"
                                                        class="front-img img"
                                                        width="270" height="274" alt="Image">

                                                    <!-- Back image (hover image) -->
                                                    <img src="{{ env('MAIN_URL') . $sectiondata->product_image }}"
                                                        class="back-img img"
                                                        width="270" height="274" alt="Hover Image">
                                                </a>
                                                <div class="product-flag">
                                                    @php
                                                    $reduceamt = $sectiondata->product_mrp_price - $sectiondata->product_regular_price;
                                                    @endphp
                                                    <ul>
                                                        <li class="discount">{{ $discount->discount }}% <p>Off</p>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- Hover Button -->


                                            </div>

                                            <div class="product-info text-center mt-3 mb-4">
                                                <h4 class="title">
                                                    <a href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">
                                                        {{ $sectiondata->product_name }}
                                                    </a>
                                                </h4>

                                                <div class="prices">
                                                    <span
                                                        class="price-old">{{ $sectiondata->product_mrp_price }}.00</span>
                                                    <span class="sep"> </span>
                                                    <span
                                                        class="price text-success" style="font-size: 20px;font-weight:600">{{ $sectiondata->product_regular_price }}.00</span>
                                                </div>
                                            </div>
                                            <div class="button mt-3 text-center"
                                                style="border: 1px solid; border-radius: 5px; cursor: pointer; padding: 5px 0;    background: #ff7838;">
                                                <div class="cart-content">
                                                    <a
                                                        href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">
                                                        <p class="cart-text" style="color: black; margin: 0;">
                                                            Enquire Now</p>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                @endforeach

                            </div>
                        </div>

                        <!--== Swiper Arrows ==-->
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
    @endif

    @endforeach


    <section class="product-area product-category-area">
        <div class="container-fluid">
            <div class="row mt-4 mb-5">
                <img src="assets/img/sim_ban.jpeg"
                    style="border-radius: 100px; filter: drop-shadow(0px 0px 6px black);">
            </div>
        </div>
    </section>


    @php

    $sectionhome = App\Models\HomeSection::where('id', 5)->get();


    @endphp

    @foreach ( $sectionhome as $section)

    <section class="product-area product-best-seller-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-left">
                        <h3 class="title">{{ $section->section_name }}</h3>
                        <div class="desc">
                            {{-- <p>Pyro-Price Party!</p> --}}
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
                                $sectionproducts = App\Models\SectionProducts::join('products','products.id','section_products.product_id')
                                ->where('section_products.section_id',$section->id)
                                ->select('products.*')
                                ->get();


                                $discount = App\Models\Discount::orderBy('id', 'desc')->take(1)->first();



                                @endphp

                                @foreach ($sectionproducts as $sectiondata)

                                <div class="swiper-slide">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <div class="inner-content">
                                            <div class="product-thumb position-relative" style="position: relative;">
                                                <a href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">
                                                    <!-- Front image -->
                                                    <img src="{{ env('MAIN_URL') . $sectiondata->product_image }}"
                                                        class="front-img img"
                                                        width="270" height="274" alt="Image">

                                                    <!-- Back image (hover image) -->
                                                    <img src="{{ env('MAIN_URL') . $sectiondata->product_image }}"
                                                        class="back-img img"
                                                        width="270" height="274" alt="Hover Image">
                                                </a>
                                                <div class="product-flag">
                                                    @php
                                                    $reduceamt = $sectiondata->product_mrp_price - $sectiondata->product_regular_price;
                                                    @endphp
                                                    <ul>
                                                        <li class="discount">{{ $discount->discount }}%<p>Off</p>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- Hover Button -->


                                            </div>

                                            <div class="product-info text-center mt-3 mb-4">
                                                <h4 class="title">
                                                    <a href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">
                                                        {{ $sectiondata->product_name }}
                                                    </a>
                                                </h4>

                                                <div class="prices">
                                                    <span
                                                        class="price-old">{{ $sectiondata->product_mrp_price }}.00</span>
                                                    <span class="sep"> </span>
                                                    <span
                                                        class="price text-success" style="font-size: 20px;font-weight:600">{{ $sectiondata->product_regular_price }}.00</span>
                                                </div>
                                            </div>
                                            <div class="button mt-3 text-center"
                                                style="border: 1px solid; border-radius: 5px; cursor: pointer; padding: 5px 0;    background: #ff7838;">
                                                <div class="cart-content">
                                                    <a
                                                        href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">
                                                        <p class="cart-text" style="color: black; margin: 0;">
                                                            Enquire Now</p>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                @endforeach

                            </div>
                        </div>

                        <!--== Swiper Arrows ==-->
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

    @endforeach

    {{-- <section class="product-area product-best-seller-area" >
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h3 class="title">New Arrivals</h3>
                                <div class="desc">

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

                                            $newarrival = App\Models\Product::join(
                                                'categories',
                                                'categories.id',
                                                'products.category_id',
                                            )
                                                ->select('products.*', 'categories.category_name')
                                                ->latest()
                                                ->limit(5)
                                                ->get();
                                        @endphp

                                        @foreach ($newarrival as $new)
                                            <div class="swiper-slide">

                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a >
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

        </div>

        <h4 class="title"><a
                href="{{ route('quickcheckout', ['id' => $new->id]) }}">{{ $new->product_name }}</a>
        </h4>
        <div class="prices">
            <span
                class="price-old">{{ $new->product_mrp_price }}.00</span>
            <span class="sep">-</span>
            <span
                class="price text-success">{{ $new->product_regular_price }}.00</span>
        </div>
    </div>


    <div class="button mt-3 text-center"
        style="border: 1px solid; border-radius: 5px; cursor: pointer; padding: 5px 0;">
        <div class="cart-content">
            <a
                href="{{ route('quickcheckout', ['id' => $new->id]) }}">
                <p class="cart-text" style="color: black; margin: 0;">
                    Enquire Now</p>
            </a>

        </div>
    </div>


    </div>
    </div>

    </div>
    @endforeach





    </div>
    </div>

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
    </section> --}}
    <!--== End Product Category Area Wrapper ==-->

    {{-- <section class="product-area product-best-seller-area">
                <div class="container">
                    <div class="row">
                        @php
                            $catgory1 = App\Models\Product::join('categories', 'categories.id', 'products.category_id')
                                ->select('products.*', 'categories.category_name')
                                ->where('products.category_id', '4')
                                ->latest()

                                ->first();
                            $catgorylist = App\Models\Product::join(
                                'categories',
                                'categories.id',
                                'products.category_id',
                            )
                                ->select('products.*', 'categories.category_name')
                                ->where('products.category_id', '4')
                                ->latest()
                                ->limit(5)
                                ->get();
                        @endphp
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h3 class="title">{{ $catgory1->category_name }}</h3>

    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="product-slider-wrap">
                <div class="swiper-container product-slider-col4-container">
                    <div class="swiper-wrapper">

                        @foreach ($catgorylist as $list)
                        <div class="swiper-slide">

                            <div class="product-item">
                                <div class="inner-content">
                                    <div class="product-thumb">
                                        <a>
                                            <img src="{{ env('MAIN_URL') . $list->product_image }}"
                                                width="270" height="274" alt="Image-HasTech"
                                                style=" width: 270px; height: 274px;">
                                        </a>
                                        <div class="product-flag">
                                            @php
                                            $reduceamt =
                                            $list->product_mrp_price -
                                            $list->product_regular_price;
                                            @endphp
                                            <ul>
                                                <li class="discount">-{{ $reduceamt }}</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="product-info text-center">
                                        <div class="category">

                                        </div>

                                        <h4 class="title"><a
                                                href="{{ route('quickcheckout', ['id' => $list->id]) }}">{{ $list->product_name }}</a>
                                        </h4>
                                        <div class="prices">
                                            <span
                                                class="price-old">{{ $list->product_mrp_price }}.00</span>
                                            <span class="sep">-</span>
                                            <span
                                                class="price text-success">{{ $list->product_regular_price }}.00</span>
                                        </div>
                                    </div>

                                    <div class="button mt-3 text-center"
                                        style="border: 1px solid; border-radius: 5px; cursor: pointer; padding: 5px 0;">
                                        <div class="cart-content">
                                            <a
                                                href="{{ route('quickcheckout', ['id' => $list->id]) }}">
                                                <p class="cart-text" style="color: black; margin: 0;">
                                                    Enquire Now</p>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>
                </div>

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
    </section> --}}
    {{--
            <section class="product-area product-best-seller-area" >
                <div class="container">

                    @php
                        $kids1 = App\Models\Product::join('categories', 'categories.id', 'products.category_id')
                            ->select('products.*', 'categories.category_name')
                            ->where('products.category_id', '6')
                            ->latest()

                            ->first();
                        $kidslist = App\Models\Product::join('categories', 'categories.id', 'products.category_id')
                            ->select('products.*', 'categories.category_name')
                            ->where('products.category_id', '6')
                            ->latest()
                            ->limit(5)
                            ->get();
                    @endphp
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h3 class="title">{{ $kids1->category_name }}</h3>

    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="product-slider-wrap">
                <div class="swiper-container product-slider-col4-container">
                    <div class="swiper-wrapper">

                        @foreach ($kidslist as $list)
                        <div class="swiper-slide">

                            <div class="product-item">
                                <div class="inner-content">
                                    <div class="product-thumb">
                                        <a>
                                            <img src="{{ env('MAIN_URL') . $list->product_image }}"
                                                width="270" height="274" alt="Image-HasTech"
                                                style=" width: 270px; height: 274px;">
                                        </a>
                                        <div class="product-flag">
                                            @php
                                            $reduceamt =
                                            $list->product_mrp_price -
                                            $list->product_regular_price;
                                            @endphp
                                            <ul>
                                                <li class="discount">-{{ $reduceamt }}</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="product-info text-center">
                                        <div class="category">

                                        </div>

                                        <h4 class="title"><a
                                                href="{{ route('quickcheckout', ['id' => $list->id]) }}">{{ $list->product_name }}</a>
                                        </h4>
                                        <div class="prices">
                                            <span
                                                class="price-old">{{ $list->product_mrp_price }}.00</span>
                                            <span class="sep">-</span>
                                            <span
                                                class="price text-success">{{ $list->product_regular_price }}.00</span>
                                        </div>
                                    </div>

                                    <div class="button mt-3 text-center"
                                        style="border: 1px solid; border-radius: 5px; cursor: pointer; padding: 5px 0;">
                                        <div class="cart-content">
                                            <a
                                                href="{{ route('quickcheckout', ['id' => $list->id]) }}">
                                                <p class="cart-text" style="color: black; margin: 0;">
                                                    Enquire Now</p>
                                            </a>

                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        @endforeach





                    </div>
                </div>

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
    </section> --}}

    <!--<section class="product-area product-category-area">-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="row mt-5 mb-5">-->
    <!--            <img src="assets/img/sim_ban1.jpeg"-->
    <!--                style="border-radius: 100px; filter: drop-shadow(0px 0px 6px black);">-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    {{-- <section class="product-area product-best-seller-area">
                <div class="container">
                    @php
                        $carkers1 = App\Models\Product::join('categories', 'categories.id', 'products.category_id')
                            ->select('products.*', 'categories.category_name')
                            ->where('products.category_id', '5')
                            ->latest()

                            ->first();
                        $carkerslist = App\Models\Product::join('categories', 'categories.id', 'products.category_id')
                            ->select('products.*', 'categories.category_name')
                            ->where('products.category_id', '5')
                            ->latest()
                            ->limit(5)
                            ->get();
                    @endphp
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h3 class="title">{{ $carkers1->category_name }}</h3>

    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="product-slider-wrap">
                <div class="swiper-container product-slider-col4-container">
                    <div class="swiper-wrapper">

                        @foreach ($carkerslist as $list)
                        <div class="swiper-slide">

                            <div class="product-item">
                                <div class="inner-content">
                                    <div class="product-thumb">
                                        <a>
                                            <img src="{{ env('MAIN_URL') . $list->product_image }}"
                                                width="270" height="274" alt="Image-HasTech"
                                                style=" width: 270px; height: 274px;">
                                        </a>
                                        <div class="product-flag">
                                            @php
                                            $reduceamt =
                                            $list->product_mrp_price -
                                            $list->product_regular_price;
                                            @endphp
                                            <ul>
                                                <li class="discount">-{{ $reduceamt }}</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="product-info text-center">
                                        <div class="category">

                                        </div>

                                        <h4 class="title"><a
                                                href="{{ route('quickcheckout', ['id' => $list->id]) }}">{{ $list->product_name }}</a>
                                        </h4>
                                        <div class="prices">
                                            <span
                                                class="price-old">{{ $list->product_mrp_price }}.00</span>
                                            <span class="sep">-</span>
                                            <span
                                                class="price text-success">{{ $list->product_regular_price }}.00</span>
                                        </div>
                                    </div>

                                    <div class="button mt-3 text-center"
                                        style="border: 1px solid; border-radius: 5px; cursor: pointer; padding: 5px 0;">
                                        <div class="cart-content">
                                            <a
                                                href="{{ route('quickcheckout', ['id' => $list->id]) }}">
                                                <p class="cart-text" style="color: black; margin: 0;">
                                                    Enquire Now</p>
                                            </a>

                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        @endforeach





                    </div>
                </div>

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
    </section> --}}


    <section class="product-area product-best-seller-area">
        <div class="container">
            @php
            $carkers1 =App\Models\Brand::get()

            @endphp


            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">Featured Brands</h3>
                        <!--<div class="desc">-->
                        <!--    <p>Above & Beyond Frames!</p>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-wrap">
                        <div class="swiper-container product-slider-col4-container2">
                            <div class="swiper-wrapper">

                                @foreach ($carkers1 as $brand )


                                <div class="swiper-slide">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <div class="inner-content">
                                            <div class="product-thumb" style="padding:10px">
                                                <a>
                                                    <img src="{{ env('MAIN_URL') . $brand->logo }}"
                                                        width="100" height="100" alt="Image-HasTech"
                                                        style=" width: 100px; height: 100px;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--== End prPduct Item ==-->
                                </div>

                                @endforeach



                            </div>

                        </div>
                        <!--== Add Swiper Arrows ==-->
                        <div class="product-swiper-btn-wrap" style="display: none !important">
                            <div class="product-swiper-btn-prev preve">
                                <i class="fa fa-arrow-left"></i>
                            </div>
                            <div class="product-swiper-btn-next next" style="display: none !important">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--== Start Testimonial Area Wrapper ==-->
    <section class="testimonial-area">
        <div class="container pt--0">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">What Our Customers Says</h3>
                        <div class="desc">
                            <!-- <p>There are many variations of passages of Lorem Ipsum available</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper-container testimonial-slider-container">
                        <div class="swiper-wrapper">
                            @php
                            $carkers1 =App\Models\Testmonial::get()

                            @endphp
                            @foreach ($carkers1 as $testimonials )
                            <div class="swiper-slide">
                                <!--== Start Testimonial Item ==-->
                                <div class="testimonial-item">
                                    <div class="testi-inner-content">
                                        <div class="testi-thumb">
                                            <img src="{{ env('MAIN_URL') . $testimonials->image }}" width="90" height="90" alt="Image-HasTech">
                                        </div>
                                        <div class="testi-content">
                                            <p>{{ $testimonials->content }}</p>
                                            <div class="testi-author">
                                                <div class="testi-info">
                                                    <span class="name"><a>{{$testimonials->name }}</a></span>
                                                </div>
                                            </div>
                                            <div class="testi-quote"><img src="assets/img/icons/quote1.webp"
                                                    width="62" height="44" alt="Image-HasTech"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Testimonial Item ==-->
                            </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





</main>
@endif
@endsection