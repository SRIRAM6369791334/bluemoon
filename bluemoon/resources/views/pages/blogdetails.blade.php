@extends('layouts.app')
@section('title', 'Bluemoon Cracker Blog')
@section('meta-title', $blogdetails->meta_title )
@section('meta-description',  $blogdetails->meta_des)
@section('meta-keywords',   $blogdetails->meta_key )
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
    <section class="blog-details-area pt-5">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-8 pt-5" data-aos="fade-right">
            <div class="blog-details-content-wrap">
              <div class="blog-details-item">
                <div class="blog-details-thumb">
                  <img src="{{ env('MAIN_URL') . $blogdetails->image }}" width="750" height="459" alt="Image-HasTech" style="width:750px;height: 450px">
                </div>
                <div class="blog-meta-post">
                  <ul>
                    <li class="post-date"><i class="fa fa-calendar"></i><a>{{ $blogdetails->created_at->format('d M y') }}</a></li>
                    {{-- <li class="author-info"><i class="fa fa-user"></i><a href="blog.html">Hector Lovett</a></li> --}}
                  </ul>
                </div>
                <h3 class="main-title">{{ $blogdetails->title }}</h3>
                <div class="details-wrapper details-wrapper-style1" data-margin-bottom="38">
                  <p></p>

                  <p>{!! $blogdetails->feet_content !!}</p>
                </div>



              </div>

              <!--== Start Comment View Item ==-->

              <!--== End Comment View Item ==-->

              <!--== Start Comment Item ==-->
              {{-- <div class="comment-form-area">
                <h4 class="title-main">Leave a Comments</h4>
                <div class="comment-form-content">
                  <form action="#">
                    <div class="row ">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Name *">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" type="email" placeholder="Email *">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Subject (Optinal)">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb--0">
                          <textarea class="form-control" placeholder="Message"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb--0">
                          <button type="submit" class="btn-theme">Send a Comment</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div> --}}
              <!--== End Comment Item ==-->
            </div>
          </div>
          <div class="col-xl-4" data-aos="fade-left">
            <div class="blog-sidebar">


              <div class="blog-sidebar-wrap">


                <div class="blog-sidebar-post">
                  <h4 class="sidebar-title">Recent Post</h4>
                  <div class="sidebar-post">
                     @php
                 $blog = App\models\Blog::orderBy('created_at', 'desc')->get()
            @endphp
                    @foreach ($blog as $blogItems)
                         <div class="single-post">
                      <div class="post-thumb">
                        <a href="/{{Str::slug($blogItems->url) }}"><img src="{{ env('MAIN_URL') . $blogItems->image }}" width="98" height="101" alt="" style="width:98px;height:101px"></a>
                      </div>
                      <div class="post-content">
                        <span class="date"><a href="/{{Str::slug($blogItems->url) }}"><i class="fa fa-calendar"></i>{{ $blogItems->created_at->format('d Y m') }}</a></span>
                        <h6 class="title"><a href="/{{Str::slug($blogItems->url) }}">{{ $blogItems->title }}</a></h6>
                      </div>
                    </div>
                    @endforeach


                  </div>
                </div>



              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>





@endsection
