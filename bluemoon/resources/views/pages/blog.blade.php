@extends('layouts.app')
@section('title', 'Bluemoon Cracker Blog')
@section('meta-title', 'About Bluemoon Crackers – Best Crackers Shop in Sivakasi | Wholesale Dealers ' )
@section('meta-description',  'Know more about Bluemoon Crackers – leading Sivakasi crackers wholesale dealers offering best firecrackers for Diwali, weddings & celebrations.')
@section('meta-keywords', '' )
@section('main-content')

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

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-inner-area pt-5">
      <div class="container">
        <div class="row">

            @php
                 $blog = App\models\Blog::orderBy('created_at', 'desc')->get()
            @endphp

            @foreach ($blog as $blogItems )

             <div class="col-md-6 col-lg-4">
            <!--== Start Blog Item ==-->
            <div class="post-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="/{{Str::slug($blogItems->url) }}"><img src="{{ env('MAIN_URL') . $blogItems->image }}" width="370" height="260" alt="Image-HasTech" style="width:370px;height:260px"></a>
                </div>
                <div class="content">
                  <div class="meta-post">
                    <ul>
                      <li class="post-date"><i class="fa fa-calendar"></i><a href="blog.html">{{ $blogItems->created_at->format('d M Y') }}</a></li>
                      {{-- <li class="author-info"><i class="fa fa-user"></i><a href="blog.html">Oaklee Odom</a></li> --}}
                    </ul>
                  </div>
                  <h4 class="title"><a href="/{{Str::slug($blogItems->url) }}">{{ $blogItems->title }}</a></h4>
                  <a class="post-btn" href="/{{Str::slug($blogItems->url) }}">Read More</a>
                </div>
              </div>
            </div>
            <!--== End Blog Item ==-->
          </div>

            @endforeach







        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>





@endsection
