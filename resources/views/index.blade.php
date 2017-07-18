<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Soluises</title>
        <meta name="description" content="Multipurpose bootstrap template">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('/assets/css/plugins.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/settings.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/layers.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/navigation.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('/assets/images/icons/favicon.png')}}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/assets/images/icons/faviconx57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/assets/images/icons/faviconx72.png')}}">

        <!-- Modernizr -->
        <script src="{{asset('/assets/js/modernizr.js')}}"></script>
    </head>
    <body>
        <div id="page-loader">
            <div class="sk-double-bounce">
                <div class="sk-child sk-double-bounce1"></div><!-- End .sk-child -->
                <div class="sk-child sk-double-bounce2"></div><!-- End .sk-child -->
            </div><!-- End .sk-double-bounce -->
        </div><!-- End #page-loader -->
        
        <div id="wrapper">
            <header class="header sticky-header animated-dropdown ttb-dropdown">
                <div class="header-top">
                    <div class="container-fluid">
                        <div class="dropdown header-dropdown pull-right">
                            <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Languages</a>

                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Turkish</a></li>
                                <li><a href="#">Chinese</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div><!-- End .header-dropdown -->

                        <div class="dropdown header-dropdown pull-right">
                            <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Currency</a>

                            <ul class="dropdown-menu">
                                <li><a href="#">Dollar</a></li>
                                <li><a href="#">Euro</a></li>
                                <li><a href="#">Pound</a></li>
                                <li><a href="#">Yen</a></li>
                            </ul>
                        </div><!-- End .header-dropdown -->

                        <ul class="top-menu visible-lg pull-right">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>

                        <div class="social-icons hidden-xs pull-left">
                            <a href="#" class="social-icon" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="social-icon" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-icon" title="Github"><i class="fa fa-github"></i></a>
                            <a href="#" class="social-icon" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="social-icon" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="social-icon" title="Youtube"><i class="fa fa-youtube"></i></a>
                            <a href="#" class="social-icon" title="Flickr"><i class="fa fa-flickr"></i></a>
                        </div><!-- End .social-icons -->

                        <div class="top-links pull-left">
                            <a href="#">Login</a>
                            <a href="#">Register</a>
                        </div><!-- End .top-links -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .header-top -->

                <div class="header-inner">
                    <div class="container-fluid">
                        <a href="index.html" class="site-logo" title="Bold - Multipurpose Template">
                            <img src="{{asset('/assets/images/logo.png')}}" data-rjs="3" alt="Bold Logo">
                            <span class="sr-only">Bold</span>
                        </a>

                        <div class="dropdown header-dropdown cart-dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="dcart-total-count">2</span>
                                </span>
                            </a>

                            <div class="dropdown-menu">
                                <p>2 item(s) in your cart - <span>$279.00</span></p>
                                <div class="dcart-products">
                                    <div class="product">
                                        <figure>
                                            <a href="#">
                                                <img src="{{asset('/assets/images/products/thumbs/product1.jpg')}}" alt="Product">
                                            </a>
                                        </figure>
                                        <div class="product-meta">
                                            <h5 class="product-title">
                                                <a href="#">Oluptate cumque quo archi deleni.</a>
                                            </h5>
                                            <div class="product-price-container">
                                                <span class="product-price">$180.00</span>
                                            </div><!-- End .product-price-container -->
                                            <span class="product-quantity">x 1</span>
                                        </div><!-- End .product-meta -->
                                        <a href="#" class="delete-btn" title="Delete Product"><i class="fa fa-times"></i></a>
                                    </div><!-- End .product -->
                                    <div class="product">
                                        <figure>
                                            <a href="#">
                                                <img src="{{asset('/assets/images/products/thumbs/product2.jpg')}}" alt="Product">
                                            </a>
                                        </figure>
                                        <div class="product-meta">
                                            <h5 class="product-title">
                                                <a href="#">Lorem ipsum dolor sit amet consect.</a>
                                            </h5>
                                            <div class="product-price-container">
                                                <span class="old-price">$140.00</span>
                                                <span class="product-price">$99.00</span>
                                            </div><!-- End .product-price-container -->
                                            <span class="product-quantity">x 2</span>
                                        </div><!-- End .product-meta -->
                                        <a href="#" class="delete-btn" title="Delete Product"><i class="fa fa-times"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .dcart-products -->

                                <div class="dcart-action-container">
                                    <div class="dcart-action-info">
                                        <p>Shipping: <span>$12.00</span></p>
                                        <p>Tax: <span>Free</span></p>
                                        <p>Total: <span>$390.00</span></p>
                                    </div><!-- End .dcart-action-info -->

                                    <div class="dcart-action">
                                        <a href="#" class="btn btn-custom2 btn-sm">View Cart</a>
                                        <a href="#" class="btn btn-custom btn-sm">Checkout</a>
                                    </div><!-- End .dcart-action -->
                                </div><!-- End .dcart-action-container -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cartdropdown -->

                        <div class="header-info-boxes">
                            <div class="header-info-box">
                                <div class="header-info-icon">
                                    <i class="fa fa-truck"></i>
                                </div><!-- End .header-info-icon -->
                                <div class="info-box-title">Free Delivery</div>
                                <p>No charge for shipping</p>
                            </div><!-- End .header-info-box -->

                            <div class="header-info-box">
                                <div class="header-info-icon">
                                    <i class="fa fa-support"></i>
                                </div><!-- End .header-info-icon -->
                                <div class="info-box-title">7/24 Free Support</div>
                                <p>We provide live chat support</p>
                            </div><!-- End .header-info-box -->

                            <div class="header-info-box">
                                <div class="header-info-icon">
                                    <i class="fa fa-phone"></i>
                                </div><!-- End .header-info-icon -->
                                <div class="info-box-title">Call Us</div>
                                <p>+1 (333) 221 22 33</p>
                            </div><!-- End .header-info-box -->
                        </div><!-- End header-info-boxes -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .header-inner -->

                <div class="header-bottom">
                    <div class="container-fluid">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-container" aria-expanded="false">
                            <span class="toggle-text">Menu</span>
                            <span class="toggle-wrapper">
                                <span class="sr-only">Toggle Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="main-nav-container">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Business<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index.html">Business - Version 1</a></li>
                                                <li><a href="index2.html">Business - Version 2</a></li>
                                                <li><a href="index3.html">Business - Version 3</a></li>
                                                <li><a href="index4.html">Business - Version 4</a></li>
                                                <li><a href="index5.html">Business - Version 5</a></li>
                                                <li><a href="index6.html">Business - Version 6</a></li>
                                                <li><a href="index7.html">Business - Version 7</a></li>
                                                <li><a href="index8.html">Business - Version 8</a></li>
                                                <li><a href="index9.html">Business - Version 9</a></li>
                                                <li><a href="index10.html">Business - Version 10</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-shop.html">Shop - Version 1</a></li>
                                                <li><a href="index-shop2.html">Shop - Version 2</a></li>
                                                <li><a href="index-shop3.html">Shop - Version 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-blog.html">Blog - Version 1</a></li>
                                                <li><a href="index-blog2.html">Blog - Version 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-portfolio.html">Portfolio - Version 1</a></li>
                                                <li><a href="index-portfolio2.html">Portfolio - Version 2</a></li>
                                                <li><a href="index-portfolio3.html">Portfolio - Version 3</a></li>
                                                <li><a href="index-portfolio4.html">Portfolio - Version 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Photography<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-photography.html">Photography - Version 1</a></li>
                                                <li><a href="index-photography2.html">Photography - Version 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Onepages<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="index-onepage.html">Onepage - Version 1</a></li>
                                                <li><a href="index-onepage2.html">Onepage - Version 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Pages<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="about2.html">About Us 2</a></li>
                                                <li><a href="about3.html">About Us 3</a></li>
                                                <li><a href="aboutme.html">About Me</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="services2.html">Services 2</a></li>
                                                <li><a href="services3.html">Services 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="pricing.html">Pricing Page</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">FaQs Pages<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="faqs.html">FaQs Page</a></li>
                                                <li><a href="faqs2.html">FaQs Page 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Coming Soon<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="coming-soon2.html">Coming Soon 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown megamenu-container">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mega<span class="angle"></span></a>
                                    <div class="dropdown-menu megamenu" role="menu">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <ul>
                                                        <li><a href="#">Tops &amp; Blouses</a></li>
                                                        <li><a href="#">Athletic Apparel</a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Hosiery &amp; Socks</a></li>
                                                        <li><a href="#">Intimates &amp; Sleep</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Jumpsuits &amp; Rompers</a></li>
                                                        <li><a href="#">Leggings</a></li>
                                                        <li><a href="#">Skirts</a></li>
                                                        <li><a href="#">Suits &amp; Blazers</a></li>
                                                        <li><a href="#">Sweaters</a></li>
                                                    </ul>
                                                </div><!-- End .col-sm-3 -->
                                                <div class="col-sm-3">
                                                    <ul>
                                                        <li><a href="#">Sweats &amp; Hoodies</a></li>
                                                        <li><a href="#">Hosiery &amp; Socks</a></li>
                                                        <li><a href="#">Intimates &amp; Sleep</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                        <li><a href="#">Suits &amp; Blazers</a></li>
                                                        <li><a href="#">Skirts</a></li>
                                                        <li><a href="#">Tops &amp; Blouses</a></li>
                                                        <li><a href="#">Jumpsuits &amp; Rompers</a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Hosiery &amp; Socks</a></li>
                                                        <li><a href="#">Intimates &amp; Sleep</a></li>
                                                    </ul>
                                                </div><!-- End .col-sm-3 -->
                                                <div class="col-sm-3">
                                                    <ul>
                                                        <li><a href="#">Jumpsuits &amp; Rompers</a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                        <li><a href="#">Suits &amp; Blazers</a></li>
                                                        <li><a href="#">Tops &amp; Blouses</a></li>
                                                        <li><a href="#">Sweats &amp; Hoodies</a></li>
                                                        <li><a href="#">Hosiery &amp; Socks</a></li>
                                                        <li><a href="#">Intimates &amp; Sleep</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                        <li><a href="#">Athletic Apparel</a></li>
                                                        <li><a href="#">Sweaters</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Suits &amp; Blazers</a></li>
                                                    </ul>
                                                </div><!-- End .col-sm-3 -->
                                                <div class="col-sm-3">
                                                    <ul>
                                                        <li><a href="#">Hosiery &amp; Socks</a></li>
                                                        <li><a href="#">Intimates &amp; Sleep</a></li>
                                                        <li><a href="#">Jumpsuits &amp; Rompers</a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                        <li><a href="#">Suits &amp; Blazers</a></li>
                                                    </ul>
                                                </div><!-- End .col-sm-3 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .container-fluid -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Right  Sidebar<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="category.html">Four Columns</a></li>
                                                        <li><a href="category-3col.html">Three Columns</a></li>
                                                        <li><a href="category-5col.html">Five Columns</a></li>
                                                        <li><a href="category-2col.html">Two Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Left  Sidebar<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="category-left-sidebar.html">Four Columns</a></li>
                                                        <li><a href="category-left-sidebar-3col.html">Three Columns</a></li>
                                                        <li><a href="category-left-sidebar-5col.html">Five Columns</a></li>
                                                        <li><a href="category-left-sidebar-2col.html">Two Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">No Sidebar<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="category-fullwidth-5col.html">Five Columns</a></li>
                                                        <li><a href="category-fullwidth-4col.html">Four Columns</a></li>
                                                        <li><a href="category-fullwidth-3col.html">Three Columns</a></li>
                                                        <li><a href="category-fullwidth-2col.html">Two Columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category List<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="category-list.html">Right Sidebar</a></li>
                                                <li><a href="category-list-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="category-list-fullwidth.html">Fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product.html">Product Page</a></li>
                                        <li><a href="product2.html">Product Page 2</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="compare.html">Compare Products</a></li>
                                        <li><a href="login.html">Login Page</a></li>
                                        <li><a href="login2.html">Login Page 2</a></li>
                                        <li><a href="register.html">Register Page</a></li>
                                        <li><a href="register2.html">Register Page 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Boxed<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grid<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-grid-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-grid-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-grid-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-grid-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-grid-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-masonry-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-masonry-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-masonry-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-masonry-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-masonry-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fullwidth<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grid<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-grid-fullwidth-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-grid-fullwidth-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-grid-fullwidth-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-grid-fullwidth-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-grid-fullwidth-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-masonry-fullwidth-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-masonry-fullwidth-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-masonry-fullwidth-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-masonry-fullwidth-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-masonry-fullwidth-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Boxed - Nogap<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grid<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-nogap-grid-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-nogap-masonry-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fullwidth - Nogap<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grid<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-nogap-grid-fullwidth-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-fullwidth-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-fullwidth-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-fullwidth-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-nogap-grid-fullwidth-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry<span class="angle"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="portfolio-nogap-masonry-fullwidth-4col.html">Four Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-fullwidth-3col.html">Three Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-fullwidth-2col.html">Two Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-fullwidth-5col.html">Five Columns</a></li>
                                                        <li><a href="portfolio-nogap-masonry-fullwidth-6col.html">Six Columns</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio Post<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="single-portfolio.html">Image Post</a></li>
                                                <li><a href="single-portfolio-gallery.html">Gallery Post</a></li>
                                                <li><a href="single-portfolio-video.html">Video Post</a></li>
                                                <li><a href="single-portfolio-audio.html">Audio Post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Classic<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="blog.html">Right Sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-both-sidebar.html">Both Sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">Fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry - Boxed<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="blog-masonry-2col.html">Two Columns</a></li>
                                                <li><a href="blog-masonry-2col-left-sidebar.html">Two Col Left Sidebar</a></li>
                                                <li><a href="blog-masonry-2col-right-sidebar.html">Two Col Right Sidebar</a></li>
                                                <li><a href="blog-masonry-3col.html">Three Columns</a></li>
                                                <li><a href="blog-masonry-4col.html">Four Columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Masonry - Fullwidth<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="blog-masonry-fullwidth-3col.html">Three Columns</a></li>
                                                <li><a href="blog-masonry-fullwidth-4col.html">Four Columns</a></li>
                                                <li><a href="blog-masonry-fullwidth-5col.html">Five Columns</a></li>
                                                <li><a href="blog-masonry-fullwidth-6col.html">Six Columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog List<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="blog-list.html">Fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog Post<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="single.html">Blog Post</a></li>
                                                <li><a href="single-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="single-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Elements<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Elements - Headers<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="header.html">Header Version 1</a></li>
                                                <li><a href="header2.html">Header Version 2</a></li>
                                                <li><a href="header3.html">Header Version 3</a></li>
                                                <li><a href="header4.html">Header Version 4</a></li>
                                                <li><a href="header5.html">Header Version 5</a></li>
                                                <li><a href="header6.html">Header Version 6</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Elements - Headers<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="header7.html">Header Version 7</a></li>
                                                <li><a href="header8.html">Header Version 8</a></li>
                                                <li><a href="header9.html">Header Version 9</a></li>
                                                <li><a href="header10.html">Header Version 10</a></li>
                                                <li><a href="header11.html">Header Version 11</a></li>
                                                <li><a href="header12.html">Header Version 12</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="elements-footers.html">Elements - Footers</a></li>
                                        <li><a href="elements-footers-white.html">Footers - White</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Elements<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="elements-pageheaders.html">Elements - Page Headers</a></li>
                                                <li><a href="elements-typography.html">Elements - Typography</a></li>
                                                <li><a href="elements-titles.html">Elements - Titles</a></li>
                                                <li><a href="elements-buttons.html">Elements - Buttons</a></li>
                                                <li><a href="elements-services.html">Elements - Services</a></li>
                                                <li><a href="elements-forms.html">Elements - Forms</a></li>
                                                <li><a href="elements-counters.html">Elements - Counters</a></li>
                                                <li><a href="elements-collapses.html">Elements - Collapses</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Elements<span class="angle"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="elements-callouts.html">Elements - Callouts</a></li>
                                                <li><a href="elements-text-blocks.html">Elements - Blocks</a></li>
                                                <li><a href="elements-tabs.html">Elements - Tabs</a></li>
                                                <li><a href="elements-progressbars.html">Elements - Progress bars</a></li>
                                                <li><a href="elements-tables.html">Elements - Tables</a></li>
                                                <li><a href="elements-alerts.html">Elements - Alerts</a></li>
                                                <li><a href="elements-media.html">Elements - Media</a></li>
                                                <li><a href="elements-more.html">Elements - More</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact<span class="angle"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="contact.html">Contact Page 1</a></li>
                                        <li><a href="contact2.html">Contact Page 2</a></li>
                                        <li><a href="contact3.html">Contact Page 3</a></li>
                                        <li><a href="contact4.html">Contact Page 4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown pull-right">
                                    <a href="#" class="header-search-toggle" role="button" title="Open Search"><span class="visible-inline-xs">Search</span><i class="fa fa-search"></i></a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .header-bottom -->
            </header><!-- End .header -->

            <div class="header-search-form">
                <a href="#" class="header-search-toggle" title="Close"><i class="fa fa-times"></i></a>
                <form action="#">
                    <input type="search" class="form-control" placeholder="Type in here" required>
                </form>
            </div><!-- End .header-search-form -->
            
            <div class="main">
                <div id="rev_slider_wrapper" class="slider-container rev_slider_wrapper rev_container_1 fullwidthbanner-container" data-alias="classicslider1">
                    <div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-1" data-transition="slideoverup" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1200"  data-thumb="{{asset('/assets/images/homepages/index/slide1-100x50.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Bold">

                                <!-- MAIN IMAGE -->
                                <img src="{{asset('/assets/images/homepages/index/slide1.jpg')}}" alt="Slider bg 1" data-bgposition="center center" data-duration="11000" data-ease="Linear.easeNone" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 - overlay -->
                                <div class="tp-caption tp-shape tp-shapewrapper rs-parallaxlevel-0" 
                                    id="slide-1-layer-1" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                                    data-height="full"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:0.5;"
                                    data-transform_in="opacity:0;s:1500;" 
                                    data-transform_out="o:0;s:1000;" 
                                    data-start="1000" 
                                    data-basealign="slide" 
                                    data-responsive_offset="on" 
                                    data-responsive="off"
                                    style="z-index: 5; background-color: rgba(0,0,0, 0.5);"> 
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
                                    id="slide-1-layer-2" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-80','-60','-50','-38']"
                                    data-fontsize="['220','170','150','100']"
                                    data-fontweight="700"
                                    data-lineheight="['220','170','150','100']"
                                    data-width="none"
                                    data-color="#fff"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                    data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="800" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.1" 
                                    style="z-index: 5; white-space: nowrap;text-shadow:0 3px 8px rgba(0,0,0, 0.35);">bold.
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
                                    id="slide-1-layer-3" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['35','35','35','25']" 
                                    data-width="none"
                                    data-height="none"
                                    data-color="#fff"
                                    data-fontsize="['42','36','28','22']"
                                    data-fontweight="300"
                                    data-lineheight="['42','36','28','22']"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1300" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    style="z-index: 6; white-space: nowrap;">Creative &amp; Fresh Template
                                </div>

                                <!-- LAYER NR. 4 -->
                                <a class="tp-caption btn btn-custom min-width tp-resizeme rs-parallaxlevel-0" 
                                    id="slide-1-layer-4" 
                                    data-x="['center','center','center','center']" data-hoffset="['-110','-100','-90','-80']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['116','106','96','75']" 
                                    data-witdh="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1800" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    style="z-index: 6; white-space: nowrap;"
                                    href="#">See Features
                                </a>

                                 <!-- LAYER NR. 5 -->
                                <a class="tp-caption btn btn-custom2 min-width tp-resizeme rs-parallaxlevel-0" 
                                    id="slide-1-layer-5" 
                                    data-x="['center','center','center','center']" data-hoffset="['110','100','90','80']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['116','106','96','75']" 
                                    data-witdh="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="2000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    style="z-index: 6; white-space: nowrap;"
                                    href="#">Get in touch
                                </a>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-2" data-transition="slideoverdown" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1200" data-thumb="{{asset('/assets/images/homepages/index/slide2-100x50.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Purchase">

                                <!-- MAIN IMAGE -->
                                <img src="{{asset('/assets/images/homepages/index/slide2.jpg')}}" alt="Slider bg 2"  data-bgposition="center center" data-duration="11000" data-ease="Linear.easeNone" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 - overlay -->
                                <div class="tp-caption tp-shape tp-shapewrapper rs-parallaxlevel-0" 
                                    id="slide-2-layer-1" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                    data-width="full"
                                    data-height="full"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:0.5;"
                                    data-transform_in="opacity:0;s:1500;" 
                                    data-transform_out="o:0;s:1000;" 
                                    data-start="1000" 
                                    data-basealign="slide" 
                                    data-responsive_offset="on" 
                                    data-responsive="off"
                                    style="z-index: 5; background-color: rgba(0,0,0, 0.6);"> 
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
                                    id="slide-2-layer-2" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-70','-60','-55','-44']" 
                                    data-fontsize="['108','86','64','42']"
                                    data-fontweight="700"
                                    data-lineheight="['124','100','80','60']"
                                    data-color="#fff"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="800" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" 
                                    style="z-index: 5; white-space: nowrap;text-shadow:0 3px 8px rgba(0,0,0, 0.35);">for everybody
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
                                    id="slide-2-layer-3" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['20','10','10','0']" 
                                    data-width="none"
                                    data-height="none"
                                    data-fontsize="['42','36','28','22']"
                                    data-fontweight="300"
                                    data-lineheight="['42','36','28','22']"
                                    data-color="#fff"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1300" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    style="z-index: 6; white-space: nowrap;">Easy to customize and use
                                </div>

                                <!-- LAYER NR. 4 -->
                                <a class="tp-caption btn btn-white min-width tp-resizeme rs-parallaxlevel-0" 
                                    id="slide-2-layer-4" 
                                    data-x="['center','center','center','center']" data-hoffset="['-110','-100','-90','-80']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['106','86','80','60']" 
                                    data-witdh="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1800" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    style="z-index: 6; white-space: nowrap;"
                                    href="#">See Pricing
                                </a>

                                 <!-- LAYER NR. 5 -->
                                <a class="tp-caption btn btn-custom min-width tp-resizeme rs-parallaxlevel-0" 
                                    id="slide-2-layer-5" 
                                    data-x="['center','center','center','center']" data-hoffset="['110','100','90','80']" 
                                    data-y="['middle','middle','middle','middle']" data-voffset="['106','86','80','60']" 
                                    data-witdh="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="2000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    style="z-index: 6; white-space: nowrap;"
                                    href="#">Purchase Now
                                </a>
                            </li>
                        </ul>
                        <div class="tp-bannertimer" style="height: 5px; background-color: rgba(255, 255, 255, 0.5);"></div>
                    </div><!-- End #rev_slider -->
                </div><!-- END REVOLUTION SLIDER -->

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service">
                                <div class="service-icon custom wow rotateIn">
                                    <i class="fa fa-diamond"></i>
                                </div><!-- End .service-icon -->
                                <h3 class="service-title"><a href="#">Web Design</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sunt nisi id magni dignissimos rem.</p>
                            </div><!-- End .service -->
                        </div><!-- End .col-md-3 -->

                        <div class="col-md-3 col-sm-6">
                            <div class="service">
                                <div class="service-icon custom wow rotateIn" data-wow-delay="0.15s">
                                    <i class="fa fa-edit"></i>
                                </div><!-- End .service-icon -->
                                <h3 class="service-title"><a href="#">Advertisement</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sunt nisi id magni dignissimos rem.</p>
                            </div><!-- End .service -->
                        </div><!-- End .col-md-3 -->

                        <div class="clearfix visible-sm"></div><!-- End .clearfix -->

                        <div class="col-md-3 col-sm-6">
                            <div class="service">
                                <div class="service-icon custom wow rotateIn" data-wow-delay="0.3s">
                                    <i class="fa fa-eye"></i>
                                </div><!-- End .service-icon -->
                                <h3 class="service-title"><a href="#">Social Media</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sunt nisi id magni dignissimos rem.</p>
                            </div><!-- End .service -->
                        </div><!-- End .col-md-3 -->

                        <div class="col-md-3 col-sm-6">
                            <div class="service">
                                <div class="service-icon custom wow rotateIn" data-wow-delay="0.45s">
                                    <i class="fa fa-cogs"></i>
                                </div><!-- End .service-icon -->
                                <h3 class="service-title"><a href="#">Support</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sunt nisi id magni dignissimos rem.</p>
                            </div><!-- End .service -->
                        </div><!-- End .col-md-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->

                <div class="mb40 mb25-sm"></div><!-- margin -->

                <div class="bg-wrapper pt60 pb40 pt50-sm">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title custom mb30">Our History</h3>

                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab-about" aria-controls="tab-about" role="tab" data-toggle="tab">About</a></li>

                                        <li role="presentation"><a href="#tab-services" aria-controls="tab-services" role="tab" data-toggle="tab">Services</a></li>

                                        <li role="presentation"><a href="#tab-features" aria-controls="tab-features" role="tab" data-toggle="tab">Features</a></li>
                                    </ul>

                                    <!-- Tab Panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="tab-about">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex quaerat, itaque impedit excepturi qui? Voluptatibus, quae. Obcaecati pariatur explicabo dolorum doloremque eius magni ipsa. Natus, at cum maiores id atque.</p>
                                            <p>Distinctio aut molestias, asperiores vel corrupti minima? Consectetur ipsam dolorum cum aliquam quam, sint debitis, quod inventore magni recusandae dolor aspernatur harum, molestiae voluptatum tempore fuga quos nisi consequatur. Asperiores!</p>
                                        </div><!-- End .tab-pane -->
                                        <div role="tabpanel" class="tab-pane" id="tab-services">
                                            <p>Distinctio aut molestias, asperiores vel corrupti minima? Consectetur ipsam dolorum cum aliquam quam, sint debitis, quod inventore magni recusandae dolor aspernatur harum, molestiae voluptatum tempore fuga quos nisi consequatur. Asperiores!</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex quaerat, itaque impedit excepturi qui? Voluptatibus, quae. Obcaecati pariatur explicabo dolorum doloremque eius magni ipsa. Natus, at cum maiores id atque.</p>
                                        </div><!-- End .tab-pane -->
                                        <div role="tabpanel" class="tab-pane" id="tab-features">
                                            <p>Officia necessitatibus est non, laborum expedita ex officiis quae nisi accusantium blanditiis mollitia labore a nihil reiciendis incidunt, quaerat explicabo rem in consequuntur obcaecati doloremque voluptate architecto. Magnam, eligendi, a.</p>
                                            <p>Cupiditate dignissimos architecto placeat obcaecati neque aliquid dolore, odit nesciunt alias aut vero adipisci at consectetur deleniti in deserunt nulla dicta, voluptates totam. Est enim debitis similique doloremque corporis, a.</p>
                                        </div><!-- End .tab-pane -->
                                    </div><!-- End .tab-content -->
                                </div><!-- end role[tabpanel] -->
                            </div><!-- End .col-md-6 -->

                            <div class="mb35 clearfix visible-sm visible-xs"></div><!-- margin -->

                            <div class="col-md-6">
                                <h3 class="title custom mb30">Our Skills</h3>

                                <div class="progress-container">
                                    <h4 class="progress-title dark">Web Design <span>95%</span></h4>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-animate custom" role="progressbar" data-width="95" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">95% Complete</span>
                                        </div><!-- End .progress-bar -->
                                    </div><!-- End .progress -->
                                </div><!-- End .progress-container -->

                                <div class="progress-container">
                                    <h4 class="progress-title dark">Sass &amp; Gulp <span>75%</span></h4>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-animate custom2" role="progressbar" data-width="75" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">75% Complete</span>
                                        </div><!-- End .progress-bar -->
                                    </div><!-- End .progress -->
                                </div><!-- End .progress-container -->

                                <div class="progress-container">
                                    <h4 class="progress-title dark">HTML &amp; CSS <span>85%</span></h4>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-animate custom" role="progressbar" data-width="85" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">85% Complete</span>
                                        </div><!-- End .progress-bar -->
                                    </div><!-- End .progress -->
                                </div><!-- End .progress-container -->

                                <div class="progress-container">
                                    <h4 class="progress-title dark">jQuery <span>95%</span></h4>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-animate custom2" role="progressbar" data-width="95" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">95% Complete</span>
                                        </div><!-- End .progress-bar -->
                                    </div><!-- End .progress -->
                                </div><!-- End .progress-container -->

                                <div class="progress-container">
                                    <h4 class="progress-title dark">AngularJS <span>75%</span></h4>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-animate custom" role="progressbar" data-width="75" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">75% Complete</span>
                                        </div><!-- End .progress-bar -->
                                    </div><!-- End .progress -->
                                </div><!-- End .progress-container -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->

                        <div class="mb50 mb25-sm mb15-xs"></div><!-- margin -->

                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                                <span class="count" data-from="0" data-to="982" data-speed="3000" data-refresh-interval="50">0</span>
                                <h4 class="count-title">Happy Clients</h4>
                            </div><!-- End .col-md-2 -->
                            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                                <span class="count" data-from="0" data-to="571" data-speed="3000" data-refresh-interval="50">0</span>
                                <h4 class="count-title">Regular Clients</h4>
                            </div><!-- End .col-md-2 -->
                            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                                <span class="count" data-from="0" data-to="1817" data-speed="3000" data-refresh-interval="50">0</span>
                                <h4 class="count-title">Projects Done</h4>
                            </div><!-- End .col-md-2 -->
                            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                                <span class="count" data-from="0" data-to="600" data-speed="3000" data-refresh-interval="50">0</span>
                                <h4 class="count-title">Happy Days</h4>
                            </div><!-- End .col-md-2 -->

                            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                                <span class="count" data-from="0" data-to="700" data-speed="3000" data-refresh-interval="50">0</span>
                                <h4 class="count-title">Total Pizza</h4>
                            </div><!-- End .col-md-2 -->

                            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                                <span class="count" data-from="0" data-to="1453" data-speed="3000" data-refresh-interval="50">0</span>
                                <h4 class="count-title">Cup of Coffee</h4>
                            </div><!-- End .col-md-2 -->
                        </div><!-- End .row -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .bg-wrapper -->

                <div class="mb60 mb50-sm"></div><!-- margin -->

                <div class="container-fluid text-center">
                    <h2 class="title custom text-center">Recent Works</h2>
                    <ul id="portfolio-filter">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".web-design">Web Design</a></li>
                        <li><a href="#" data-filter=".marketing">Marketing</a></li>
                        <li><a href="#" data-filter=".video">Video</a></li>
                        <li><a href="#" data-filter=".wordpress">Wordpress</a></li>
                        <li><a href="#" data-filter=".logo-design">Logo Design</a></li>
                    </ul>
                </div><!-- End .container-fluid -->

                <div class="container-fluid">
                    <div class="portfolio-row">
                        <div id="portfolio-item-container" class="popup-gallery max-col-4" data-layoutmode="fitRows">
                            <div class="portfolio-item web-design wordpress">
                                <figure>
                                    <img src="{{asset('/assets/images/portfolio/grid/item1.jpg')}}" alt="Portfolio Name">
                                    <figcaption>
                                        <a href="{{asset('/assets/images/portfolio/grid/item1.jpg')}}" data-thumb="{{asset('/assets/images/portfolio/grid/item1.jpg')}}" class="zoom-btn"><i class="fa fa-search"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a href="#" title="Portfolio name">Lorem ipsum dolor sit amet, consec tetur adipis</a></h3>
                                    <div class="portfolio-tags">
                                        <a href="#">Design</a>,
                                        <a href="#">Develop</a>
                                    </div><!-- End .portfolio-tags -->
                                </div><!-- End .portfolio-meta -->
                            </div><!-- End .portfolio-item -->

                            <div class="portfolio-item web-design marketing">
                                <figure>
                                    <img src="{{asset('/assets/images/portfolio/grid/item2.jpg')}}" alt="Portfolio Name">
                                     <figcaption>
                                        <a href="http://www.youtube.com/watch?v=jt8YicG-F6c" data-thumb="assets/images/portfolio/grid/item2.jpg" class="zoom-btn"><i class="fa fa-search"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a href="#" title="Portfolio name">Lorem ipsum dolor sit amet, consec tetur adipis</a></h3>
                                    <div class="portfolio-tags">
                                        <a href="#">Design</a>,
                                        <a href="#">Develop</a>
                                    </div><!-- End .portfolio-tags -->
                                </div><!-- End .portfolio-meta -->
                            </div><!-- End .portfolio-item -->

                            <div class="portfolio-item wordpress">
                                <figure>
                                    <img src="{{asset('/assets/images/portfolio/grid/item3.jpg')}}" alt="Portfolio Name">
                                    <figcaption>
                                        <a href="{{asset('/assets/images/portfolio/grid/item3.jpg')}}" data-thumb="{{asset('/assets/images/portfolio/grid/item3.jpg')}}" class="zoom-btn"><i class="fa fa-search"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a href="#" title="Portfolio name">Lorem ipsum dolor sit amet, consec tetur adipis</a></h3>
                                    <div class="portfolio-tags">
                                        <a href="#">Design</a>,
                                        <a href="#">Develop</a>
                                    </div><!-- End .portfolio-tags -->
                                </div><!-- End .portfolio-meta -->
                            </div><!-- End .portfolio-item -->

                            <div class="portfolio-item web-design wordpress">
                                <figure>
                                    <img src="{{asset('/assets/images/portfolio/grid/item4.jpg')}}" alt="Portfolio Name">
                                    <figcaption>
                                        <a href="{{asset('/assets/images/portfolio/grid/item4.jpg')}}" data-thumb="{{asset('/assets/images/portfolio/grid/item4.jpg')}}" class="zoom-btn"><i class="fa fa-search"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a href="#" title="Portfolio name">Lorem ipsum dolor sit amet, consec tetur adipis</a></h3>
                                    <div class="portfolio-tags">
                                        <a href="#">Design</a>,
                                        <a href="#">Develop</a>
                                    </div><!-- End .portfolio-tags -->
                                </div><!-- End .portfolio-meta -->
                            </div><!-- End .portfolio-item -->

                            <div class="portfolio-item logo-design video marketing">
                                <figure>
                                    <img src="{{asset('/assets/images/portfolio/grid/item5.jpg')}}" alt="Portfolio Name">
                                    <figcaption>
                                        <a href="{{asset('/assets/images/portfolio/grid/item5.jpg')}}" data-thumb="{{asset('/assets/images/portfolio/grid/item5.jpg')}}" class="zoom-btn"><i class="fa fa-search"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a href="#" title="Portfolio name">Lorem ipsum dolor sit amet, consec tetur adipis</a></h3>
                                    <div class="portfolio-tags">
                                        <a href="#">Design</a>,
                                        <a href="#">Develop</a>
                                    </div><!-- End .portfolio-tags -->
                                </div><!-- End .portfolio-meta -->
                            </div><!-- End .portfolio-item -->

                            <div class="portfolio-item logo-design wordpress">
                                <figure>
                                    <img src="{{asset('/assets/images/portfolio/grid/item6.jpg')}}" alt="Portfolio Name">
                                    <figcaption>
                                        <a href="{{asset('/assets/images/portfolio/grid/item6.jpg')}}" data-thumb="{{asset('/assets/images/portfolio/grid/item6.jpg')}}" class="zoom-btn"><i class="fa fa-search"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a href="#" title="Portfolio name">Lorem ipsum dolor sit amet, consec tetur adipis</a></h3>
                                    <div class="portfolio-tags">
                                        <a href="#">Design</a>,
                                        <a href="#">Develop</a>
                                    </div><!-- End .portfolio-tags -->
                                </div><!-- End .portfolio-meta -->
                            </div><!-- End .portfolio-item -->

                            <div class="portfolio-item video marketing">
                                <figure>
                                    <img src="{{asset('/assets/images/portfolio/grid/item7.jpg')}}" alt="Portfolio Name">
                                    <figcaption>
                                        <a href="{{asset('/assets/images/portfolio/grid/item7.jpg')}}" data-thumb="{{asset('/assets/images/portfolio/grid/item7.jpg')}}" class="zoom-btn"><i class="fa fa-search"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a href="#" title="Portfolio name">Lorem ipsum dolor sit amet, consec tetur adipis</a></h3>
                                    <div class="portfolio-tags">
                                        <a href="#">Design</a>,
                                        <a href="#">Develop</a>
                                    </div><!-- End .portfolio-tags -->
                                </div><!-- End .portfolio-meta -->
                            </div><!-- End .portfolio-item -->

                            <div class="portfolio-item wordpress">
                                <figure>
                                    <img src="{{asset('/assets/images/portfolio/grid/item8.jpg')}}" alt="Portfolio Name">
                                    <figcaption>
                                        <a href="{{asset('/assets/images/portfolio/grid/item8.jpg')}}" data-thumb="{{asset('/assets/images/portfolio/grid/item8.jpg')}}" class="zoom-btn"><i class="fa fa-search"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a href="#" title="Portfolio name">Lorem ipsum dolor sit amet, consec tetur adipis</a></h3>
                                    <div class="portfolio-tags">
                                        <a href="#">Design</a>,
                                        <a href="#">Develop</a>
                                    </div><!-- End .portfolio-tags -->
                                </div><!-- End .portfolio-meta -->
                            </div><!-- End .portfolio-item -->
                        </div><!-- End .portfolio-item-container -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->

                <div class="mb15 mb5-sm"></div><!-- margin -->

                <div class="bg-wrapper pt60 pb50 pt55-sm">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title custom">What customers say</h3>
                                
                                <div class="swiper-container testimonials-box-carousel-small">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-box">
                                                <div class="testimonial-content">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectet adipisig elit. Deserunt illo minus dolores vero nihil sed eaque.</p>
                                                    </blockquote>
                                                </div><!-- End .testimonial-content -->
                                                <div class="testimonial-owner">
                                                    <h5>Jason Richardson<span>Ceo of Boss Inc.</span></h5>
                                                    <figure>
                                                        <img src="{{asset('/assets/images/testimonials/user1.jpg')}}" alt="Name">
                                                    </figure>
                                                </div><!-- End .testimonial-owner -->
                                            </div><!-- End .testimonial-box -->
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="testimonial-box">
                                                <div class="testimonial-content">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectet adipisig elit. Deserunt illo minus dolores vero nihil sed eaque.</p>
                                                    </blockquote>
                                                </div><!-- End .testimonial-content -->
                                                <div class="testimonial-owner">
                                                    <h5>Eon Dean<span>Ceo of Eonythemes</span></h5>
                                                    <figure>
                                                        <img src="{{asset('/assets/images/testimonials/user2.jpg')}}" alt="Name">
                                                    </figure>
                                                </div><!-- End .testimonial-owner -->
                                            </div><!-- End .testimonial-box -->
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="testimonial-box">
                                                <div class="testimonial-content">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectet adipisig elit. Deserunt illo minus dolores vero nihil sed eaque.</p>
                                                    </blockquote>
                                                </div><!-- End .testimonial-content -->
                                                <div class="testimonial-owner">
                                                    <h5>Dean James<span>Ceo of e2themes</span></h5>
                                                    <figure>
                                                        <img src="{{asset('/assets/images/testimonials/user3.jpg')}}" alt="Name">
                                                    </figure>
                                                </div><!-- End .testimonial-owner -->
                                            </div><!-- End .testimonial-box -->
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="testimonial-box">
                                                <div class="testimonial-content">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectet adipisig elit. Deserunt illo minus dolores vero nihil sed eaque.</p>
                                                    </blockquote>
                                                </div><!-- End .testimonial-content -->
                                                <div class="testimonial-owner">
                                                    <h5>Desmond Likes<span>Ceo of Coldplay</span></h5>
                                                    <figure>
                                                        <img src="{{asset('/assets/images/testimonials/user4.jpg')}}" alt="Name">
                                                    </figure>
                                                </div><!-- End .testimonial-owner -->
                                            </div><!-- End .testimonial-box -->
                                        </div><!-- End .swiper-slide -->
                                    </div><!-- End .swiper-wrapper -->

                                    <div class="swiper-pagination"></div><!-- End .swiper-pagination -->
                                </div><!-- End .clients-carousel -->
                            </div><!-- End .col-md-6 -->

                            <div class="clearfix mb25 visible-xs visible-sm"></div><!-- margin -->

                            <div class="col-md-6">
                                <h3 class="title custom">Our Clients</h3>

                                <div class="swiper-container clients-carousel-small">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="#" class="client" title="Client Title">
                                                <img src="{{asset('/assets/images/clients/logo1.png')}}" alt="Company Logo">
                                            </a>
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <a href="#" class="client" title="Client Title">
                                                <img src="{{asset('/assets/images/clients/logo2.png')}}" alt="Company Logo">
                                            </a>
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <a href="#" class="client" title="Client Title">
                                                <img src="{{asset('/assets/images/clients/logo3.png')}}" alt="Company Logo">
                                            </a>
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <a href="#" class="client" title="Client Title">
                                                <img src="{{asset('/assets/images/clients/logo4.png')}}" alt="Company Logo">
                                            </a>
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <a href="#" class="client" title="Client Title">
                                                <img src="{{asset('/assets/images/clients/logo5.png')}}" alt="Company Logo">
                                            </a>
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <a href="#" class="client" title="Client Title">
                                                <img src="{{asset('/assets/images/clients/logo6.png')}}" alt="Company Logo">
                                            </a>
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <a href="#" class="client" title="Client Title">
                                                <img src="{{asset('/assets/images/clients/logo7.png')}}" alt="Company Logo">
                                            </a>
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <a href="#" class="client" title="Client Title">
                                                <img src="{{asset('/assets/images/clients/logo8.png')}}" alt="Company Logo">
                                            </a>
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <a href="#" class="client" title="Client Title">
                                                <img src="{{asset('/assets/images/clients/logo9.png')}}" alt="Company Logo">
                                            </a>
                                        </div><!-- End .swiper-slide -->

                                        <div class="swiper-slide">
                                            <a href="#" class="client" title="Client Title">
                                                <img src="{{asset('/assets/images/clients/logo1.png')}}" alt="Company Logo">
                                            </a>
                                        </div><!-- End .swiper-slide -->
                                    </div><!-- End .swiper-wrapper -->

                                    <div class="swiper-pagination"></div><!-- End .swiper-pagination -->
                                </div><!-- End .clients-carousel -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .bg-wrapper -->

                <div class="mb60 mb50-sm"></div><!-- margin -->

                <div class="container-fluid">
                    <h2 class="title custom text-center">Latest News</h2>

                    <div class="swiper-container latest-news-carousel">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="entry entry-grid">
                                    <div class="entry-media">
                                        <figure>
                                            <a href="single.html"><img src="{{asset('/assets/images/blog/post1.jpg')}}" alt="Post image"></a>
                                        </figure>
                                    </div><!-- End .entry-media -->

                                    <div class="entry-icon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div><!-- End .entry-icon -->

                                    <div class="entry-content-container">
                                        <div class="entry-meta">
                                            <div><i class="fa fa-calendar"></i>17 Aug 2016</div>
                                            <div><a href="#"><i class="fa fa-comments"></i>8 Comment(s)</a></div>
                                        </div><!-- End .entry-meta -->
                                        
                                        <div class="entry-content-wrapper">
                                            <h2 class="entry-title"><a href="single.html">Lorem ipsum dolor sit amet, consec tetur elit.</a></h2>
                                            <div class="entry-content">
                                                <p>Molestiae neque doloremque, voluptatum nostrum praesentium esse fugiat. Deserunt praese ntiumin architecto expedit.</p>
                                                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-content-wrapper -->
                                    </div><!-- End .entry-content-container -->
                                </article>
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <article class="entry entry-grid">
                                    <div class="entry-media">
                                        <figure id="blog-post-gallery" class="carousel slide" data-ride="carousel" data-interval="10000">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="single.html"><img src="{{asset('/assets/images/blog/post2.jpg')}}" alt="Post image"></a>
                                                </div><!-- End .item -->

                                                <div class="item">
                                                    <a href="single.html"><img src="{{asset('/assets/images/blog/post3.jpg')}}" alt="Post image"></a>
                                                </div><!-- End .item -->
                                            </div><!-- End .carousel-inner -->

                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#blog-post-gallery" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                            <a class="right carousel-control" href="#blog-post-gallery" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                                        </figure><!-- End .carousel -->
                                    </div><!-- End .entry-media -->
                                    
                                    <div class="entry-icon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div><!-- End .entry-icon -->

                                    <div class="entry-content-container">
                                        <div class="entry-meta">
                                            <div><i class="fa fa-calendar"></i>17 Aug 2016</div>
                                            <div><a href="#"><i class="fa fa-comments"></i>8 Comment(s)</a></div>
                                        </div><!-- End .entry-meta -->
                                        
                                        <div class="entry-content-wrapper">
                                            <h2 class="entry-title"><a href="single.html">Lorem ipsum dolor sit amet, consec tetur elit.</a></h2>
                                            <div class="entry-content">
                                                <p>Molestiae neque doloremque, voluptatum nostrum praesentium esse fugiat. Deserunt praese ntiumin architecto expedit.</p>
                                                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-content-wrapper -->
                                    </div><!-- End .entry-content-container -->
                                </article>
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <article class="entry entry-grid">
                                    <div class="entry-media">
                                        <figure>
                                            <a href="single.html"><img src="{{asset('/assets/images/blog/post4.jpg')}}" alt="Post image"></a>
                                        </figure>
                                    </div><!-- End .entry-media -->

                                    <div class="entry-icon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div><!-- End .entry-icon -->

                                    <div class="entry-content-container">
                                        <div class="entry-meta">
                                            <div><i class="fa fa-calendar"></i>17 Aug 2016</div>
                                            <div><a href="#"><i class="fa fa-comments"></i>8 Comment(s)</a></div>
                                        </div><!-- End .entry-meta -->
                                        
                                        <div class="entry-content-wrapper">
                                            <h2 class="entry-title"><a href="single.html">Lorem ipsum dolor sit amet, consec tetur elit.</a></h2>
                                            <div class="entry-content">
                                                <p>Molestiae neque doloremque, voluptatum nostrum praesentium esse fugiat. Deserunt praese ntiumin architecto expedit.</p>
                                                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-content-wrapper -->
                                    </div><!-- End .entry-content-container -->
                                </article>
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <article class="entry entry-grid">
                                    <div class="entry-media">
                                        <figure>
                                            <a href="single.html"><img src="{{asset('/assets/images/blog/post5.jpg')}}" alt="Post image"></a>
                                        </figure>
                                    </div><!-- End .entry-media -->

                                    <div class="entry-icon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div><!-- End .entry-icon -->

                                    <div class="entry-content-container">
                                        <div class="entry-meta">
                                            <div><i class="fa fa-calendar"></i>17 Aug 2016</div>
                                            <div><a href="#"><i class="fa fa-comments"></i>8 Comment(s)</a></div>
                                        </div><!-- End .entry-meta -->
                                        
                                        <div class="entry-content-wrapper">
                                            <h2 class="entry-title"><a href="single.html">Lorem ipsum dolor sit amet, consec tetur elit.</a></h2>
                                            <div class="entry-content">
                                                <p>Molestiae neque doloremque, voluptatum nostrum praesentium esse fugiat. Deserunt praese ntiumin architecto expedit.</p>
                                                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-content-wrapper -->
                                    </div><!-- End .entry-content-container -->
                                </article>
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <article class="entry entry-grid">
                                    <div class="entry-media">
                                        <figure>
                                            <a href="single.html"><img src="{{asset('/assets/images/blog/post6.jpg')}}" alt="Post image"></a>
                                        </figure>
                                    </div><!-- End .entry-media -->

                                    <div class="entry-icon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div><!-- End .entry-icon -->

                                    <div class="entry-content-container">
                                        <div class="entry-meta">
                                            <div><i class="fa fa-calendar"></i>17 Aug 2016</div>
                                            <div><a href="#"><i class="fa fa-comments"></i>8 Comment(s)</a></div>
                                        </div><!-- End .entry-meta -->
                                        
                                        <div class="entry-content-wrapper">
                                            <h2 class="entry-title"><a href="single.html">Lorem ipsum dolor sit amet, consec tetur elit.</a></h2>
                                            <div class="entry-content">
                                                <p>Molestiae neque doloremque, voluptatum nostrum praesentium esse fugiat. Deserunt praese ntiumin architecto expedit.</p>
                                                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-content-wrapper -->
                                    </div><!-- End .entry-content-container -->
                                </article>
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <article class="entry entry-grid">
                                    <div class="entry-media">
                                        <figure>
                                            <a href="single.html"><img src="{{asset('/images/blog/post7.jpg')}}" alt="Post image"></a>
                                        </figure>
                                    </div><!-- End .entry-media -->

                                    <div class="entry-icon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div><!-- End .entry-icon -->

                                    <div class="entry-content-container">
                                        <div class="entry-meta">
                                            <div><i class="fa fa-calendar"></i>17 Aug 2016</div>
                                            <div><a href="#"><i class="fa fa-comments"></i>8 Comment(s)</a></div>
                                        </div><!-- End .entry-meta -->
                                        
                                        <div class="entry-content-wrapper">
                                            <h2 class="entry-title"><a href="single.html">Lorem ipsum dolor sit amet, consec tetur elit.</a></h2>
                                            <div class="entry-content">
                                                <p>Molestiae neque doloremque, voluptatum nostrum praesentium esse fugiat. Deserunt praese ntiumin architecto expedit.</p>
                                                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-content-wrapper -->
                                    </div><!-- End .entry-content-container -->
                                </article>
                            </div><!-- End .swiper-slide -->
                        </div><!-- End .swiper-wrapper -->

                        <div class="swiper-pagination"></div><!-- End .swiper-pagination -->
                    </div><!-- End .swiper-container -->
                </div><!-- End .container-fluid -->

                <div class="mb50"></div><!-- margin -->

                <div class="callout custom mb0">
                    <div class="container-fluid">
                        <div class="left">
                            <h3 class="callout-title">What are you waiting for? Do not wait another second.</h3>
                            <h4 class="callout-subtitle">Get this awesome template just for $15 now with lifetime support and update.</h4>
                        </div><!-- End .left -->
                        <div class="right">
                            <a href="#" class="btn btn-custom2 min-width">Get in touch</a>
                        </div><!-- End .right -->
                    </div><!-- End .h -->
                </div><!-- End .callout -->
            </div><!-- End .main -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-xs-4 col-xss-12">
                                    <div class="widget">
                                        <h4 class="widget-title">Company</h4>
                                        <ul class="fa-ul">
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>About us</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Features</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Portfolio</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Latest News</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-xs-4 -->
                                <div class="col-xs-4 col-xss-12">
                                    <div class="widget">
                                        <h4 class="widget-title">Policy</h4>
                                        <ul class="fa-ul">
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Privacy</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Cookies</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Trademarks</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Terms of use</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-xs-4 -->
                                <div class="col-xs-4 col-xss-12">
                                    <div class="widget">
                                        <h4 class="widget-title">Learn</h4>
                                        <ul class="fa-ul">
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Order Tracking</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Locations</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Return Policy</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Sales &amp; Support</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-xs-4 -->
                            </div><!-- End .row -->

                            <div class="row">
                                <div class="col-xs-4 col-xss-12">
                                    <div class="widget">
                                        <h4 class="widget-title">About</h4>
                                        <ul class="fa-ul">
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Stores</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Investors</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Latest Apps</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Mobile</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-xs-4 -->
                                <div class="col-xs-4 col-xss-12">
                                    <div class="widget">
                                        <h4 class="widget-title">Programs</h4>
                                        <ul class="fa-ul">
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Programs</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Financing</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Order Status</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Workshops</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-xs-xs4 -->
                                <div class="col-xs-4 col-xss-12">
                                    <div class="widget">
                                        <h4 class="widget-title">Useful Links</h4>
                                        <ul class="fa-ul">
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Manage</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Our Partners</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Careers</a></li>
                                            <li><a href="#"><i class="fa-li fa fa-angle-right"></i>Sitemap</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-xs-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-md-8 -->
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="widget about-widget">
                                        <img src="{{asset('/assets/images/footer-logo.png')}}" alt="Bold Logo" class="footer-logo">
                                        <p>We create themes and templates with bootstrap. We work with passion to provide you better services.</p>
                                        <ul class="about-list">
                                            <li><span>Visit Us:</span> 221B Baker St, Marylebone, London UK</li>
                                            <li><span>Call Us:</span> +1 (355) 800 08 80 - +1 (450) 900 09 90</li>
                                            <li><span>Email:</span> <a href="mailto:#">madeup@gmail.com</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-12 -->

                                <div class="col-md-12 col-sm-6">
                                    <div class="widget newsletter-widget">
                                        <h4 class="widget-title">Subscribe</h4>
                                        <form action="#">
                                            <input type="email" class="form-control input-sm" placeholder="Join our newsletter" required>
                                            <div class="clearfix">
                                                <input type="submit" class="btn btn-sm" value="Subscribe">
                                                <p>* We won't share it with third party.</p>
                                            </div><!-- End .clearfix -->
                                        </form>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-12 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->

                <div class="footer-bottom">
                    <div class="container-fluid">
                        <div class="footer-left">
                            <div class="social-icons">
                                <label>Find Us:</label>
                                <a href="#" class="social-icon" title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-icon" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-icon" title="Github"><i class="fa fa-github"></i></a>
                                <a href="#" class="social-icon" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="social-icon" title="Tumblr"><i class="fa fa-tumblr"></i></a>
                                <a href="#" class="social-icon" title="Flickr"><i class="fa fa-flickr"></i></a>
                                <a href="#" class="social-icon" title="Snapchat"><i class="fa fa-snapchat"></i></a>
                                <a href="#" class="social-icon" title="Vine"><i class="fa fa-vine"></i></a>
                            </div><!-- End .social-icons -->
                        </div><!-- End .footer-left -->

                        <div class="footer-right">
                            <ul class="footer-menu">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">FaQS</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                            <p class="copyright"><strong>Bold</strong> multipurpose template - All rights reserved - 2016 &copy; Made by <a href="http://eonythemes.com" target="_blank" title="eonythemes">eonythemes</a>.</p>
                        </div><!-- End .footer-right -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .footer-bottom -->
            </footer><!-- End .footer -->
        </div><!-- End #wrapper -->
        <a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>

        <!-- End -->
        <script src="{{asset('/assets/js/plugins.min.js')}}"></script>
        <script src="{{asset('/assets/js/main.js')}}"></script>

        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="{{asset('/assets/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
        (Load Extensions only on Local File Systems !  
        The following part can be removed on Server for On Demand Loading) -->  
        <script type="text/javascript" src="{{asset('/assets/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/assets/js/extensions/revolution.extension.video.min.js')}}"></script>

        <script type="text/javascript">
            (function() {
                "use strict";
             
                $(document).ready(function() {
                    var revapi;
                    if($("#rev_slider").revolution == undefined){
                        revslider_showDoubleJqueryError("#rev_slider");
                    }else{
                        revapi = $("#rev_slider").show().revolution({
                            sliderType:"standard",
                            jsFileLocation:"assets/js/",
                            sliderLayout:"auto",
                            dottedOverlay:"none",
                            delay:10000,
                            navigation: {
                                keyboardNavigation: "on",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "hades",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_under: 992,
                                    hide_onleave: false,
                                    tmp: '<div class="tp-arr-allwrapper"><div class="tp-arr-imgholder"></div></div>',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_under: 480,
                                    style: "hades",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 25,
                                    space: 8,
                                    tmp: '<span class="tp-bullet-image"></span>'
                                }
                            },
                            viewPort: {
                                enable:true,
                                outof:"pause",
                                visible_area:"80%"
                            },
                            responsiveLevels:[1200,992,768,480],
                            gridwidth:[1170,970,750,480],
                            gridheight:[600,540,480,360],
                            autoHeight:"off",
                            lazyType:"single",
                            shadow:0,
                            spinner:"off",
                            stopLoop:"off",
                            stopAfterLoops:-1,
                            stopAtSlide:-1,
                            shuffle:"off",
                            hideThumbsOnMobile:"off",
                            hideSliderAtLimit:0,
                            hideCaptionAtLimit:0,
                            hideAllCaptionAtLilmit:0,
                            debugMode:false
                        });

                    }
                });

            })();
        </script>

    </body>
</html>
