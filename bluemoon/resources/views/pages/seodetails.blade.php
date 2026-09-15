@extends('layouts.app')
@section('title', !empty($seodetails->meta_title) ? $seodetails->meta_title : ($seodetails->name . ' - Bluemoon Crackers'))
@section('meta-title', !empty($seodetails->meta_title) ? $seodetails->meta_title : $seodetails->name)
@section('meta-description', $seodetails->meta_des ?? '')
@section('meta-keywords', $seodetails->meta_key ?? '')

@section('main-content')

<style>
    .seo-details-area {
        padding: 50px 0 70px;
        background: #fdfdfd;
    }
    .seo-main-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 32px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 25px rgba(45, 53, 107, 0.06);
    }
    .seo-main-thumb {
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 24px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    }
    .seo-main-thumb img {
        width: 100%;
        height: auto;
        max-height: 480px;
        object-fit: cover;
        display: block;
    }
    .seo-main-title {
        color: #2d356b;
        font-weight: 800;
        font-size: 30px;
        line-height: 1.3;
        margin-bottom: 16px;
    }
    .seo-details-content p {
        color: #444;
        line-height: 1.8;
        font-size: 15.5px;
        text-align: justify;
        margin-bottom: 16px;
    }

    /* Sidebar Styling */
    .seo-sidebar-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 24px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 20px rgba(45, 53, 107, 0.05);
    }
    .sidebar-title {
        color: #2d356b;
        font-weight: 800;
        font-size: 20px;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #e25d26;
    }
    .category-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .category-list li {
        margin-bottom: 10px;
    }
    .category-list li:last-child {
        margin-bottom: 0;
    }
    .category-list a {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 16px;
        border-radius: 10px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        color: #2d356b;
        font-weight: 600;
        font-size: 14.5px;
        text-decoration: none;
        transition: all 0.25s ease;
    }
    .category-list a:hover {
        background: #2d356b;
        color: #ffffff;
        border-color: #2d356b;
        transform: translateX(4px);
    }
    .category-list a i {
        color: #e25d26;
        font-size: 12px;
        transition: color 0.25s ease;
    }
    .category-list a:hover i {
        color: #f3b229;
    }
</style>

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

    <!--== Start SEO Details Area Wrapper ==-->
    <section class="seo-details-area">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-8" data-aos="fade-right">
            <div class="seo-main-card">
                <div class="seo-main-thumb">
                  <img src="{{ env('MAIN_URL') . $seodetails->image }}" alt="{{ $seodetails->alt_key  }}">
                </div>
                <h1 class="seo-main-title">{{ $seodetails->name }}</h1>
                <div class="seo-details-content">
                  <p>{{ $seodetails->description }}</p>
                  <div>{!! $seodetails->feet_content !!}</div>
                </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-left">
            <div class="seo-sidebar-card">
              <h4 class="sidebar-title">Celebrations</h4>
              <div class="sidebar-category">
                <ul class="category-list">
                  @php
                      use Illuminate\Support\Str;
                      $seodata = App\Models\SeoData::get();
                  @endphp
                  @foreach ($seodata as $seoItem)
                     <li>
                        <a href="/seodetails/{{ Str::slug($seoItem->url) }}">
                            <i class="fa fa-chevron-right"></i> {{ $seoItem->name  }}
                        </a>
                     </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End SEO Details Area Wrapper ==-->
  </main>

@endsection
