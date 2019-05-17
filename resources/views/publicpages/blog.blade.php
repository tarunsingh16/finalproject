<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('theme_images/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
      @include('frontpages.frontlayouts.frontheader')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
       @yield('cart')

  
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area breadcumb-style-two bg-img" style="background-image:url({{asset('theme_images/bg-img/breadcumb2.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Fashion Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Wrapper Area Start ##### -->
    <div class="blog-wrapper section-padding-80">
        <div class="container">
            <div class="row">
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="{{asset('theme_images/bg-img/blog1.jpg')}}" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                            <a href="{{asset('#')}}">Continue reading <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="{{asset('theme_images/bg-img/blog2.jpg')}}" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                            <a href="{{asset('#')}}">Continue reading <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="{{asset('theme_images/bg-img/blog3.jpg')}}" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                            <a href="{{asset('#')}}">Continue reading <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="{{asset('theme_images/bg-img/blog4.jpg')}}" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                            <a href="{{asset('#')}}">Continue reading <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="{{asset('theme_images/bg-img/blog5.jpg')}}" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                            <a href="{{asset('#')}}">Continue reading <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
               
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="{{asset('theme_images/bg-img/blog6.jpg')}}" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="{{asset('#')}}">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p>
                            <a href="{{asset('#')}}"> Continue reading <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper Area End ##### -->

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


</body>

</html>