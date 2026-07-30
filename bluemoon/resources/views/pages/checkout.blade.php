@extends('layouts.app')
@section('title','Bluemoon Crackers Checkout')
@section('main-content')

@php
$user = Auth::guard('customer')->user();
$page = App\Models\PageOff::where('status',1)->first();
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
    <main class="main-content ">
    <!--== Start Page Header Area Wrapper ==-->
  <section class="product-area product-category-area">
            <div class="container-fluid">
                <div class="row  mb-2">
                    <img src="/assets/img/seo.jpg" style="border-radius: 0px; filter: drop-shadow(0px 0px 6px black);">
                </div>
            </div>
        </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Shopping Checkout Area Wrapper ==-->
    <section class="shopping-checkout-wrap pt-5">
      <div class="container">


        <div class="row">
          <div class="col-lg-6">
            <!--== Start Billing Accordion ==-->
            <div class="checkout-billing-details-wrap">
              <h2 class="title">Billing details</h2>
              <div class="billing-form-wrap">
                <form action="#" method="post" id="checkout-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="f_name" style="font-size: 16px;font-weight:600">Name *</label>
                                                    <input id="f_name" name="customer[name]" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="com_name" style="font-size: 16px;font-weight:600">Phone Number *</label>
                                                    <input id="phonenumber" name="customer[phone]" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="com_name" style="font-size: 16px;font-weight:600">Email Id *</label>
                                                     <input id="email" name="customer[email]" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="com_name" style="font-size: 16px;font-weight:600">Address *</label>
                                                      <input id="address" name="customer[address]" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="country" style="font-size: 16px;font-weight:600">State *</label>
                                                    <select class="form-control state_bill" name="customer[state]"
                                                        id="state_bill">
                                                        <option value="">Select -State-</option>



                                                        <option data-id="31" value="TAMIL NADU">
                                                            TAMIL NADU</option>
                                                        <option data-id="17" value="KARNATAKA">
                                                            KARNATAKA</option>
                                                        <option data-id="18" value="KERALA">
                                                            KERALA</option>
                                                        <option data-id="2" value="ANDHRA PRADESH">
                                                            ANDHRA PRADESH</option>
                                                        <option data-id="36" value="TELANGANA">
                                                            TELANGANA</option>

                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="district" style="font-size: 16px;font-weight:600">City *</label>
                                                    <select class="form-control city_bill" name="customer[city]" id="city_bill">
                                                        <option>Select -City-</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="district" style="font-size: 16px;font-weight:600">Area *</label>
                                                    <select class="form-control area_bill" name="area_bill" id="area_bill">
                                                        <option value="">Select -Area-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12" id="areaname">
                                                <div class="form-group" >
                                                    <label for="pz-code" style="font-size: 16px;font-weight:600">Enter Your Area (Where You colllect the
                                                        Parcel)</label>
                                                    <input type="text" name="area"class="form-control area_bill">
                                                </div>
                                            </div>
{{--
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="pz-code">Postcode </label>
                                                    <input type="text" name="customer[pincode]" id="pincode"
                                                        class="form-control">
                                                </div>
                                            </div> --}}





                                        </div>

                                </div>
                            </div>
                            <!--== End Billing Accordion ==-->
                        </div>
                        <div class="col-lg-6">
                            <!--== Start Order Details Accordion ==-->
                            <div class="checkout-order-details-wrap">
                                <div class="order-details-table-wrap table-responsive">
                                    <h2 class="title mb-25">Your order</h2>


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product-name" style="font-size: 16px;font-weight:600">Product</th>
                                                <th class="product-total" style="font-size: 16px;font-weight:600">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-body" id="checkout-products">
                                            <!-- Injected by JS -->
                                        </tbody>
                                        <tfoot class="table-foot">
                                            <tr class="cart-subtotal">
                                                <th style="font-size: 16px;font-weight:600">Subtotal</th>
                                                <td style="font-size: 16px;font-weight:600"><span class="subtotal">0</span>.00</td>
                                            </tr>
                                            <tr class="cart-shipping">
                                                <th style="font-size: 16px;font-weight:600">Shipping</th>
                                                <td style="font-size: 16px;font-weight:600"><span class="shipping">0</span>.00</td>
                                            </tr>

                                            <tr class="order-total">
                                                <th style="font-size: 16px;font-weight:600">Total</th>
                                                <td style="font-size: 16px;font-weight:600"><span class="total">0</span>.00</td>
                                            </tr>
                                        </tfoot>
                                    </table>


                                    <div class="shop-payment-method">



                                        <button type="submit" class="btn-theme btn-success placeorder">Place order</button>
                                         <div id="order-loading" style="display:none; text-align:center; padding: 20px;">
        <div class="alert alert-info">
            <strong>Please wait...</strong> Your order is being confirmed. Don't go back or refresh.
        </div>
    </div>

                                    </div>
                                </div>
                            </div>
                            <!--== End Order Details Accordion ==-->
                        </div>
                        </form>
        </div>
      </div>
    </section>
    <!--== End Shopping Checkout Area Wrapper ==-->
  </main>


@endif


@endsection
<script src="https://cdn.jsdelivr.net/npm/just-validate@latest/dist/just-validate.production.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        const cartItems = JSON.parse(localStorage.getItem('cartItems') || '[]');
        const subtotal = parseFloat(localStorage.getItem('subtotal') || 0);
        const discount = parseFloat(localStorage.getItem('discount') || 0);
        const total = parseFloat(localStorage.getItem('total') || 0);



        const $tbody = $('#checkout-products');
        $tbody.empty();

        cartItems.forEach(item => {
            const row = `
            <tr class="cart-item">
                <td class="product-name" style="font-size:16px">${item.name} <span class="product-quantity">× ${item.qty}</span></td>
                <td class="product-total" style="font-size:16px">${(item.total).toFixed(2)}</td>
            </tr>
        `;
            $tbody.append(row);
        });

        $('.subtotal').text(subtotal.toFixed(2));
        $('.discount').text(discount.toFixed(2));
        $('.total').text(total.toFixed(2));
    });
</script>

<script>
    $(document).ready(function(){
         $('#areaname').hide();
        $('.state_bill').change(function () {




    var selectedOption = $(this).find(":selected"); // Get selected option
    var state_id = selectedOption.data('id');
    const subtotalss = parseFloat(localStorage.getItem('total') || 0);

if (state_id == "31") {
    $(".shipping").text("0");
    const shippingcost = parseFloat($(".shipping").text());
    const total1 = shippingcost + subtotalss;
    $('.total').text(total1.toFixed(2));
} else {
    $(".shipping").text("400");
    const shippingcost = parseFloat($(".shipping").text());
    const total1 = shippingcost + subtotalss;

    $('.total').text(total1.toFixed(2));
}

    $.ajax({
    type: "GET",
    url: "/stateCity/" + state_id,
    dataType: "JSON",
    cache: false,
    success: function (response) {
        var htmlContentCities = "";
        $(".city_bill").empty();
        $("#city_ship").empty();
        for (var i = 0; i < response.length; i++) {
            var city = response[i].city_name;
            var cityid = response[i].id;
            htmlContentCities += `<option data-id="${cityid}" value="${city}">${city}</option>`;
        }
        $(".city_bill").append(htmlContentCities);
    },
});
});

   $(document).ready(function () {


    $('.city_bill').change(function () {
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
            success: function (response) {
                var htmlContentCities = `<option value="0">Others</option>`;

                if (response.length > 0) {
                    for (var i = 0; i < response.length; i++) {
                        var area = response[i].area_name;
                        var area_id = response[i].id;
                        htmlContentCities += `<option value="${area}">${area}</option>`;
                    }
                } else {
                    htmlContentCities += `<option disabled>No areas found</option>`;
                }

                $(".area_bill").html(htmlContentCities);
            },
            error: function () {
                $(".area_bill").html('<option value="">Error loading areas</option>');
            }
        });
    });
});

$(document).on("change", ".area_bill", function () {
    var selectedVal = $(this).val();

    if (selectedVal === "0") {
        $("#areaname").show(); // or $('#areaname-container').show();
    } else {
        $("#areaname").hide(); // or $('#areaname-container').hide();
    }
});




// placeorder

  const validator = new JustValidate('#checkout-form');

    validator
        .addField('#f_name', [
            {
                rule: 'required',
                errorMessage: 'First name is required',
            },
            {
                rule: 'minLength',
                value: 2,
                errorMessage: 'Name must be at least 2 characters',
            },
        ])
        .addField('#phonenumber', [
            {
                rule: 'required',
                errorMessage: 'Phone number is required',
            },
            {
                rule: 'customRegexp',
                value: /^[6-9]\d{9}$/,
                errorMessage: 'Enter a valid 10-digit Indian mobile number',
            }
        ])
        .addField('#email', [
            {
                rule: 'required',
                errorMessage: 'Email is required',
            },
            {
                rule: 'email',
                errorMessage: 'Enter a valid email',
            }
        ])
        .addField('#address', [
            {
                rule: 'required',
                errorMessage: 'Address is required',
            }
        ])
        .addField('#state_bill', [
            {
                rule: 'required',
                errorMessage: 'Please select a state',
            }
        ])
        .addField('#city_bill', [
            {
                rule: 'required',
                errorMessage: 'Please select a city',
            }
        ])
        .addField('#area_bill', [
            {
                rule: 'required',
                errorMessage: 'Please select an area',
            }
        ])
        .onSuccess((event) => {
            event.preventDefault(); // prevent normal form submit
             $('#order-loading').show();

            const cartItems = JSON.parse(localStorage.getItem('cartItems') || '[]');
            const subtotal = parseFloat(localStorage.getItem('subtotal') || 0);
            const totalcost = parseFloat(localStorage.getItem('total') || 0);
            const shipping = parseFloat($(".shipping").text());

            const total = totalcost + shipping;

            alert(shipping);

            const customer = {
                name: $('#f_name').val(),
                phone: $('#phonenumber').val(),
                email: $('#email').val(),
                address: $('#address').val(),
                state: $('#state_bill').val(),
                city: $('#city_bill').val(),
                area: $('#area_bill').val(),
                // pincode: $('#pincode').val(),
                areaname: $('input[name="area"]').val()
            };

            $.ajax({
                url: '/placeorder',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    customer: customer,
                    cart: cartItems,
                    subtotal: subtotal,
                    total: total,
                    shipping: shipping

                },
                success: function (response) {
                    // alert('Order placed successfully!');

                    localStorage.clear();
                    window.location.href = '/thankyou';
                },
                error: function (xhr) {
                    alert('Something went wrong. Please try again.');
                    console.log(xhr.responseText);
                }
            });
        });



});
</script>



