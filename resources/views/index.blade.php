<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Soluises</title>
        <meta name="description" content="O Portal Soluises é um espaço virtual que tem como objetivo ser um hub de iniciativas que visam o crescimento e evolução do Estado do Maranhão.">

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

        {{-- HEADER / MENU --}}
        <div id="page-loader">
            <div class="sk-double-bounce">
                <div class="sk-child sk-double-bounce1"></div><!-- End .sk-child -->
                <div class="sk-child sk-double-bounce2"></div><!-- End .sk-child -->
            </div><!-- End .sk-double-bounce -->
        </div><!-- End #page-loader -->

        <div id="wrapper">
            <header class="header header3 sticky-header animated-dropdown ltr-dropdown">
                <div class="header-top">
                    <div class="container-fluid">
                        <div class="dropdown header-dropdown pull-right">
                            <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Linguagens</a>

                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Turkish</a></li>
                                <li><a href="#">Chinese</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div><!-- End .header-dropdown -->

                        <ul class="top-menu visible-lg pull-left">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Sobre</a></li>
                            <li><a href="#">Explore</a></li>
                            <li><a href="#">Apoiadores</a></li>
                            <li><a href="#">Investidores</a></li>
                            <li><a href="#">Mantenedores</a></li>
                            <li><a href="#">FAQ YOU!</a></li>
                            <li><a href="#">Disclaimer</a></li>
                            <li><a href="#">Mais</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>

                        <div class="top-links pull-right">
                            <a href="#">Login</a>
                            <a href="#">Registrar</a>
                        </div><!-- End .top-links -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .header-top -->

                <div class="header-inner">
                    <div class="container-fluid">
                        <div class="header-left">
                            <div class="social-icons hidden-xs pull-left">
                                <a href="#" class="social-icon" title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-icon" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-icon" title="Github"><i class="fa fa-github"></i></a>
                                <a href="#" class="social-icon" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="social-icon" title="Instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="social-icon" title="Youtube"><i class="fa fa-youtube"></i></a>
                            </div><!-- End .social-icons -->
                        </div><!-- End .header-left -->

                        <div class="header-center">
                            <a href="index.html" class="site-logo" title="Soluises - Um Hub do Maranhão">
                                <img src="assets/images/logo.png" data-rjs="3" alt="Bold Logo">
                                <span class="sr-only">Soluises</span>
                            </a>
                        </div><!-- End .header-center -->

                        <div class="header-right">
                            <div class="dropdown header-dropdown cart-dropdown pull-right">
                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>
                                        <i class="fa fa-shopping-basket"></i>
                                    </span>
                                </a>
                            </div><!-- End .cartdropdown -->
                        </div><!-- End .header-right -->

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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home<span></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sobre<span></span></a>
                                </li>
                                <li class="dropdown megamenu-container">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Explore<span></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Apoiadores<span></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Investidores<span></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mantenedores<span></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">FAQ YOU!<span></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Disclaimer<span></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mais<span></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contato<span></span></a>
                                </li>
                                <li>
                                    <a href="#" class="header-search-toggle" role="button" title="Abrir pesquisa"><span class="visible-inline-xs">Pesquisar</span><i class="fa fa-search"></i></a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .header-bottom -->
            </header><!-- End .header -->

            <div class="header-search-form">
                <a href="#" class="header-search-toggle" title="Close"><i class="fa fa-times"></i></a>
                <form action="#">
                    <input type="search" class="form-control" placeholder="Pesquise aqui" required>
                </form>
            </div><!-- End .header-search-form -->
            {{-- END HEADER / MENU --}}

            {{-- SLIDER --}}
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
                                            <a href="single.html"><img src="{{asset('/assets/images/blog/post7.jpg')}}" alt="Post image"></a>
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
