@extends('layouts.app')
@section('title', 'Bluemoon Crackers Products')
@section('meta-title', 'Best Crackers for Diwali – Sivakasi Crackers Online Purchase')
@section('meta-description',
    'Discover a wide range of Diwali crackers, wedding fireworks & top cracker brands in India.
    Shop Sivakasi crackers online at wholesale price with delivery.')
@section('meta-keywords', '')
@section('main-content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <style>
        .highlighted-row {
            background-color: #fff8d0 !important;
            border: 2px solid #ffae00;
            transition: background-color 0.5s ease;
        }

        /* 7. Offcanvas Cart Drawer UI Upgrade */
        .aside-cart-wrapper {
            box-shadow: -10px 0 30px rgba(45, 53, 107, 0.15) !important;
            border-left: 1px solid #e2e8f0;
        }
        .aside-cart-wrapper .offcanvas-header {
            background: #2d356b !important;
            color: #ffffff !important;
            padding: 16px 20px;
        }
        .aside-cart-wrapper .offcanvas-header .btn-aside-cart-close {
            color: #ffffff !important;
            font-weight: 700;
            font-size: 16px;
            background: transparent;
            border: none;
        }
        .aside-cart-product-list li {
            border-bottom: 1px solid #f1f5f9;
            padding: 12px 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .aside-cart-product-list .product-thumb img {
            border-radius: 8px;
            border: 1px solid #e2e8f0;
        }
        .aside-cart-product-list .product-title {
            color: #2d356b;
            font-weight: 700;
            font-size: 14px;
        }
        .aside-cart-wrapper .cart-total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 16px;
            font-size: 15px;
            color: #475569;
            border-bottom: 1px dashed #e2e8f0;
        }
        .aside-cart-wrapper .cart-total:nth-last-of-type(1) {
            border-bottom: none;
            background: #fff8f5;
            border-radius: 8px;
            margin-top: 6px;
            font-weight: 800;
            color: #2d356b;
        }
        .aside-cart-wrapper .cart-total:nth-last-of-type(1) .amount {
            color: #e25d26;
            font-size: 18px;
        }
        .confirm_estimate {
            background: linear-gradient(135deg, #e25d26 0%, #ff7838 100%) !important;
            color: #ffffff !important;
            font-weight: 800 !important;
            font-size: 16px !important;
            padding: 14px !important;
            border-radius: 10px !important;
            text-align: center !important;
            display: block !important;
            width: 100% !important;
            margin-top: 15px !important;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 14px rgba(226, 93, 38, 0.35) !important;
            transition: all 0.3s ease !important;
            cursor: pointer !important;
            text-transform: uppercase;
        }
        .confirm_estimate:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(226, 93, 38, 0.45) !important;
        }

        /* Default desktop/tablet styles */
        .shopping-cart-form table td,
        .shopping-cart-form table th {
            vertical-align: middle;
            text-align: center;
        }

        @keyframes breath {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.05); opacity: 0.9; }
            100% { transform: scale(1); opacity: 1; }
        }

        .breath-animation {
            animation: breath 2s infinite ease-in-out;
            border-radius: 30px;
        }

        @keyframes zoomInOut {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.04); }
        }

        /* 6. Brand-Styled Category Filter Dropdown */
        .catego {
            animation: zoomInOut 3s ease-in-out infinite;
            appearance: none;
            background-color: #fff;
            border: 2px solid #2d356b;
            padding: 10px 15px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            color: #2d356b;
            background-image: url('data:image/svg+xml;charset=US-ASCII,<svg width="20" height="20" viewBox="0 0 20 20" fill="%232d356b" xmlns="http://www.w3.org/2000/svg"><path d="M5 7L10 12L15 7H5Z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 12px;
            cursor: pointer;
            width: 308px;
            box-shadow: 0 2px 8px rgba(45, 53, 107, 0.1);
            transition: all 0.3s ease;
        }

        .catego:focus {
            border-color: #e25d26;
            box-shadow: 0 0 0 3px rgba(226, 93, 38, 0.15);
            outline: none;
            transform: scale(1.02);
        }

        .catego:hover {
            border-color: #e25d26;
        }

        @keyframes breathing {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .breathing-animation {
            animation: breathing 2.5s ease-in-out infinite;
        }

        .imagehover:hover {
            scale: 110%
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] {
            -moz-appearance: textfield;
        }

        /* ====== MOBILE RESPONSIVE - QUICKCHECKOUT ====== */
        @media only screen and (max-width: 767px) {

            /* Hero Banner */
            .qc-hero-banner img { max-height: 180px; }
            .qc-hero-overlay h1 { font-size: 20px; }
            .qc-hero-overlay .breadcrumb-nav { font-size: 12px; }

            /* Category Dropdown */
            .catego { width: 100% !important; border-radius: 10px !important; font-size: 14px !important; height: 44px !important; }
            .col-xl-4.pb-3 { max-width: 100%; flex: 0 0 100%; }
            .product-area .container { padding-left: 10px; padding-right: 10px; }

            /* Checkout Bar - centered on mobile */
            #checkout-bar {
                left: 50% !important;
                transform: translateX(-50%) !important;
                width: 92% !important;
                padding: 6px 10px !important;
                bottom: 8px !important;
            }
            #checkout-bar button {
                width: 100% !important;
                font-size: 15px !important;
                padding: 11px 16px !important;
                border-radius: 12px !important;
                box-shadow: 0 6px 20px rgba(226,93,38,0.4) !important;
            }

            /* Hide table header */
            .shopping-cart-form table thead { display: none !important; }

            /* Make table & tbody block-level */
            .shopping-cart-form table,
            .shopping-cart-form table tbody {
                display: block !important;
                width: 100% !important;
            }
            .shopping-cart-form .table-responsive {
                overflow-x: visible !important;
            }

            /* Reset fixed table row height from style.css */
            .shopping-cart-form .table tbody tr,
            .cart-product-item {
                height: auto !important;
                min-height: auto !important;
            }

            /* Ensure hidden items remain hidden in mobile */
            .category-header.d-none,
            .cart-product-item.d-none {
                display: none !important;
            }

            /* Category Header - full width pill */
            .category-header {
                display: block !important;
                height: auto !important;
                margin-top: 16px;
                margin-bottom: 8px;
            }
            .category-header td {
                display: block !important;
                width: 100% !important;
                background: linear-gradient(135deg, rgba(45,53,107,0.08) 0%, rgba(226,93,38,0.08) 100%) !important;
                border-left: 4px solid #e25d26 !important;
                border-radius: 8px !important;
                padding: 8px 14px !important;
                text-align: left !important;
                font-size: 13px !important;
                font-weight: 700 !important;
                color: #2d356b !important;
                letter-spacing: 0.3px;
                height: auto !important;
            }

            /* ===== Product Card - CSS Grid Layout ===== */
            .cart-product-item {
                display: grid !important;
                grid-template-columns: 58px 1fr 1fr auto;
                grid-template-rows: auto auto auto auto;
                gap: 3px 10px;
                padding: 10px 12px !important;
                margin-bottom: 10px;
                background: #ffffff !important;
                border: 1px solid #e2e8f0 !important;
                border-radius: 12px !important;
                box-shadow: 0 2px 6px rgba(0,0,0,0.04) !important;
                height: auto !important;
            }
            .cart-product-item:nth-child(even) { background-color: #ffffff !important; }
            .cart-product-item:hover { background-color: #ffffff !important; }

            /* Reset all TDs */
            .cart-product-item td {
                display: block !important;
                border: none !important;
                padding: 0 !important;
                text-align: left !important;
                width: auto !important;
                height: auto !important;
            }

            /* TD 1: Image - spans row 1-2, column 1 */
            .cart-product-item td:nth-child(1) {
                grid-column: 1;
                grid-row: 1 / 3;
                align-self: center;
            }
            .cart-product-item td:nth-child(1) img {
                width: 52px !important;
                height: 52px !important;
                border-radius: 8px;
                object-fit: cover;
                border: 1px solid #f1f5f9;
            }

            /* TD 2: Product Name - row 1, columns 2-end */
            .cart-product-item td:nth-child(2) {
                grid-column: 2 / -1;
                grid-row: 1;
                align-self: end;
            }
            .cart-product-item td:nth-child(2) .title {
                text-align: left !important;
                margin: 0;
            }
            .cart-product-item td:nth-child(2) .title a {
                font-size: 13px !important;
                font-weight: 600;
                color: #1e293b;
                line-height: 1.35;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }

            /* TD 3: Unit/Content - row 2, columns 2-end */
            .cart-product-item td:nth-child(3) {
                grid-column: 2 / -1;
                grid-row: 2;
                align-self: start;
                padding-top: 2px !important;
            }
            .cart-product-item td:nth-child(3) .title {
                text-align: left !important;
                margin: 0;
            }
            .cart-product-item td:nth-child(3) .title a {
                display: inline-block;
                background: #f1f5f9;
                border-radius: 4px;
                padding: 1px 6px;
                font-size: 10px !important;
                color: #64748b !important;
                font-weight: 600;
                text-transform: uppercase;
            }

            /* TD 4: MRP Price - row 3, column 1 */
            .cart-product-item td:nth-child(4) {
                grid-column: 1;
                grid-row: 3;
                align-self: center;
                padding-top: 4px !important;
            }
            .cart-product-item td:nth-child(4)::before {
                content: 'MRP ';
                font-size: 10px;
                color: #94a3b8;
                font-weight: 500;
            }
            .cart-product-item td:nth-child(4) .mrpprice {
                font-size: 11px !important;
                color: #94a3b8 !important;
                text-decoration: line-through;
            }
            .cart-product-item td:nth-child(4) .mrpprice::before {
                content: '₹';
            }

            /* TD 5: Offer Price - row 3, column 2 */
            .cart-product-item td:nth-child(5) {
                grid-column: 2;
                grid-row: 3;
                align-self: center;
                padding-top: 4px !important;
            }
            .cart-product-item td:nth-child(5)::before {
                content: 'Offer ';
                font-size: 10px;
                color: #e25d26;
                font-weight: 600;
            }
            .cart-product-item td:nth-child(5) .offerprice {
                font-size: 15px !important;
                font-weight: 700 !important;
                color: #e25d26 !important;
            }
            .cart-product-item td:nth-child(5) .offerprice::before {
                content: '₹';
            }

            /* TD 6: Quantity Stepper - row 3, columns 3-end */
            .cart-product-item td:nth-child(6) {
                grid-column: 3 / -1;
                grid-row: 3;
                justify-self: end;
                align-self: center;
                padding-top: 4px !important;
            }
            .cart-product-item td:nth-child(6)::before {
                content: 'Qty: ';
                font-size: 11px;
                color: #64748b;
                font-weight: 600;
                margin-right: 4px;
            }
            .cart-product-item td:nth-child(6) .pro-qty {
                display: inline-flex !important;
                align-items: center;
            }
            .cart-product-item td:nth-child(6) .pro-qty .quantity {
                width: 50px !important;
                height: 32px !important;
                font-size: 14px !important;
                font-weight: 700 !important;
                text-align: center;
                border: 1.5px solid #cbd5e1 !important;
                border-radius: 8px !important;
                background: #f8fafc;
                color: #1e293b;
                padding: 0 !important;
                line-height: 30px !important;
            }
            .cart-product-item td:nth-child(6) .pro-qty .quantity:focus {
                border-color: #e25d26 !important;
                background: #ffffff !important;
                outline: none;
                box-shadow: 0 0 0 2px rgba(226,93,38,0.18) !important;
            }
            .cart-product-item td:nth-child(6) .text-danger {
                font-size: 11px;
                font-weight: 600;
                margin: 0;
            }

            /* TD 7: Subtotal - row 4, full width */
            .cart-product-item td:nth-child(7) {
                grid-column: 1 / -1;
                grid-row: 4;
                text-align: right !important;
                padding-top: 6px !important;
                margin-top: 4px;
                border-top: 1px dashed #e2e8f0 !important;
            }
            .cart-product-item td:nth-child(7)::before {
                content: 'Subtotal: ';
                font-size: 11px;
                color: #64748b;
                font-weight: 500;
            }
            .cart-product-item td:nth-child(7) .totalprice {
                font-size: 14px !important;
                font-weight: 700 !important;
                color: #2d356b !important;
            }
            .cart-product-item td:nth-child(7) .totalprice::before {
                content: '₹';
            }

            /* No products found row */
            #no-products {
                display: block;
            }
            #no-products td {
                display: block;
                padding: 20px !important;
            }

            /* Bottom spacing for checkout bar */
            .product-area { padding-bottom: 80px; }

            /* ===== ASIDE CART OFFCANVAS DRAWER (MOBILE) ===== */
            /* Hide floating checkout bar when cart drawer is active */
            body.offcanvas-open #checkout-bar,
            .aside-cart-wrapper.show ~ #checkout-bar,
            .offcanvas-backdrop.show ~ #checkout-bar {
                display: none !important;
                visibility: hidden !important;
                opacity: 0 !important;
                pointer-events: none !important;
            }

            /* Offcanvas drawer sizing & z-index */
            #AsideOffcanvasCart.offcanvas {
                width: 88% !important;
                max-width: 360px !important;
                z-index: 100000 !important;
                box-shadow: -4px 0 20px rgba(0,0,0,0.2) !important;
            }
            .offcanvas-backdrop.show {
                z-index: 99999 !important;
            }

            /* Offcanvas Header */
            #AsideOffcanvasCart .offcanvas-header {
                padding: 14px 18px !important;
                background: #2d356b !important;
            }
            #AsideOffcanvasCart .btn-aside-cart-close {
                color: #ffffff !important;
                font-size: 15px !important;
                font-weight: 700 !important;
                text-decoration: none !important;
                display: flex !important;
                align-items: center !important;
                gap: 8px !important;
                background: none !important;
                border: none !important;
                cursor: pointer !important;
            }

            /* Offcanvas body */
            #AsideOffcanvasCart .offcanvas-body {
                padding: 16px !important;
                padding-bottom: 30px !important;
            }

            /* Aside cart product list */
            .aside-cart-wrapper .aside-cart-product-list {
                padding: 0 !important;
                margin: 0 !important;
                list-style: none !important;
            }
            .aside-cart-wrapper .aside-cart-product-list .product-list-item {
                display: flex !important;
                flex-wrap: wrap !important;
                align-items: center !important;
                position: relative !important;
                padding: 10px 0 !important;
                margin-bottom: 8px !important;
                border-bottom: 1px dashed #e2e8f0 !important;
            }
            .aside-cart-wrapper .aside-cart-product-list .product-list-item:last-child {
                border-bottom: none !important;
            }

            /* Product link & thumbnail */
            .aside-cart-wrapper .aside-cart-product-list .product-list-item a:not(.remove) {
                display: flex !important;
                align-items: center !important;
                width: 100% !important;
                padding-right: 32px !important; /* Prevents text from colliding with remove button */
                text-decoration: none !important;
            }
            .aside-cart-wrapper .aside-cart-product-list .product-list-item a img {
                width: 48px !important;
                height: 48px !important;
                border-radius: 8px !important;
                object-fit: cover !important;
                margin-right: 12px !important;
                float: none !important;
                border: 1px solid #e2e8f0 !important;
                flex-shrink: 0 !important;
            }

            /* Product Title */
            .aside-cart-wrapper .aside-cart-product-list .product-list-item .product-title {
                font-size: 13px !important;
                font-weight: 600 !important;
                color: #2d356b !important;
                line-height: 1.35 !important;
                display: -webkit-box !important;
                -webkit-line-clamp: 2 !important;
                -webkit-box-orient: vertical !important;
                overflow: hidden !important;
            }

            /* Product Price */
            .aside-cart-wrapper .aside-cart-product-list .product-list-item .product-price {
                margin-left: 60px !important; /* Align directly under title, past the 48px image */
                margin-top: -6px !important;
                font-size: 13px !important;
                font-weight: 700 !important;
                color: #e25d26 !important;
            }

            /* Remove Button - soft red circular button */
            .aside-cart-wrapper .aside-cart-product-list .product-list-item .remove {
                position: absolute !important;
                top: 10px !important;
                right: 0 !important;
                width: 24px !important;
                height: 24px !important;
                line-height: 22px !important;
                text-align: center !important;
                background: #fee2e2 !important;
                color: #ef4444 !important;
                border-radius: 50% !important;
                font-size: 16px !important;
                font-weight: 700 !important;
                text-decoration: none !important;
                z-index: 2 !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                transition: background 0.2s !important;
            }
            .aside-cart-wrapper .aside-cart-product-list .product-list-item .remove:hover {
                background: #ef4444 !important;
                color: #ffffff !important;
            }

            /* List scroll container */
            .aside-cart-wrapper .col-lg-12.listdata {
                max-height: 48vh !important;
                overflow-y: auto !important;
                scrollbar-width: thin;
            }

            /* Totals section */
            .aside-cart-wrapper .listdata p.cart-total {
                display: flex !important;
                justify-content: space-between !important;
                align-items: center !important;
                padding: 6px 4px !important;
                font-size: 13.5px !important;
                color: #475569 !important;
                border-bottom: 1px solid #f1f5f9 !important;
                margin-bottom: 4px !important;
            }
            .aside-cart-wrapper .listdata p.cart-total span.amount {
                font-weight: 700 !important;
                color: #1e293b !important;
            }
            /* Discount total in vibrant green */
            .aside-cart-wrapper .listdata p.cart-total:nth-of-type(2) span.amount {
                color: #16a34a !important;
            }
            /* Sub Total box */
            .aside-cart-wrapper .listdata p.cart-total:nth-of-type(3) {
                background: #fff7ed !important;
                padding: 8px 12px !important;
                border-radius: 8px !important;
                border: 1px solid #fed7aa !important;
                margin-top: 8px !important;
            }
            .aside-cart-wrapper .listdata p.cart-total:nth-of-type(3) span {
                font-size: 15px !important;
                font-weight: 800 !important;
                color: #c2410c !important;
            }

            /* Confirm Estimate button */
            .aside-cart-wrapper .confirm_estimate {
                display: block !important;
                width: 100% !important;
                padding: 13px 16px !important;
                margin-top: 14px !important;
                margin-bottom: 24px !important;
                background: linear-gradient(135deg, #e25d26 0%, #ff7838 100%) !important;
                color: #ffffff !important;
                font-size: 15px !important;
                font-weight: 700 !important;
                text-align: center !important;
                text-transform: uppercase !important;
                letter-spacing: 0.5px !important;
                border-radius: 10px !important;
                box-shadow: 0 4px 14px rgba(226,93,38,0.35) !important;
                cursor: pointer !important;
            }
            .aside-cart-wrapper .confirm_estimate:hover {
                background: linear-gradient(135deg, #d24e18 0%, #f06a28 100%) !important;
                color: #ffffff !important;
            }

        }

        /* 1. Hero Banner Overlay */
        .qc-hero-banner { position: relative; overflow: hidden; }
        .qc-hero-banner img { width: 100%; display: block; object-fit: cover; max-height: 380px; }
        .qc-hero-overlay {
            position: absolute; top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(180deg, rgba(45,53,107,0.4) 0%, rgba(45,53,107,0.7) 100%);
            display: flex; align-items: center; justify-content: center; flex-direction: column;
        }
        .qc-hero-overlay h1 { color: #fff; font-size: 36px; font-weight: 800; text-shadow: 2px 4px 8px rgba(0,0,0,0.3); margin-bottom: 8px; }
        .qc-hero-overlay .breadcrumb-nav { color: rgba(255,255,255,0.85); font-size: 15px; }
        .qc-hero-overlay .breadcrumb-nav a { color: #f3b229; text-decoration: none; font-weight: 600; }

        /* 3. Table Header - Brand Navy */
        .shopping-cart-form table thead th {
            background: #2d356b !important;
            color: #ffffff !important;
            font-weight: 700;
            font-size: 14px;
            padding: 14px 10px;
            border: none;
            letter-spacing: 0.5px;
        }

        /* 4. Category Header Pill Rows */
        .category-header td {
            background: linear-gradient(135deg, rgba(45,53,107,0.06) 0%, rgba(226,93,38,0.06) 100%) !important;
            font-weight: 700 !important;
            color: #2d356b !important;
            font-size: 15px !important;
            padding: 12px 16px !important;
            text-align: left !important;
            border-left: 4px solid #e25d26 !important;
        }

        /* 5. Product Row Stripes & Hover */
        .cart-product-item:nth-child(even) { background-color: #f8fafc; }
        .cart-product-item:hover { background-color: #eef2ff !important; transition: background-color 0.2s ease; }
        .cart-product-item td { padding: 10px 8px; border-bottom: 1px solid #e2e8f0; }
        .cart-product-item .product-name .title a { color: #2d356b; font-weight: 600; font-size: 14px; }
        .cart-product-item .mrpprice { text-decoration: line-through; color: #999; font-size: 13px; }
        .cart-product-item .offerprice { color: #e25d26; font-weight: 700; font-size: 15px; }
        .cart-product-item .totalprice { color: #2d356b; font-weight: 700; font-size: 15px; }
    </style>




    @php
        $page = App\Models\PageOff::where('status', 1)->first();
        $product = App\Models\Product::get();
        if (\Illuminate\Support\Facades\Schema::hasColumn('categories', 'sort_order')) {
            $category = App\Models\Category::orderBy('sort_order', 'asc')->orderBy('id', 'asc')->get();
        } else {
            $category = App\Models\Category::orderBy('id', 'asc')->get();
        }
        $pricelist = App\Models\PriceList::first();

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
        <!-- <section class="product-area product-category-area">
            <div class="container-fluid p-0">
                <div class="row g-0 mb-4">
                    <img src="/assets/img/Banner.jpg" alt="Blue Moon Crackers - Products" style="width:100%; display:block;">
                </div>
            </div>
        </section> -->

        <div id="checkout-bar" class="breath-animation"
            style="position: fixed; bottom: 0; left: 40%; transform: translateX(-50%); width: auto; padding: 10px 20px; text-align: center; font-size: 18px; z-index: 9999; border-top-left-radius: 12px; border-top-right-radius: 12px;">
            <a data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">
                <button type="button" class="breathing-animation"
                    style="border: none; border-radius: 10px; background: linear-gradient(135deg, #e25d26 0%, #ff7838 100%); font-size: 17px; font-weight: 700; width: 260px; padding: 10px 16px; color: #fff; text-align: center; box-shadow: 0 4px 14px rgba(226,93,38,0.35); letter-spacing: 0.5px;">
                    <i class="fa fa-shopping-cart me-1"></i> CheckOut : <span class="overallTotal" style="color: #fff; font-weight: bold;">0</span>
                </button>
            </a>
        </div>


        <section class="product-area product-default-area" style="margin-top: 20px;">
            <div class="container" style="max-width: 1500px;">
                <div class="row  justify-content-between">
                    <div class="col-xl-12 sticky-summary">
                        <div class="row ">
                            <div class="col-xl-4 pb-3 mx-auto d-block">
                        <div class="form-group" style="padding: 0px 0px 0px 0px">

                            <select class="form-control catego">
                                <option value="all">Select All Category</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        {{-- <div class="totals-summary mb-3" style="text-align: center;">
                            <strong style="background: #85250c;color: #ffff;padding: 9px;border-radius: 13px;">Net Total :
                                <span class="netTotal">0</span></strong>
                            <strong style="background: #be1e6a;color: #ffff;padding: 9px;border-radius: 13px;">You Save :
                                <span class="youSave">0</span></strong>
                            <strong style="background: #b900ff;color: #ffff;padding: 9px;border-radius: 13px;">Overall
                                Total : <span class="overallTotal">0</span></strong>
                            <a class="btn-theme breath-animation" data-margin-bottom="10" data-bs-toggle="offcanvas"
                                data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">
                                CheckOut
                            </a>

                        </div> --}}
                    </div>

                        </div>

                     <div>

                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12">

                            </div>
                            <div class="col-12">
                                <div class="shopping-cart-form table-responsive" style="padding: 0px 0px 0px 0px">
                                    <form action="#" method="post">
                                        <div class="table-responsive">
                                        <table class="table text-center align-middle">
                                            <thead>
                                                <tr>
                                                    <!--<th class="">&nbsp;</th>-->
                                                    <th class="product-thumb text-center" style="color: #ffffff;    width: 144px;" >Product
                                                        Image</th>
                                                    <th class="product-name text-center" style="color: #ffffff;width: 525px;">Product</th>
                                                    <th class="product-Content" style="color: #ffffff;width: 100px">Unit</th>

                                                    <th class="product-Content" style="color: #ffffff;width: 100px">MRP</th>
                                                    <th class="product-Offer" style="color: #ffffff;width: 100px">Offer</th>
                                                    <th class="product-quantity" style="color: #ffffff;width: 250px">Quantity</th>
                                                    <th class="product-subtotal" style="color: #ffffff">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @php

                                                    if (\Illuminate\Support\Facades\Schema::hasColumn('categories', 'sort_order')) {
                                                        $sectionhome = App\Models\Category::orderBy('sort_order', 'asc')->orderBy('id', 'asc')->get();
                                                    } else {
                                                        $sectionhome = App\Models\Category::orderBy('id', 'asc')->get();
                                                    }

                                                @endphp

                                                @foreach ($sectionhome as $section)
                                                    <tr class="category-header" data-cat="{{ $section->id }}">
                                                        <td colspan="7"><span
                                                                style="font-weight: 600">{{ $section->category_name }}</span>
                                                        </td>
                                                    </tr>



                                                    @php
                                                        $product = App\Models\Product::where(
                                                            'category_id',
                                                            $section->id,
                                                        )->get();
                                                    @endphp
                                                  @foreach ($product as $pro)
                                                        <tr class="cart-product-item produc"
                                                            data-cat="{{ $pro->category_id }}"
                                                            id="product-{{ $pro->id }}">
                                                            <td class="product-thumb text-center" data-label="Image">
                                                                <a href="{{ env('MAIN_URL') . $pro->product_image }}"
                                                                    data-fancybox="gallery"
                                                                    data-caption="{{ $pro->product_name }}">
                                                                    <img src="{{ env('MAIN_URL') . $pro->product_image }}"
                                                                        width="50" height="50" alt="Image">
                                                                </a>
                                                            </td>
                                                            <td class="product-name" data-label="Product">
                                                                <h4 class="title text-center"><a
                                                                        href="#">{{ $pro->product_name }}</a></h4>
                                                            </td>
                                                            <td class="product-content" data-label="Content">
                                                                <p class="title text-center" ><a
                                                                        href="#" style="color:black">{{ $pro->product_content }}</a>
                                                                </p>
                                                            </td>
                                                            <td class="product-name text-center" data-label="MRP">
                                                                <span
                                                                    class="mrpprice text-center">{{ $pro->product_mrp_price }}</span>
                                                            </td>
                                                            <td class="product-name text-center" data-label="Offer">
                                                                <span
                                                                    class="offerprice text-center">{{ $pro->product_regular_price }}</span>
                                                            </td>

                                                            @if ($pro->product_stock == 1)
                                                                <td class="product-quantity" data-label="Quantity">
                                                                   <p class="text-danger">Out of Stock</p>
                                                                </td>
                                                            @else
                                                                 <td class="product-quantity" data-label="Quantity" >
                                                                <div class="pro-qty"
                                                                    data-product-id="{{ $pro->id }}">
                                                                    <input type="number" class="quantity"
                                                                        title="Quantity" value="">
                                                                </div>
                                                            </td>
                                                            @endif

                                                            <td class="product-subtotal" data-label="Total">
                                                                <span class="totalprice">0.00</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                                <tr id="no-products" style="display: none;">
                                                    <td colspan="7" class="text-center text-danger">No products found
                                                        in this category.</td>
                                                </tr>




                                            </tbody>
                                        </table>
                                        </div>
                                    </form>
                                </div>







                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    @endif








@endsection

<!--== Start Aside Cart Menu ==-->
<div class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart">
    <div class="offcanvas-header">
        <h1 id="offcanvasRightLabel"></h1>
        <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">
            Shopping Cart <i class="fa fa-chevron-right"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <form action="#" method="post">

            <div class="row">

                <div class="col-lg-12 listdata" style="max-height: 50vh; overflow-y: auto;">
                    <ul class="aside-cart-product-list"></ul>
                </div>

                {{-- <div class="col-lg-12 formdata" style="max-height: 50vh; overflow-y: auto;display:none">
                    <div class="form-group">
                        <label for="f_name">Name <abbr class="required" title="required">*</abbr></label>
                        <input id="f_name" type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="com_name">Phone Number</label>
                        <input type="text" name="phonenumber" id="phonenumber" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="com_name">Email Id</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="com_name">Address</label>
                        <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">State <abbr class="required" title="required">*</abbr></label>
                        <select class="form-control state_bill" name="state_bill" id="state_bill" required>
                            <option value="">Select -State-</option>
                            @foreach (DB::table('state_list')->get() as $state)
                                <option data-id="{{ $state->id }}" value="{{ $state->state }}">
                                    {{ $state->state }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="district">City <abbr class="required" title="required">*</abbr></label>
                        <select class="form-control city_bill" name="city_bill" id="city_bill">
                            <option>Select -City-</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="district">Area <abbr class="required" title="required">*</abbr></label>
                        <select class="form-control area_bill" name="area_bill" id="area_bill">
                            <option value="">Select -Area-</option>
                        </select>
                    </div>
                    <div class="form-group" id="areaname">
                        <label for="pz-code">Enter Your Area (Where You colllect the Parcel)</label>
                        <input type="text" name="area"class="form-control area_bill" id="area">
                    </div>
                    <div class="form-group">
                        <label for="pz-code">Postcode </label>
                        <input type="text" name="pincode" id="pincode" class="form-control" required>
                    </div>

                </div> --}}


            </div>


            <div class="listdata" style="display: none">
                {{-- <div style=" "> --}}

                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Net Total:</span>
                    <span class="amount netTotal">0</span>
                </p>
                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Discount Total:</span>
                    <span class="amount youSave" id="cart-total">0</span>
                </p>

                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Sub Total:</span>
                    <span class="amount overallTotal" id="cart-total">0</span>
                </p>

                {{-- <a class="btn-theme" data-margin-bottom="10" href="shop-cart.html">View cart</a> --}}

                <a class="btn-theme confiem confirm_estimate"> Confirm Estimate </a>

            </div>

              <p class="cart-total textamount" style="margin-bottom: 0px;">
                    <span style="font-weight: 600">Minimum Order:</span>
                    <span class="amount minimamamount" data-value="{{ $pricelist->price_data }}">{{ $pricelist->price_data }}.00</span>
                </p>

            {{-- <div class="formdata" style="display: none">
                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Sub Total:</span>
                    <span class="amount netTotal">0</span>
                </p>
                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Discount Total </span>
                    <span class="amount youSave" id="cart-total">0</span>
                </p>

                <p class="cart-total" style="margin-bottom: 0px;">
                    <span>Overall Amount:</span>
                    <span class="amount overallTotal" id="cart-total">0</span>
                </p>

                <div class="row">
                    <div class="col-lg-6"> <a class="btn btn-success placeorder" style="width: 121%;height: 42px;">
                            Submit </a></div>
                    <div class="col-lg-6"> <a class="btn btn-danger backdata" style="width: 121%;height: 42px;"> Back
                        </a></div>
                </div>
            </div> --}}
    </div>
    </form>

    <div id="order-loading" style="display:none; text-align:center; padding: 20px;">
        <div class="alert alert-info">
            <strong>Please wait...</strong> Your order is being confirmed. Don't go back or refresh.
        </div>
    </div>
</div>
</div>
<!--== End Aside Cart Menu ==-->





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/just-validate@latest/dist/just-validate.production.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<script>
    var highlightProductId = {{ $id ?? 'null' }};
</script>
<script>
    Fancybox.bind("[data-fancybox='gallery']", {
        // options if needed
    });
</script>
<script>
    $(document).ready(function() {

          let minOrderAmount = parseFloat($('.minimamamount').data('value')) || 0;




      if (typeof highlightProductId !== 'undefined' && highlightProductId) {
        const $row = $('#product-' + highlightProductId);
        if ($row.length) {
            $row.addClass('highlighted-row');
            $('html, body').animate({
                scrollTop: $row.offset().top - 150
            }, 800);
            $row.find('.quantity').val(1);
            calculateTotals();
        }
    }


        $('.catego').change(function () {
            var selectedCategory = $(this).val();
            var productsFound = false;

            if (selectedCategory === "all") {
                $('.category-header, .produc').removeClass('d-none').show();
                productsFound = true;
            } else {
                $('.category-header, .produc').addClass('d-none').hide();

                $('.category-header[data-cat="' + selectedCategory + '"]').removeClass('d-none').show();

                $('.produc').each(function () {
                    var productCategory = $(this).data('cat');
                    if (productCategory == selectedCategory) {
                        $(this).removeClass('d-none').show();
                        productsFound = true;
                    }
                });
            }

            $('#no-products').toggle(!productsFound);
            calculateTotals(); // recalculate totals after category change
        });

        // Trigger calculation when quantity changes
        $(document).on('input', '.quantity', function () {
            calculateTotals();
        });


    function calculateTotals() {
        let netTotal = 0;
        let originalTotal = 0;

        $('.produc').each(function () {
            const qty = parseInt($(this).find('.quantity').val()) || 0;

            if (qty > 0) {
                const offerPrice = parseFloat($(this).find('.offerprice').text().replace(/[,]/g, '')) || 0;
                const mrpPrice = parseFloat($(this).find('.mrpprice').text().replace(/[,]/g, '')) || 0;

                netTotal += offerPrice * qty;
                originalTotal += mrpPrice * qty;

                const total = offerPrice * qty;
                $(this).find('.totalprice').text(total.toFixed(2));
            } else {
                $(this).find('.totalprice').text('0.00');
            }
        });

        const youSave = originalTotal - netTotal;

        $('.netTotal').text(originalTotal.toFixed(2));
        $('.youSave').text(youSave.toFixed(2));
        $('.overallTotal').text(netTotal.toFixed(2));

        const totalamount = Math.round(parseFloat($('.overallTotal').text()));




        if (totalamount >= minOrderAmount) {
            $('.confiem').show();
            $('.note').hide();
            $('.textamount').hide();
        } else {
            $('.confiem').hide();
            $('.note').show();
             $('.textamount').show();
        }

        updateAsideCart(); // if defined elsewhere
    }

        // append cart data function

        function updateAsideCart() {
            const $asideList = $('.aside-cart-product-list');
            $asideList.empty(); // Clear previous list

            $('.produc').each(function() {
                const qty = parseInt($(this).find('.quantity').val()) || 0;

                if (qty > 0) {
                    const imgSrc = $(this).find('img').attr('src');

                    const title = $(this).find('.product-name a').first().text();
                    const price = parseFloat($(this).find('.offerprice').text().replace(/[,]/g, '')) ||
                        0;

                    const listItem = `
            <li class="product-list-item" data-product-id="${$(this).attr('id')}">
              <a href="javascript:void(0);" class="remove">×</a>
              <a href="#">
                <img src="${imgSrc}" width="50" height="110" alt="${title}">
                <span class="product-title">${title}</span>
              </a>
              <span class="product-price">${qty} × ${price.toFixed(2)}</span>
            </li>
          `;
                    $asideList.append(listItem);
                }
            });
        }

        // Recalculate totals when quantity changes
        $(document).on('input', '.quantity', function() {
            calculateTotals();
        });


        // Remove product from aside cart
        $(document).on('click', '.aside-cart-product-list .remove', function() {
            const $listItem = $(this).closest('.product-list-item');
            const productId = $listItem.data('product-id');
            $('#' + productId).find('.quantity').val(0);
            calculateTotals();
        });

        calculateTotals(); // Initial run

        // Automatically hide fixed checkout bar when Aside Cart offcanvas opens, and restore when closed
        $('#AsideOffcanvasCart').on('show.bs.offcanvas', function () {
            $('#checkout-bar').hide();
        });
        $('#AsideOffcanvasCart').on('hidden.bs.offcanvas', function () {
            $('#checkout-bar').show();
        });


        // form data
        $('#areaname').hide();
        $('.state_bill').change(function() {
            var selectedOption = $(this).find(":selected"); // Get selected option
            var state_id = selectedOption.data('id');
            // alert(state_id);
            $.ajax({
                type: "GET",
                url: "/stateCity/" + state_id,
                dataType: "JSON",
                cache: false,
                success: function(response) {
                    var htmlContentCities = "";
                    $(".city_bill").empty();
                    $("#city_ship").empty();
                    for (var i = 0; i < response.length; i++) {
                        var city = response[i].city_name;
                        var cityid = response[i].id;
                        htmlContentCities +=
                            `<option data-id="${cityid}" value="${city}">${city}</option>`;
                    }
                    $(".city_bill").append(htmlContentCities);
                },
            });
        });



        $(document).ready(function() {


            $('.city_bill').change(function() {
                var selectedOption = $(this).find(":selected");
                var city_id = selectedOption.data('id');

                if (!city_id) {
                    $(".area_bill").html('<option value="">Select -Area-</option>');
                    return;
                }

                // Show loading placeholder
                $(".area_bill").html('<option>Loading...</option>');

                $.ajax({
                    type: "GET",
                    url: "/cityarea/" + city_id,
                    dataType: "JSON",
                    cache: false,
                    success: function(response) {
                        let htmlContentCities =
                            `<option value="">Select Area</option>`;

                        // Append areas if found
                        if (response.length > 0) {
                            for (let i = 0; i < response.length; i++) {
                                let area = response[i].area_name;
                                htmlContentCities +=
                                    `<option value="${area}">${area}</option>`;
                            }

                            // Append 'Others' option at the end
                            htmlContentCities +=
                                `<option value="0">Others</option>`;
                        } else {
                            htmlContentCities +=
                                `<option disabled>No areas found</option>`;
                        }

                        $(".area_bill").html(htmlContentCities);
                    },
                    error: function() {
                        $(".area_bill").html(
                            '<option value="">Error loading areas</option>');
                    }
                });
            });
        });

        $(document).on("change", ".area_bill", function() {
            var selectedVal = $(this).val();

            if (selectedVal === "0") {
                $("#areaname").show(); // or $('#areaname-container').show();
            } else {
                $("#areaname").hide(); // or $('#areaname-container').hide();
            }
        });

        $('.confiem').on('click', function() {


            // $(".formdata").show();

            $(".formdata").css('display', 'block');
            $('.listdata').css('display', 'none');

        });

        $('.backdata').on('click', function() {
            // $(".formdata").hide();
            $(".formdata").css('display', 'none');
            $('.listdata').css('display', 'block');
        });

        $('.breath-animation').on('click', function() {
            $('.listdata').css('display', 'block');
        })



        // insert details


        $('.placeorder').click(function(e) {
            e.preventDefault();

            // Show loading message
            $('#order-loading').show();

            // Disable buttons to prevent multiple clicks
            $('.placeorder').prop('disabled', true);
            $('.backdata').prop('disabled', true);

            // Optional: Prevent navigation away
            window.onbeforeunload = function() {
                return "Your order is being processed. Are you sure you want to leave?";
            };

            // Collect customer details
            let customer = {
                name: $('#f_name').val(),
                phone: $('#phonenumber').val(),
                email: $('#email').val(),
                address: $('#address').val(),
                state: $('#state_bill').val(),
                city: $('#city_bill').val(),
                area: $('#area_bill').val(),
                manual_area: $('#area').val(),
                pincode: $('#pincode').val()
            };

            // Collect products
            let pro_ids = [];
            let qtys = [];

            $('.produc').each(function() {
                let qty = parseInt($(this).find('.quantity').val()) || 0;
                if (qty > 0) {
                    let product_id = $(this).attr('id').replace('product-', '');
                    pro_ids.push(product_id);
                    qtys.push(qty);
                }
            });

            // Totals
            let totals = {
                subtotal: parseFloat($('.netTotal').text()) || 0,
                discount: parseFloat($('.youSave').text()) || 0,
                total: parseFloat($('.overallTotal').text()) || 0
            };

            // Send to Laravel using AJAX
            $.ajax({
                url: '/placeorder',
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    customer: customer,
                    pro_ids: pro_ids,
                    qtys: qtys,
                    subtotal: totals.subtotal,
                    discount: totals.discount,
                    total: totals.total
                },
                success: function(response) {
                    window.onbeforeunload = null; // Remove unload blocker
                    alert("Order submitted successfully!");
                    window.location.href = '/thankyou'; // redirect after success
                },
                error: function(err) {
                    window.onbeforeunload = null;
                    console.error(err);
                    alert("Error submitting order.");

                    // Allow retry
                    $('#order-loading').hide();
                    $('.placeorder').prop('disabled', false);
                    $('.backdata').prop('disabled', false);
                }
            });
        });


        $('.confirm_estimate').on('click', function () {
    const cartItems = [];
    let subtotal = 0;
    let total = 0;

    $('.produc').each(function () {
        const qty = parseInt($(this).find('.quantity').val()) || 0;
        if (qty > 0) {
            const name = $(this).find('.product-name a').text().trim();


            const price = parseFloat($(this).find('.offerprice').text().replace(/[,₹]/g, '')) || 0;
            const totalPrice = qty * price;

            subtotal += totalPrice;

            cartItems.push({
                name: name,
                qty: qty,
                price: price,
                total: totalPrice
            });
        }
    });

    const discount = 0; // Modify if you calculate discount
    total = subtotal - discount;

    // Save to localStorage
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    localStorage.setItem('subtotal', subtotal);
    localStorage.setItem('discount', discount);
    localStorage.setItem('total', total);

    // Redirect to checkout page
    window.location.href = "/checkout";
});


// tab






    });

     $(document).ready(function () {
        // Intercept Tab key on .quantity inputs
        $('.quantity').on('keydown', function (e) {
            if (e.key === 'Tab' || e.keyCode === 9) {
                e.preventDefault(); // Prevent default tabbing

                const $inputs = $('.quantity'); // All quantity fields
                const currentIndex = $inputs.index(this); // Current index
                const nextInput = $inputs.eq(currentIndex + 1); // Next field

                if (nextInput.length) {
                    nextInput.focus();
                } else {
                    // Optional: loop back to first input
                    $inputs.eq(0).focus();
                }
            }
        });
    });
</script>
