<<<<<<< HEAD
<h1>Xin chào: <?=$_SESSION['khachhang_Name']?></h1>
=======
<?php include_once BASEPATH.'controllers/khachhang.php';?>
<h1>Xin chào: <?=$_SESSION['khachhang_Name']?></h1>
<table border="1">
<tr>
	<th>STT</th>
    <th>Mã Đơn Hàng</th>
    <th>Tổng Tiền</th>
    <th>Ngày Đặt Hàng</th>
    <th>Trạng Thái</th>
</tr>
<?php $i=0; if ($lichsu==NULL){ ?>
						<tr>
							<td colspan="15">Không Có Tin Tức </td>
						</tr>
					<?php }else { ?>
					<?php foreach ($lichsu as $value): $i++;?>
						<tr>
                        
							<td><?= $i;?></td>
							<td><?= $value['id_donhang'];?></td>
							<td><?= "<b>".number_format( $value['sotien'])."&nbsp;VNĐ</b>"?></td>
                          	<td><?= $value['datedathang'];?></td>
                            <td><?php if($value['tinhtrang']==0){echo "Đã Huỷ";}
										else if($value['tinhtrang']==1){echo "Đăng Xử Lý";}
										else if($value['tinhtrang']==2){echo "Hoàn Thành";}?></td>
						</tr>
					<?php endforeach;}?>
</table>
>>>>>>> 7fb9388bd022edf9c4cd161300cf6dd2fb571b74
