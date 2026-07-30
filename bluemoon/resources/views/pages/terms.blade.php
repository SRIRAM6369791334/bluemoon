@extends('layouts.app')
@section('title', 'Bluemoon Crackers About us')
@section('main-content')

<style>
    p{
        text-align: justify
    }
</style>

    @php
        $page = App\Models\PageOff::where('status', 1)->first();
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
                <div class="row  mb-2">
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

                            <div class="col-lg-12">
                                <div class="about-content">
                                    <h4 class="sub-title" style="font-weight: 600">Terms and Conditions</h4>
                                    <p class="">This website is owned and operated by crackerscart.in and is only for your personal use and not for any commercial purpose. Your use of this website is subject to the following terms and conditions. By checking out, you are agreeing to these terms and conditions of crackerscart.in. The crackerscart.in holds all the rights to change the terms and conditions at any time without any prior notice. We request our users to check and be aware of the changes in the privacy policy and terms and conditions.

                                    </p>

                                    <p class="desc">1.We accept orders from Tamil Nadu, Karnataka, Kerala, Telangana and Andhra.
                                    </p>
                                     <p class="desc">2.Minimum order for Tamil Nadu is Rs.3000/- and Rs.5000/- for other states.
                                    </p>
                                     <p class="desc">3.Doorstep delivery is applicable for TamilNadu on all orders above 5000.

                                    </p>
                                     <p class="desc">4.Delivery is done by third party agencies.

                                    </p>
                                     <p class="desc">5.Availability of doorstep delivery to other regions of Tamil Nadu and other states depends on the pin code of the area.
                                    </p>
                                     <p class="desc">6.Additional delivery charges for doorstep delivery to other regions of Tamil Nadu will be collected on completion of delivery.

                                    </p>
                                     <p class="desc">7.Products will be dispatched only after your entire payment is confirmed.

                                    </p>
                                     <p class="desc">8.Once we receive the Estimation Enquiry, our customer care executive will call you to confirm and provide you the delivery details within 24 hours.

                                    </p>
                                     <p class="desc">9.Goods will be packed only in special cartons.

                                    </p>
                                     <p class="desc">10.We do not take responsibility for any damages incurred by transport. However, we will try and deliver the products without any damage by our continuous and vigilant monitoring.

                                    </p>
                                     <p class="desc">11.The product images on the website are for representative purpose only. The delivered product may vary in appearance and packaging.

                                    </p>



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
