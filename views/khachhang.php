<?php include_once BASEPATH.'controllers/khachhang.php';?>
<h1>Xin chào: <?=$_SESSION['khachhang_Name']?></h1>
<form action="<?=base_url."index.php?module=khachhang&action=index"?>" method="post">
                                <div class="input-group">
                                    Đơn hàng từ :
<input type="date" name="ngaybatdau" value="" />
Đến :
<input type="date" name="ngayketthuc" value="" />
<button type="submit" >search</i></button>
</div>
</form>
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
							<td colspan="15">Không Có Đơn Hàng </td>
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