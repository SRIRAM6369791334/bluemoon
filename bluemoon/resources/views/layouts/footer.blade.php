<footer class="footer-area">
  <!--== Start Footer Main ==-->
  <div class="footer-main">
    <div class="container pt--0 pb--0">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <!--== Start widget Item ==-->
          <div class="widget-item">
            <div class="about-widget-wrap">
              <div class="widget-logo-area">
                <a href="/">
                  <img class="logo-main" src="/assets/img/ram_logo1.png" width="131" height="34" alt="Logo" />
                </a>
              </div>
              <p class="desc">Welcome to Blue Moon Crackers – The Best Cracker Shop in Sivakasi for Online, Retail & Wholesale Fireworks!</p>
              <div class="social-icons">
    <a href="#" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>

    <a href="#" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
     <a href="#" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
    {{-- <a href="https://twitter.com/" target="_blank" rel="noopener"><i class="fab fa-whatsup"></i></a> --}}
</div>
            </div>
          </div>
          <!--== End widget Item ==-->
        </div>
        <div class="col-md-6 col-lg-3">
          <!--== Start widget Item ==-->
          <div class="widget-item widget-services-item">
            <h4 class="widget-title">Quick Links</h4>
            <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-1">Quick
              Links</h4>
            <div id="widgetId-1" class="collapse widget-collapse-body">
              <div class="collapse-body">
                <div class="widget-menu-wrap">
                  <ul class="nav-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="quickcheckout">Products</a></li>
                    <li><a href="blog">Blogs</a></li>
                    <li><a href="contact">Contact Us</a></li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--== End widget Item ==-->
        </div>
        <div class="col-md-6 col-lg-3">
          <!--== Start widget Item ==-->
          <div class="widget-item widget-account-item">
            <h4 class="widget-title">Our Policies</h4>
            <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-2">Our
              Policies</h4>
            <div id="widgetId-2" class="collapse widget-collapse-body">
              <div class="collapse-body">
                <div class="widget-menu-wrap">
                  <ul class="nav-menu">
                    <li><a href="privacy"> Privacy Policy</a></li>
                    <li><a href="shipping"> Shipping & Delivery Policy</a></li>
                    <li><a href="terms">Terms & Conditions</a></li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--== End widget Item ==-->
        </div>
        <div class="col-md-6 col-lg-3">
          <!--== Start widget Item ==-->
          <div class="widget-item">
            <h4 class="widget-title">Contact Info</h4>
            <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-3">Contact
              Info</h4>
            <div id="widgetId-3" class="collapse widget-collapse-body">
              <div class="collapse-body">
                <div class="widget-contact-wrap">
                  <ul>
                    <li><span>Address:</span> 2/630-H, Balaji Nagar 7th Street, Near SR Palace, Sithurajapuram, Sivakasi – 626 123</li>
                    <li class="mt-5"><span style="font-weight: bold;">Phone:</span> <a href="tel:9087605060" > 9087605060</a></li>
                    <li><span  style="font-weight: bold;">Email:</span> <a href="mailto:orders@bluemooncrackers.com" style="font-size: 13px;">orders@bluemooncrackers.com</a></li>
                    {{-- <li><a target="_blank" href="https://www.hasthemes.com">www.example.com</a></li> --}}
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--== End widget Item ==-->
        </div>
      </div>
      <hr>

       <div class="row">
          @php

                                           $seoheading = App\Models\SeoHeading::get();
                                            use Illuminate\Support\Str;


                                        @endphp

                                        @foreach ($seoheading as $heading)

                                         <div class="col-md-6 col-lg-3">
          <!--== Start widget Item ==-->
          <div class="widget-item widget-services-item">


            <h4 class="widget-title">{{ $heading->heading }}</h4>
            <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-1">{{ $heading->heading }}</h4>
            <div id="widgetId-1" class="collapse widget-collapse-body">
              <div class="collapse-body">
                <div class="widget-menu-wrap">
                  <ul class="nav-menu">
                      @php
                               $seodate = App\Models\SeoData::join('seo_heading','seo_heading.id','seo_datas.seo_headingId')
                                    ->where('seo_datas.seo_headingId',$heading->id)
                                    ->select('seo_datas.*')
                                    ->get();

                            @endphp

                            @foreach ($seodate as $seo)

                             <li><a href="/seodetails/{{ Str::slug($seo->url) }}">{{$seo->name  }}</a></li>

                            @endforeach



                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--== End widget Item ==-->
        </div>

                                        @endforeach









      </div>
    </div>
  </div>
  <!--== End Footer Main ==-->

  <!--== Start Footer Bottom ==-->
  <div class="footer-bottom">
    <div class="container pt--0 pb--0">
      <div class="row">
        <div class="col-md-7 col-lg-6">
          <p class="copyright">© 2025 Bluemoon Crackers. All Rights Reserved.</p>
        </div>
        <div class="col-md-5 col-lg-6">
          <div class="payment">
            <p><span style="color: #cacaca;">Crafted by</span>&nbsp;&nbsp;<a target="_blank" href="https://saitechnosolutions.com/" style="float: end;">Sai Techno Solutions.</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--== End Footer Bottom ==-->
</footer>
