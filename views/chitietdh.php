<?php include_once BASEPATH.'controllers/khachhang.php';
$i =0; ?>
<h4>Chi Tiết Đơn Hàng Số:&nbsp;&nbsp;<?= $iddh;?></h4>
<table border="1">
<tr>
    <th>Tên Sản Phẩm</th>
	<th>Số Lượng</th>
    <th>Đơn Giá</th>
    <th>Thành Tiền</th>
</tr>
<?php foreach ($list as $value): ?>
    <tr>
        <td><?=$value['ten'];?></td>
        <td><?=$value['soluong'];?></td>
        <td><?= number_format($value['dongia'])."&nbsp;VNĐ";?></td>
        <td><?=number_format($value['thanhtien'])."&nbsp;VNĐ";?></td>        
    </tr>
<?php endforeach;?>
    
	
</table>