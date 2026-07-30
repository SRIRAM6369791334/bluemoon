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
                                    <h4 class="sub-title" style="font-weight: 600">Shipping and Delivery Policy
                                    </h4>


        <p class="desc ">1.All the materials are packed in quality waterproof cartons with
                                        special care.

                                    </p>
                                     <p class="desc">2.After your order has been confirmed on completion of payment, we will dispatch your products to the lorry shed within 24-72 hours.

                                    </p>
                                     <p class="desc">3.We will constantly monitor each order to ensure it reaches you quickly.


                                    </p>
                                     <p class="desc">4.Minimum purchase price inside TamilNadu should be Rs 3000/- (after discount).


                                    </p>
                                     <p class="desc ">5.Minimum purchase price for Other States should be Rs 5000/- (after discount).


                                    </p>
                                     <p class="desc ">6.Doorstep delivery will be applicable on all orders above Rs 10000/-(after discount) based on the location available.

                                    </p>
                                     <p class="desc ">7.Incase if the order is below Rs 5000/- the customer has to get the material from the nearest parcel services (after discount).


                                    </p>
                                     <p class="desc ">8.After order has been successfully placed, products will be delivered within 4to 5 working days.


                                    </p>
                                     <p class="desc ">9.Delivery may take a few additional days if there are public holidays or bandhs in between.


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
