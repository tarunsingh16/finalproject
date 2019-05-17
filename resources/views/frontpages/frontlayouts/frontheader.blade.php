 <!DOCTYPE html>
 <html>
 <head>
     <title>headre</title>
 </head>
 <body>
 
 </body>
 
    <header class="header_area">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href='/'><img src="{{asset('theme_images/core-img/logo.png')}}" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="/publicpages/shop">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <li><a href="/categories/wdresses">Dresses</a></li>
                                        
                                        <li><a href="/categories/wtees">T-shirts</a></li>
                                        <li><a href="/categories/wbottom">Bottom Wear</a></li>

                                   
                                        
                                   
                                  <div class="single-mega cn-col-4">
                                        <img src="{{asset('theme_images/bg-img/bg-6.jpg')}}" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{asset('#')}}">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{asset('index.html')}}">Home</a></li>
                                    <li><a href="/publicpages/shop">Shop</a></li>
                                    <li><a href="{{asset('single-product-details.html')}}">Product Details</a></li>
                                    <li><a href="{{asset('checkout.html')}}">Checkout</a></li>
                                    <li><a href="/publicpages/blog">Blog</a></li>
                                    <li><a href="{{asset('single-blog.html')}}">Single Blog</a></li>
                                    <li><a href="{{asset('regular-page.html')}}">Regular Page</a></li>
                                    <li><a href="/publicpages/contact">Contact</a></li>
                                   
                                </ul>
                            </li>
                            <li><a href="/publicpages/blog">Blog</a></li>
                            <li><a href="/publicpages/contact">Contact</a></li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link"  href="/loginpage">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest



  
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
 


                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="{{asset('#')}}"><img src="{{asset('theme_images/core-img/heart.svg')}}" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="{{asset('#')}}"><img src="{{asset('theme_images/core-img/user.svg')}}" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="{{asset('#" id="essenceCartBtn')}}"><img src="{{asset('theme_images/core-img/bag.svg')}}" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>