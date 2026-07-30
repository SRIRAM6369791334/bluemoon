@extends('layouts.app')
@section('title', 'Bluemoon Crackers')
@section('main-content')
@php
     $user = Auth::guard('customer')->user();
     $product = App\Models\Product::all();
$cate = App\Models\Category::join('products', 'products.category_id', '=', 'categories.id')
    ->select('categories.id', 'categories.category_name', DB::raw('COUNT(products.id) as product_count'))
    ->groupBy('categories.id', 'categories.category_name')
    ->get();
use Illuminate\Support\Str;
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
     <section class="product-area product-category-area">
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <img src="assets/img/prod_ban.webp" style=" filter: drop-shadow(0px 0px 6px black);">
            </div>
        </div>
    </section>

<section class="my-account-area">
      <div class="container pt--0 pb--0">
        <div class="row">
        <div class="col-lg-12">
          <div class="myaccount-page-wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-4">
                <nav>
                  <div class="myaccount-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="dashboad-tab" data-bs-toggle="tab" data-bs-target="#dashboad" type="button" role="tab" aria-controls="dashboad" aria-selected="true">Dashboard</button>
                    <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false"> Orders</button>
                    {{-- <button class="nav-link" id="download-tab" data-bs-toggle="tab" data-bs-target="#download" type="button" role="tab" aria-controls="download" aria-selected="false">Download</button> --}}
                    {{-- <button class="nav-link" id="payment-method-tab" data-bs-toggle="tab" data-bs-target="#payment-method" type="button" role="tab" aria-controls="payment-method" aria-selected="false">Payment Method</button> --}}
                    {{-- <button class="nav-link" id="address-edit-tab" data-bs-toggle="tab" data-bs-target="#address-edit" type="button" role="tab" aria-controls="address-edit" aria-selected="false">address</button> --}}
                    {{-- <button class="nav-link" id="account-info-tab" data-bs-toggle="tab" data-bs-target="#account-info" type="button" role="tab" aria-controls="account-info" aria-selected="false">Account Details</button> --}}
                    <button class="nav-link" onclick="window.location.href='/logout'" type="button">Logout</button>
                  </div>
                </nav>
              </div>
              <div class="col-lg-9 col-md-8">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="dashboad" role="tabpanel" aria-labelledby="dashboad-tab">
                    <div class="myaccount-content">
                      <h3>Dashboard</h3>
                      <div class="welcome">

                        <p>Hello, <strong>{{ $user->name }}</p></strong>
                      </div>
                      <div class="myaccount-content">
                      <h3>Account Details</h3>
                      <div class="account-details-form">
                        <form id="registerForm" action="userupdate" method="POST">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="single-input-item">
                                <label for="first-name" class="required">First Name</label>
                                <input type="text" id="first-name" value="{{ $user->name }}"/>
                                <input type="hidden" id="userid" name="userid" value="{{ $user->id }}">
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="single-input-item">
                                <label for="last-name" class="required">Phone Number</label>
                                <input type="text" id="phone" value="{{ $user->phone_number }}"/>
                              </div>
                            </div>
                          </div>

                          <div class="single-input-item">
                            <label for="email" class="required">Email Address</label>
                            <input type="email" id="email" value="{{ $user->email }}" />
                          </div>

                          <div class="single-input-item">
                            <button type="button" id="updatedata" >Save Changes</button>
                          </div>
                        </form>
                      </div>
                    </div>

                    </div>
                  </div>
                  <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    <div class="myaccount-content">
                      <h3>Orders</h3>
                      <div class="myaccount-table table-responsive text-center">
                        <table class="table table-bordered">
                          <thead class="thead-light">
                            <tr>
                              <th>OrderId</th>
                              <th>Date</th>
                              <th>Status</th>
                              <th>Total</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                                $orders = App\Models\ProductOrder::where('user_id',$user->user_id)->get();
                              $i = 1;
                            @endphp
                            @foreach ( $orders  as $ord )

                              <tr>
                              <td>{{ $ord->oeder_id }}</td>
                              <td>{{ $ord->created_at->format('d-m-Y') }}</td>
                              <td>{{$ord->status }}</td>
                              <td>{{ $ord->total }}</td>
                              <td><a href="/orderdetails/{{ $ord->oeder_id }}" class="check-btn  ">View</a></td>
                            </tr>

                            @endforeach



                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab">
                    <div class="myaccount-content">
                      <h3>Downloads</h3>
                      <div class="myaccount-table table-responsive text-center">
                        <table class="table table-bordered">
                          <thead class="thead-light">
                            <tr>
                              <th>Product</th>
                              <th>Date</th>
                              <th>Expire</th>
                              <th>Download</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Haven - Free Real Estate PSD Template</td>
                              <td>Aug 22, 2022</td>
                              <td>Yes</td>
                              <td><a href="#/" class="check-btn sqr-btn"><i class="fa fa-cloud-download"></i> Download File</a></td>
                            </tr>
                            <tr>
                              <td>HasTech - Profolio Business Template</td>
                              <td>Sep 12, 2022</td>
                              <td>Never</td>
                              <td><a href="#/" class="check-btn sqr-btn"><i class="fa fa-cloud-download"></i> Download File</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div> --}}
                  {{-- <div class="tab-pane fade" id="payment-method" role="tabpanel" aria-labelledby="payment-method-tab">
                    <div class="myaccount-content">
                      <h3>Payment Method</h3>
                      <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                    </div>
                  </div> --}}
                  {{-- <div class="tab-pane fade" id="address-edit" role="tabpanel" aria-labelledby="address-edit-tab">
                    <div class="myaccount-content">
                      <h3>Billing Address</h3>
                      <address>
                        <p><strong>Alex Tuntuni</strong></p>
                        <p>1355 Market St, Suite 900 <br>
                          San Francisco, CA 94103</p>
                        <p>Mobile: (123) 456-7890</p>
                      </address>
                      <a href="#/" class="check-btn sqr-btn"><i class="fa fa-edit"></i> Edit Address</a>
                    </div>
                  </div> --}}
                  {{-- <div class="tab-pane fade" id="account-info" role="tabpanel" aria-labelledby="account-info-tab">
                    <div class="myaccount-content">
                      <h3>Account Details</h3>
                      <div class="account-details-form">
                        <form action="#">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="first-name" class="required">First Name</label>
                                <input type="text" id="first-name" />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="last-name" class="required">Last Name</label>
                                <input type="text" id="last-name" />
                              </div>
                            </div>
                          </div>
                          <div class="single-input-item">
                            <label for="display-name" class="required">Display Name</label>
                            <input type="text" id="display-name" />
                          </div>
                          <div class="single-input-item">
                            <label for="email" class="required">Email Addres</label>
                            <input type="email" id="email" />
                          </div>
                          <fieldset>
                            <legend>Password change</legend>
                            <div class="single-input-item">
                              <label for="current-pwd" class="required">Current Password</label>
                              <input type="password" id="current-pwd" />
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="single-input-item">
                                  <label for="new-pwd" class="required">New Password</label>
                                  <input type="password" id="new-pwd" />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="single-input-item">
                                  <label for="confirm-pwd" class="required">Confirm Password</label>
                                  <input type="password" id="confirm-pwd" />
                                </div>
                              </div>
                            </div>
                          </fieldset>
                          <div class="single-input-item">
                            <button class="check-btn sqr-btn">Save Changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

@endif




@endsection




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
  $(document).ready(function () {
    $('#updatedata').on('click', function (e) {

      e.preventDefault();

      var username = $('#first-name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var userid =$('#userid').val();
      var csrfToken = '{{ csrf_token() }}';

      $.ajax({
        url: '/userupdate',
        type: 'POST',
        data: {
          username: username,
          email: email,
          phone: phone,
          userid: userid,
          _token: csrfToken
        },
        success: function (response) {
          Swal.fire({
            icon: 'success',
            title: 'Success',
            text: response.message,
            confirmButtonText: 'OK'
          });

          // Optional: clear form fields
        //   $('#username').val('');
        //   $('#email').val('');
        //   $('#phone').val('');
        },
        error: function (xhr) {
          if (xhr.status === 422) {
            let errors = xhr.responseJSON.errors;
            let message = errors.phone ? errors.phone[0] : 'Validation error';

            Swal.fire({
              icon: 'error',
              title: 'Validation Failed',
              text: message
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong!'
            });
          }
        }
      });
    });
  });

</script>









