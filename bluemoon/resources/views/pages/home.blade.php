@extends('layouts.app')
@section('title', 'Bluemoon Crackers')
@section('meta-title', 'Buy Sivakasi Crackers Online – Best Crackers at Wholesale Price | Bluemoon Crackers' )
@section('meta-description', 'Explore the best Sivakasi crackers online with Bluemoon Crackers. Shop top firecracker brands at wholesale price with delivery all over India.')
@section('meta-keywords', '' )
@section('main-content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    /* ============ Tokens ============ */
    :root{
        --ink:      #22243a;
        --navy:     #1e2a52;
        --gold:     #d9a441;
        --gold-lt:  #f4c869;
        --flame:    #ea3a2d;
        --flame-lt: #ff8a3d;
        --cream:    #fbf7ee;
        --line:     #ece5d4;
        --font-display: 'Poppins', sans-serif;
        --font-body: 'Inter', sans-serif;
        --radius: 14px;
        --shadow: 0 6px 20px rgba(30,42,82,0.09);
        --shadow-hover: 0 16px 32px rgba(30,42,82,0.16);
    }

    body{ font-family: var(--font-body); color: var(--ink); background: var(--cream); }

    /* ============ Top notice bar — plain, info-dense like reference sites ============ */
    .bm-topbar{ background: var(--navy); color: #fff; font-size: 12.5px; padding: 7px 0; }
    .bm-topbar .container{ display:flex; align-items:center; justify-content: space-between; flex-wrap: wrap; gap: 6px; }
    .bm-topbar a{ color: #fff; text-decoration:none; }
    .bm-topbar .bm-legal{ opacity:.85; }
    .bm-topbar .bm-phones{ display:flex; gap:16px; flex-wrap:wrap; }
    .bm-topbar .bm-phones i{ margin-right:4px; }

    /* ============ Floating WhatsApp — plain, no glow ============ */
    .bm-whatsapp-float{
        position: fixed; right: 16px; bottom: 16px; z-index: 999;
        width: 52px; height: 52px; border-radius: 50%;
        background: #25D366; color:#fff;
        display:flex; align-items:center; justify-content:center;
        font-size: 26px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.25);
        text-decoration:none;
    }

    .container{ max-width: 1280px; }

    /* ============ Section Title — plain, matches reference sites ============ */
    .section-title{ text-align:center; margin-bottom: 24px; }
    .section-title .eyebrow{ display:none; }
    .section-title .title{
        font-family: var(--font-body);
        font-weight: 700;
        font-size: clamp(19px, 2.4vw, 24px);
        color: var(--ink);
        margin: 0;
        text-transform: uppercase;
        letter-spacing: .5px;
    }
    .text-left.section-title{ text-align:left; }

    /* ============ Feature Strip: dark navy band ============ */
    .cat-product-section{
        background: #fff;
        border-bottom: 1px solid var(--line);
        padding: 26px 0 !important;
        margin-top: -4px;
    }
    .cat-product-section .container{ padding-top:0 !important; }
    .cat-product-section .card{
        background: transparent !important;
        border: none !important;
        box-shadow: none !important;
        margin-bottom: 0 !important;
    }
    .cat-product-section .card-body{ padding: 4px 0; }
    .ave i{
        font-size: 18px !important;
        color: var(--flame) !important;
        width: auto; height: auto;
        background: none;
        display: inline-block;
    }
    .cat-product-section h4{
        font-family: var(--font-body);
        font-weight: 700;
        font-size: 14px !important;
        color: var(--ink);
        margin: 0 0 2px;
        text-transform: uppercase;
    }
    .cat-product-section .bm-feat-desc{
        color: #7c7f92;
        font-size: 12px;
        line-height: 1.4;
        margin: 0;
    }
    .rotate-icon{ transition: transform .5s ease; display:inline-block; }
    .card:hover .rotate-icon{ transform: rotate(360deg); }

    /* ============ Product Grid Sections ============ */
    .product-best-seller-area{ padding: 56px 0; }
    .product-item{
        background:#fff;
        border-radius: var(--radius);
        border: 1px solid var(--line);
        overflow: hidden;
        height: 100%;
    }

    .product-thumb{
        position: relative;
        overflow: hidden;
        background: var(--cream);
        aspect-ratio: 1 / 1;
        display:flex; align-items:center; justify-content:center;
    }
    .product-thumb img{
        width: 100%; height: 100%;
        object-fit: contain;
        padding: 16px;
        transition: transform .4s ease;
    }
    .product-thumb:hover img.front-img{ transform: scale(1.03); }
    .back-img{ z-index:2; opacity:0; display:none; }
    .front-img{ z-index:1; opacity:1; display:block; }

    /* discount tag — plain solid, matches reference site's flat "60% off" style */
    .product-flag{ position:absolute; top:10px; left:10px; z-index:3; }
    .product-flag::after{ display:none; content:none; border:none; }
    .product-flag ul{ list-style:none; margin:0; padding:0; }
    .product-flag .discount{
        background: var(--flame);
        color: #fff;
        font-family: var(--font-body);
        font-weight: 700;
        font-size: 12.5px;
        line-height: 1.1;
        padding: 5px 10px;
        border-radius: 4px;
    }
    .product-flag .discount p{ display:inline; margin:0; font-size:11px; font-weight:500; }

    .product-info{ padding: 16px 14px 4px; text-align:center; }
    .product-info .title{
        font-family: var(--font-display);
        font-size: 16px;
        font-weight: 600;
        color: var(--ink);
        margin: 0 0 10px;
        min-height: 42px;
        display:-webkit-box;
        -webkit-line-clamp:2;
        -webkit-box-orient:vertical;
        overflow:hidden;
    }
    .product-info .title a{ color: inherit; text-decoration:none; }

    .prices{ display:flex; align-items:baseline; justify-content:center; gap:8px; flex-wrap:wrap; }
    .prices .price-old{ color:#9a9a9a !important; text-decoration: line-through; font-size: 13px; }
    .prices .price{
        color: var(--ink) !important;
        font-family: var(--font-body);
        font-weight: 700 !important;
        font-size: 17px !important;
    }
    .prices .sep{ display:none; }

    .button{
        margin: 14px 14px 16px !important;
        padding: 0 !important;
        border: none !important;
        border-radius: 6px !important;
        background: var(--flame) !important;
    }
    .cart-content a{ display:block; padding: 10px 0; }
    .cart-text{
        color: #fff !important;
        font-weight: 700 !important;
        font-family: var(--font-body);
        font-size: 13.5px;
    }

    /* nav arrows */
    .product-swiper-btn-wrap, .swiper-btn-wrap{ display:flex; gap:10px; }
    .product-swiper-btn-prev, .product-swiper-btn-next,
    .swiper-btn-prev, .swiper-btn-next{
        width:42px; height:42px; border-radius: 50%;
        background:#fff; border: 1px solid var(--line); color: var(--navy);
        display:flex; align-items:center; justify-content:center;
        box-shadow: var(--shadow); cursor:pointer;
        transition: background .2s ease, color .2s ease;
    }
    .product-swiper-btn-prev:hover, .product-swiper-btn-next:hover,
    .swiper-btn-prev:hover, .swiper-btn-next:hover{ background: var(--navy); color: var(--gold-lt); }

    /* ============ Banner ============ */
    .product-category-area{ padding: 30px 0; }
    .product-category-area img{
        width:100%;
        border-radius: 18px !important;
        filter: drop-shadow(0 12px 26px rgba(28,35,64,0.16)) !important;
    }

    /* ============ Brand strip — minimal, no cards, breaks card monotony ============ */
    .product-best-seller-area:has(.product-thumb[style*="padding:10px"]){
        background: #fff;
        border-top: 1px solid var(--line);
        border-bottom: 1px solid var(--line);
        padding: 44px 0;
    }
    .product-thumb[style*="padding:10px"]{
        background: transparent !important;
        padding: 0 !important;
        display:flex; align-items:center; justify-content:center;
        filter: grayscale(1) opacity(.55);
        transition: filter .25s ease;
    }
    .product-thumb[style*="padding:10px"]:hover{ filter: grayscale(0) opacity(1); }

    /* ============ Testimonials ============ */
    .testimonial-area{ padding: 56px 0; }
    .testimonial-item{
        background: transparent;
        padding: 10px 22px;
        text-align:center;
    }
    .testi-thumb img{ border-radius: 50%; border: 3px solid var(--gold-lt); }
    .testi-content p{
        color: var(--ink); font-size: 16px; line-height: 1.7;
        font-family: var(--font-display); font-weight: 500; font-style: italic;
    }
    .testi-info .name{ font-family: var(--font-body); font-weight: 700; color: var(--navy); font-size: 14px; }
    .testi-quote img{ opacity: .5; }

    /* ============ Responsive ============ */
    @media (max-width: 991px){
        .cat-product-section .col-lg-3{ margin-bottom: 18px; }
    }
    @media (max-width: 767px){
        .section-title .title{ font-size: 21px; }
        .product-info .title{ font-size: 14px; min-height: 38px; }
        .prices .price{ font-size: 17px !important; }
        .cart-text{ font-size: 11.5px; }
        .product-best-seller-area{ padding: 40px 0; }
        .product-category-area img{ border-radius: 12px !important; }
    }
    @media (max-width: 480px){
        .ave i{ width:38px; height:38px; font-size:16px !important; }
        .cat-product-section h4{ font-size:13px !important; }
    }

    /* Banner Slider Responsive Styling */
    .home-slider-area .default-slider-container {
        width: 100%;
        position: relative;
        overflow: hidden;
    }
    .home-slider-area .home-slider-container .home-slider-wrapper.slider-default .slider-content-area-two,
    .home-slider-area .slider-content-area-two {
        width: 100%;
        height: 540px;
        min-height: 540px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
    }
    .home-slider-area video.banner-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
    }
    @media (max-width: 1200px) {
        .home-slider-area .home-slider-container .home-slider-wrapper.slider-default .slider-content-area-two,
        .home-slider-area .slider-content-area-two {
            height: 460px !important;
            min-height: 460px !important;
        }
    }
    @media (max-width: 991px) {
        .home-slider-area .home-slider-container .home-slider-wrapper.slider-default .slider-content-area-two,
        .home-slider-area .slider-content-area-two {
            height: 360px !important;
            min-height: 360px !important;
        }
    }
    @media (max-width: 767px) {
        .home-slider-area .home-slider-container .home-slider-wrapper.slider-default .slider-content-area-two,
        .home-slider-area .slider-content-area-two {
            height: 260px !important;
            min-height: 260px !important;
            background-size: contain !important;
            background-position: center center !important;
        }
        .home-slider-area .home-slider-container .home-slider-wrapper.slider-default,
        .home-slider-area .default-slider-container {
            height: 260px !important;
        }
    }
    @media (max-width: 575px) {
        .home-slider-area .home-slider-container .home-slider-wrapper.slider-default .slider-content-area-two,
        .home-slider-area .slider-content-area-two {
            height: 215px !important;
            min-height: 215px !important;
            background-size: contain !important;
            background-position: center center !important;
        }
        .home-slider-area .home-slider-container .home-slider-wrapper.slider-default,
        .home-slider-area .default-slider-container {
            height: 215px !important;
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

    <div class="bm-topbar">
        <div class="container">
            <div class="bm-legal">GST: XXXXXXXXXXXXX &nbsp;|&nbsp; Exp. Lic. No: XX/XX/XX/XXXXX &nbsp;|&nbsp; Minimum order enquiry: ₹1000</div>
            <div class="bm-phones">
                <a href="tel:+91XXXXXXXXXX"><i class="fa-solid fa-phone"></i>+91 XXXXX XXXXX</a>
                <a href="https://wa.me/91XXXXXXXXXX" target="_blank"><i class="fa-brands fa-whatsapp"></i>WhatsApp</a>
            </div>
        </div>
    </div>

    <a href="https://wa.me/91XXXXXXXXXX" target="_blank" class="bm-whatsapp-float" aria-label="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    @if ($page)
    <section class="page-not-found-area">
        <div class="container pt--0 pb--0">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="page-not-found-wrap">
                        <div class="page-not-found-content">
                            <img src="{{ env('MAIN_URL') . $page->image }}"
                                style="border-radius: 100px; filter: drop-shadow(0px 0px 6px black);">
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
                            <div class="slider-content-area slider-content-area-two position-relative overflow-hidden"
                                @if (!$isVid)
                                style="background-image: url('{{ $bannerUrl }}');"
                                data-bg-img="{{ $bannerUrl }}"
                                @endif
                            >
                                @if ($isVid)
                                <video autoplay muted loop playsinline class="banner-video">
                                    <source src="{{ $bannerUrl }}" type="video/mp4">
                                </video>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!--== Add Swiper Arrows ==-->
            <div class="swiper-btn-wrap">
                <div class="swiper-btn-prev"><i class="pe-7s-angle-left"></i></div>
                <div class="swiper-btn-next"><i class="pe-7s-angle-right"></i></div>
            </div>
        </div>
    </section>

    <section class="cat-product-section">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-3 text-center">
                                    <div class="ave"><i class="fa-solid fa-truck-fast rotate-icon"></i></div>
                                </div>
                                <div class="col-lg-9 col-9 text-center">
                                    <h4 style="margin-top:7px">Quick Delivery</h4>
                                    <p class="bm-feat-desc">Packed safe, dispatched fast</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-3 text-center">
                                    <div class="ave"><i class="fa-solid fa-lock rotate-icon"></i></div>
                                </div>
                                <div class="col-lg-9 col-9 text-center">
                                    <h4 style="margin-top:7px">Secure Payment</h4>
                                    <p class="bm-feat-desc">Confirmed by call before dispatch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-3 text-center mx-auto d-block">
                                    <div class="ave"><i class="fa-solid fa-tags rotate-icon"></i></div>
                                </div>
                                <div class="col-lg-9 col-9 text-center">
                                    <h4 style="margin-top:7px">Order Discount</h4>
                                    <p class="bm-feat-desc">Better rates on bulk orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-3 text-center mx-auto d-block">
                                    <div class="ave"><i class="fa-solid fa-headset rotate-icon"></i></div>
                                </div>
                                <div class="col-lg-9  col-9 text-center">
                                    <h4 style="margin-top:7px">24x7 Support</h4>
                                    <p class="bm-feat-desc">Call or WhatsApp anytime</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

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
                        <span class="eyebrow">Sivakasi Originals</span>
                        <h3 class="title">{{ $section->section_name }}</h3>
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
                                    <div class="product-item">
                                        <div class="inner-content">
                                            <div class="product-thumb position-relative" style="position: relative;">
                                                <a href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">
                                                    <img src="{{ env('MAIN_URL') . $sectiondata->product_image }}" class="front-img img" width="270" height="274" alt="Image">
                                                    <img src="{{ env('MAIN_URL') . $sectiondata->product_image }}" class="back-img img" width="270" height="274" alt="Hover Image">
                                                </a>
                                                <div class="product-flag">
                                                    @php $reduceamt = $sectiondata->product_mrp_price - $sectiondata->product_regular_price; @endphp
                                                    <ul><li class="discount">{{ $discount->discount }}% <p>Off</p></li></ul>
                                                </div>
                                            </div>
                                            <div class="product-info text-center mt-3 mb-4">
                                                <h4 class="title">
                                                    <a href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">{{ $sectiondata->product_name }}</a>
                                                </h4>
                                                <div class="prices">
                                                    <span class="price-old">{{ $sectiondata->product_mrp_price }}.00</span>
                                                    <span class="sep"> </span>
                                                    <span class="price">{{ $sectiondata->product_regular_price }}.00</span>
                                                </div>
                                            </div>
                                            <div class="button mt-3 text-center">
                                                <div class="cart-content">
                                                    <a href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">
                                                        <p class="cart-text">Enquire Now</p>
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
                            <div class="product-swiper-btn-prev"><i class="fa fa-arrow-left"></i></div>
                            <div class="product-swiper-btn-next"><i class="fa fa-arrow-right"></i></div>
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
                <img src="assets/img/sim_ban.jpeg">
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
                        <span class="eyebrow">Handpicked</span>
                        <h3 class="title">{{ $section->section_name }}</h3>
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
                                    <div class="product-item">
                                        <div class="inner-content">
                                            <div class="product-thumb position-relative" style="position: relative;">
                                                <a href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">
                                                    <img src="{{ env('MAIN_URL') . $sectiondata->product_image }}" class="front-img img" width="270" height="274" alt="Image">
                                                    <img src="{{ env('MAIN_URL') . $sectiondata->product_image }}" class="back-img img" width="270" height="274" alt="Hover Image">
                                                </a>
                                                <div class="product-flag">
                                                    @php $reduceamt = $sectiondata->product_mrp_price - $sectiondata->product_regular_price; @endphp
                                                    <ul><li class="discount">{{ $discount->discount }}%<p>Off</p></li></ul>
                                                </div>
                                            </div>
                                            <div class="product-info text-center mt-3">
                                                <h4 class="title">
                                                    <a href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">{{ $sectiondata->product_name }}</a>
                                                </h4>
                                                <div class="prices">
                                                    <span class="price-old">{{ $sectiondata->product_mrp_price }}.00</span>
                                                    <span class="sep"> </span>
                                                    <span class="price">{{ $sectiondata->product_regular_price }}.00</span>
                                                </div>
                                            </div>
                                            <div class="button mt-3 text-center">
                                                <div class="cart-content">
                                                    <a href="{{ route('quickcheckout', ['id' => $sectiondata->id]) }}">
                                                        <p class="cart-text">Enquire Now</p>
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
                            <div class="product-swiper-btn-prev"><i class="fa fa-arrow-left"></i></div>
                            <div class="product-swiper-btn-next"><i class="fa fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <section class="product-area product-best-seller-area">
        <div class="container">
            @php $carkers1 = App\Models\Brand::get() @endphp

            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <span class="eyebrow">Trusted Brands</span>
                        <h3 class="title">Featured Brands</h3>
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
                                    <div class="product-item">
                                        <div class="inner-content">
                                            <div class="product-thumb" style="padding:10px">
                                                <a>
                                                    <img src="{{ env('MAIN_URL') . $brand->logo }}" width="100" height="100" alt="Image-HasTech" style=" width: 100px; height: 100px;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="product-swiper-btn-wrap" style="display: none !important">
                            <div class="product-swiper-btn-prev preve"><i class="fa fa-arrow-left"></i></div>
                            <div class="product-swiper-btn-next next" style="display: none !important"><i class="fa fa-arrow-right"></i></div>
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
                        <span class="eyebrow">In Their Words</span>
                        <h3 class="title">What Our Customers Say</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper-container testimonial-slider-container">
                        <div class="swiper-wrapper">
                            @php $carkers1 = App\Models\Testmonial::get() @endphp
                            @foreach ($carkers1 as $testimonials )
                            <div class="swiper-slide">
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
                                            <div class="testi-quote"><img src="assets/img/icons/quote1.webp" width="62" height="44" alt="Image-HasTech"></div>
                                        </div>
                                    </div>
                                </div>
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