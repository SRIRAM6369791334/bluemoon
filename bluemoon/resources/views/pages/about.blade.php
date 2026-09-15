@extends('layouts.app')
@section('title', 'Bluemoon Crackers About us')
@section('meta-title', 'About Bluemoon Crackers – Best Crackers Shop in Sivakasi | Wholesale Dealers ' )
@section('meta-description',  'Know more about Bluemoon Crackers – leading Sivakasi crackers wholesale dealers offering best firecrackers for Diwali, weddings & celebrations.')
@section('meta-keywords', '' )
@section('main-content')

<style>
    .about-hero-banner {
        position: relative;
        overflow: hidden;
        border-radius: 0;
    }
    .about-hero-banner img {
        width: 100%;
        display: block;
        object-fit: cover;
        max-height: 420px;
    }
    .about-hero-overlay {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(180deg, rgba(45, 53, 107, 0.5) 0%, rgba(45, 53, 107, 0.75) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .about-hero-overlay h1 {
        color: #ffffff;
        font-size: 38px;
        font-weight: 800;
        text-shadow: 2px 4px 8px rgba(0,0,0,0.3);
        margin-bottom: 10px;
    }
    .about-hero-overlay .breadcrumb-nav {
        color: rgba(255,255,255,0.85);
        font-size: 15px;
    }
    .about-hero-overlay .breadcrumb-nav a {
        color: #f3b229;
        text-decoration: none;
        font-weight: 600;
    }

    /* About Content Section */
    .about-default-wrapper {
        padding: 60px 0 40px;
    }
    .about-img-wrap {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 12px 35px rgba(45, 53, 107, 0.12);
        border: 3px solid #e2e8f0;
    }
    .about-img-wrap img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }
    .about-content .sub-title {
        color: #2d356b;
        font-weight: 800;
        font-size: 28px;
        margin-bottom: 18px;
        text-shadow: 1px 2px 4px rgba(0,0,0,0.1);
    }
    .about-content p {
        text-align: justify;
        color: #444;
        line-height: 1.8;
        margin-bottom: 12px;
        font-size: 15px;
    }
    .about-content p b {
        color: #2d356b;
    }
    .about-license-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(45, 53, 107, 0.06);
        border: 1px solid rgba(45, 53, 107, 0.15);
        border-radius: 8px;
        padding: 8px 16px;
        margin-bottom: 16px;
        font-weight: 700;
        color: #2d356b;
        font-size: 14px;
    }
    .about-license-badge i {
        color: #e25d26;
        font-size: 16px;
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
                                    <img src="{{ env('MAIN_URL') . $page->image }}"
                            style="border-radius: 100px; filter: drop-shadow(0px 0px 6px black);">
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
    <div class="container-fluid p-0">
      <!-- <div class="row g-0">
        <div class="col-12 about-hero-banner">
          <img src="/assets/img/seo.jpg" alt="Blue Moon Crackers - About Us">
          
        </div>
      </div> -->
    </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area about-default-wrapper">
    <div class="container">
      <div class="about-item position-relative">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="about-img-wrap">
            <img src="assets/img/data.jpg" alt="Blue Moon Crackers Sivakasi">
          </div>
        </div>
        <div class="col-lg-6">
        <div class="about-content">
          <h4 class="sub-title">About Blue Moon Crackers</h4>
          <p>We are originated in Sivakasi and shipping crackers all over India.</p>
          <div class="about-license-badge">
            <i class="fa-solid fa-certificate"></i> License No: 116/2025
          </div>
          <p class="desc"><b>Welcome to Blue Moon Crackers – The Best Cracker Shop in Sivakasi for Online, Retail & Wholesale Fireworks!</b></p>
          <p>Located in the firecracker capital of India, Blue Moon Crackers proudly stands as the best cracker shop in Sivakasi, offering a wide range of fireworks through wholesale, retail, and online platforms. Whether you're looking for Diwali crackers online, Sivakasi crackers wholesale price, or Sivakasi pattasu wholesale purchase, we've got everything you need – all in one place!</p>
          <p>We offer an electrifying selection of the best crackers Sivakasi is famous for – from vibrant fancy items and dazzling sky shots to festive gift boxes and exclusive Diwali collections. Whether it's a major festival, a family function, or just a moment to celebrate, our fireworks are here to light up the occasion.
</p>
          <p>With decades of experience built on trust and quality, we lead the firecracker industry with innovation and excellence. Our large showroom in Sivakasi showcases a wide range of multi-brand crackers, available at competitive Sivakasi crackers wholesale prices. For bulk buyers and retailers, we also specialize in Sivakasi pattasu wholesale purchases, ensuring great value with every order.
</p>
          <p>Even better, you don't have to wait for the festive season! At Blue Moon Crackers, every day is a celebration. Our user-friendly online store makes it easy to buy Diwali crackers online and have them delivered to your doorstep — safely, quickly, and at the best rates.
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
