<!DOCTYPE html>
<html>
<head>
    <title>Thiết bị y tế Bình An</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dropdown_hover.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/text.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/home-slider.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/form-login.css">

    <script type='text/javascript' src='https://www.izwebz.com/wp-includes/js/jquery/jquery.js?ver=1.11.0'></script>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/form.js"></script>
    

    <script src="js/jquery-1.11.3.min.js"></script>
    <link rel="shortcut icon" href="images/Short_cut_binh_an copy.png">
    
    <script type="text/javascript">
        jQuery(document).ready(function($) {
          var TopFixMenu = $("#fixNav");
            $(window).on('scroll', function(){
                if( $(window).scrollTop() > 200 ){
                    $('#fixNav').addClass('navbar-fixed-top');
                } else {
                    $('#fixNav').removeClass('navbar-fixed-top');
                }
            });
        })
    </script>
    

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="position: relative;">
    <wrapper>
        <!--Form login-->
        <div id="id01" class="modal" style="z-index: 999999;">
            <form class="modal-content animate" action="" method="post">
                <div class="imgcontainer" style="opacity: 0.6;">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <label><b>Tên tài khoản</b></label><span class="error_form" id="uname_error"></span>
                            <input type="text" name="uname" id="form_uname" placeholder="Điền tên tài khoản của bạn" required="required">

                            <label><b>Mật khẩu</b></label><span class="error_form" id="psw_error"></span>
                            <input type="password" name="psw" id="form_psw" placeholder="Điền mật khẩu của bạn" required="required">

                            <button type="submit">Đăng nhập</button>
                            <input type="checkbox" checked="checked">Nhớ đăng nhập
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                                Thoát
                            </button>
                            <span class="psw">
                                Quên <a href="#">mật khẩu ?</a>
                            </span>
                            <span>
                                Chưa có tài khoản?<a href="register.html">Đăng ký</a>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            var modal = document.getElementById('id01');
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
        <!--End-Form login-->
        <!-- preloader -->
        <div class="shym-preloader">
            <div id="spinner">
                <img src="images/preloader.gif" alt="">
            </div>
        </div>
        <!-- Header -->
        <header id="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget pull-left">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="widget">
                                <ul class="pull-right">
                                    <li class="">
                                        <i class="fa fa-phone"></i>
                                        <a class="text-white" href="#">098-280-7885</a>
                                    </li>
                                    <li class="">
                                        <i class="fa fa-envelope"></i>
                                        <a class="text-white" href="#">yorkun_vpt@yahoo.com.vn</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <a class="text-white" id="login" onclick="document.getElementById('id01').style.display='block'"  style="width: auto; cursor: pointer;">Đăng nhập</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#">
                                <img src="images/Logo_binhan.png">
                            </a>
                        </div>
                        <div class="col-md-9">
                            <div class="pull-left">
                                <h1 style="font-family:FontAwesome; font-weight: bold; font-size: 70px;">THIẾT BỊ Y TẾ BÌNH AN</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav" id="fixNav">    
                <div class="navbar navbar-default">       
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>         
                            </button>
                            <!-- Logo -->
                            <a href="index.html">
                                <img style="width: 50px; height: 50px;" src="images/Short_cut_binh_an copy.png" />
                            </a>
                            <!-- End Logo -->
                        </div>
                        <nav class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="index.html">
                                        Trang chủ
                                    </a>
                                </li>
                                <li>
                                    <a href="sanpham.html">
                                        Sản phẩm
                                    </a>
                                </li>
                                <li>
                                    <a href="dichvu.html">
                                        Dịch vụ
                                    </a>
                                </li>
                                <li>
                                    <a href="#partner">
                                        Đối tác
                                    </a>
                                </li> 
                                <li>
                                    <a href="#contact">
                                        Liên hệ
                                    </a>
                                </li> 
                            </ul>
                            <form class="navbar-form navbar-right">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Start main-content -->
        <content>
            <!-- Slider Revolution Start -->
            <div class="no-padding container-fluid" id="home">
                <div class="row">
                    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active" style="background-image:url(images/slider/bg1.jpg);">
                                <div class="caption">
                                    <h1 class="animated fadeInLeftBig">Wellcome to <span class="text-blue">Bình An</span> </h1>
                                    <p class="animated fadeInRightBig">Medical Equipment</p>
                                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Chi tiết</a>
                                </div>
                            </div>
                            <div class="item " style="background-image: url(images/slider/bg2.jpg);">
                                <div class="caption">
                                    <h1 class="animated fadeInLeftBig">Wellcome to <span class="text-blue">Binh An</span> </h1>
                                    <p class="animated fadeInRightBig">Medical Equipment</p>
                                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Chi tiết</a>
                                </div>
                            </div>
                            <div class="item " style="background-image: url(images/slider/bg3.jpg);">
                                <div class="caption">
                                    <h1 class="animated fadeInLeftBig">Wellcome to <span class="text-blue">Binh An</span> </h1>
                                    <p class="animated fadeInRightBig">Medical Equipment</p>
                                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                        <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
            <!-- Slider Revolution End -->
            <!--SP_NOI_BAT STARTS HERE -->
    
            <section class='shym-user container-fluid' id="sanpham">
                <div class='container'>
                    <div class='shym-user-title' >
                        <h3 class='shym-text-center shym-text-uppercase'>Sản phẩm nổi bật</h3>
                        <hr>
                        <p class='shym-text-center'>It is a long established fact that a reader will be distracted by the readable content.</p>
                    </div>
                  
                    <!--======= SLIDER PART =========-->
                    <div id="owl-team"> 
                    
                        <!--======= SLIDER PART =========-->
                        <div class="team">
                            <div class="img"> <img class="img-responsive" src="images/best-pictures/team-1.png" alt="" >
                                <div class="over">
                                       <i class="fa fa-eye"></i>
                                    <div class="des"> <a href="#">
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                                      
                                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p></a>>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Lorum Ipsum</a></h4>
                                <p>Price:25$</p>
                                <hr>
                            </div>
                        </div>
                        <!--======= SLIDER PART =========-->
                        <div class="team">
                            <div class="img"> <img class="img-responsive" src="images/best-pictures/team-2.png" alt="" >
                                <div class="over">
                                    <i class="fa fa-eye"></i>
                                    <div class="des"> <a href="#">
                                  
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                                      
                                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Lorum Ipsum</a></h4>
                                <p>Price:25$</p>
                                <hr>
                            </div>
                        </div>
                        
                        <!--======= SLIDER PART =========-->
                        <div class="team">
                            <div class="img"> <img class="img-responsive" src="images/best-pictures/team-3.png" alt="" >
                                <div class="over">
                                       <i class="fa fa-eye"></i>
                                    <div class="des"> <a href="#">
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                                      
                                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Lorum Ipsum</a></h4>
                                <p>Price:25$</p>
                                <hr>
                            </div>
                        </div>
                        
                        <!--======= SLIDER PART =========-->
                        <div class="team">
                            <div class="img"> <img class="img-responsive" src="images/best-pictures/team-4.png" alt="" >
                                <div class="over">
                                       <i class="fa fa-eye"></i>
                                    <div class="des"> <a href="#">
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                                      
                                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Lorum Ipsum</a></h4>
                                <p>Price:25$</p>
                                <hr>
                            </div>
                        </div>
                        
                        
                        
                        <!--======= SLIDER PART =========-->
                        <div class="team">
                            <div class="img"> <img class="img-responsive" src="images/best-pictures/team-5.png" alt="" >
                                <div class="over">
                                       <i class="fa fa-eye"></i>
                                    <div class="des"> <a href="#">
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                                      
                                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Lorum Ipsu</a></h4>
                                <p>Price:25$</p>
                                <hr>
                            </div>
                        </div>
                        
                        <!--======= SLIDER PART =========-->
                        <div class="team">
                            <div class="img"> <img class="img-responsive" src="images/best-pictures/team-6.png" alt="" >
                                <div class="over">
                                       <i class="fa fa-eye"></i>
                                    <div class="des"> <a href="#">
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                                      
                                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Lorum Ipsum</a></h4>
                                <p>Price:25$</p>
                                <hr>
                            </div>
                        </div>
                        <!--======= SLIDER PART =========-->
                        <div class="team">
                            <div class="img"> <img class="img-responsive" src="images/best-pictures/team-2.png" alt="" >
                                <div class="over">
                                       <i class="fa fa-eye"></i>
                                    <div class="des"> <a href="#">
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                                      
                                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Lorum Ipsum</a></h4>
                                <p>Price:25$</p>
                                <hr>
                            </div>
                        </div>
                        <!--======= SLIDER PART =========-->
                        <div class="team">
                            <div class="img"> <img class="img-responsive" src="images/best-pictures/team-3.png" alt="" >
                                <div class="over">
                                       <i class="fa fa-eye"></i>
                                    <div class="des"> <a href="#">
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                                      
                                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Lorum Ipsum</a></h4>
                                <p>Price:25$</p>
                                <hr>
                            </div>
                        </div>
                        <!--======= SLIDER PART =========-->
                        <div class="team">
                            <div class="img"> <img class="img-responsive" src="images/best-pictures/team-5.png" alt="" >
                                <div class="over">
                                       <i class="fa fa-eye"></i>
                                    <div class="des"> <a href="#">
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.
                                      
                                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="#">Lorum Ipsum</a></h4>
                                <p>Price:25$</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--SP_NOI_BAT ENDS HERE -->
            
            <section id="portfolio">
                <div class="container"  id="dichvu">
                    <div class="row">
                        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>Dịch vụ</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
                        </div>
                    </div> 
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="folio-image">
                                  <img class="img-responsive img-thumbnail" src="images/portfolio/spn-1.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="overlay-text">
                                            <div class="folio-info">
                                                <h3>Medtronic Lifepak Physio-Control</h3>
                                                <p>The products of our store have many different advantages. First of them is the reliability and durability, you can rely on our goods. </p>
                                            </div>
                                            <div class="folio-overview">
                                                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-info"></i></a></span>
                                                <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-shopping-cart"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>              
                        <div class="col-sm-3">
                            <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
                                <div class="folio-image">
                                    <img class="img-responsive img-thumbnail" src="images/portfolio/spn-2.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="overlay-text">
                                            <div class="folio-info">
                                                <h3>Multiparameter Patient Monitor BW3A</h3>
                                                <p>First of them is the reliability and durability, you can rely on our goods. So as you understand you can buy only premium quality goods at a fair price in our store.</p>
                                            </div>
                                            <div class="folio-overview">
                                                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-info"></i></a></span>
                                                <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-shopping-cart"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
                                <div class="folio-image">
                                    <img class="img-responsive img-thumbnail" src="images/portfolio/spn-3.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="overlay-text">
                                            <div class="folio-info">
                                                <h3>Navigator rolling walker </h3>
                                                <p>So as you understand you can buy only premium quality goods at a fair price in our store. The goods of our store are universal because they can satisfy all clients with different demands. </p>
                                            </div>
                                            <div class="folio-overview">
                                                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-info"></i></a></span>
                                                <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-shopping-cart"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <div class="folio-image">
                                    <img class="img-responsive img-thumbnail" src="images/portfolio/spn-4.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="overlay-text">
                                            <div class="folio-info">
                                                <h3>Omron Mit Elite Plus Arm Cuff...</h3>
                                                <p>Design, Photography</p>
                                            </div>
                                            <div class="folio-overview">
                                                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-info"></i></a></span>
                                                <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-shopping-cart"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
                                <div class="folio-image">
                                    <img class="img-responsive img-thumbnail" src="images/portfolio/spn-5.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="overlay-text">
                                            <div class="folio-info">
                                                <h3>Performa Trak Face Mask by...</h3>
                                                <p>Design, Photography</p>
                                            </div>
                                            <div class="folio-overview">
                                                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-info"></i></a></span>
                                                <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-shopping-cart"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-3">
                            <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
                                <div class="folio-image">
                                    <img class="img-responsive img-thumbnail" src="images/portfolio/spn-6.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="overlay-text">
                                            <div class="folio-info">
                                                <h3>Edan VE-H100B Pulse Oximeter</h3>
                                                <p>Design, Photography</p>
                                            </div>
                                            <div class="folio-overview">
                                                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-info"></i></a></span>
                                                <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-shopping-cart"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                                <div class="folio-image">
                                    <img class="img-responsive img-thumbnail" src="images/portfolio/spn-1.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="overlay-text">
                                            <div class="folio-info">
                                                <h3>Invacare Deluxe Automatic...</h3>
                                                <p>Design, Photography</p>
                                            </div>
                                            <div class="folio-overview">
                                                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-info"></i></a></span>
                                                <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-shopping-cart"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
                                <div class="folio-image">
                                    <img class="img-responsive img-thumbnail" src="images/portfolio/spn-2.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <div class="overlay-text">
                                            <div class="folio-info">
                                                <h3>Services Medical Kits</h3>
                                                <p>Design, Photography</p>
                                            </div>
                                            <div class="folio-overview">
                                                <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-info"></i></a></span>
                                                <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-shopping-cart"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="portfolio-single-wrap">
                    <div id="portfolio-single">
                    </div>
                </div><!-- /#portfolio-single-wrap -->
            </section><!--/#portfolio-->
            <section id="partner">
                <div>
                    <!--<a href="#partner-area" class="partner-left-control" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#partner-area" class="partner-right-control" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="shym-text-title">
                                    <h2 class='shym-text-center shym-text-uppercase text-black' style="">Đối tác liên kết</h2>
                                    <hr>
                                </div>
                                <div id="partner-area" style="background-color: rgba(0,0,0,.7); height: 
                                150px" class="area slide" data-ride="area">
                                    <div class="partner-inner">
                                        <ul style="padding-top: 40px;" >
                                            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="5" direction="right" behavior="scroll">
                                            <li>
                                                <a href="#">
                                                    <img src="images/partner/1.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/partner/2.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/partner/3.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/partner/4.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/partner/5.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/partner/6.jpg">
                                                </a>
                                            </li>
                                            </marquee>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" >
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="text-center text-white">
                                <h2>
                                    Liên hệ với chúng tôi
                                </h2>
                                <p>
                                    Hãy liên hệ trực tiếp với chúng tôi để được hỗ trợ tốt nhất
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <form id="feedback-form">
                                    <div class="row">
                                        <div class="col-md-6  wow fadeInRightBig">
                                            <input type="text" name="name" class="formcontrol" placeholder="Họ tên" style="width: 100%;">
                                        </div>
                                        <div class="col-md-6  wow fadeInLeftBig" >
                                            <input type="text" name="Email" class="formcontrol" placeholder="Địa chỉ Email" style="width: 100%;">
                                        </div>
                                    </div>
                                    <div class="form-group  wow fadeInUpBig">
                                        <input type="text" name="subject" class="formcontrol" placeholder="Tiêu đề" style="width: 100%; margin-top:10px; ">
                                    </div>
                                    <div class="form-group  wow fadeInUp">
                                        <textarea name="message" id="message" class="formcontrol" placeholder="Phản hồi của bạn"></textarea>
                                    </div>
                                    <div class="form-group  wow fadeInDownBig">
                                        <button type="submit" class="btn-submit">Gửi</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <p></p>
                                    <ul class="address">
                                        <li>
                                            <i class="fa fa-map-marker">
                                                <span>
                                                    Địa chỉ:
                                                </span>
                                                Số 30 ABC Cầu Giấy, Hà Nội
                                            </i>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone">
                                                <span>
                                                    Điện thoại:
                                                </span>
                                                04 123 4567
                                            </i>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope">
                                                <span>
                                                    Email:
                                                </span>
                                                <a href="#">
                                                    Supprt@gmail.com
                                                </a>
                                            </i>
                                        </li>
                                        <li>
                                            <i class="fa fa-globe">
                                                <span>
                                                    Website:
                                                </span>
                                                <a href="#">
                                                    www.website.com
                                                </a>
                                            </i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </content>
        <!-- End main-content -->
        <!-- Footer -->
        <footer id="footer">
            <div class="footer-top fadeInUp">
                <div class="container text-center">
                    <div class="footer-logo">
                        <a href="index.html"><img src="images/Logo_binhan.png"></a>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a  href="#"><i  class="fa fa-envelope"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fooer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2016 BinhAn Medical Equipment Theme.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right">Designed by <a href="#">Nguyễn Anh Tuấn</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </wrapper>
    <!-- end wrapper -->
    
    <!-- Bootstrap Core CSS -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/function.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/scrollReveal.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    
    
</body>
</html>