@extends('layouts.app')
@section('title', 'Bluemoon Crackers Blog - Fireworks Tips, News & Celebration Guides')
@section('meta-title', 'Bluemoon Crackers Blog – Best Crackers Shop in Sivakasi | Wholesale Dealers')
@section('meta-description', 'Read the latest blog posts from Bluemoon Crackers about Diwali fireworks, safety tips, wholesale offers, and celebration guides.')
@section('meta-keywords', 'sivakasi crackers blog, diwali crackers online, buy crackers sivakasi, fireworks safety tips, bluemoon crackers')
@section('main-content')

<style>
    /* Blog Grid Styling */
    .blog-inner-area {
        padding: 50px 0 70px;
        background: #fdfdfd;
    }
    .blog-post-card {
        background: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 20px rgba(45, 53, 107, 0.06);
        transition: all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .blog-post-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 35px rgba(45, 53, 107, 0.14);
        border-color: rgba(226, 93, 38, 0.3);
    }
    .blog-post-thumb {
        position: relative;
        overflow: hidden;
        height: 240px;
    }
    .blog-post-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .blog-post-card:hover .blog-post-thumb img {
        transform: scale(1.08);
    }
    .blog-post-content {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .blog-post-meta {
        font-size: 13px;
        color: #e25d26;
        font-weight: 600;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .blog-post-title {
        font-size: 19px;
        font-weight: 700;
        line-height: 1.4;
        margin-bottom: 16px;
        flex-grow: 1;
    }
    .blog-post-title a {
        color: #2d356b;
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .blog-post-title a:hover {
        color: #e25d26;
    }
    .blog-read-more {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #e25d26;
        font-weight: 700;
        font-size: 14px;
        text-decoration: none;
        transition: gap 0.2s ease;
    }
    .blog-post-card:hover .blog-read-more {
        gap: 12px;
        color: #2d356b;
    }
</style>

  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <section class="product-area product-category-area">
        <div class="container-fluid p-0">
            <div class="row g-0 mb-2">
                <img src="/assets/img/seo.jpg" style="width: 100%; display: block; border-radius: 0px; filter: drop-shadow(0px 0px 6px black);">
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-inner-area">
      <div class="container">
        <div class="row g-4">

            @php
                 $blog = App\models\Blog::orderBy('created_at', 'desc')->get();
            @endphp

            @foreach ($blog as $blogItems )

             <div class="col-md-6 col-lg-4">
                <div class="blog-post-card">
                    <div class="blog-post-thumb">
                        <a href="/{{Str::slug($blogItems->url) }}">
                            <img src="{{ env('MAIN_URL') . $blogItems->image }}" alt="{{ $blogItems->title }}">
                        </a>
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-meta">
                            <i class="fa fa-calendar"></i> {{ $blogItems->created_at->format('d M Y') }}
                        </div>
                        <h4 class="blog-post-title">
                            <a href="/{{Str::slug($blogItems->url) }}">{{ $blogItems->title }}</a>
                        </h4>
                        <a class="blog-read-more" href="/{{Str::slug($blogItems->url) }}">
                            Read Article <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
             </div>

            @endforeach

        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>

@endsection
