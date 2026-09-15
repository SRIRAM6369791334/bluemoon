@extends('layouts.app')
@section('title', 'Shipping & Delivery Policy - Bluemoon Crackers')
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
    .policy-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .policy-list-item {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 16px 20px;
        border-radius: 12px;
        background: #f8fafc;
        margin-bottom: 12px;
        border: 1px solid #e2e8f0;
        transition: transform 0.2s ease, border-color 0.2s ease;
    }
    .policy-list-item:hover {
        transform: translateX(4px);
        border-color: rgba(226, 93, 38, 0.3);
        background: #ffffff;
    }
    .policy-number {
        background: #2d356b;
        color: #ffffff;
        font-weight: 700;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 14px;
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

            <!--== Start Shipping Area Wrapper ==-->
            <section class="policy-page-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="policy-card" data-aos="fade-up">
                                <h2 class="policy-title">Shipping & Delivery Policy</h2>
                                
                                <div class="policy-list">
                                    <div class="policy-list-item">
                                        <span class="policy-number">1</span>
                                        <p class="policy-text">All the materials are packed in quality waterproof cartons with special care.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">2</span>
                                        <p class="policy-text">After your order has been confirmed on completion of payment, we will dispatch your products to the lorry shed within 24-72 hours.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">3</span>
                                        <p class="policy-text">We will constantly monitor each order to ensure it reaches you quickly.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">4</span>
                                        <p class="policy-text">Minimum purchase price inside TamilNadu should be Rs 3000/- (after discount).</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">5</span>
                                        <p class="policy-text">Minimum purchase price for Other States should be Rs 5000/- (after discount).</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">6</span>
                                        <p class="policy-text">Doorstep delivery will be applicable on all orders above Rs 10000/-(after discount) based on the location available.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">7</span>
                                        <p class="policy-text">Incase if the order is below Rs 5000/- the customer has to get the material from the nearest parcel services (after discount).</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">8</span>
                                        <p class="policy-text">After order has been successfully placed, products will be delivered within 4 to 5 working days.</p>
                                    </div>
                                    <div class="policy-list-item">
                                        <span class="policy-number">9</span>
                                        <p class="policy-text">Delivery may take a few additional days if there are public holidays or bandhs in between.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Shipping Area Wrapper ==-->
        </main>
    @endif

@endsection
