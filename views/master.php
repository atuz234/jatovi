<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="public/images/site/jatovi_icon.png">
    <title>JATOVI | Trang chủ</title>
    <?php $JATOVI->load->view('partial/header'); ?>
    <?php
    	$ok=1;
    	if(isset($_SESSION['cart']))
    	{
    		foreach($_SESSION['cart'] as $k=>$v)
    		{
    			if(isset($k))
    			{
    			$ok=2;
    			}
    		}
    	}

    	if ($ok != 2)
    	 {
    		$sosp=0;
    	} else {
    		$items = $_SESSION['cart'];
    		$sosp = count($items);
    		
    	}
    ?>

<!-- Hiển thị lỗi đăng nhập-->
<?php if (isset($_SESSION['error_incorrect'])): ?>
    <script type="text/javascript">
        $(document).ready(function() {
            document.getElementById('id01').style.display='block';
        });
    </script>
<?php endif ?>

<!-- Hiển thị lỗi đăng ký -->
<?php if (isset($_SESSION['tentktontai'])): ?>
    <script type="text/javascript">
        $(document).ready(function() {
            document.getElementById('formdangky').style.display='block';
        });
    </script>
<?php endif ?>
<?php if (isset($_SESSION['dangkythanhcong'])): ?>
    <script type="text/javascript">
        $(document).ready(function() {
            alert("Tài khoản của bạn đã đăng ký thành công!");
        });
    </script>

<?php unset($_SESSION['dangkythanhcong']); endif ?>

</head>
<body>
    <div class="wrapper">
        <div class="header" >
            <div class="header-top">
                <div class="container_">
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
                                        <a class="" href="<?=base_url."index.php?module=giohang&action=index"?>"><div><i class="fa fa-shopping-cart"></i>&nbsp; &nbsp;<span class="slsp"><?= $sosp?> Sản phẩm</span></div></a>
                                    </li>
                                    <li>

                                    <?php if (isset($_SESSION['khachhang_ID'])){ ?>
                                        <a href="<?=base_url?>index.php?module=khachhang"><i class="fa fa-cog"></i>Tài khoản</a>
                                        <a href="<?=base_url?>index.php?module=khachhang&action=dangxuat"><i class="fa fa-sign-out "></i>Đăng xuất</a>
                                    <?php }else{ ?>
                                        <a class="" id="login" onclick="document.getElementById('id01').style.display='block'"  style="width: auto; cursor: pointer;"> <i class="fa fa-user"></i> Đăng nhập</a>
                                        <a class="" id="login" onclick="document.getElementById('formdangky').style.display='block'"  style="width: auto; cursor: pointer;"> <i class="fa fa-user"></i> Đăng ký</a>
                                    <?php }; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Form login-->
            <div id="id01" class="modal" style="z-index: 999999;">
                <form class="modal-content animate" action="<?=base_url?>index.php?module=khachhang&action=dangnhap" id="dangnhap" method="post">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <div class="imgcontainer" style="opacity: 0.6;">

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-11">
                                <h3 style="text-align: center;">Đăng nhập</h3>
                                <?php if (isset($_SESSION['error_incorrect'])):?>
                                    <span style="color: red">Tài khoản hoặc mật khẩu không chính xác, vui lòng nhập lại</span><br>
                                    <?php unset($_SESSION['error_incorrect']); ?>
                                <?php endif ?>
                                
                                <input type="text" name="tentk" id="form_uname" placeholder="Email" required="required">

                                
                                <input type="password" name="mk" id="form_psw" placeholder="Mật khẩu" required="required">

                                <button type="submit">Đăng nhập</button>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-11">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                                    Thoát
                                </button>
                                <span>
                                    Chưa có tài khoản?<a class="" id="login" onclick="document.getElementById('formdangky').style.display='block';document.getElementById('id01').style.display='none'"  style="width: auto; cursor: pointer;"> Đăng ký</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Form đăng ký -->
            <div id="formdangky" class="modal" style="z-index: 999999;">
                <form method="post" class="modal-content animate" action="<?=base_url."index.php?module=khachhang&action=dangky"?>">
                    <span onclick="document.getElementById('formdangky').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <div class="imgcontainer" style="opacity: 0.6;">
                        
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-11">
                                <h3 style="text-align: center;">Đăng ký</h3>
                                <?php if (isset($_SESSION['tentktontai'])):?>
                                    <span style="color: red">Email đã tồn tại. Đăng nhập hoặc sử dụng tài khoản email khác để đăng ký</span><br>
                                    <?php unset($_SESSION['tentktontai']); ?>
                                <?php endif ?>
                                <label for="txttaikhoan">Email</label>
                                <input type="text" name="email" value="" class="form-control" required="required">
                                
                                <label for="txttaikhoan">Mật Khẩu</label>
                                <input type="password" name="matkhau" value="" class="form-control" required="required">
                                
                                <label for="txthoten">Số Điện Thoại</label>
                                <input type="number" name="sodienthoai" value="" class="form-control" required="required">
                                
                                <label for="txthoten">Họ tên</label>
                                <input type="text" name="ten" value="" class="form-control" required="required">    
                                
                                <label for="txthoten">Ngày Sinh</label>
                                <input type="date" name="ngaysinh" value="" class="form-control" required="required">       

                                <label for="gender">Giới tính</label>
                                <br>    
                                <input type="radio" name="gioitinh" id="nam" value="1" checked="checked" class="form-inline">Nam    
                                <input type="radio" name="gioitinh" id="nu" value="0"  class="form-inline">Nữ                   
                                <input type="radio" name="gioitinh" id="khac" value="2" class="form-inline">Khác    

                                <br>
                                <label for="txthoten">Địa Chỉ</label>
                                <input type="text" name="diachi" value="" class="form-control" required="required"> 

                                <button type="submit">Đăng ký</button>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-11">
                                <button type="button" onclick="document.getElementById('formdangky').style.display='none'" class="cancelbtn">
                                    Thoát
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>



            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="index.html">
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
                        <!-- menu o day nhe -->
                        <nav class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="<?=base_url?>index.php">
                                        Trang chủ
                                    </a>
                                </li>
                                <?php include_once BASEPATH.'models/menu_model.php'; 
                                    $menus = $menu_controller->select_menu();
                                ?>
                                <?php foreach ($menus as $menu): ?>
                                    <li>
                                        <a href="<?=base_url.$menu['url']?>">
                                            <?=$menu['tieude']?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <form class="navbar-form navbar-right" action="<?=base_url."index.php?module=timkiem&action=timkiem"?>" method="post" style="margin-bottom:0px; margin-top: -3px;">
                                <div class="input-group">
                                    <input type="text" name="timkiem" class="form-control" placeholder="Tìm kiếm sản phẩm..." value="<?php if(isset($_SESSION['gtritimkiem'])){ 
                                        echo ($_SESSION['gtritimkiem']);

                                        unset($_SESSION['gtritimkiem']);} ?>">


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