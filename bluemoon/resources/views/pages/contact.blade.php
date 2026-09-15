@extends('layouts.app')
@section('title', 'Bluemoon Crackers Contact')
@section('meta-title', 'Contact Bluemoon Crackers – Sivakasi Crackers Shop Phone Number & Location' )
@section('meta-description',  'Get in touch with Bluemoon Crackers for your Sivakasi crackers purchase. Contact us for wholesale prices, delivery details & more.')
@section('meta-keywords', '' )
@section('main-content')

<style>
    /* Premium Info Cards */
    .info-item {
        background: #ffffff;
        border: none;
        border-radius: 16px;
        padding: 0;
        text-align: center;
        box-shadow: 0 4px 20px rgba(45, 53, 107, 0.08);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        height: 100%;
        overflow: hidden;
        position: relative;
    }
    .info-item::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, #2d356b 0%, #e25d26 50%, #f3b229 100%);
        border-radius: 16px 16px 0 0;
    }
    .info-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(45, 53, 107, 0.15);
    }
    .info-item-inner {
        padding: 32px 24px 28px;
    }
    .info-item .icon-pod {
        width: 72px; height: 72px;
        margin: 0 auto 20px;
        display: flex; align-items: center; justify-content: center;
        background: linear-gradient(135deg, #2d356b 0%, #3d4a8a 100%);
        border-radius: 50%;
        box-shadow: 0 6px 16px rgba(45, 53, 107, 0.25);
        transition: all 0.4s ease;
    }
    .info-item:hover .icon-pod {
        background: linear-gradient(135deg, #e25d26 0%, #ff7838 100%);
        box-shadow: 0 6px 16px rgba(226, 93, 38, 0.3);
        transform: scale(1.1);
    }
    .info-item .icon-pod i {
        font-size: 28px;
        color: #ffffff;
    }
    .info-item .info .title {
        color: #2d356b; font-weight: 800; font-size: 19px;
        margin-bottom: 10px; letter-spacing: 0.3px;
    }
    .info-item .info p { color: #555; line-height: 1.7; font-size: 15px; margin-bottom: 0; }
    .info-item .info a { color: #e25d26; font-weight: 600; text-decoration: none; transition: color 0.3s ease; }
    .info-item .info a:hover { color: #2d356b; }

    /* Form Styling */
    .contact-form .form-control {
        border: 1.5px solid #e2e8f0;
        border-radius: 10px;
        padding: 12px 16px;
        font-size: 15px;
        transition: all 0.3s ease;
    }
    .contact-form .form-control:focus {
        border-color: #2d356b;
        box-shadow: 0 0 0 3px rgba(45, 53, 107, 0.1);
    }
    .contact-form textarea.form-control { min-height: 130px; }

    /* Gradient Submit Button */
    .contact-form .btn-primary {
        background: linear-gradient(135deg, #e25d26 0%, #ff7838 100%) !important;
        border: none !important;
        border-radius: 10px;
        padding: 12px 32px;
        font-size: 16px;
        font-weight: 700;
        color: #fff;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 14px rgba(226, 93, 38, 0.3);
        transition: all 0.3s ease;
        margin-top: 12px;
    }
    .contact-form .btn-primary:hover {
        background: linear-gradient(135deg, #d9531e 0%, #e25d26 100%) !important;
        box-shadow: 0 6px 18px rgba(226, 93, 38, 0.45);
    }

    /* Map Frame */
    .contact-map-wrap {
        border-radius: 14px;
        overflow: hidden;
        border: 2px solid #e2e8f0;
        box-shadow: 0 4px 15px rgba(45, 53, 107, 0.08);
    }
    .contact-map-wrap iframe {
        width: 100%; height: 450px; display: block; border: none;
    }

    .contact-page-area {
        padding: 40px 0;
        background: url('/assets/img/cont-bg.png') center center / contain no-repeat;
        position: relative;
    }
    .contact-page-area::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(255, 255, 255, 0.88);
        z-index: 0;
    }
    .contact-page-area > .container { position: relative; z-index: 1; }
</style>

  <main class="main-content">
     <section class="product-area product-category-area">
            <!-- <div class="container-fluid">
                <div class="row  mb-2">
                    <img src="/assets/img/Banner3.jpg" style="border-radius: 0px; filter: drop-shadow(0px 0px 6px black);">
                </div>
            </div> -->
        </section>

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area contact-page-area">
    <div class="container">
      <div class="row contact-page-wrapper">

         <div class="col-xl-12 mb-4">
        <div class="contact-info-wrap">
        <div class="contact-info">
          <div class="row g-4">
          <div class="col-lg-4 col-xl-4">
            <div class="info-item" data-aos="fade-up">
              <div class="info-item-inner">
                <div class="icon-pod">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="info">
                  <h5 class="title">Our Address</h5>
                  <p>2/630-H, Balaji Nagar 7th Street, Near SR Palace, Sithurajapuram, Sivakasi – 626 123</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4">
            <div class="info-item" data-aos="fade-up" data-aos-delay="100">
              <div class="info-item-inner">
                <div class="icon-pod">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div class="info">
                  <h5 class="title">Call Us</h5>
                  <p><a href="tel:9087605060">(+91) 9087605060</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4">
            <div class="info-item" data-aos="fade-up" data-aos-delay="200">
              <div class="info-item-inner">
                <div class="icon-pod">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="info">
                  <h5 class="title">Email Us</h5>
                  <p><a href="mailto:orders@bluemooncrackers.com">orders@bluemooncrackers.com</a></p>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>


      <div class="col-xl-7">
        <div class="contact-form-wrap" data-aos="fade-right">
        <!--== Start Contact Form ==-->
        <div class="contact-form" >
          <form id="contact-form" action="{{ route('contact.send') }}" method="POST">
            @csrf
          <div class="row row-gutter-20">
            <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" type="text" name="name" placeholder="Name *">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" type="email" name="email" placeholder="Email *">
            </div>
            </div>
            <div class="col-12">
            <div class="form-group">
              <input class="form-control" name="phone" type="text" placeholder="Phone number">
            </div>
            </div>
            <div class="col-12">
            <div class="form-group mb--0">
              <textarea class="form-control" name="message" placeholder="Message"></textarea>
            </div>
            </div>
            <div class="col-12">
            <div class="form-group mb--0">
              <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane me-2"></i>Send Message</button>
            </div>
            </div>
          </div>
          </form>
        </div>

        @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
        <!--== End Contact Form ==-->

        <!--== Message Notification ==-->
        <div class="form-message"></div>
        <div class="shape-group-style2">
          <div class="shape-group-one"><img src="assets/img/shape/13.webp" width="193" height="168"
            alt="Image-HasTech"></div>
          <div class="shape-group-two"><img src="assets/img/shape/15.webp" width="221" height="113"
            alt="Image-HasTech"></div>
          <div class="shape-group-three"><img src="assets/img/shape/16.webp" width="129" height="147"
            alt="Image-HasTech"></div>
          <div class="shape-group-four"><img src="assets/img/shape/17.webp" width="493" height="340"
            alt="Image-HasTech"></div>
        </div>
        </div>
      </div>

      <div class="col-xl-5">
        <div class="contact-map-wrap">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7564.32278255584!2d77.77958476977538!3d9.4294879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06cf285e63e0ef%3A0xbe147a51bbd3671d!2sBalaji%20Marriage%20Hall!5e1!3m2!1sen!2sin!4v1748797316039!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      </div>
    </div>
    </section>
    <!--== End Contact Area Wrapper ==-->
  </main>

@endsection
