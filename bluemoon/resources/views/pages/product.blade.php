@extends('layouts.app')
@section('title', 'Bluemoon Crackers')
@section('main-content')




@php


$product = App\Models\Product::all();


  $user = Auth::guard('customer')->user();
$cate = App\Models\Category::join('products', 'products.category_id', '=', 'categories.id')
    ->select('categories.id', 'categories.category_name', DB::raw('COUNT(products.id) as product_count'))
    ->groupBy('categories.id', 'categories.category_name')
    ->get();
use Illuminate\Support\Str;
 $page = App\Models\PageOff::where('status',1)->first();
// dd($prod)
@endphp

@if ($page)
<section class="page-not-found-area">
      <div class="container pt--0 pb--0">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xl-6">
            <div class="page-not-found-wrap">
              <div class="page-not-found-content">
                <h3 class="not-found-text" data-aos="fade-down" data-aos-duration="1000">404</h3>
                <h3 class="title" data-aos="fade-down" data-aos-duration="1200">Page Cannot Be Found!</h3>
                <p class="desc" data-aos="fade-down" data-aos-duration="1400">Seems like nothing was found at this location. Try something else or you can go back to the homepage following the button below!</p>
                <a class="btn-theme-border" href="index.html" data-aos="fade-down" data-aos-duration="1600">Back to home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @else

      <section class="product-area product-category-area">
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <img src="assets/img/prod_ban.webp" style=" filter: drop-shadow(0px 0px 6px black);">
            </div>
        </div>
    </section>

    <section class="product-area product-default-area">
        <div class="container">
            <div class="row flex-xl-row-reverse justify-content-between">
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-top-bar">
                                <div class="shop-top-left">
                                    {{-- <p class="pagination-line"><a href="shop.html">12</a> Product Found of <a
                                            href="shop.html">30</a></p> --}}
                                </div>

                                <div class="shop-top-right">
                                    <div class="shop-sort">
                                        <span>Sort By :</span>
                                        <select class="form-select orderby" name="orderby" aria-label="Sort select example">
                                            <option value="menu_order" selected="selected">Default Sorting</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                                    aria-labelledby="nav-grid-tab">
                                  <div id="product-container" class="row">
@foreach ($product as $list)
    <div class="col-sm-6 col-lg-4 produc" data-cat="{{ $list->category_id }}"
         data-price="{{ $list->product_mrp_price }}" data-date="{{ $list->created_at }}">
        <div class="product-item">
            <div class="inner-content">
                <div class="product-thumb">
                    <a href="#">
                        <img src="{{ env('MAIN_URL') . $list->product_image }}" width="270" height="274"
                             alt="Image" style="width: 270px; height: 274px;">
                    </a>
                    <div class="product-flag">
                        @php
                            $reduceamt = $list->product_mrp_price - $list->product_regular_price;
                        @endphp
                        <ul><li class="discount">-₹{{ $reduceamt }}</li></ul>
                    </div>
                </div>
                <div class="product-info text-center">
                    <div class="category"><ul><li><a href="#">{{ $list->category_name }}</a></li></ul></div>
                    <h4 class="title"><a href="#">{{ $list->product_name }}</a></h4>
                    <div class="prices">
                        <span class="price-old">₹{{ $list->product_mrp_price }}.00</span>
                        <span class="sep">-</span>
                        <span class="price">₹{{ $list->product_regular_price }}.00</span>
                    </div>
                </div>



                                                        <div class="button mt-3 text-center"
                                                            style="border: 1px solid; border-radius: 5px; cursor: pointer; padding: 5px 0;">
                                                            <div class="cart-content">
                                                                <a href="{{ route('quickcheckout', ['id' => $list->id]) }}">
                                                                    <p class="cart-text" style="color: black; margin: 0;">
                                                                      Enquiry
                                                                    </p>
                                                                </a>

                                                            </div>
                                                        </div>

            </div>
        </div>
    </div>
@endforeach
</div>
<div id="no-products" style="display: none; text-align: center;">No Products Found</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="shop-sidebar">
<div class="shop-sidebar-price-range">
    <h4 class="sidebar-title">Price Filter</h4>
    <div class="sidebar-price-range">
        <div id="price-range"></div>
        <p>Price: ₹<span id="min-price">0</span> - ₹<span id="max-price">10000</span></p>
    </div>
</div>

                        <div class="shop-sidebar-category">
                            <h4 class="sidebar-title">Top Categories</h4>
                            <div class="sidebar-category">
                                <ul class="category-list mb--0">
                                     <li><a  class="catego active" data-cat="all">All</a></li>
                                    @foreach($cate as $c)


         <li><a  class="catego" data-cat="{{ $c->id }}"> {{ $c->category_name }} <span>({{ $c->product_count }})</span></a></li>

@endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="more-poffer mb-5 text-center">
        <h3>STAY TUNED, WE ARE BRING YOU MORE OFFERS...</h3>
    </div>


@endif


@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
$(document).ready(function () {
    // Auto-select category from URL
    const urlParams = new URLSearchParams(window.location.search);
    const urlCategory = urlParams.get('category');
    if (urlCategory) {
        $('.catego').removeClass('active');
        $('.catego[data-cat="' + urlCategory + '"]').addClass('active');
    }

    // Initialize price slider
    $("#price-range").slider({
        range: true,
        min: 0,
        max: 10000,
        values: [0, 10000],
        slide: function (event, ui) {
            $("#min-price").text(ui.values[0]);
            $("#max-price").text(ui.values[1]);
        },
        change: function () {
            filterProducts();
        }
    });

    function filterProducts() {
        var selectedCategory = $(".catego.active").data("cat") || "all";
        var sortOrder = $(".orderby").val();
        var priceMin = $("#price-range").slider("values", 0);
        var priceMax = $("#price-range").slider("values", 1);
        var productsFound = false;

        $(".produc").each(function () {
            var productCategory = $(this).data("cat");
            var productPrice = parseFloat($(this).data("price"));
           
            var matchesCategory = (selectedCategory === "all" || productCategory == selectedCategory);
            var matchesPrice = (productPrice >= priceMin && productPrice <= priceMax);

            if (matchesCategory && matchesPrice) {
                $(this).show();
                productsFound = true;
            } else {
                $(this).hide();
            }
        });

        var $products = $(".produc:visible").toArray();
        if (sortOrder === "price") {
            $products.sort((a, b) => $(a).data("price") - $(b).data("price"));
        } else if (sortOrder === "price-desc") {
            $products.sort((a, b) => $(b).data("price") - $(a).data("price"));
        } else if (sortOrder === "date") {
            $products.sort((a, b) => new Date($(b).data("date")) - new Date($(a).data("date")));
        }
        $("#product-container").append($products);
        $("#no-products").toggle(!productsFound);
    }

    $(".catego").click(function (e) {
        e.preventDefault();
        $(".catego").removeClass("active");
        $(this).addClass("active");
        filterProducts();
    });

    $(".orderby").change(function () {
        filterProducts();
    });

    filterProducts(); // Initial filter
});
</script>
