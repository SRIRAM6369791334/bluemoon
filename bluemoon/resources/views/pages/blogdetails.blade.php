@extends('layouts.app')
@section('title', !empty($blogdetails->meta_title) ? $blogdetails->meta_title : ($blogdetails->title . ' - Bluemoon Crackers'))
@section('meta-title', !empty($blogdetails->meta_title) ? $blogdetails->meta_title : $blogdetails->title)
@section('meta-description', $blogdetails->meta_des ?? '')
@section('meta-keywords', $blogdetails->meta_key ?? '')
@section('main-content')

<style>
    .blog-details-area {
        padding: 50px 0 70px;
        background: #fdfdfd;
    }
    .blog-main-wrap {
        background: #ffffff;
        border-radius: 16px;
        padding: 30px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 20px rgba(45, 53, 107, 0.05);
    }
    .blog-main-thumb {
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 24px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    }
    .blog-main-thumb img {
        width: 100%;
        height: auto;
        max-height: 480px;
        object-fit: cover;
        display: block;
    }
    .blog-main-meta {
        color: #e25d26;
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .blog-main-title {
        color: #2d356b;
        font-weight: 800;
        font-size: 30px;
        line-height: 1.3;
        margin-bottom: 20px;
    }
    .blog-details-content p {
        color: #444;
        line-height: 1.8;
        font-size: 16px;
        text-align: justify;
        margin-bottom: 16px;
    }

    /* Sidebar Styling */
    .blog-sidebar-wrap {
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
    .single-post-item {
        display: flex;
        gap: 14px;
        align-items: center;
        margin-bottom: 16px;
        padding-bottom: 16px;
        border-bottom: 1px dashed #e2e8f0;
    }
    .single-post-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }
    .single-post-thumb {
        width: 85px;
        height: 85px;
        flex-shrink: 0;
        border-radius: 10px;
        overflow: hidden;
    }
    .single-post-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .single-post-info .date {
        font-size: 12px;
        color: #e25d26;
        font-weight: 600;
        margin-bottom: 4px;
        display: block;
    }
    .single-post-info .title {
        font-size: 14px;
        font-weight: 700;
        line-height: 1.4;
        margin: 0;
    }
    .single-post-info .title a {
        color: #2d356b;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .single-post-info .title a:hover {
        color: #e25d26;
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

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-details-area">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-8" data-aos="fade-right">
            <div class="blog-main-wrap">
                <div class="blog-main-thumb">
                  <img src="{{ env('MAIN_URL') . $blogdetails->image }}" alt="{{ $blogdetails->title }}">
                </div>
                <div class="blog-main-meta">
                  <i class="fa fa-calendar"></i> {{ $blogdetails->created_at->format('d M Y') }}
                </div>
                <h1 class="blog-main-title">{{ $blogdetails->title }}</h1>
                <div class="blog-details-content">
                  {!! $blogdetails->feet_content !!}
                </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-left">
            <div class="blog-sidebar-wrap">
                  <h4 class="sidebar-title">Recent Posts</h4>
                  <div class="sidebar-posts-list">
                     @php
                         $blog = App\models\Blog::orderBy('created_at', 'desc')->get();
                     @endphp
                    @foreach ($blog as $blogItems)
                     <div class="single-post-item">
                        <div class="single-post-thumb">
                          <a href="/{{Str::slug($blogItems->url) }}">
                              <img src="{{ env('MAIN_URL') . $blogItems->image }}" alt="{{ $blogItems->title }}">
                          </a>
                        </div>
                        <div class="single-post-info">
                          <span class="date"><i class="fa fa-calendar me-1"></i>{{ $blogItems->created_at->format('d M Y') }}</span>
                          <h6 class="title"><a href="/{{Str::slug($blogItems->url) }}">{{ $blogItems->title }}</a></h6>
                        </div>
                     </div>
                    @endforeach
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>

@endsection
