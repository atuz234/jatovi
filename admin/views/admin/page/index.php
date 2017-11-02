<?php include_once BASEPATH.'/controllers/admin/page.php';	 ?>
<h1>Trang quản trị</h1>
<div style="border: solid 1px black"></div>
<div class="container" style="font-size: 30px">
	<div class="row">
		<div class="col-md-4">
			<a href="<?=base_url."index.php?module=quanlydonhang"?>">
				<i  class="fa fa-file-o"></i> 
				<b><?= $sodh;?></b>
				<p>don hang</p>
			</a>
		</div>
		<div class="col-md-4">
			<a href="<?=base_url."index.php?module=quanlytintuc"?>">
				<i  class="fa fa-newspaper-o"></i> 
				<b><?= $sott;?></b>
				<p>tin tuc</p>
			</a>
		</div>
		<div class="col-md-4">
			<a href="<?=base_url."index.php?module=quanlysanpham"?>">
				<i  class="fa fa-archive"></i> 
				<b><?= $sosp;?></b>
				<p>san pham</p>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<a href="<?=base_url."index.php?module=taikhoanadmin"?>">
				<i  class="fa fa-user"></i> 
				<b><?= $soadmin;?></b>
				<p>admin</p>
			</a>
		</div>
		<div class="col-md-4">
			<a href="<?=base_url."index.php?module=taikhoankhachhang"?>">
				<i  class="fa fa-users"></i> 
				<b><?= $sokh;?></b>
				<p>khach hang</p>
			</a>
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
</div>

			

		
			