<!DOCTYPE html>
<html lang="zxx">

@php
     $user = Auth::guard('customer')->user();
@endphp

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content=@yield('meta-title')>
  <meta name="description" content=@yield('meta-description') />
   <meta name="keywords" content=@yield('meta-keywords') />
  <meta name="author" content="codecarnival" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="/assets/img/ram_logo.png" type="image/x-icon" />

  <!--== Google Fonts ==-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&display=swap"
    rel="stylesheet">

  <!--== Bootstrap CSS ==-->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--== Font Awesome Min Icon CSS ==-->
  <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--== Pe7 Stroke Icon CSS ==-->
  <link href="/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
  <!--== Swiper CSS ==-->
  <link href="/assets/css/swiper.min.css" rel="stylesheet" />
  <!--== Fancybox Min CSS ==-->
  <link href="/assets/css/fancybox.min.css" rel="stylesheet" />
  <!--== Aos Min CSS ==-->
  <link href="/assets/css/aos.min.css" rel="stylesheet" />

  <!--== Main Style CSS ==-->
  <link href="/assets/css/style.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
.float {
  position: fixed;
  width: 50px;
  height: 50px;
  bottom: 180px;
  left: 10px;
  text-align: center;
  z-index: 100;
  border-radius: 50%;
  background-color: #25D366;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  animation: breathe 2s ease-in-out infinite;
}

@keyframes breathe {
  0% {
    transform: scale(1);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }
  50% {
    transform: scale(1.1);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
  }
  100% {
    transform: scale(1);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }
}

.facebook {
  position: fixed;
  width: 50px;
  height: 50px;
  bottom: 120px;
  left: 10px;
  text-align: center;
  z-index: 100;
  border-radius: 50%;
  background-color: #1877F2;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  animation: breathe 2s ease-in-out infinite;
}

@keyframes breathe {
  0% {
    transform: scale(1);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }
  50% {
    transform: scale(1.1);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
  }
  100% {
    transform: scale(1);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }
}
.insta {
  position: fixed;
  width: 50px;
  height: 50px;
  bottom: 59px;
  left: 10px;
  text-align: center;
  z-index: 100;
  border-radius: 50%;
 background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  animation: breathe 2s ease-in-out infinite;
}

@keyframes breathe {
  0% {
    transform: scale(1);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }
  50% {
    transform: scale(1.1);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
  }
  100% {
    transform: scale(1);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }
}

.header-contact {
 position: absolute; right: 0; top: 65%; right: 9%; transform: translateY(-52%);
}

.stickhead{
  transform: translateY(-52%)
}

.stickhead.show-contact {
  transform: translateY(-72%);
}
</style>

<body>



  <a href="https://wa.me/+919087605060?text=Hello Bluemoon Crackers, I'm here to purachase some crackers" class="float" target="_blank">
   <i class="fab fa-whatsapp" style="color: #ffff"></i>
  </a>
   <a href="#" class="facebook" target="_blank">
   <i class="fab fa-facebook-f" style="color: #ffff"></i>
  </a>
   <a href="#" class="insta" target="_blank">
   <i class="fab fa-instagram" style="color: #fff;"></i>
  </a>




  <!--wrapper start-->
  <div class="wrapper">

    <!--== Start Header Wrapper ==-->
    @include('layouts.header')
    <!--== End Header Wrapper ==-->

    @yield('main-content')


    <!--== Start Footer Area Wrapper ==-->
    @include('layouts.footer')
    <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
    <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

    @if (Request::is('/') )
       <a href="quickcheckout" class="floating-icon" title="Go to Cart">
    <img src="/assets/img/quick.png" alt="Cart" />


  </a>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById('checkoutModal').style.display = 'block';
            });
        </script>
    @endif


     @if($user)
    @php



         $total = App\Models\Cart::where('user_id', $user->id)->sum('total_price');
    @endphp


    @if (!Request::is('quickcheckout') && !Request::is('thankyou') && !Request::is('about') && !Request::is('contact'))
  {{-- <div id="cart-total-bar" style="
    position: fixed;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 30%;
    background: #18a4b8 url('{{ asset('.assets/img/alert_img.png') }}') no-repeat center center;
    background-size: cover;
    color: white;
    padding: 10px 20px;
    text-align: center;
    font-size: 18px;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
    z-index: 9999;
    border-top-left-radius: 10px;
    border-top-right-radius: 15px;">
    Total Amount: ₹<span class="cart-total-amount" >{{ $total }}.00</span>&nbsp;&nbsp;
    <a href="#">
      <button type="button" style="border: none; border-top-left-radius: 8px; border-bottom-right-radius: 8px;" data-bs-toggle="offcanvas"
              data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">Add to Cart</button>
    </a>
  </div> --}}
@endif

@else
 @if (!Request::is('quickcheckout') && !Request::is('thankyou') && !Request::is('about') && !Request::is('contact'))
  {{-- <div id="cart-total-bar" style="
    position: fixed;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 30%;
    background: #18a4b8 url('{{ asset('.assets/img/alert_img.png') }}') no-repeat center center;
    background-size: cover;
    color: white;
    padding: 10px 20px;
    text-align: center;
    font-size: 18px;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
    z-index: 9999;
    border-top-left-radius: 10px;
    border-top-right-radius: 15px;">
    Total Amount: ₹<span class="cart-total-amount" >{{ $total }}.00</span>&nbsp;&nbsp;
    <a href="#">
      <button type="button" style="border: none; border-top-left-radius: 8px; border-bottom-right-radius: 8px;" data-bs-toggle="offcanvas"
              data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">Add to Cart</button>
    </a>
  </div> --}}
@endif
@endif

@if (Request::is('quickcheckout') )

@endif

    <!--== Start Quick View Menu ==-->
    <aside class="product-quick-view-modal">
      <div class="product-quick-view-inner">
        <div class="product-quick-view-content">
          <button type="button" class="btn-close">
            <span class="close-icon"><i class="fa fa-close"></i></span>
          </button>
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="thumb">
                <img src="/assets/img/shop/product-single/1.webp" width="570" height="541" alt="Alan-Shop">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="content">
                <h4 class="title">Space X Bag For Office</h4>
                <div class="prices">
                  <del class="price-old">$85.00</del>
                  <span class="price">$70.00</span>
                </div>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                  classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                  professor at Hampden-Sydney College in Virginia,</p>
                <div class="quick-view-select">
                  <div class="quick-view-select-item">
                    <label for="forSize" class="form-label">Size:</label>
                    <select class="form-select" id="forSize" required>
                      <option selected value="">s</option>
                      <option>m</option>
                      <option>l</option>
                      <option>xl</option>
                    </select>
                  </div>
                  <div class="quick-view-select-item">
                    <label for="forColor" class="form-label">Color:</label>
                    <select class="form-select" id="forColor" required>
                      <option selected value="">red</option>
                      <option>green</option>
                      <option>blue</option>
                      <option>yellow</option>
                      <option>white</option>
                    </select>
                  </div>
                </div>
                <div class="action-top">
                  <div class="pro-qty">
                    <input type="text" id="quantity20" title="Quantity" value="1" />
                  </div>
                  <button class="btn btn-black">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="canvas-overlay"></div>
    </aside>
    <!--== End Quick View Menu ==-->



    <!--== Start Aside Search Menu ==-->
    {{-- <aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch"
      aria-labelledby="offcanvasTopLabel">
      <div class="offcanvas-header">
        <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
            class="pe-7s-close"></i></button>
      </div>
      <div class="offcanvas-body">
        <div class="container pt--0 pb--0">
          <div class="search-box-form-wrap">
            <div class="search-note">
              <p>Start typing and press Enter to search</p>
            </div>
            <form action="#" method="post">
              <div class="search-form position-relative">
                <label for="search-input" class="visually-hidden">Search</label>
                <input id="search-input" type="search" class="form-control" placeholder="Search entire store…">
                <button class="search-button"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </aside> --}}
    <!--== End Aside Search Menu ==-->

    <!--== Start Side Menu ==-->
    <div class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu"
      aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h1 id="offcanvasExampleLabel"></h1>
        <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i
            class="fa fa-chevron-left"></i></button>
      </div>
      <div class="offcanvas-body">
        <div class="info-items">
          <ul>
            <li class="number"><a href="tel:9087605060"><i class="fa fa-phone"></i>9087605060</a></li>
            <li class="email"><a href="mailto:orders@bluemooncrackers.com"><i class="fa fa-envelope"></i>orders@bluemooncrackers.com</a>
            </li>

          </ul>
        </div>
        <!-- Mobile Menu Start -->
        <div class="mobile-menu-items">
          <ul class="nav-menu">
            <li><a href="/">Home</a>

            </li>
            <li><a href="/about">About</a></li>
            <li><a href="/quickcheckout">Products</a>

            </li>


            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>
        <!-- Mobile Menu End -->
      </div>
    </div>
    <!--== End Side Menu ==-->

  </div>

  <!--=======================Javascript============================-->

  <!--=== jQuery Modernizr Min Js ===-->
  <script src="/assets/js/modernizr.js"></script>
  <!--=== jQuery Min Js ===-->
  <script src="/assets/js/jquery-main.js"></script>
  <!--=== jQuery Migration Min Js ===-->
  <script src="/assets/js/jquery-migrate.js"></script>
  <!--=== jQuery Popper Min Js ===-->
  <script src="/assets/js/popper.min.js"></script>
  <!--=== jQuery Bootstrap Min Js ===-->
  <script src="/assets/js/bootstrap.min.js"></script>
  <!--=== jQuery Ui Min Js ===-->
  <script src="/assets/js/jquery-ui.min.js"></script>
  <!--=== jQuery Swiper Min Js ===-->
  <script src="/assets/js/swiper.min.js"></script>
  <!--=== jQuery Fancybox Min Js ===-->
  <script src="/assets/js/fancybox.min.js"></script>
  <!--=== jQuery Waypoint Js ===-->
  <script src="/assets/js/waypoint.js"></script>
  <!--=== jQuery Parallax Min Js ===-->
  <script src="/assets/js/parallax.min.js"></script>
  <!--=== jQuery Aos Min Js ===-->
  <script src="/assets/js/aos.min.js"></script>

  <!--=== jQuery Custom Js ===-->
  <script src="/assets/js/custom.js"></script>


  <script>
  // Sticky Header
window.addEventListener('scroll', function () {
  const header = document.querySelector('.header-middle');
  const headerContact = document.querySelector('.stickhead');

  if (window.scrollY > 100) {
    header.classList.add('sticky');
    headerContact.classList.add('show-contact');
  } else {
    header.classList.remove('sticky');
    headerContact.classList.remove('show-contact');
  }
});

  // Active Nav Link on Scroll

//   window.addEventListener("scroll", () => {
//     let current = "";
//     sections.forEach((section) => {
//       const sectionTop = section.offsetTop;
//       if (pageYOffset >= sectionTop - 150) {
//         current = section.getAttribute("id");
//       }
//     });


//   });
</script>


  <script>
    $(document).ready(function () {
      $(".pro-qty").each(function () {
        var productId = $(this).data('product-id');
        var savedQty = localStorage.getItem("product_" + productId);
        if (savedQty) {
          $(this).find('input').val(savedQty);

          var $row = $(this).closest('tr');
          var offerPrice = parseFloat($row.find('.offerprice').text().replace(/[₹,]/g, '')) || 0;
          var total = offerPrice * parseInt(savedQty);
          $row.find('.totalprice').text('₹' + total.toFixed(2));
        }
      });
      calculateTotals();

      var proQty = $(".pro-qty");
      proQty.append('<div class="dec qty-btn">-</div>');
      proQty.append('<div class="inc qty-btn">+</div>');

      $('.qty-btn').on('click', function (e) {
        e.preventDefault();

        const isLoggedIn = {{ Auth::guard('customer')->check() ? 'true' : 'false' }};

        if (!isLoggedIn) {
          alert("Please login!");
          window.location.href = "/login";
        }

        var $button = $(this);
        var $qtyInput = $button.parent().find('input');
        var oldValue = parseInt($qtyInput.val());
        var newVal = oldValue;

        if ($button.hasClass('inc')) {
          newVal = oldValue + 1;
        } else {
          if (oldValue > 0) {
            newVal = oldValue - 1;
          }
        }

        $qtyInput.val(newVal);

        var productId = $button.closest('.pro-qty').data('product-id');
        localStorage.setItem("product_" + productId, newVal);

        var $row = $button.closest('tr');
        var offerPrice = parseFloat($row.find('.offerprice').text().replace(/[₹,]/g, ''));
        var total = offerPrice * newVal;
        $row.find('.totalprice').text('₹' + total.toFixed(2));

        // Get product ID
        var productId = $button.closest('.pro-qty').data('product-id');

        // Send updated quantity to server via AJAX
        $.ajax({
          url: '/update-qty',
          method: 'POST',
          data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            product_id: productId,
            quantity: newVal
          },
          success: function (response) {
            if (response.success) {
              $('#cart-total').text(response.cartTotal);
              $('#netTotal').text(response.netTotal);
              $('#youSave').text(response.youSave);
              $('#overallTotal').text(response.overallTotal);

              $('#cart-total').text(response.cartTotal);
              $('#cart-count').text(response.cartCount);

              $('.aside-cart-product-list').html(response.cartItemsHtml);

              var cartMenu = new bootstrap.Offcanvas(document.getElementById('AsideOffcanvasCart'));
              cartMenu.show();

            } else {
              console.error("Error updating cart:", error);

            }

          }
        });
      });

    });

  </script>

  <script>


  $(document).ready(function () {
  $('.cart-button').each(function () {
    const $buttonWrapper = $(this);
    let qty = 1;
    const productId = $buttonWrapper.data('product-id');
    const price = $buttonWrapper.data('price');
    const mrp = $buttonWrapper.data('mrp')

    console.log('productId:', productId, 'price:', price);

    function updateCart(qtyToSend, prodId, prodPrice, prodMrp) {
      $.ajax({
        url: '/update-cart',
        method: 'POST',
        data: {
          _token: $('meta[name="csrf-token"]').attr('content'),
          product_id: prodId,
          qty: qtyToSend,
          price: prodPrice,
          mrp: prodMrp
        },
        success: function (response) {
          console.log('Cart updated', response);
          if (response.total_price !== undefined) {
        $('.cart-total-amount').text(`${response.total_price}.00`);
        $('.shop-count').text(`${response.count}`);

      }
        },
        error: function (err) {
          alert('Error updating cart');
          console.error(err.responseJSON);
        }
      });
    }

    function renderAddToCart() {
      $buttonWrapper.find('.cart-content').html(`
        <p class="cart-text" style="color: #18a4b8; margin: 0;">Add to Cart</p>
      `);
    }

    function renderCounter() {
      $buttonWrapper.find('.cart-content').html(`
        <div style="display: flex; justify-content: center; align-items: center; gap: 10px;">
          <button class="qty-minus" data-product_id="${productId}" data-price="${price}" data-mrp="${mrp}">−</button>
          <span class="item-qty" style="min-width: 20px;">${qty}</span>
          <button class="qty-plus" data-product_id="${productId}" data-price="${price}" data-mrp="${mrp}">+</button>
        </div>
      `);
    }

    // Initial state
    renderAddToCart();

    // Delegate event to handle dynamic DOM
    $buttonWrapper.off('click').on('click', '.cart-text', function () {
      qty = 1;
      renderCounter();
      updateCart(qty, productId, price, mrp);
    });

    $buttonWrapper.on('click', '.qty-plus', function () {
      qty++;
      $buttonWrapper.find('.item-qty').text(qty);
      updateCart(qty, productId, price, mrp);
    });

    $buttonWrapper.on('click', '.qty-minus', function () {
      qty--;
      if (qty <= 0) {
        qty = 0;
        renderAddToCart();
      } else {
        $buttonWrapper.find('.item-qty').text(qty);
      }
      updateCart(qty, productId, price, mrp);
    });
  });
});

//   $(document).ready(function () {
//     $('.cart-button').each(function () {
//       var $buttonWrapper = $(this);
//       var qty = 0;
//       var productId = $buttonWrapper.data('product-id');
//       var price = $buttonWrapper.data('price');

//       // Check that data is available
//       console.log('productId:', productId, 'price:', price); // debug

//       function updateCart(qtyToSend) {
//         $.ajax({
//           url: '/update-cart',
//           method: 'POST',
//           data: {
//             _token: $('meta[name="csrf-token"]').attr('content'),
//             product_id: productId,
//             qty: qtyToSend,
//             price: price
//           },
//           success: function (response) {
//             console.log('Cart updated', response);
//           },
//           error: function (err) {
//             alert('Error updating cart');
//             console.error(err.responseJSON);
//           }
//         });
//       }

//       function renderAddToCart() {
//         $buttonWrapper.find('.cart-content').html(`
//           <p class="cart-text" style="color: #18a4b8; margin: 0;">Add to Cart</p>
//         `);
//         $buttonWrapper.off('click').on('click', function () {
//           qty = 1;
//           renderCounter();
//           updateCart(qty);
//         });
//       }

//       function renderCounter() {
//         $buttonWrapper.find('.cart-content').html(`
//           <div style="display: flex; justify-content: center; align-items: center; gap: 10px;">
//             <button class="qty-minus">−</button>
//             <span class="item-qty" style="min-width: 20px;">${qty}</span>
//             <button class="qty-plus">+</button>
//           </div>
//         `);

//         // Re-attach events after replacing content
//         $buttonWrapper.find('.qty-plus').on('click', function () {
//           qty++;
//           $buttonWrapper.find('.item-qty').text(qty);
//           updateCart(qty);
//         });

//         $buttonWrapper.find('.qty-minus').on('click', function () {
//           qty--;
//           if (qty <= 0) {
//             qty = 0;
//             renderAddToCart();
//           }
//           updateCart(qty);
//         });
//       }

//       renderAddToCart();
//     });
//   });






  </script>


  <script>
    // function updateCartTotal() {
    //   let total = 0;
    //   document.querySelectorAll('.totalprice').forEach(span => {
    //     const value = parseFloat(span.textContent.replace(/[^\d.]/g, '')) || 0;
    //     total += value;
    //   });
    //   const totalAmount = document.getElementById('cart-total-amount');
    //   if (totalAmount) {
    //     totalAmount.textContent = total.toFixed(2);
    //   }
    // }

    // document.addEventListener('DOMContentLoaded', function () {
    //   updateCartTotal();
    //   // Optional: update on quantity changes
    //   document.querySelectorAll('.quantity').forEach(input => {
    //     input.addEventListener('input', updateCartTotal);
    //   });
    // });
  </script>





</body>

</html>
