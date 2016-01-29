<!doctype html>
<!--[if IE 7]>    <html class="ie7" > <![endif]-->
<!--[if IE 8]>    <html class="ie8" > <![endif]-->
<!--[if IE 9]>    <html class="ie9" > <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-US"> <!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <!-- Title -->
    <title>Nam Thanh transport</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="images/favicon.png.png" />
    <!-- Style Sheet-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,vietnamese' rel='stylesheet' type='text/css'>  
    <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"/>
    <link rel="stylesheet" href="js/flexslider/flexslider.css"/>                
    <link rel="stylesheet" href="css/jquery.ui.all.css"/>                
    <link rel="stylesheet" href="css/jquery.ui.theme.css"/> 
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/media-queries.css"/>                    
    <link rel="stylesheet" href="css/custom.css"/>
</head>
<body>
    <!-- Starting Website Wrapper -->
    <div id="wrapper">
        <!-- Starting Header of the website -->
        <header id="header">

            <!-- Website Logo Place -->
            <div id="logo-container">
                <a href="{{route('root')}}" class="logo"  title="Site Logo">
                    <img src="images/logo.png" alt="Health Press">
                    <span class="tagline">Đồng hành cùng bạn</span>
                </a>
            </div>

            <ul class="social-nav">                                        
                <li class="facebook"><a target="_blank" href="#"></a></li>
                <li class="twitter"><a target="_blank" href="#"></a></li>
                <li class="skype"><a target="_blank" href="#"></a></li>                                                                 
                <li class="flickr"><a target="_blank" href="#"></a></li>                                                                    
                <li class="google"><a target="_blank" href="#"></a></li>                                                                
                <li class="linkedin"><a target="_blank" href="#"></a></li>                                                          
                <li class="rss"><a target="_blank" href="#"></a></li>
                <li class="phone"><span>04.38.51.52.89</span></li>
            </ul>


            <nav class="main-nav clearfix">

                <!-- MAIN NAVIGATION -->
                <div class="menu-div">
                    <ul>
                        <li>
                            <a href="{{route('root')}}">Trang chủ</a>                            
                        </li>
                        <li>
                            <a href="{{route('intro')}}">Công ty</a>
                        </li>
                        <li>
                            <a href="{{route('duadon')}}">Dịch vụ</a>
                            <ul>
                                <li><a href="{{route('duadon')}}">Xe đưa đón cán bộ, học sinh sinh viên</a></li>
                                <li><a href="{{route('duadon')}}">Đón tiếp sân bay</a></li>
                                <li><a href="{{route('duadon')}}">Phục vụ khách thương mại</a></li>
                                <li><a href="{{route('duadon')}}">Phục vụ lữ hành</a></li>
                                <li><a href="{{route('duadon')}}">Phục vụ đón tiếp sân bay</a></li>
                                <li><a href="{{route('duadon')}}">Phục vụ lễ hội</a></li>
                                <li><a href="{{route('duadon')}}">Phục vụ studio cưới</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('gallery')}}">Loại xe</a>
                        </li>
                        <li>
                            <a href="{{route('commingsoon')}}">Báo giá</a>
                            <ul>
                                <li><a href="{{route('commingsoon')}}">2 Columns Gallery</a></li>
                                <li><a href="{{route('commingsoon')}}">3 Columns Gallery</a></li>
                                <li><a href="{{route('commingsoon')}}">4 Columns Gallery</a></li> 
                                <li><a href="{{route('commingsoon')}}">Gallery Single</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Liên hệ</a>                            
                        </li>
                        <li>
                            <a href="{{route('commingsoon')}}">Tin tức</a>                            
                        </li>
                        <li><a href="{{route('commingsoon')}}">Đặt xe</a></li>
                    </ul>
                </div>

                <!-- GLOBAL SEARCH -->
                <form method="get" action="#" id="topsearch">
                    <p>
                        <input type="text" placeholder="Search" name="s" id="tsearch">
                        <input type="submit" id="topsubmit" value="">
                    </p>
                </form>
            </nav>
        </header><!-- ending of header of the website -->

        @section('sidebar')
        @show
        @yield('content')        
        <div id="footer-wrap">

            <footer class="clearfix">

                <section class="footer-widget">
                    <section class="widget">                
                        <h3>
                            <a href="index-2.html"><img src="images/footer-logo.png" alt="logo"></a>
                        </h3>
                        <p>Công ty TNHH vận tải Nam Thanh được thành lập vào ngày 30 tháng 7 năm 2004</p>
                            <a href="#" class="readmore">Read more</a>
                        </section>                                                  
                    </section>

                    <section class="footer-widget">
                        <section class="widget">
                            <h3 class="title">Liên kết websites</h3>
                            <div>
                                <ul>
                                    <li ><a href="index-2.html">Home</a></li>
                                    <li ><a href="blog.html">Blog</a></li>
                                    <li ><a href="services-four-columns.html">Services</a></li>
                                    <li ><a href="contact.html">Contact Us</a></li>                                               
                                </ul>
                            </div>
                        </section>                                      
                    </section>

                    <section class="footer-widget">
                        <section class="widget">
                            <h3 class="title">Recent Posts</h3>
                            <div>
                                <ul>
                                    <li ><a href="blog.html">Tuyển dụng lái xe</a></li>                              
                                </div>
                            </section>
                        </section>

                        <section class="footer-widget">
                            <section class="widget">
                                <h3 class="title">Địa chỉ</h3>   
                                <p>A3 Phòng 106 tập thể Nam Đồng, quận Đống Đa, thành phố Hà Nội.</p>
                                <p><span>Số điện thoại: </span>04.38.51.52.89</p>
                                <p><span>Email: </span> <a href="mailto:namthanhvt2005@yahoo.com.vn">namthanhvt2005@yahoo.com.vn</a></p>               
                            </section>                                     
                        </section>

                    </footer><!-- end of #bottom -->
                </div><!-- footer-wrap -->
                <div id="footer-bottom-wrapper">
                    <div id="footer-bottom">
                        <p class="copyrights">© Copyright 2012. All Rights Reserved by NamThanh Transport.</p>

                    </div><!-- footer-bottom -->
                </div>

            </div><!-- End of Wrapper Div -->

            <script src="js/jquery-1.8.2.min.js"></script>
            <script src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/jquery.form.js"></script>
            <script src="js/jquery.ui.core.min.js"></script>
            <script src="js/jquery.ui.datepicker.min.js"></script>
            <script src="js/jquery.cycle.lite.js"></script>
            <script src="js/jquery.easing.1.3.js"></script>
            <script src="js/flexslider/jquery.flexslider-min.js"></script>
            <script src="js/jquery.isotope.min.js"></script>
            <script src="js/custom.js"></script>
            <a href="#top" id="scroll-top"></a>
        </body>
        </html>