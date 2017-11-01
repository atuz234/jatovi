<?php include_once BASEPATH.'controllers/tintuc.php';
$i =0; ?>
<?php foreach ($list as $value): $a = explode('|', $value['hinhanh']);?>
						
                        
	<?= "đây là tiêu đề".$value['tieude']."<br>"?>
	<?="hinh anh";?><img width="150px" height="150px" src="admin/public/images/tintuc/<?=$a[0]?>"/><br>
	<?= "đây là noi dung".$value['noidung']."<br>" ?>
	<?="Được Đăng Bởi".$value['tacgia']."<br>"?>
	<?php endforeach; echo count($a);?>