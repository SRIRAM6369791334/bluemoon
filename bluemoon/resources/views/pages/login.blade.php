@extends('layouts.app')
@section('title', 'Bluemoon Crackers Login')
@section('main-content')

@php
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

  <!--== Start My Account Area Wrapper ==-->
  <section class="account-area">
    <div class="container">
    <div class="row">
      <div class="col-sm-8 m-auto">
      <div class="section-title text-center">
        <h2 class="title">Login</h2>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
      <div class="login-form-content">
        <form action="#">
        <div class="row">

          <div class="col-12">
          <div class="form-group">
            <label for="password">Phone Number <span class="required">*</span></label>
            <input id="phonenumber" class="form-control" name="phonenumber" type="text">
          </div>
          </div>
          <div class="col-12">
          <div class="form-group">
            <button type="button" class="btn-login" id="saveuser">Login</button>

          </div>
          </div>
          <div class="col-12">
          <div class="form-group account-info-group mb--0">
            <div class="rememberme-account">

            </div>
            <a class="lost-password" href="/register">Create New Customer</a>
          </div>
          </div>
        </div>
        </form>
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
    $('#saveuser').on('click', function (e) {
      e.preventDefault();

      var phone = $('#phonenumber').val();
      var csrfToken = '{{ csrf_token() }}';

      $.ajax({
        url: 'userlogin',
        type: 'POST',
        data: {
          phone: phone,
          _token: csrfToken
        },
        success: function (response) {
          Swal.fire({
            icon: 'success',
            title: 'Login Successful',
            text: response.message,
            showConfirmButton: false,
            timer: 2000
          }).then(() => {
            window.location.href = response.redirect;
          });
        },
        error: function (xhr) {
          let errorMessage = 'Something went wrong.';
          if (xhr.status === 401 && xhr.responseJSON && xhr.responseJSON.message) {
            errorMessage = xhr.responseJSON.message;
          }
          Swal.fire({
            icon: 'error',
            title: 'Login Failed',
            text: errorMessage
          });
        }
      });
    });
  });

</script>
