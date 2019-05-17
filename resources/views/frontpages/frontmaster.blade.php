<!DOCTYPE html>      
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>smartShoppers</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">

      

</head>

<body>
    <!-- ##### Header Area Start ##### -->
  @include('frontpages.frontlayouts.frontheader')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
  @yield('cart')
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url({{asset('theme_images/bg-img/bg-1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h6>asoss</h6>
                        <h2>New Collection</h2>
                        <a href="{{asset('#')}}" class="btn essence-btn">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{asset('photos/mmm1.jpg')}});">
                        <div class="catagory-content">
                            <a href="{{asset('/categories/wdresses')}}">Dresses</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{asset('photos/mmm4.jpg')}});">
                        <div class="catagory-content">
                            <a href="{{asset('/categories/wtees')}}">T-Shirts</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{asset('photos/mmm3.jpg')}});">
                        <div class="catagory-content">
                            <a href="{{asset('/categories/wbottom')}}">Bottom Wear</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area" style="height: 10%; width: 90%; margin-left: 65px;">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="/categories/wdresses">
          <img class="d-block w-100" src="{{asset('photos/c1.jpeg')}}" alt="First slide">
          </a>
           <div class="carousel-caption d-none d-md-block">
                <h3 style="font-family: serif; color: white;">neW lookS thiS seasoN</h3> 
                <h5 style="font-family: serif; color: white;">latest collectioN</h5>
                <p style="color: white;"></p>
           </div>
        </div>
        <div class="carousel-item">
          <a href="/categories/wbottom">
            <img class="d-block w-100" src="{{asset('photos/c2.jpeg')}}" alt="Second slide">
          </a>
                     <div class="carousel-caption d-none d-md-block">
                <h3 style="font-family: serif; color: white;">neW lookS thiS seasoN</h3> 
                <h5 style="font-family: serif; color: white;">latest collectioN</h5>
                <p style="color: white;"></p>
           </div>
        
        </div>
        <div class="carousel-item">
        <a href="/categories/wtees">
          <img class="d-block w-100" src="{{asset('photos/c3.jpeg')}}" alt="Third slide">
        </a>
          <div class="carousel-caption d-none d-md-block">
                <h3 style="font-family: serif; color: white;">neW lookS thiS seasoN</h3> 
                <h5 style="font-family: serif; color: white;">latest collectioN</h5>
                <p style="color: white;"></p>
           </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>

    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### New Arrivals Area Start caoursel ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('theme_images/product-img/product-1.jpg')}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('theme_images/product-img/product-1.jpg')}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="{{asset('#')}}" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="{{asset('single-product-details.html')}}">
                                    <h6>Knot Front Mini Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{asset('#')}}" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('theme_images/product-img/product-2.jpg')}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('theme_images/product-img/product-2.jpg')}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="{{asset('#')}}" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="{{asset('single-product-details.html')}}">
                                    <h6>Poplin Displaced Wrap Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{asset('#')}}" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('theme_images/product-img/product-3.jpg')}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('theme_images/product-img/product-3.jpg')}}" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="{{asset('#')}}" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>mango</span>
                                <a href="{{asset('single-product-details.html')}}">
                                    <h6>PETITE Crepe Wrap Mini Dress</h6>
                                </a>
                                <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{asset('#')}}" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('theme_images/product-img/product-4.jpg')}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('theme_images/product-img/product-5.jpg')}}" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="{{asset('#')}}" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>mango</span>
                                <a href="{{asset('single-product-details.html')}}">
                                    <h6>PETITE Belted Jumper Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{asset('#')}}" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### Brands Area Start ##### -->
    <div class="brands-area d-flex align-items-center justify-content-between">
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('theme_images/core-img/brand1.png')}}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('theme_images/core-img/brand2.png')}}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('theme_images/core-img/brand3.png')}}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('theme_images/core-img/brand4.png')}}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('theme_images/core-img/brand5.png')}}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('theme_images/core-img/brand6.png')}}" alt="">
        </div>

    </div>
    <!-- ##### Brands Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
@include('frontpages.frontlayouts.frontfooter')
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Classy Nav js -->
    <script src="{{asset('js/classy-nav.min.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>

    <script src="{{asset('https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js')}}"></script>

    <script src="{{url('public/js/bootstrap.min.js')}}"></script>
</body>

</html>