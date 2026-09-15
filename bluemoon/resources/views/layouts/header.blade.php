

<header class="main-header-wrapper position-relative" style="overflow: visible;">

  @php
    $user = Auth::guard('customer')->user();
    $header = App\Models\HeaderText::where('action', 1)->first();
    $headerText = $header ? $header->text : "Sivakasi's Premier Retail Cracker Shop | Assured Quality | Direct Factory Prices | Safe Delivery Across India";
  @endphp

  <style>
  /* Colors derived from ram_logo1.png:
     Logo Blue: #2d356b
     Dark Blue: #1e244d
     Rocket Gold: #f3b229
     Sparkle Yellow: #ffc72c
     Flame Orange: #e25d26
  */

  /* 1. Top Announcement Marquee Bar (Rich Royal Blue with Gold Text) */
  .top-announcement-bar {
    background: #192040;
    color: #ffda79;
    padding: 7px 0;
    font-size: 13.5px;
    font-weight: 600;
    overflow: hidden;
    position: relative;
    white-space: nowrap;
    border-bottom: 2px solid #e25d26;
  }
  .announcement-marquee-track {
    display: inline-flex;
    white-space: nowrap;
    animation: marquee-scroll 28s linear infinite;
  }
  .announcement-marquee-track:hover {
    animation-play-state: paused;
  }
  .announcement-item {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding-right: 60px;
  }
  .announcement-item i {
    color: #f3b229;
    font-size: 14px;
  }
  @keyframes marquee-scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }

  /* 2. Middle Header (Pure Clean White with subtle shadow) */
  .header-middle-wrapper {
    background-color: #ffffff;
    color: #192040;
    padding: 14px 0;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
  }
  .header-brand-logo {
    display: inline-block;
    transition: all 0.3s ease;
  }
  .header-brand-logo img {
    width: 145px;
    height: auto;
    transition: transform 0.3s ease;
  }
  .header-brand-logo img:hover {
    transform: scale(1.03);
  }

  /* Trust Badges (Luxury Soft Gold Tinted Pods) */
  .header-trust-badges {
    display: flex;
    align-items: center;
    gap: 16px;
  }
  .trust-badge-card {
    display: flex;
    align-items: center;
    gap: 12px;
    background: #fffbf0;
    border: 1px solid #e6b800;
    padding: 7px 18px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(230, 184, 0, 0.15);
  }
  .trust-badge-card i {
    font-size: 20px;
    color: #e25d26;
  }
  .trust-badge-card .title {
    font-weight: 800;
    color: #c94a15;
    font-size: 11px;
    letter-spacing: 0.6px;
    text-transform: uppercase;
  }
  .trust-badge-card .value {
    font-weight: 700;
    color: #192040;
    font-size: 12.5px;
  }

  /* Helpline Call CTA (Festive Flame Orange Button) */
  .header-helpline-box {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
  }
  .helpline-label {
    font-size: 11px;
    font-weight: 800;
    color: #c94a15;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    margin-bottom: 2px;
  }
  .helpline-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #e25d26 0%, #ff7838 100%);
    color: #ffffff !important;
    font-weight: 700;
    font-size: 15px;
    padding: 8px 20px;
    border-radius: 8px;
    text-decoration: none;
    box-shadow: 0 4px 14px rgba(226, 93, 38, 0.35);
    transition: all 0.3s ease;
  }
  .helpline-btn:hover {
    background: linear-gradient(135deg, #d9531e 0%, #e25d26 100%);
    transform: translateY(-1px);
    box-shadow: 0 6px 18px rgba(226, 93, 38, 0.45);
  }

  /* 3. Bottom Sticky Navigation Bar (Deep Royal Blue with Gold Accent Border) */
  .header-bottom-nav {
    background: #192040;
    border-bottom: 3px solid #f3b229;
    transition: all 0.3s ease;
  }
  .header-bottom-nav.fixed-sticky-nav {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    z-index: 9999 !important;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25) !important;
    animation: slideNavDown 0.3s ease-out;
  }
  @keyframes slideNavDown {
    from { transform: translateY(-100%); }
    to { transform: translateY(0); }
  }
  .main-nav-list {
    display: flex;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 4px;
  }
  .main-nav-list > li > a {
    display: block;
    padding: 13px 22px;
    color: #ffffff;
    font-weight: 700;
    font-size: 15px;
    text-decoration: none;
    transition: all 0.2s ease;
    position: relative;
    letter-spacing: 0.3px;
  }
  .main-nav-list > li > a:hover,
  .main-nav-list > li.active > a {
    color: #f3b229;
    background: rgba(255, 255, 255, 0.08);
  }
  .main-nav-list > li > a::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 3px;
    background-color: #f3b229;
    transition: all 0.3s ease;
    transform: translateX(-50%);
  }
  .main-nav-list > li > a:hover::after,
  .main-nav-list > li.active > a::after {
    width: 80%;
  }

  @media (max-width: 991px) {
    .header-trust-badges {
      display: none;
    }
    .header-bottom-nav {
      display: none !important;
    }
    .btn-mobile-call {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      background: linear-gradient(135deg, #e25d26 0%, #ff7838 100%);
      color: #ffffff !important;
      border-radius: 50%;
      font-size: 14px;
      box-shadow: 0 2px 8px rgba(226, 93, 38, 0.35);
      text-decoration: none;
    }
    .top-announcement-bar {
      padding: 5px 0;
      font-size: 12px;
    }
    .announcement-item {
      gap: 6px;
      padding-right: 35px;
    }
    .header-middle-wrapper {
      padding: 8px 0;
    }
    .header-brand-logo img {
      width: 125px;
    }
  }
  </style>

  <!-- 1. Top Announcement Marquee Bar -->
  <div class="top-announcement-bar">
    <div class="announcement-marquee-track">
      <div class="announcement-item">
        <i class="fa fa-bullhorn"></i>
        <span>{{ $headerText }}</span>
      </div>
      <div class="announcement-item">
        <i class="fa fa-shield"></i>
        <span>GST Registered & Authorized Explosives Licensed Dealer</span>
      </div>
      <div class="announcement-item">
        <i class="fa fa-truck"></i>
        <span>Fast & Safe Home Delivery across Tamil Nadu, Bangalore & Puducherry</span>
      </div>
      <!-- Duplicate items for smooth looping animation -->
      <div class="announcement-item">
        <i class="fa fa-bullhorn"></i>
        <span>{{ $headerText }}</span>
      </div>
      <div class="announcement-item">
        <i class="fa fa-shield"></i>
        <span>GST Registered & Authorized Explosives Licensed Dealer</span>
      </div>
      <div class="announcement-item">
        <i class="fa fa-truck"></i>
        <span>Fast & Safe Home Delivery across Tamil Nadu, Bangalore & Puducherry</span>
      </div>
    </div>
  </div>

  <!-- 2. Middle Header (Logo Matching Colors) -->
  <div class="header-middle-wrapper">
    <div class="container">
      <div class="row align-items-center">
        <!-- Logo -->
        <div class="col-6 col-lg-3">
          <div class="header-brand-logo">
            <a href="/">
              <img src="/assets/img/ram_logo1.png" alt="Bluemoon Crackers Logo">
            </a>
          </div>
        </div>

        <!-- Trust Badges (GST & License) -->
        <div class="col-lg-6 d-none d-lg-block">
          <div class="header-trust-badges justify-content-center" style="display: none;">
            <div class="trust-badge-card">
              <i class="fa fa-file-text-o"></i>
              <div>
                <div class="title">GST REGISTERED</div>
                <div class="value">33AANFR4745A1ZD</div>
              </div>
            </div>
            <div class="trust-badge-card">
              <i class="fa fa-certificate"></i>
              <div>
                <div class="title">EXP LICENSE NO</div>
                <div class="value">E/SC/TN/24/874</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Helpline Call CTA & Mobile Toggle -->
        <div class="col-6 col-lg-3 text-end">
          <div class="d-flex align-items-center justify-content-end gap-2 gap-sm-3">
            <div class="header-helpline-box d-none d-sm-flex">
              <span class="helpline-label">FOR QUERIES & ORDERS</span>
              <a href="tel:9087605060" class="helpline-btn">
                <i class="fa fa-phone"></i> +91 9087605060
              </a>
            </div>

            <!-- Mobile Quick Call Button -->
            <a href="tel:9087605060" class="btn-mobile-call d-sm-none" title="Call Us">
              <i class="fa fa-phone"></i>
            </a>

            <!-- Mobile Offcanvas Menu Button -->
            <button class="btn-menu d-lg-none text-dark border-0 bg-transparent p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu" style="font-size: 26px; color: #2d356b !important;">
              <i class="pe-7s-menu"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 3. Bottom Sticky Navigation Bar -->
  <div class="header-bottom-nav">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="d-flex align-items-center justify-content-between">
            <nav class="d-none d-lg-block">
              <ul class="main-nav-list">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/"><span>Home</span></a></li>
                <li class="{{ Request::is('about*') ? 'active' : '' }}"><a href="/about"><span>About Us</span></a></li>
                <li class="{{ Request::is('quickcheckout*') ? 'active' : '' }}"><a href="/quickcheckout"><span>Products</span></a></li>
                <li><a href="#"><span>Diwali Fund</span></a></li>
                <li class="{{ Request::is('contact*') ? 'active' : '' }}"><a href="/contact"><span>Contact Us</span></a></li>
              </ul>
            </nav>

            <div class="d-lg-none py-2 text-warning fw-bold">
              <a href="tel:9087605060" class="text-warning text-decoration-none fs-6">
                <i class="fa fa-phone me-1"></i> +91 9087605060
              </a>
            </div>
          </div>
        </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const navBar = document.querySelector('.header-bottom-nav');
  if (!navBar) return;
  const navOffset = navBar.offsetTop;

  function handleStickyScroll() {
    if (window.innerWidth >= 992) {
      if (window.pageYOffset > navOffset) {
        navBar.classList.add('fixed-sticky-nav');
      } else {
        navBar.classList.remove('fixed-sticky-nav');
      }
    } else {
      navBar.classList.remove('fixed-sticky-nav');
    }
  }

  window.addEventListener('scroll', handleStickyScroll);
  handleStickyScroll();
});
</script>