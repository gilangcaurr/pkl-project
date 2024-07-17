@extends('layouts.front')

@section('content')

    <!-- slider-area-start -->
    <section class="slider-area slider-bg slider-bg-height">
       <!-- Slider content here, skipped for brevity -->
    </section>
    <!-- slider-area-end -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Selamat datang di Toko Kami!</h1>
            <p class="lead">Temukan berbagai produk berkualitas kami dengan harga terjangkau.</p>
        </div>
    </div> 

    <!-- side -->
<div class="main-menu-area mt-20 d-none d-xl-block">
            <div class="for-megamenu p-relative">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-2 col-lg-3">
                        <div class="cat-menu__category p-relative">
                           <a class="tp-cat-toggle" href="#" role="button"><i class="fal fa-bars"></i>Craft-Corner</a>
                           <div class="category-menu category-menu-off">
                              <ul class="cat-menu__list">
                                 <li><a href="{{url('')}}"><i class="fal fa-home"></i> Home</a></li>
                                 <li><a href="{{url('shop')}}"><i class="fal fa-shopping-cart"></i>Shop</a></li>
                                 @guest
                                 <li><a href="{{route('login')}}"><i class="fal fa-user"></i>Login</a></li>
                                 <li><a href="{{route('register')}}"><i class="fal fa-user"></i>register</a></li>
                                 @else
                                 <a class="nav-item nav-link" href="{{route('logout')}}" style="color: black;"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"style="color: black;">
                                    @csrf
                                </form>
                                @endguest                                 
                              </ul>
                           </div>
                        </div> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
<!-- end -->

   <!-- slider-area-start -->
   <section class="slider-area pb-25">
      <div class="container">
         <div class="row justify-content-xl-end">
            <div class="col-xl-9 col-xxl-7 col-lg-9">
               <div class="tp-slider-area p-relative">
                  <div class="swiper-container slider-active">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="tp-slide-item">
                              <div class="tp-slide-item__content">
                                 <h4 class="tp-slide-item__sub-title">Accessories</h4>
                                 <h3 class="tp-slide-item__title mb-25">Up To 
                                    <i>40% Off 
                                       
                                    </i> 
                                    latest Creations</h3>
                                 <a class="tp-slide-item__slide-btn tp-btn" href="{{url('shop')}}">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                              </div>
                              <div class="tp-slide-item__img">
                                 <img src="https://liberty-society.com/cdn/shop/articles/Kerajinan_Tangan_Yang_Bisa_Dijual_Online.png?v=1708953210" width="828" height="426" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tp-slide-item">
                              <div class="tp-slide-item__content">
                                 <h4 class="tp-slide-item__sub-title">Accessories</h4>
                                 <h3 class="tp-slide-item__title mb-25">Up To <i>35% Off </i> latest Creations</h3>
                                 <a class="tp-slide-item__slide-btn tp-btn" href="{{url('shop')}}">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                              </div>
                              <div class="tp-slide-item__img">
                                 <img src="https://s0.bukalapak.com/bukalapak-kontenz-production/content_attachments/90280/original/kerajinan_tangan_yang_laku_di_pasaran.jpg" width="828" height="426" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tp-slide-item">
                              <div class="tp-slide-item__content">
                                 <h4 class="tp-slide-item__sub-title">Accessories</h4>
                                 <h3 class="tp-slide-item__title mb-25">Up To <i>45% Off </i> latest Creations</h3>
                                 <a class="tp-slide-item__slide-btn tp-btn" href="{{url('shop')}}">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                              </div>
                              <div class="tp-slide-item__img">
                                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvUJlQzUHnB-y2YZqS2_4k2-iLI9gfuxykUmExlTdVUic-x1dLs0cnvgyDCZYA1hnpEVk&usqp=CAU" width="828" height="426" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slider-pagination"></div>
               </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-lg-3">
               <div class="row">
                  <div class="col-lg-12 col-md-6">
                     <div class="tpslider-banner tp-slider-sm-banner mb-30">
                        <a href="shop-details.html">
                           <div class="tpslider-banner__img">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSTX8deNofn0JWWeoNenddzo8SbF6v3h3LXy6j0o0tdgXkSvO95gOrRuRxBKg5_-Xk7rk&usqp=CAU" width="347" height="203" alt="">
                              <div class="tpslider-banner__content">
                                 <span class="tpslider-banner__sub-title">Hand made</span>
                                 <h4 class="tpslider-banner__title">New Modern & Stylist <br> Crafts</h4>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-6">
                     <div class="tpslider-banner">
                        <a href="shop-details.html">
                           <div class="tpslider-banner__img">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe2r_NyiSl0wsgxUuYibUR0cZ1p1xXsaKQ_5e05g_RHMx44dsIDKu3h8U8zVyoNwJL_cQ&usqp=CAU" width="347" height="203" alt="">
                              <div class="tpslider-banner__content">
                                 <span class="tpslider-banner__sub-title">Popular</span>
                                 <h4 class="tpslider-banner__title">Energy with our <br> newest collection</h4>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- slider-area-end -->

    <!-- product-area-start -->
    <section class="product-area pb-65">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tpsection mb-40">
                   <h4 class="tpsection__title">Beberapa Produk</h4>
                </div>
             </div>
          </div>

          <style>
              /* CSS for consistent height and text alignment of card */
              .card {
                  height: 100%;
                  display: flex;
                  flex-direction: column;
              }
              .card-body {
                  flex: 1;
                  display: flex;
                  flex-direction: column;
                  justify-content: space-between;
              }
              .card-title {
                  font-size: 1.25rem;
                  margin-bottom: 0.75rem;
              }
              .card-text {
                  flex: 1;
              }
              .btn {
                  align-self: flex-end;
              }
          </style>

          <div class="row">
            @foreach($produk as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/produks/' . $item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_produk }}</h5>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                            <a href="{{url('produk', $item->id)}}" class="btn btn-primary">Lihat detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
       </div>
    </section>
    <!-- product-area-end -->

@endsection
