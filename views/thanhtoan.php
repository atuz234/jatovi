<?php include_once BASEPATH.'controllers/giohang.php';
$tongtien = 0;
 $i = -1;
?>
Đơn Hàng Của Bạn :<br>
<form action="<?=base_url."index.php?module=giohang&action=dathang"?>" method="post">

<table border="1">
<tr>
	<th>Sản Phẩm</th>
    <th>Tổng Cộng</th>
</tr>
<?php  foreach ($list as $value): ?>
<?php $i++;?>
<tr>
<td><?= $value['ten'] ?>&nbsp; x <?=$soluong[$value['id']]; ?></td>
<td><?= $thanhtien = $value['giamoi']*$soluong[$value['id']]; ?></td>
</tr>
<?php $tongtien += $thanhtien;  endforeach;?>
<input type="hidden" name="idkh" value="" />
<input type="hidden" name="diachi" value="" />
<input type="hidden" name="tongtien" value="<?= $tongtien;?>" />
<tr><th>Tổng Cộng</th><th><?php echo $tongtien ;?></th></tr>
<tr><td colspan="2" align="center"><button type="submit" name="submit" class="btn btn-default" >Đặt Hàng</button></td></tr>
</table>

</form>