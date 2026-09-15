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
  <!-- <section class="product-area product-category-area">
            <div class="container-fluid">
                <div class="row  mb-2">
                    <img src="/assets/img/seo.jpg" style="border-radius: 0px; filter: drop-shadow(0px 0px 6px black);">
                </div>
            </div>
        </section> -->
    <style>
        .checkout-page-wrap {
            background: #f8fafc;
            padding: 40px 0 80px;
        }
        .checkout-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 35px 30px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 25px rgba(45, 53, 107, 0.06);
            height: 100%;
        }
        .checkout-card-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e25d26;
        }
        .checkout-card-header i {
            font-size: 22px;
            color: #e25d26;
        }
        .checkout-card-header h3 {
            color: #2d356b;
            font-weight: 800;
            font-size: 22px;
            margin: 0;
        }
        
        .form-label-custom {
            font-size: 14px;
            font-weight: 700;
            color: #2d356b;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .form-control-custom {
            border: 1.5px solid #cbd5e1;
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 15px;
            color: #1e293b;
            background-color: #fdfdfd;
            transition: all 0.25s ease;
        }
        .form-control-custom:focus {
            border-color: #2d356b;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(45, 53, 107, 0.12);
            outline: none;
        }

        /* Order Summary Table */
        .order-summary-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .order-summary-table thead th {
            background: #2d356b !important;
            color: #ffffff !important;
            font-size: 14px;
            font-weight: 700;
            padding: 14px 16px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .order-summary-table tbody td {
            padding: 14px 16px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
            font-size: 14.5px;
        }
        .order-summary-table tfoot th, .order-summary-table tfoot td {
            padding: 14px 16px;
            border-top: 1px solid #e2e8f0;
            font-size: 15px;
        }
        .order-summary-table .order-total-row th, .order-summary-table .order-total-row td {
            background: #fff8f5;
            font-size: 18px;
            font-weight: 800;
            color: #e25d26;
        }

        /* Place Order Button */
        .btn-checkout-submit {
            background: linear-gradient(135deg, #e25d26 0%, #ff7838 100%) !important;
            color: #ffffff !important;
            font-weight: 800;
            font-size: 18px;
            padding: 16px 28px;
            border-radius: 12px;
            border: none;
            width: 100%;
            letter-spacing: 0.5px;
            box-shadow: 0 6px 20px rgba(226, 93, 38, 0.35);
            transition: all 0.3s ease;
            cursor: pointer;
            margin-top: 20px;
        }
        .btn-checkout-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(226, 93, 38, 0.45);
        }
    </style>

    <!--== Start Shopping Checkout Area Wrapper ==-->
    <section class="checkout-page-wrap">
      <div class="container">
        <form action="#" method="post" id="checkout-form">
        <div class="row g-4">
          
          <!-- Billing Details Left Column -->
          <div class="col-lg-7">
            <div class="checkout-card">
              <div class="checkout-card-header">
                <i class="fa fa-user-circle"></i>
                <h3>Billing & Delivery Details</h3>
              </div>

              <div class="row g-3">
                <div class="col-md-6">
                    <label for="f_name" class="form-label-custom"><i class="fa fa-user text-muted"></i> Full Name *</label>
                    <input id="f_name" name="customer[name]" type="text" class="form-control form-control-custom" placeholder="Enter your name">
                </div>

                <div class="col-md-6">
                    <label for="phonenumber" class="form-label-custom"><i class="fa fa-phone text-muted"></i> Phone Number *</label>
                    <input id="phonenumber" name="customer[phone]" type="text" class="form-control form-control-custom" placeholder="10-digit mobile number">
                </div>

                <div class="col-md-12">
                    <label for="email" class="form-label-custom"><i class="fa fa-envelope text-muted"></i> Email Address *</label>
                    <input id="email" name="customer[email]" type="email" class="form-control form-control-custom" placeholder="name@example.com">
                </div>

                <div class="col-md-12">
                    <label for="address" class="form-label-custom"><i class="fa fa-map-marker text-muted"></i> Complete Address *</label>
                    <input id="address" name="customer[address]" type="text" class="form-control form-control-custom" placeholder="Door No, Street Name, Landmark">
                </div>

                <div class="col-md-6">
                    <label for="state_bill" class="form-label-custom"><i class="fa fa-globe text-muted"></i> Select State *</label>
                    <select class="form-control form-control-custom state_bill" name="customer[state]" id="state_bill">
                        <option value="">-- Select State --</option>
                        <option data-id="31" value="TAMIL NADU">TAMIL NADU</option>
                        <option data-id="17" value="KARNATAKA">KARNATAKA</option>
                        <option data-id="18" value="KERALA">KERALA</option>
                        <option data-id="2" value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                        <option data-id="36" value="TELANGANA">TELANGANA</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="city_bill" class="form-label-custom"><i class="fa fa-building text-muted"></i> Select District *</label>
                    <select class="form-control form-control-custom city_bill" name="customer[city]" id="city_bill">
                        <option value="">-- Select District --</option>
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="area_bill" class="form-label-custom"><i class="fa fa-map-pin text-muted"></i> Select Area / Hub *</label>
                    <select class="form-control form-control-custom area_bill" name="area_bill" id="area_bill">
                        <option value="">-- Select Area --</option>
                    </select>
                </div>

                <div class="col-md-12" id="areaname">
                    <label class="form-label-custom"><i class="fa fa-truck text-muted"></i> Collection Point / Transport Hub</label>
                    <input type="text" name="area" class="form-control form-control-custom area_bill" placeholder="Specify nearest parcel office if applicable">
                </div>
              </div>
            </div>
          </div>

          <!-- Order Summary Right Column -->
          <div class="col-lg-5">
            <div class="checkout-card">
              <div class="checkout-card-header">
                <i class="fa fa-shopping-bag"></i>
                <h3>Order Summary</h3>
              </div>

              <div class="table-responsive mb-3">
                <table class="order-summary-table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th class="text-end">Total</th>
                        </tr>
                    </thead>
                    <tbody id="checkout-products">
                        <!-- Injected by JS -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-secondary fw-semibold">Subtotal</th>
                            <td class="text-end fw-bold text-dark">₹<span class="subtotal">0</span>.00</td>
                        </tr>
                        <tr>
                            <th class="text-secondary fw-semibold">Delivery Charge</th>
                            <td class="text-end fw-bold text-success">₹<span class="shipping">0</span>.00</td>
                        </tr>
                        <tr class="order-total-row">
                            <th>Total Payable</th>
                            <td class="text-end">₹<span class="total">0</span>.00</td>
                        </tr>
                    </tfoot>
                </table>
              </div>

              <button type="submit" class="btn-checkout-submit placeorder">
                <i class="fa fa-shield me-2"></i> Submit Estimate
              </button>

              <div id="order-loading" style="display:none; text-align:center; margin-top: 15px;">
                <div class="alert alert-info border-0 shadow-sm m-0">
                    <i class="fa fa-spinner fa-spin me-2"></i> <strong>Processing Order...</strong> Please do not refresh.
                </div>
              </div>
            </div>
          </div>

        </div>
        </form>
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
    $(".shipping").text("60");
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
            
            // Disable button immediately to prevent double submission
            const $submitBtn = $('.placeorder');
            if ($submitBtn.prop('disabled')) {
                return false;
            }
            $submitBtn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin me-2"></i> Submitting...');
            $('#order-loading').show();

            const cartItems = JSON.parse(localStorage.getItem('cartItems') || '[]');
            const subtotal = parseFloat(localStorage.getItem('subtotal') || 0);
            const totalcost = parseFloat(localStorage.getItem('total') || 0);
            const shipping = parseFloat($(".shipping").text());

            const total = totalcost + shipping;

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
                    $('#order-loading').hide();
                    Swal.fire({
                        title: 'Order Placed Successfully! 🎉',
                        text: 'Thank you for choosing Bluemoon Crackers. Redirecting to invoice...',
                        icon: 'success',
                        confirmButtonColor: '#e25d26',
                        confirmButtonText: 'View Invoice',
                        timer: 3000,
                        timerProgressBar: true
                    }).then(() => {
                        localStorage.clear();
                        window.location.href = '/thankyou';
                    });
                },
                error: function (xhr) {
                    $('#order-loading').hide();
                    $submitBtn.prop('disabled', false).html('<i class="fa fa-shield me-2"></i> Submit Estimate');
                    Swal.fire({
                        title: 'Oops!',
                        text: 'Something went wrong. Please try again.',
                        icon: 'error',
                        confirmButtonColor: '#2d356b'
                    });
                    console.log(xhr.responseText);
                }
            });
        });

});
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



