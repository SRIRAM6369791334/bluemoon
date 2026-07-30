
<header class="main-header-wrapper position-relative">

  @php
  $user = Auth::guard('customer')->user();



@endphp

<style>
  .myMarquee {
  width: 1500px;
  height: 40px;
  overflow: hidden;
  position: relative;

  border-radius: 8px;

  background: rgb(45, 53, 107, 1);


}
.scroller {
  display: block;
  width: 1240px;
  height: 40px;
  position: absolute;
  left: 0;
  top: 0;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -moz-animation-duration: 10s;
  -moz-animation-name: scroll;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -webkit-animation-duration: 10s;
  -webkit-animation-name: scroll;
}
.scroller div {
  font-family: georgia, serif;
  font-size: 16px;
  line-height: 40px;
  float: left;
  width: 2000px;
  color: #000;
  font-weight: bold;
  padding: 0 10px;
}
.scroller div a {
  color: #c00;
}

@-moz-keyframes scroll {
  0% {
    left: 0;
  }
  100% {
    left: -620px;
  }
}

.scroller:hover {
  -moz-animation-play-state: paused;
}

@-webkit-keyframes scroll {
  0% {
    left: 0;
  }
  100% {
    left: -620px;
  }
}

.scroller:hover {
  -webkit-animation-play-state: paused;
}

</style>


  <div class="header-top">
    <div class="container-fluid pt--0 pb--0">
      <div class="row">
        <div class="col-12">
          <div class="header-top-align">
            <div class="header-top-align-start">
              <div class="desc">
                @php
                    $header = App\Models\HeaderText::where('action', 1)->first();
                @endphp
                {{-- <marquee direction="left" scrollamount="4">
                  <b style="color: #0e0e0f;">{{ $header->text }}</b>
                </marquee> --}}
              </div>
              <div class="myMarquee">
	<div class="scroller">
		<div style="color: #efbe6f">{{ $header->text }}.</div>
    	<div style=" color: #efbe6f">{{ $header->text }}.</div>

	</div>
</div>
            </div>
<!--             <div class="header-top-align-end">-->
<!--                <div class="header-info-items">-->
<!--                  <div class="info-items">-->
<!--                    <ul>-->

<!--                      <li class="account"><i class="fa fa-user" style=""></i>-->
<!--                        {{-- @if($user)-->
<!--                        <a href="/logout" style="color: #fff">{{ $user->name }}</a>-->
<!--@else-->
<!--<a href="/login" style="color: #fff">Account</a></li>-->
<!--@endif --}}-->

<!--                    </ul>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-middle ">
    <div class="container pt--0 pb--0">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="header-middle-align">
            <div class="header-middle-align-start">
              <div class="header-logo-area">
                <a href="/">
                  <img src="/assets/img/ram_logo1.png" style="width: 129px;">
                </a>
              </div>
            </div>
            <div class="header-area header-default" style="right: 127px;">
              <div class="container">
                <div class="row no-gutter align-items-center position-relative">
                  <div class="col-12">
                    <div class="header-align">
                      <div class="header-navigation-area position-relative">
                        <ul class="main-menu nav">
                          <li><a href="/" style="font-size: 15px;"><span>Home</span></a>

                          </li>
                            <li><a href="about" style="font-size: 15px;"><span>About</span></a> </li>
                          <li><a href="quickcheckout" style="font-size: 15px;"><span>Products</span></a> </li>
                          <li><a href="#" style="font-size: 15px;"><span>Diwali Fund</span></a></li>


                          <li><a href="contact" style="font-size: 15px;"><span>Contact Us</span></a></li>



                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="header-contact stickhead d-none d-lg-block" style="">
                <p style="margin-bottom: -11px !important; color: #efbe6f; margin-left: 15px;">FOR QUERIES & ORDERS</p>
  <a href="tel:9087605060" class="btn" style="padding: 8px 15px; font-size: 19px; color: #efbe6f; border-bottom: 1px solid;
    border-left: 1px solid;
    border-right: 1px solid;
    font-weight: 700;">
    <i class="fa fa-phone"></i> +91 9087605060
  </a>
</div>
            <div class="header-middle-align-end">
              <div class="header-action-area">
                {{-- <div class="shopping-search">
                  <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i
                      class="pe-7s-search icon"></i></button>
                </div> --}}

                <div class="shopping-cart">



                </div>
                <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu"
                  aria-controls="AsideOffcanvasMenu">
                  <i class="pe-7s-menu"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>