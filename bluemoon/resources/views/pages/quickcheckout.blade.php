@extends('layouts.app')
@section('title', 'Bluemoon Crackers Products')
@section('meta-title', 'Best Crackers for Diwali – Sivakasi Crackers Online Purchase')
@section('meta-description',
    'Discover a wide range of Diwali crackers, wedding fireworks & top cracker brands in India.
    Shop Sivakasi crackers online at wholesale price with delivery.')
@section('meta-keywords', '')
@section('main-content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <style>
        .highlighted-row {
            background-color: #fff8d0 !important;
            border: 2px solid #ffae00;
            transition: background-color 0.5s ease;
        }

        /* Default desktop/tablet styles */
        .shopping-cart-form table td,
        .shopping-cart-form table th {
            vertical-align: middle;
            text-align: center;
        }

        @keyframes breath {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.05);
                opacity: 0.9;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .breath-animation {
            animation: breath 2s infinite ease-in-out;
            border-radius: 30px;
        }

        @keyframes zoomInOut {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.04);
            }
        }

        .catego {
            animation: zoomInOut 3s ease-in-out infinite;
            appearance: none;
            background-color: #fff;
            border: 2px solid #ddd;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 16px;
            color: #333;
            background-image: url('data:image/svg+xml;charset=US-ASCII,<svg width="20" height="20" viewBox="0 0 20 20" fill="%23333" xmlns="http://www.w3.org/2000/svg"><path d="M5 7L10 12L15 7H5Z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 12px;
            cursor: pointer;
            width: 308px;
        }

        .catego:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.2);
            outline: none;
            transform: scale(1.02);
        }

        .catego:hover {
            border-color: #007bff;
        }

        @keyframes breathing {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .breathing-animation {
            animation: breathing 2.5s ease-in-out infinite;
        }

        .imagehover:hover {
            scale: 110%
        }

        input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

@media only screen and (max-width: 600px) {
 #checkout-bar {
   left:11% !important;
  }

}



        /* Mobile-friendly table */
    </style>




    @php
        $page = App\Models\PageOff::where('status', 1)->first();
        $product = App\Models\Product::get();
        $category = App\Models\Category::get();
        $pricelist = App\Models\PriceList::first();

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
        <section class="product-area product-category-area">
            <div class="container-fluid">
                <div class="row  mb-5">
                    <img src="/assets/img/Banner.jpg" style="border-radius: 0px; filter: drop-shadow(0px 0px 6px black);">
                </div>
            </div>
        </section>

        <div id="checkout-bar" class="breath-animation"
            style="
        position: fixed;
    bottom: 0;
    left: 40%;
    transform: translateX(-50%);
    width: 10%;
    /* background:#eb3e32 ; */
    background-size: cover;
    /* color: white; */
    padding: 10px 20px;
    text-align: center;
    font-size: 18px;
    /* box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2); */
    z-index: 9999;
    border-top-left-radius: 10px;
    border-top-right-radius: 15px;">
            <a data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel"></span>
                <button type="button" class="breathing-animation"
                    style="    border: none;
    border-top-left-radius: 8px;
    background: #981c85;
    border-bottom-right-radius: 8px;
    font-size: 18px;
    font-weight:bold;
  width: 250px;
    padding: 7px;
    color: #fff;

    text-align: center; ">
                    CheckOut : <span><strong class="text-white"> </strong><span class="overallTotal"
                            style="color: #fff;font-weight:bold">0</span></button>
            </a>
        </div>


        <section class="product-area product-default-area">
            <div class="container" style="max-width: 1500px;">
                <div class="row  justify-content-between">
                    <div class="col-xl-12 sticky-summary">
                        <div class="row ">
                            <div class="col-xl-4 pb-3 mx-auto d-block">
                        <div class="form-group" style="padding: 0px 0px 0px 0px">

                            <select class="form-control catego">
                                <option value="all">Select All Category</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        {{-- <div class="totals-summary mb-3" style="text-align: center;">
                            <strong style="background: #85250c;color: #ffff;padding: 9px;border-radius: 13px;">Net Total :
                                <span class="netTotal">0</span></strong>
                            <strong style="background: #be1e6a;color: #ffff;padding: 9px;border-radius: 13px;">You Save :
                                <span class="youSave">0</span></strong>
                            <strong style="background: #b900ff;color: #ffff;padding: 9px;border-radius: 13px;">Overall
                                Total : <span class="overallTotal">0</span></strong>
                            <a class="btn-theme breath-animation" data-margin-bottom="10" data-bs-toggle="offcanvas"
                                data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">
                                CheckOut
                            </a>

                        </div> --}}
                    </div>

                        </div>

                     <div>

                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12">

                            </div>
                            <div class="col-12">
                                <div class="shopping-cart-form table-responsive" style="padding: 0px 0px 0px 0px">
                                    <form action="#" method="post">
                                        <div class="table-responsive">
                                        <table class="table text-center align-middle">
                                            <thead>
                                                <tr>
                                                    <!--<th class="">&nbsp;</th>-->
                                                    <th class="product-thumb text-center" style="color: #ffffff;    width: 144px;" >Product
                                                        Image</th>
                                                    <th class="product-name text-center" style="color: #ffffff;width: 525px;">Product</th>
                                                    <th class="product-Content" style="color: #ffffff;width: 100px">Unit</th>

                                                    <th class="product-Content" style="color: #ffffff;width: 100px">MRP</th>
                                                    <th class="product-Offer" style="color: #ffffff;width: 100px">Offer</th>
                                                    <th class="product-quantity" style="color: #ffffff;width: 250px">Quantity</th>
                                                    <th class="product-subtotal" style="color: #ffffff">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @php

                                                    $sectionhome = App\Models\Category::get();

                                                @endphp

                                                @foreach ($sectionhome as $section)
                                                    <tr class="category-header" data-cat="{{ $section->id }}">
                                                        <td colspan="7"><span
                                                                style="font-weight: 600">{{ $section->category_name }}</span>
                                                        </td>
                                                    </tr>



                                                    @php
                                                        $product = App\Models\Product::where(
                                                            'category_id',
                                                            $section->id,
                                                        )->get();
                                                    @endphp
                                                  @foreach ($product as $pro)
                                                        <tr class="cart-product-item produc"
                                                            data-cat="{{ $pro->category_id }}"
                                                            id="product-{{ $pro->id }}">
                                                            <td class="product-thumb text-center" data-label="Image">
                                                                <a href="{{ env('MAIN_URL') . $pro->product_image }}"
                                                                    data-fancybox="gallery"
                                                                    data-caption="{{ $pro->product_name }}">
                                                                    <img src="{{ env('MAIN_URL') . $pro->product_image }}"
                                                                        width="50" height="50" alt="Image">
                                                                </a>
                                                            </td>
                                                            <td class="product-name" data-label="Product">
                                                                <h4 class="title text-center"><a
                                                                        href="#">{{ $pro->product_name }}</a></h4>
                                                            </td>
                                                            <td class="product-content" data-label="Content">
                                                                <p class="title text-center" ><a
                                                                        href="#" style="color:black">{{ $pro->product_content }}</a>
                                                                </p>
                                                            </td>
                                                            <td class="product-name text-center" data-label="MRP">
                                                                <span
                                                                    class="mrpprice text-center">{{ $pro->product_mrp_price }}</span>
                                                            </td>
                                                            <td class="product-name text-center" data-label="Offer">
                                                                <span
                                                                    class="offerprice text-center">{{ $pro->product_regular_price }}</span>
                                                            </td>

                                                            @if ($pro->product_stock == 1)
                                                                <td class="product-quantity" data-label="Quantity">
                                                                   <p class="text-danger">Out of Stock</p>
                                                                </td>
                                                            @else
                                                                 <td class="product-quantity" data-label="Quantity" >
                                                                <div class="pro-qty"
                                                                    data-product-id="{{ $pro->id }}">
                                                                    <input type="number" class="quantity"
                                                                        title="Quantity" value="">
                                                                </div>
                                                            </td>
                                                            @endif

                                                            <td class="product-subtotal" data-label="Total">
                                                                <span class="totalprice">0.00</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                                <tr id="no-products" style="display: none;">
                                                    <td colspan="7" class="text-center text-danger">No products found
                                                        in this category.</td>
                                                </tr>




                                            </tbody>
                                        </table>
                                        </div>
                                    </form>
                                </div>







                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    @endif








@endsection

<!--== Start Aside Cart Menu ==-->
<div class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart">
    <div class="offcanvas-header">
        <h1 id="offcanvasRightLabel"></h1>
        <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">
            Shopping Cart <i class="fa fa-chevron-right"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <form action="#" method="post">

            <div class="row">

                <div class="col-lg-12 listdata" style="max-height: 50vh; overflow-y: auto;">
                    <ul class="aside-cart-product-list"></ul>
                </div>

                {{-- <div class="col-lg-12 formdata" style="max-height: 50vh; overflow-y: auto;display:none">
                    <div class="form-group">
                        <label for="f_name">Name <abbr class="required" title="required">*</abbr></label>
                        <input id="f_name" type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="com_name">Phone Number</label>
                        <input type="text" name="phonenumber" id="phonenumber" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="com_name">Email Id</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="com_name">Address</label>
                        <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">State <abbr class="required" title="required">*</abbr></label>
                        <select class="form-control state_bill" name="state_bill" id="state_bill" required>
                            <option value="">Select -State-</option>
                            @foreach (DB::table('state_list')->get() as $state)
                                <option data-id="{{ $state->id }}" value="{{ $state->state }}">
                                    {{ $state->state }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="district">City <abbr class="required" title="required">*</abbr></label>
                        <select class="form-control city_bill" name="city_bill" id="city_bill">
                            <option>Select -City-</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="district">Area <abbr class="required" title="required">*</abbr></label>
                        <select class="form-control area_bill" name="area_bill" id="area_bill">
                            <option value="">Select -Area-</option>
                        </select>
                    </div>
                    <div class="form-group" id="areaname">
                        <label for="pz-code">Enter Your Area (Where You colllect the Parcel)</label>
                        <input type="text" name="area"class="form-control area_bill" id="area">
                    </div>
                    <div class="form-group">
                        <label for="pz-code">Postcode </label>
                        <input type="text" name="pincode" id="pincode" class="form-control" required>
                    </div>

                </div> --}}


            </div>


            <div class="listdata" style="display: none">
                {{-- <div style=" "> --}}

                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Net Total:</span>
                    <span class="amount netTotal">0</span>
                </p>
                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Discount Total:</span>
                    <span class="amount youSave" id="cart-total">0</span>
                </p>

                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Sub Total:</span>
                    <span class="amount overallTotal" id="cart-total">0</span>
                </p>

                {{-- <a class="btn-theme" data-margin-bottom="10" href="shop-cart.html">View cart</a> --}}

                <a class="btn-theme confiem confirm_estimate"> Confirm Estimate </a>

            </div>

              <p class="cart-total textamount" style="margin-bottom: 0px;">
                    <span style="font-weight: 600">Minimum Order:</span>
                    <span class="amount minimamamount" data-value="{{ $pricelist->price_data }}">{{ $pricelist->price_data }}.00</span>
                </p>

            {{-- <div class="formdata" style="display: none">
                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Sub Total:</span>
                    <span class="amount netTotal">0</span>
                </p>
                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Discount Total </span>
                    <span class="amount youSave" id="cart-total">0</span>
                </p>

                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Overall Amount:</span>
                    <span class="amount overallTotal" id="cart-total">0</span>
                </p>

                <div class="row">
                    <div class="col-lg-6"> <a class="btn btn-success placeorder" style="width: 121%;height: 42px;">
                            Submit </a></div>
                    <div class="col-lg-6"> <a class="btn btn-danger backdata" style="width: 121%;height: 42px;"> Back
                        </a></div>
                </div>
            </div> --}}
    </div>
    </form>

    <div id="order-loading" style="display:none; text-align:center; padding: 20px;">
        <div class="alert alert-info">
            <strong>Please wait...</strong> Your order is being confirmed. Don't go back or refresh.
        </div>
    </div>
</div>
</div>
<!--== End Aside Cart Menu ==-->





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/just-validate@latest/dist/just-validate.production.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<script>
    var highlightProductId = {{ $id ?? 'null' }};
</script>
<script>
    Fancybox.bind("[data-fancybox='gallery']", {
        // options if needed
    });
</script>
<script>
    $(document).ready(function() {

          let minOrderAmount = parseFloat($('.minimamamount').data('value')) || 0;




      if (typeof highlightProductId !== 'undefined' && highlightProductId) {
        const $row = $('#product-' + highlightProductId);
        if ($row.length) {
            $row.addClass('highlighted-row');
            $('html, body').animate({
                scrollTop: $row.offset().top - 150
            }, 800);
            $row.find('.quantity').val(1);
            calculateTotals();
        }
    }


        $('.catego').change(function () {
            var selectedCategory = $(this).val();
            var productsFound = false;

            if (selectedCategory === "all") {
                $('.category-header, .produc').show();
                productsFound = true;
            } else {
                $('.category-header, .produc').hide();

                $('.category-header[data-cat="' + selectedCategory + '"]').show();

                $('.produc').each(function () {
                    var productCategory = $(this).data('cat');
                    if (productCategory == selectedCategory) {
                        $(this).show();
                        productsFound = true;
                    }
                });
            }

            $('#no-products').toggle(!productsFound);
            calculateTotals(); // recalculate totals after category change
        });

        // Trigger calculation when quantity changes
        $(document).on('input', '.quantity', function () {
            calculateTotals();
        });


    function calculateTotals() {
        let netTotal = 0;
        let originalTotal = 0;

        $('.produc').each(function () {
            const qty = parseInt($(this).find('.quantity').val()) || 0;

            if (qty > 0) {
                const offerPrice = parseFloat($(this).find('.offerprice').text().replace(/[,]/g, '')) || 0;
                const mrpPrice = parseFloat($(this).find('.mrpprice').text().replace(/[,]/g, '')) || 0;

                netTotal += offerPrice * qty;
                originalTotal += mrpPrice * qty;

                const total = offerPrice * qty;
                $(this).find('.totalprice').text(total.toFixed(2));
            } else {
                $(this).find('.totalprice').text('0.00');
            }
        });

        const youSave = originalTotal - netTotal;

        $('.netTotal').text(originalTotal.toFixed(2));
        $('.youSave').text(youSave.toFixed(2));
        $('.overallTotal').text(netTotal.toFixed(2));

        const totalamount = Math.round(parseFloat($('.overallTotal').text()));




        if (totalamount >= minOrderAmount) {
            $('.confiem').show();
            $('.note').hide();
            $('.textamount').hide();
        } else {
            $('.confiem').hide();
            $('.note').show();
             $('.textamount').show();
        }

        updateAsideCart(); // if defined elsewhere
    }

        // append cart data function

        function updateAsideCart() {
            const $asideList = $('.aside-cart-product-list');
            $asideList.empty(); // Clear previous list

            $('.produc').each(function() {
                const qty = parseInt($(this).find('.quantity').val()) || 0;

                if (qty > 0) {
                    const imgSrc = $(this).find('img').attr('src');

                    const title = $(this).find('.product-name a').first().text();
                    const price = parseFloat($(this).find('.offerprice').text().replace(/[,]/g, '')) ||
                        0;

                    const listItem = `
            <li class="product-list-item" data-product-id="${$(this).attr('id')}">
              <a href="javascript:void(0);" class="remove">×</a>
              <a href="#">
                <img src="${imgSrc}" width="50" height="110" alt="${title}">
                <span class="product-title">${title}</span>
              </a>
              <span class="product-price">${qty} × ${price.toFixed(2)}</span>
            </li>
          `;
                    $asideList.append(listItem);
                }
            });
        }

        // Recalculate totals when quantity changes
        $(document).on('input', '.quantity', function() {
            calculateTotals();
        });


        // Remove product from aside cart
        $(document).on('click', '.aside-cart-product-list .remove', function() {
            const $listItem = $(this).closest('.product-list-item');
            const productId = $listItem.data('product-id');
            $('#' + productId).find('.quantity').val(0);
            calculateTotals();
        });

        calculateTotals(); // Initial run


        // form data
        $('#areaname').hide();
        $('.state_bill').change(function() {
            var selectedOption = $(this).find(":selected"); // Get selected option
            var state_id = selectedOption.data('id');
            // alert(state_id);
            $.ajax({
                type: "GET",
                url: "/stateCity/" + state_id,
                dataType: "JSON",
                cache: false,
                success: function(response) {
                    var htmlContentCities = "";
                    $(".city_bill").empty();
                    $("#city_ship").empty();
                    for (var i = 0; i < response.length; i++) {
                        var city = response[i].city_name;
                        var cityid = response[i].id;
                        htmlContentCities +=
                            `<option data-id="${cityid}" value="${city}">${city}</option>`;
                    }
                    $(".city_bill").append(htmlContentCities);
                },
            });
        });



        $(document).ready(function() {


            $('.city_bill').change(function() {
                var selectedOption = $(this).find(":selected");
                var city_id = selectedOption.data('id');

                if (!city_id) {
                    $(".area_bill").html('<option value="">Select -Area-</option>');
                    return;
                }

                // Show loading placeholder
                $(".area_bill").html('<option>Loading...</option>');

                $.ajax({
                    type: "GET",
                    url: "/cityarea/" + city_id,
                    dataType: "JSON",
                    cache: false,
                    success: function(response) {
                        let htmlContentCities =
                            `<option value="">Select Area</option>`;

                        // Append areas if found
                        if (response.length > 0) {
                            for (let i = 0; i < response.length; i++) {
                                let area = response[i].area_name;
                                htmlContentCities +=
                                    `<option value="${area}">${area}</option>`;
                            }

                            // Append 'Others' option at the end
                            htmlContentCities +=
                                `<option value="0">Others</option>`;
                        } else {
                            htmlContentCities +=
                                `<option disabled>No areas found</option>`;
                        }

                        $(".area_bill").html(htmlContentCities);
                    },
                    error: function() {
                        $(".area_bill").html(
                            '<option value="">Error loading areas</option>');
                    }
                });
            });
        });

        $(document).on("change", ".area_bill", function() {
            var selectedVal = $(this).val();

            if (selectedVal === "0") {
                $("#areaname").show(); // or $('#areaname-container').show();
            } else {
                $("#areaname").hide(); // or $('#areaname-container').hide();
            }
        });

        $('.confiem').on('click', function() {


            // $(".formdata").show();

            $(".formdata").css('display', 'block');
            $('.listdata').css('display', 'none');

        });

        $('.backdata').on('click', function() {
            // $(".formdata").hide();
            $(".formdata").css('display', 'none');
            $('.listdata').css('display', 'block');
        });

        $('.breath-animation').on('click', function() {
            $('.listdata').css('display', 'block');
        })



        // insert details


        $('.placeorder').click(function(e) {
            e.preventDefault();

            // Show loading message
            $('#order-loading').show();

            // Disable buttons to prevent multiple clicks
            $('.placeorder').prop('disabled', true);
            $('.backdata').prop('disabled', true);

            // Optional: Prevent navigation away
            window.onbeforeunload = function() {
                return "Your order is being processed. Are you sure you want to leave?";
            };

            // Collect customer details
            let customer = {
                name: $('#f_name').val(),
                phone: $('#phonenumber').val(),
                email: $('#email').val(),
                address: $('#address').val(),
                state: $('#state_bill').val(),
                city: $('#city_bill').val(),
                area: $('#area_bill').val(),
                manual_area: $('#area').val(),
                pincode: $('#pincode').val()
            };

            // Collect products
            let pro_ids = [];
            let qtys = [];

            $('.produc').each(function() {
                let qty = parseInt($(this).find('.quantity').val()) || 0;
                if (qty > 0) {
                    let product_id = $(this).attr('id').replace('product-', '');
                    pro_ids.push(product_id);
                    qtys.push(qty);
                }
            });

            // Totals
            let totals = {
                subtotal: parseFloat($('.netTotal').text()) || 0,
                discount: parseFloat($('.youSave').text()) || 0,
                total: parseFloat($('.overallTotal').text()) || 0
            };

            // Send to Laravel using AJAX
            $.ajax({
                url: '/placeorder',
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    customer: customer,
                    pro_ids: pro_ids,
                    qtys: qtys,
                    subtotal: totals.subtotal,
                    discount: totals.discount,
                    total: totals.total
                },
                success: function(response) {
                    window.onbeforeunload = null; // Remove unload blocker
                    alert("Order submitted successfully!");
                    window.location.href = '/thankyou'; // redirect after success
                },
                error: function(err) {
                    window.onbeforeunload = null;
                    console.error(err);
                    alert("Error submitting order.");

                    // Allow retry
                    $('#order-loading').hide();
                    $('.placeorder').prop('disabled', false);
                    $('.backdata').prop('disabled', false);
                }
            });
        });


        $('.confirm_estimate').on('click', function () {
    const cartItems = [];
    let subtotal = 0;
    let total = 0;

    $('.produc').each(function () {
        const qty = parseInt($(this).find('.quantity').val()) || 0;
        if (qty > 0) {
            const name = $(this).find('.product-name a').text().trim();


            const price = parseFloat($(this).find('.offerprice').text().replace(/[,₹]/g, '')) || 0;
            const totalPrice = qty * price;

            subtotal += totalPrice;

            cartItems.push({
                name: name,
                qty: qty,
                price: price,
                total: totalPrice
            });
        }
    });

    const discount = 0; // Modify if you calculate discount
    total = subtotal - discount;

    // Save to localStorage
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    localStorage.setItem('subtotal', subtotal);
    localStorage.setItem('discount', discount);
    localStorage.setItem('total', total);

    // Redirect to checkout page
    window.location.href = "/checkout";
});


// tab






    });

     $(document).ready(function () {
        // Intercept Tab key on .quantity inputs
        $('.quantity').on('keydown', function (e) {
            if (e.key === 'Tab' || e.keyCode === 9) {
                e.preventDefault(); // Prevent default tabbing

                const $inputs = $('.quantity'); // All quantity fields
                const currentIndex = $inputs.index(this); // Current index
                const nextInput = $inputs.eq(currentIndex + 1); // Next field

                if (nextInput.length) {
                    nextInput.focus();
                } else {
                    // Optional: loop back to first input
                    $inputs.eq(0).focus();
                }
            }
        });
    });
</script>
