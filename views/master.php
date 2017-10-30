<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="public/images/site/jatovi_icon.png">
    <title>JATOVI | Trang chủ</title>
    <?php $JATOVI->load->view('partial/header'); ?>

</head>
<body>
    <div class="wrapper">
        <div class="header" >
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="_widget pull-left">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"> Facebook </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"> Twitter </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"> Linkedin </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="_widget">
                                <ul class="pull-right">
                                    <li>
                                        <a class="" href="#"><i class="fa fa-shopping-cart"></i> 0đ <span class="slsp">0 sản phẩm</span></a>
                                    </li>
                                    <li>
                                        <a class="" href="#"><i class="fa fa-check">Thanh toán</i></a>
                                    </li>
                                    <li>
                                        <a class="" id="login" onclick="document.getElementById('id01').style.display='block'"  style="width: auto; cursor: pointer;"> <i class="fa fa-user"></i> Đăng nhập</a>
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
                                <img style="width: 50px; height: 50px; margin-right: 15px;" src="public/images/site/jatovi_icon.png" />
                            </a>
                            <!-- End Logo -->
                        </div>
                        <nav class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="#">
                                        Trang chủ
                                    </a>
                                </li>
                                <?php include_once BASEPATH.'models/menu_model.php'; 
                                    $menus = $menu_controller->select_menu();
                                ?>
                                <?php foreach ($menus as $menu): ?>
                                    <li>
                                        <a href="<?=$menu['url']?>">
                                            <?=$menu['tieude']?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
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
            <?php $JATOVI->load->view($content, $contentdata); ?>
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

<?php $JATOVI->load->view('partial/footer'); ?>
</body>
</html>