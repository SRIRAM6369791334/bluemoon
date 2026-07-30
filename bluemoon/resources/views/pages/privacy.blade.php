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
                                    <h4 class="sub-title" style="font-weight: 600">Privacy Policy</h4>
                                    <p>Our Privacy Policy administers the way which we collect, use and maintain and
                                        disclose data collected from users. This privacy policy applies to the Site and all
                                        products sold by us.
                                    </p>
                                    <p><b>Identification Information</b>
                                    </p>
                                    <p class="desc">Personal identification information may be required by the site in
                                        order to develop user friendly environment of the website. We may collect personal
                                        identification information from users in different ways including, like Users visit
                                        our site, place an order, fill out a form, Users may be asked for appropriate, name,
                                        email address, mailing address, phone number. Users may visit our Site casually. We
                                        will collect personal identification information from users only if they voluntarily
                                        submit such information to us. Users can always refuse to supply personal
                                        identification information anytime in the visit of our website.
                                    </p>
                                    <p><b>Non Personal Identification Information
                                        </b></p>
                                    <p>Non-personal identification information may include the browser name, the type of
                                        computer and technical information about users. We may collect non-personal
                                        identification information about Users whenever they interact with our Site.</p>
                                    <p><b>Browser cookies</b></p>
                                    <p>Browser cookies
                                        We store cookies for improving our user experience. User may choose to set their web
                                        browser to refuse cookies, or to alert you when cookies are being sent. Protection
                                        of information</p>
                                    <p><b>Protection of information</b>
                                    </p>
                                    <p>We maintain a secure way to protect against unauthorized access, alteration,
                                        disclosure or destruction of your personal information and data stored on our Site.
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
