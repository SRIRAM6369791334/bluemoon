@extends('layouts.app')
@section('title', 'Bluemoon Crackers Contact')
@section('meta-title', $seodetails->meta_title )
@section('meta-description',  $seodetails->meta_des)
@section('meta-keywords',   $seodetails->meta_key )

@section('main-content')

<style>
       .rotate-icon {
  transition: transform 0.5s ease;
  display: inline-block;
  font-size: 2rem;
}

.info-item:hover .rotate-icon {
  transform: rotate(360deg);
}
</style>

  <main class="main-content">
     <section class="product-area product-category-area">
            <div class="container-fluid">
                <div class="row  mb-2">
                    <img src="/assets/img/seo.jpg" style="border-radius: 0px; filter: drop-shadow(0px 0px 6px black);">
                </div>
            </div>
        </section>

    <!--== Start Contact Area Wrapper ==-->
    <section class="blog-details-area pt-5">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-8" data-aos="fade-right">
            <div class="blog-details-content-wrap">
              <div class="blog-details-item">
                <div class="blog-details-thumb">
                  <img src="{{ env('MAIN_URL') . $seodetails->image }}" width="750" height="450" alt="{{ $seodetails->alt_key  }}" style="width:750px;height: 450px">
                </div>
                <div class="blog-meta-post">

                </div>
                <div class="details-wrapper details-wrapper-style1" data-margin-bottom="38">
                  <p>{{ $seodetails->description }}</p>

                  <p>{!! $seodetails->feet_content !!}</p>
                </div>



              </div>

              <!--== Start Comment View Item ==-->

              <!--== End Comment View Item ==-->

              <!--== Start Comment Item ==-->

              <!--== End Comment Item ==-->
            </div>
          </div>
          <div class="col-xl-4" data-aos="fade-left">
            <div class="blog-sidebar">


              <div class="blog-sidebar-wrap">
                <div class="blog-sidebar-category">
                  <h4 class="sidebar-title" data-margin-bottom="23">Celebrations</h4>
                  <div class="sidebar-category">
                    <ul class="category-list">
                      @php
                      use Illuminate\Support\Str;
                         $seodata = App\Models\SeoData::get();

                      @endphp
                        @foreach ($seodata as $seodata)
                         <li><a href="/seodetails/{{ Str::slug($seodata->url) }}">{{ $seodata->name  }}</a></li>


                        @endforeach


                    </ul>
                  </div>
                </div>






              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area Wrapper ==-->
  </main>

@endsection
