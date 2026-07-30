@extends('layouts.app')
@section('title', 'Bluemoon Crackers')
@section('meta-title', 'Buy Sivakasi Crackers Online – Best Crackers at Wholesale Price | Bluemoon Crackers' )
@section('meta-description',  'Explore the best Sivakasi crackers online with Bluemoon Crackers. Shop top firecracker brands at wholesale price with delivery all over India.')
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

        .text-center {
            border-color: cornsilk;
            filter: drop-shadow(2px 4px 6px #c5d9e7);
        }
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
.product-flag::after{
    position: absolute;
    content: "";
    width: 0;
    height: 0;
    border-left: 25px solid transparent;
    border-right: 25px solid transparent;
    border-top: 10px solid #2cb671;
    top: 27px;
    right: 18px;
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
    </style>
    @php
        $page = App\Models\PageOff::where('status', 1)->first();
        $user = Auth::guard('customer')->user();

    @endphp


    <main class="main-content">

        @php use Illuminate\Support\Str; @endphp
        @php

            $video = App\Models\BannerImage::where('banner_position', 1)->first();

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
                    <div class="swiper-wrapper home-slider-wrapper slider-default" style="height: none !important;">
                        <div class="swiper-slide">
                            <div class="slider-content-area slider-content-area-two position-relative overflow-hidden">
                                <video autoplay muted loop playsinline
                                    class="w-100 h-65 position-absolute top-0 start-0 object-fit-cover"
                                    style="z-index: -1;">
                                    <source src="{{ env('MAIN_URL') . $video->banner_image }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        @php
                            $images = App\Models\BannerImage::where('banner_position', 0)->get();
                        @endphp

                        @foreach ($images as $img)
                            <div class="swiper-slide">
                                <div class="slider-content-area slider-content-area-two"
                                    data-bg-img="{{ env('MAIN_URL') . $img->banner_image }}">

                                </div>
                            </div>
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
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card text-center" style="border: 2px solid #85250c">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-3 text-center">
                                              <div class="ave">
                                        <i class="fa-solid fa-truck-fast rotate-icon"></i>
                                    </div>
                                        </div>
                                        <div class="col-lg-9 col-9 text-center">
                                             <h4 style="font-size: 16px;margin-top:7px">Quick Delivery</h4>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card text-center" style="border: 2px solid #b900ff">
                                <div class="card-body">
                                       <div class="row">
                                        <div class="col-lg-3 col-3 text-center">
                                              <div class="ave">
                                        <i class="fa-solid fa-lock rotate-icon"></i>
                                    </div>
                                        </div>
                                        <div class="col-lg-9 col-9 text-center">
                                             <h4 style="font-size: 16px;margin-top:7px">Secure Payment</h4>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card text-center" style="border: 2px solid #eb3e32">
                                <div class="card-body">
                                       <div class="row">
                                        <div class="col-lg-3 col-3 text-center mx-auto d-block">
                                              <div class="ave">
                                        <i class="fa-solid fa-tags rotate-icon"></i>
                                    </div>
                                        </div>
                                        <div class="col-lg-9 col-9 text-center">
                                             <h4 style="font-size: 16px;margin-top:7px">Order Discount</h4>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card text-center" style="border: 2px solid #000000">
                                <div class="card-body">
                                       <div class="row">
                                        <div class="col-lg-3 col-3 text-center mx-auto d-block">
                                              <div class="ave">
                                         <i class="fa-solid fa-headset rotate-icon"></i>
                                    </div>
                                        </div>
                                        <div class="col-lg-9  col-9 text-center">
                                             <h4 style="font-size: 16px;margin-top:7px">24x7 Support</h4>
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

                                           $sectionhome = App\Models\HomeSection::take(2)->get();


                                        @endphp

                                        @foreach ( $sectionhome as  $section)

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
        <img src="{{ env('MAIN_URL') . $sectiondata->product_hover_image }}"
            class="back-img img"
            width="270" height="274" alt="Hover Image">
    </a>
                                                <div class="product-flag">
                                                    @php
                                                        $reduceamt = $sectiondata->product_mrp_price - $sectiondata->product_regular_price;
                                                    @endphp
                                                    <ul>
                                                        <li class="discount">{{ $discount->discount }}% <p>Off</p></li>
                                                    </ul>
                                                </div>

                                                <!-- Hover Button -->


                                            </div>

                                            <div class="product-info text-center mt-3">
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


                                          <section class="product-area product-category-area">
                <div class="container-fluid">
                    <div class="row mt-4 mb-5">
                        <img src="assets/img/sim_ban.jpeg"
                            style="border-radius: 100px; filter: drop-shadow(0px 0px 6px black);">
                    </div>
                </div>
            </section>


              @php

                                       $sectionhome = App\Models\HomeSection::orderBy('id', 'desc')->take(1)->get();


                                        @endphp

                                        @foreach ( $sectionhome as  $section)

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
        <img src="{{ env('MAIN_URL') . $sectiondata->product_hover_image }}"
            class="back-img img"
            width="270" height="274" alt="Hover Image">
    </a>
                                                <div class="product-flag">
                                                    @php
                                                        $reduceamt = $sectiondata->product_mrp_price - $sectiondata->product_regular_price;
                                                    @endphp
                                                    <ul>
                                                        <li class="discount">{{  $discount->discount }}%<p>Off</p> </li>
                                                    </ul>
                                                </div>

                                                <!-- Hover Button -->


                                            </div>

                                            <div class="product-info text-center mt-3">
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
                                                            <a >
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
                                                            <a >
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
                                                            <a >
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
                                                        <a >
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
                                    <div class="product-swiper-btn-prev preve" >
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
                                                            <span class="name"><a >{{$testimonials->name  }}</a></span>
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
