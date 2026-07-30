@extends('layouts.app')
@section('title', 'Bluemoon Crackers')
@section('main-content')
<main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="swiper-container home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="assets/img/shape/1.webp">
              <div class="container">
                <div class="slider-container">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-sm-6 col-md-5">
                      <div class="slider-content">
                        <div class="content">
                          <div class="title-box">
                            <h2 class="title">Exclusive New Crackers</h2>
                          </div>
                          <div class="desc-box">
                            <p class="desc">Up To 30% Off All Crackers & Products</p>
                          </div>
                          <div class="btn-box">
                            <a class="btn-slider" href="#">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="slider-thumb">
                        <div class="thumb scene">
                          <span class="scene-layer" data-depth=".3"><img src="assets/img/slider/Banner 1.jpg" width="461" height="489" alt="Image-HasTech"></span>
                        </div>
                        <div class="shape-group mousemove">
                          <div class="shape-group-one mousemove-layer" data-speed=".8" data-bg-img="assets/img/shape/2.webp"></div>
                          <div class="shape-group-two scene"><span class="scene-layer" data-depth=".6"><img src="assets/img/shape/3.webp" width="471" height="462" alt="Image-HasTech"></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="slider-text-shape">NEW 2021</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="assets/img/shape/1.webp">
              <div class="container">
                <div class="slider-container">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-sm-6 col-md-5">
                      <div class="slider-content">
                        <div class="content">
                          <div class="title-box">
                            <h2 class="title">Exclusive New Crackers</h2>
                          </div>
                          <div class="desc-box">
                            <p class="desc">Up To 30% Off All Crackers & Products</p>
                          </div>
                          <div class="btn-box">
                            <a class="btn-slider" href="#">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="slider-thumb">
                        <div class="thumb scene">
                          <span class="scene-layer" data-depth=".3"><img src="assets/img/slider/Banner 3.jpg" width="548" height="649" alt="Image-HasTech"></span>
                        </div>
                        <div class="shape-group mousemove">
                          <div class="shape-group-one mousemove-layer" data-speed=".8" data-bg-img="assets/img/shape/2.webp"></div>
                          <div class="shape-group-two scene"><span class="scene-layer" data-depth=".6"><img src="assets/img/shape/3.webp" width="471" height="462" alt="Image-HasTech"></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="slider-text-shape">NEW 2022</h2>
            </div>
          </div>
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
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Collection Area Wrapper ==-->
    <section class="product-area product-collection-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <!--== Start Product Collection Item ==-->
            <div class="product-collection">
              <div class="inner-content">
                <div class="product-collection-content">
                  <div class="content">
                    <h3 class="title"><a href="#">Limited Edition</a></h3>
                    {{-- <h4 class="price">From $95.00</h4> --}}
                  </div>
                </div>
                <div class="product-collection-thumb" data-bg-img="assets/img/shop/collection/limited.png"></div>
                <a class="banner-link-overlay" href="#"></a>
              </div>
            </div>
            <!--== End Product Collection Item ==-->
          </div>
          <div class="col-lg-4 col-md-6">
            <!--== Start Product Collection Item ==-->
            <div class="product-collection">
              <div class="inner-content">
                <div class="product-collection-content">
                  <div class="content">
                    <h3 class="title"><a href="#">New Arrivals</a></h3>
                    {{-- <h4 class="price">From $90.00</h4> --}}
                  </div>
                </div>
                <div class="product-collection-thumb" data-bg-img="assets/img/shop/collection/new.png"></div>
                <a class="banner-link-overlay" href="#"></a>
              </div>
            </div>
            <!--== End Product Collection Item ==-->
          </div>
          <div class="col-lg-4 col-md-6">
            <!--== Start Product Collection Item ==-->
            <div class="product-collection">
              <div class="inner-content">
                <div class="product-collection-content">
                  <div class="content">
                    <h3 class="title"><a href="#">Kids Collection</a></h3>
                    {{-- <h4 class="price">From $82.00</h4> --}}
                  </div>
                </div>
                <div class="product-collection-thumb" data-bg-img="assets/img/shop/collection/kids.png"></div>
                <a class="banner-link-overlay" href="#"></a>
              </div>
            </div>
            <!--== End Product Collection Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Collection Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-default-area">
      <div class="container pt--0">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Limited Edition</h3>
              <div class="desc">
                <p>There are many variations of passages of Lorem Ipsum available</p>
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
                    $limited =  App\Models\Product::join('categories','categories.id','products.category_id')->where('products.category_id',27)->select('products.*','categories.category_name')->get();

                    @endphp

                    @foreach ($limited as $limit )
                    <div class="swiper-slide">
                        <!--== Start Product Item ==-->
                        <div class="product-item">
                          <div class="inner-content">
                            <div class="product-thumb">
                              <a href="#">
                                <img src="{{ env('MAIN_URL') . $limit->product_image }}" width="270" height="274" alt="{{$limit->product_desc  }}">

                              </a>
                              <div class="product-flag">

                                @php
                                    $reduceamt = $limit->product_mrp_price - $limit->product_regular_price
                                @endphp
                                <ul>
                                  <li class="discount">-{{ $reduceamt }}</li>
                                </ul>
                              </div>
                              <div class="product-action">
                        <a class="btn-product-wishlist" href="#"><i class="fa fa-heart"></i></a>
                        <a class="btn-product-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <button type="button" class="btn-product-quick-view-open">
                          <i class="fa fa-youtube"></i>
                        </button>

                      </div>
                              <a class="banner-link-overlay" href="#"></a>
                            </div>
                            <div class="product-info">
                              <div class="category">
                        <ul>
                          <li><a href="#">{{ $limit->category_name }}</a></li>

                                </ul>
                              </div>
                              <h4 class="title"><a href="#">{{ $limit->product_name }}</a></h4>
                              <div class="prices">
                                <span class="price-old">₹{{ $limit->product_mrp_price }}.00</span>
                                <span class="sep">-</span>
                                <span class="price">₹{{ $limit->product_regular_price }}.00</span>
                              </div>
                            </div>
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
    <!--== End Product Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <section class="bg-color-f2 position-relative z-index-1">
      <div class="container pt--0 pb--0">
        <div class="row divider-wrap divider-style1">
          <div class="col-lg-6">
            <div class="divider-content" data-title="NEW">
              <h4 class="sub-title">Saving 50%</h4>
              <h2 class="title">All Online Store</h2>
              <p class="desc">Offer Available All Crackers & Products</p>
              <a class="btn-theme" href="#">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-layer-wrap">
        <div class="bg-layer-style z-index--1 parallax" data-speed="1.05" data-bg-img="assets/img/photos/offer.png"></div>
      </div>
    </section>
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-best-seller-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title text-center">
                <h3 class="title">New Arrivals</h3>
                <div class="desc">
                  <p>There are many variations of passages of Lorem Ipsum available</p>
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

                        $newarrival=  App\Models\Product::join('categories','categories.id','products.category_id')->select('products.*','categories.category_name')->latest()->limit(5)->get();
                    @endphp

                    @foreach ( $newarrival as $new )
                    <div class="swiper-slide">
                        <!--== Start Product Item ==-->
                        <div class="product-item">
                          <div class="inner-content">
                            <div class="product-thumb">
                              <a href="#">
                                <img src="/{{ env('MAIN_URL') . $new->product_image }}" width="270" height="274" alt="{{$new->product_desc  }}">
                              </a>
                              <div class="product-flag">


                                @php
                                    $reduceamt = $new->product_mrp_price - $new->product_regular_price
                                @endphp
                                <ul>
                                  <li class="discount">-{{  $reduceamt }}</li>
                                </ul>
                              </div>
                              <div class="product-action">
                        <a class="btn-product-wishlist" href="#"><i class="fa fa-heart"></i></a>
                        <a class="btn-product-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <button type="button" class="btn-product-quick-view-open">
                          <i class="fa fa-youtube"></i>
                        </button>
                        {{-- <a class="btn-product-compare" href="#"><i class="fa fa-random"></i></a> --}}
                      </div>
                              <a class="banner-link-overlay" href="#"></a>
                            </div>
                            <div class="product-info">
                              <div class="category">
                        <ul>
                          <li><a href="#">{{ $new->category_name }}</a></li>

                                </ul>
                              </div>
                              <h4 class="title"><a href="#">{{$new->product_name  }}</a></h4>
                              <div class="prices">
                                <span class="price-old">₹{{ $new->product_mrp_price }}.00</span>
                                <span class="sep">-</span>
                                <span class="price">₹{{ $new->product_regular_price }}.00</span>
                              </div>
                            </div>
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
      <!--== End Product Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <section>
      <div class="container pt--0 pb--0">
        <div class="row flex-md-row-reverse justify-content-between divider-wrap divider-style2">
          <div class="col-lg-6">
            <div class="divider-thumb-content">
              <div class="thumb">
                <a href="#">
                  <img src="assets/img/shop/banner/offer2.png" width="570" height="350" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h2 class="title">Diwali Crackers</h2>
                <p class="desc">Up To 30% Off Products</p>
                <a class="btn-theme" href="#">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="divider-thumb-content">
              <div class="thumb">
                <a href="#">
                  <img src="assets/img/shop/banner/offer1.png" width="570" height="700" alt="Image-HasTech">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
     <!--== Start Product Area Wrapper ==-->

      <!--== End Product Area Wrapper ==-->
    <!--== End Blog Area Wrapper ==-->
    <section class="product-area product-best-seller-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title text-center">
                <h3 class="title">Kids Collection</h3>
                <div class="desc">
                  <p>There are many variations of passages of Lorem Ipsum available</p>
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
                    $kidsdata =  App\Models\Product::join('categories','categories.id','products.category_id')->where('products.category_id',27)->select('products.*','categories.category_name')->get();

                    @endphp

                    @foreach ($kidsdata as $kids)
                    <div class="swiper-slide">
                        <!--== Start Product Item ==-->
                        <div class="product-item">
                          <div class="inner-content">
                            <div class="product-thumb">
                              <a href="#">
                                <img src="{{ env('MAIN_URL') . $kids->product_image }}" width="270" height="274" alt="Image-HasTech">
                              </a>
                              @php
                              $reduceamt = $kids->product_mrp_price - $kids->product_regular_price
                          @endphp
                              <div class="product-flag">
                                <ul>
                                  <li class="discount">-{{  $reduceamt }}</li>
                                </ul>
                              </div>
                              <div class="product-action">
                        <a class="btn-product-wishlist" href="#"><i class="fa fa-heart"></i></a>
                        <a class="btn-product-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <button type="button" class="btn-product-quick-view-open">
                          <i class="fa fa-arrows"></i>
                        </button>
                        <a class="btn-product-compare" href="#"><i class="fa fa-random"></i></a>
                      </div>
                              <a class="banner-link-overlay" href="#"></a>
                            </div>
                            <div class="product-info">
                              <div class="category">
                        <ul>
                          <li><a href="#">{{ $kids->category_name }}</a></li>

                                </ul>
                              </div>
                              <h4 class="title"><a href="#">{{$kids->product_name  }}</a></h4>
                              <div class="prices">
                                <span class="price-old">₹{{ $kids->product_mrp_price }}.00</span>
                                <span class="sep">-</span>
                                <span class="price">₹{{ $kids->product_regular_price }}.00</span>
                              </div>
                            </div>
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
  </main>
  @endsection
