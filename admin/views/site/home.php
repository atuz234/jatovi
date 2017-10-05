<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JATOVI | Trang chủ</title>
    <?php $JATOVI->load->view('site/partial/header'); ?>

</head>
<body>
    <div class="wrapper">
        <div class="header" >
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
                                <img src="public/images/site/jatovi_logo.png" >
                            </a>
                        </div>
                        <div class="col-md-9">
                            <div class="pull-left">
                                <h1 style="font-family:FontAwesome; font-weight: bold; font-size: 70px;">JATOVI</h1>
                            </div>
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
                                <img style="width: 50px; height: 50px;" src="public/images/site/jatovi_icon.png" />
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
        <div class="content">
        	
        </div>
        <div class="footer">
        	<div class="footer_top fadeInUp">
                <div class="container text-center">
                    <div class="footer-logo">
                        <a href="index.html"><img src="public/images/site/jatovi_logo_white.png"></a>
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
            <div class="footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2017 JATOVI Beauty Supplements.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right">Designed by <a href="#">Nguyễn Anh Tuấn</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>