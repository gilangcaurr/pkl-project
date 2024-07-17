   <!-- header-area-start -->
   <header>
    <div class="header-top space-bg">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="header-welcome-text ">
                   <span>Welcome to our international shop! Enjoy free shipping on orders $100 & up.</span>
                   <a href="{{url('shop')}}">Shop Now<i class="fal fa-long-arrow-right"></i></a>
                </div>
             </div>
             <div class="col-xl-4 d-none d-xl-block">
                <div class="headertoplag d-flex align-items-center justify-content-end">
                   <div class="menu-top-social">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-behance"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                      <a href="#"><i class="fab fa-linkedin"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="mainmenuarea d-none d-xl-block">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-9">
                <div class="mainmenu d-flex align-items-center">
                   <div class="mainmenu__search">
                      <form action="#">
                         <div class="mainmenu__search-bar p-relative">
                            <button class="mainmenu__search-icon"><i class="fal fa-search"></i></button>
                            <input type="text" placeholder="Search products...">
                         </div>
                      </form>
                   </div>
                   <div class="mainmenu__main d-flex align-items-center p-relative">
                      <div class="main-menu">
                         <nav id="mobile-menu">
                            <ul>
                               <li class="has-dropdown">
                                  <a href="{{url('')}}">Home</a>
                               </li>
                               <li class="has-dropdown">
                                  <a href="{{url('shop')}}">Shop</a>
                               </li>
                            </ul>
                         </nav>
                      </div>
                      <div class="mainmenu__logo">
                         <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3">
                <div class="header-meta d-flex align-items-center justify-content-end">
                   </div>
                   <div class="header-meta__social d-flex align-items-center ml-25">
                    @guest
                    <a class="nav-item nav-link" href="{{url('login')}}" style="color: black;">Login</a>
                    <a class="nav-item nav-link" href="{{url('register')}}"style="color: black;">Register</a>
                @else
                <a class="nav-item nav-link" href="{{route('logout')}}" style="color: black;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"style="color: black;">
                    @csrf
                </form>
                @endguest
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </header>
 <!-- header-area-end -->

 <!-- header-xl-sticky-area -->
 <div id="header-sticky" class="logo-area tp-sticky-one mainmenu-5">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-xl-2 col-lg-3">
             <div class="logo">
                <a href="index.html"><img src="{{asset('front/assets/img/logo3.png')}}" alt="logo"></a>
             </div>
          </div>
          <div class="col-xl-6 col-lg-6">
             <div class="main-menu">
                <ul>
                   <li class="has-dropdown">
                      <a href="{{url('/')}}">Home</a>
                   </li>
                   <li class="has-dropdown">
                      <a href="{{url('shop')}}">Shop</a>
                   </li>
                </ul>
             </div>
          </div>
          <div class="col-xl-4 col-lg-9">
             <div class="header-meta-info d-flex align-items-center justify-content-end">
                <div class="header-meta__social  d-flex align-items-center">
                   <button class="header-cart p-relative tp-cart-toggle">
                      <i class="fal fa-shopping-cart"></i>
                      <span class="tp-product-count">2</span>
                   </button>
                   <div class="col-xl-3 col-lg-3">
                <div class="header-meta d-flex align-items-center justify-content-end">
                   </div>
                   <div class="header-meta__social d-flex align-items-center ml-25">
                    @guest
                    <a class="nav-item nav-link" href="{{url('login')}}" style="color: black;">Login</a>
                    <a class="nav-item nav-link" href="{{url('register')}}"style="color: black;">Register</a>
                @else
                <a class="nav-item nav-link" href="{{route('logout')}}" style="color: black;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"style="color: black;">
                    @csrf
                </form>
                @endguest
                   </div>
                </div>
             </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- header-xl-sticky-end -->

