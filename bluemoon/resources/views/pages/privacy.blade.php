@extends('layouts.app')
@section('title', 'Privacy Policy - Bluemoon Crackers')
@section('main-content')

<style>
    .policy-page-area {
        padding: 50px 0 70px;
        background: #fdfdfd;
    }
    .policy-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 40px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 25px rgba(45, 53, 107, 0.06);
    }
    .policy-title {
        color: #2d356b;
        font-weight: 800;
        font-size: 28px;
        margin-bottom: 24px;
        padding-bottom: 12px;
        border-bottom: 2px solid #e25d26;
        display: inline-block;
    }
    .policy-card p {
        text-align: justify;
        color: #444;
        line-height: 1.8;
        font-size: 15px;
        margin-bottom: 16px;
    }
    .policy-card p b {
        color: #2d356b;
        font-size: 17px;
        display: block;
        margin-top: 20px;
        margin-bottom: 6px;
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
                                <img src="{{ env('MAIN_URL') . $page->image }}" style="border-radius: 100px; filter: drop-shadow(0px 0px 6px black);">
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
                    <div class="row g-0 mb-2">
                        <img src="/assets/img/seo.jpg" style="width:100%; display:block; border-radius: 0px; filter: drop-shadow(0px 0px 6px black);">
                    </div>
                </div>
            </section>
            <!--== End Page Header Area Wrapper ==-->

            <!--== Start Privacy Policy Area Wrapper ==-->
            <section class="policy-page-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="policy-card" data-aos="fade-up">
                                <h2 class="policy-title">Privacy Policy</h2>
                                <p>Our Privacy Policy administers the way which we collect, use and maintain and disclose data collected from users. This privacy policy applies to the Site and all products sold by us.</p>
                                
                                <p><b>1. Identification Information</b></p>
                                <p>Personal identification information may be required by the site in order to develop user friendly environment of the website. We may collect personal identification information from users in different ways including, like Users visit our site, place an order, fill out a form, Users may be asked for appropriate, name, email address, mailing address, phone number. Users may visit our Site casually. We will collect personal identification information from users only if they voluntarily submit such information to us. Users can always refuse to supply personal identification information anytime in the visit of our website.</p>
                                
                                <p><b>2. Non-Personal Identification Information</b></p>
                                <p>Non-personal identification information may include the browser name, the type of computer and technical information about users. We may collect non-personal identification information about Users whenever they interact with our Site.</p>

                                <p><b>3. Web Browser Cookies</b></p>
                                <p>We store cookies for improving our user experience. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent.</p>
                                
                                <p><b>4. Protection of Information</b></p>
                                <p>We maintain a secure way to protect against unauthorized access, alteration, disclosure or destruction of your personal information and data stored on our Site.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Privacy Policy Area Wrapper ==-->
        </main>
    @endif

@endsection
