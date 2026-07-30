@extends('layouts.app')
@section('title', 'Bluemoon Crackers About us')
@section('meta-title', 'About Bluemoon Crackers – Best Crackers Shop in Sivakasi | Wholesale Dealers ' )
@section('meta-description',  'Know more about Bluemoon Crackers – leading Sivakasi crackers wholesale dealers offering best firecrackers for Diwali, weddings & celebrations.')
@section('meta-keywords', '' )
@section('main-content')

<style>
    p{
        text-align: justify
    }
</style>

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
    <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <section class="product-area product-category-area">
    <div class="container-fluid">
      <div class="row">
      <img src="/assets/img/seo.jpg" style="border-radius: 0px; filter: drop-shadow(0px 0px 6px black);">
      </div>
    </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area about-default-wrapper">
    <div class="container">
      <div class="about-item position-relative">
      <div class="row align-items-center">
        <div class="col-lg-6">
        <img src="assets/img/data.jpg" alt="Image-HasTech" style="position: relative;
    top: -275px;">
        </div>
        <div class="col-lg-6">
        <div class="about-content">
          <h4 class="sub-title">About Blue Moon Crackers</h4>
          <p>We are originated in Sivakasi and shipping crackers all over India.</p>
          <p>Our License No: 116/2025</p>
          <p class="desc"><b>Welcome to Blue Moon Crackers – The Best Cracker Shop in Sivakasi for Online, Retail & Wholesale Fireworks!</b></p>
          <p>Located in the firecracker capital of India, Blue Moon Crackers proudly stands as the best cracker shop in Sivakasi, offering a wide range of fireworks through wholesale, retail, and online platforms. Whether you're looking for Diwali crackers online, Sivakasi crackers wholesale price, or Sivakasi pattasu wholesale purchase, we’ve got everything you need – all in one place!</p>
          <p>We offer an electrifying selection of the best crackers Sivakasi is famous for – from vibrant fancy items and dazzling sky shots to festive gift boxes and exclusive Diwali collections. Whether it’s a major festival, a family function, or just a moment to celebrate, our fireworks are here to light up the occasion.
</p>
          <p>With decades of experience built on trust and quality, we lead the firecracker industry with innovation and excellence. Our large showroom in Sivakasi showcases a wide range of multi-brand crackers, available at competitive Sivakasi crackers wholesale prices. For bulk buyers and retailers, we also specialize in Sivakasi pattasu wholesale purchases, ensuring great value with every order.
</p>
          <p>Even better, you don’t have to wait for the festive season! At Blue Moon Crackers, every day is a celebration. Our user-friendly online store makes it easy to buy Diwali crackers online and have them delivered to your doorstep — safely, quickly, and at the best rates.
</p>
<p><b>Experience the spark of true celebration with Blue Moon Crackers – your trusted source for fireworks in Sivakasi.
</b></p>
<p><b> Shop now and make every moment shine brighter!
</b></p>
        </div>
        </div>
      </div>
      </div>
    </div>
    </section>
    <!--== End About Area Wrapper ==-->

  </main>

@endif



@endsection
