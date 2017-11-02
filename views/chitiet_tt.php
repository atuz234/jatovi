<?php include_once BASEPATH.'controllers/tintuc.php';
$i =0; ?>
<?php foreach ($list as $value): $a = explode('|', $value['hinhanh']);?>
	<div class="container">
		<div class="row">
			<div class="tieude" style="text-align: center;">
				<h1><?=$value['tieude']?></h1>
			</div>
			<div class="hinhanh" style="text-align: center;">
				<img width="220px" height="250px" src="admin/public/images/tintuc/<?=$a[0]?>"/>
			</div>
			<div class="noidung" style="border-bottom: solid 1px black;">
				<?=$value['noidung']?>
			</div>
			<div class="tacgia" style="margin-top: 20px;">
				<i>Đăng bởi: <?=$value['tacgia']?></i>
			</div>
		</div>
	</div>	
<?php endforeach;?>