@extends('layouts.app')
@section('title', 'Bluemoon Crackers Register')
@section('main-content')

  <section class="product-area product-category-area">
    <div class="container-fluid">
    <div class="row mt-5 mb-5">
      <img src="assets/img/prod_ban.webp" style=" filter: drop-shadow(0px 0px 6px black);">
    </div>
    </div>
  </section>

  <section class="account-area">
    <div class="container">
    <div class="row">
      <div class="col-sm-8 m-auto">
      <div class="section-title text-center">
        <h2 class="title">Register</h2>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
      <div class="register-form-content">
        <form id="registerForm" action="usercreate" method="POST">
        @csrf
        <div class="row">
          <div class="col-12">
          <div class="form-group">
            <label for="username">Username <span class="required">*</span></label>
            <input id="username" name="username" class="form-control" type="text">
          </div>
          </div>
          <div class="col-12">
          <div class="form-group">
            <label for="email">Email address <span class="required">*</span></label>
            <input id="email" name="email" class="form-control" type="email">
          </div>
          </div>
          <div class="col-12">
          <div class="form-group">
            <label for="email">Phone Number <span class="required">*</span></label>
            <input id="phone" name="phone" class="form-control" type="text">
          </div>
          </div>
          {{-- <div class="col-12">
          <div class="form-group">
            <label for="password">Password <span class="required">*</span></label>
            <input id="password" class="form-control" type="password">
          </div>
          </div> --}}
          <div class="col-12">
          <div class="form-group mb--0">

            <button type="button" class="btn-register" id="saveuser">Register</button>
          </div>
          </div>
          <div class="col-12">
          <div class="form-group account-info-group mb--0">
            <div class="rememberme-account">

            </div>
            <a class="lost-password pt-2" href="/login">Click to Existing customer</a>
          </div>
          </div>
        </div>
        </form>
      </div>
      </div>
    </div>
    </div>
  </section>


@endsection
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
  $(document).ready(function () {
    $('#saveuser').on('click', function (e) {
      e.preventDefault();

      var username = $('#username').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var csrfToken = '{{ csrf_token() }}';

      $.ajax({
        url: 'usercreate',
        type: 'POST',
        data: {
          username: username,
          email: email,
          phone: phone,
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
          $('#username').val('');
          $('#email').val('');
          $('#phone').val('');
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
