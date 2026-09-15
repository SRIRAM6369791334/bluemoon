@extends('layouts.app')
@section('title', 'Terms & Conditions - Bluemoon Crackers')
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
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 2px solid #e25d26;
        display: inline-block;
    }
    .policy-intro {
        color: #444;
        line-height: 1.8;
        font-size: 15px;
        text-align: justify;
        margin-bottom: 24px;
        background: #f8fafc;
        padding: 16px 20px;
        border-radius: 12px;
        border-left: 4px solid #2d356b;
    }
    .policy-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .policy-list-item {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 14px 18px;
        border-radius: 12px;
        background: #ffffff;
        margin-bottom: 10px;
        border: 1px solid #e2e8f0;
        transition: transform 0.2s ease, border-color 0.2s ease;
    }
    .policy-list-item:hover {
        transform: translateX(4px);
        border-color: rgba(226, 93, 38, 0.3);
        background: #fffcfb;
    }
    .policy-number {
        background: #2d356b;
        color: #ffffff;
        font-weight: 700;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 13px;
    }
    .policy-text {
        color: #444;
        line-height: 1.7;
        font-size: 15px;
        margin: 0;
        align-self: center;
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

            <!--== Start Terms Area Wrapper ==-->
            <section class="policy-page-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="policy-card" data-aos="fade-up">
                                <h2 class="policy-title">Terms & Conditions</h2>
                                <p class="policy-intro">This website is owned and operated by Bluemoon Crackers and is for your personal use. Your use of this website is subject to the following terms and conditions. By checking out, you agree to these terms. We hold the right to change terms at any time without prior notice.</p>
                                
                                <div class="policy-list">
                                    <div class="policy-list-item">
                                        <span class="policy-number">1</span>
                                        <p class="policy-text">We accept orders from Tamil Nadu, Karnataka, Kerala, Telangana, and Andhra Pradesh.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">2</span>
                                        <p class="policy-text">Minimum order for Tamil Nadu is Rs. 3000/- and Rs. 5000/- for other states.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">3</span>
                                        <p class="policy-text">Doorstep delivery is applicable for Tamil Nadu on all orders above Rs. 5000/-.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">4</span>
                                        <p class="policy-text">Delivery is fulfilled by third-party transport/parcel services.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">5</span>
                                        <p class="policy-text">Availability of doorstep delivery to other regions depends on area pin code.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">6</span>
                                        <p class="policy-text">Additional delivery charges for doorstep delivery in certain regions will be collected upon delivery.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">7</span>
                                        <p class="policy-text">Products will be dispatched only after entire payment is confirmed.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">8</span>
                                        <p class="policy-text">Once we receive the estimation enquiry, customer care will contact you within 24 hours.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">9</span>
                                        <p class="policy-text">Goods will be packed securely in special waterproof cartons.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">10</span>
                                        <p class="policy-text">We monitor transport closely to deliver products safely without damage.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">11</span>
                                        <p class="policy-text">Product images on the website are for representative purposes only; actual packaging may vary slightly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Terms Area Wrapper ==-->
        </main>
    @endif

@endsection
