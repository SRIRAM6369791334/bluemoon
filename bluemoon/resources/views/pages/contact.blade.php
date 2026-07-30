@extends('layouts.app')
@section('title', 'Bluemoon Crackers Contact')
@section('meta-title', 'Contact Bluemoon Crackers – Sivakasi Crackers Shop Phone Number & Location' )
@section('meta-description',  'Get in touch with Bluemoon Crackers for your Sivakasi crackers purchase. Contact us for wholesale prices, delivery details & more.')
@section('meta-keywords', '' )
@section('main-content')

<style>
       .rotate-icon {
  transition: transform 0.5s ease;
  display: inline-block;
  font-size: 2rem;
}

.info-item:hover .rotate-icon {
  transform: rotate(360deg);
}
</style>

  <main class="main-content">
     <section class="product-area product-category-area">
            <div class="container-fluid">
                <div class="row  mb-2">
                    <img src="/assets/img/Banner3.jpg" style="border-radius: 0px; filter: drop-shadow(0px 0px 6px black);">
                </div>
            </div>
        </section>

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area contact-page-area">
    <div class="container">
      <div class="row contact-page-wrapper">

         <div class="col-xl-12">
        <div class="contact-info-wrap">
        <div class="contact-info">
          <div class="row">
          <div class="col-lg-4 col-xl-4">
            <div class="info-item" data-aos="fade-left"
            >
            <div class="icon rotate-icon">
              <img src="assets/img/icons/c1.webp" width="69" height="65" alt="Image-HasTech">
            </div>
            <div class="info">
              <h5 class="title">Address</h5>
              <p style="font-size: 16px">2/630-H, Balaji Nagar 7th Street, Near SR Palace, Sithurajapuram, Sivakasi – 626 123
</p>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4">
            <div class="info-item" data-aos="fade-left" data-aos-delay="60"
           >
            <div class="icon rotate-icon">
              <img src="assets/img/icons/c2.webp" width="65" height="65" alt="Image-HasTech">
            </div>
            <div class="info">
              <h5 class="title">Phone No</h5>
              <p style="font-size: 16px">
              <a href="tel:9087605060">(+91) 9087605060</a><br>
              {{-- <a href="tel:90879 80098">(+91) 90879 80098</a> --}}
              </p>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4">
            <div class="info-item" data-aos="fade-left" data-aos-delay="120">
            <div class="icon rotate-icon">
              <img src="assets/img/icons/c3.webp" width="65" height="65" alt="Image-HasTech">
            </div>
            <div class="info">
              <h5 class="title">Email / Web</h5>
              <p style="font-size: 16px">
              <a href="mailto:orders@bluemooncrackers.com">orders@bluemooncrackers.com
</a><br>
              {{-- <a href="mailto://www.example.com">www.example.com</a> --}}
              </p>
            </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>


      <div class="col-xl-7">
        <div class="contact-form-wrap" data-aos="fade-right">
        {{-- <div class="contact-form-title">
          <h2 class="title">We Are Here! <br>Please Send A Quest</h2>
        </div> --}}
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
              <button type="submit" class="btn btn-primary">Send Message</button>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7564.32278255584!2d77.77958476977538!3d9.4294879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06cf285e63e0ef%3A0xbe147a51bbd3671d!2sBalaji%20Marriage%20Hall!5e1!3m2!1sen!2sin!4v1748797316039!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      </div>
    </div>
    </section>
    <!--== End Contact Area Wrapper ==-->
  </main>

@endsection
