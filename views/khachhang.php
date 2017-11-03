<?php include_once BASEPATH.'controllers/khachhang.php';?>
<center>
<h1>Xin chào: <?=$_SESSION['khachhang_Name']?></h1>
<form action="<?=base_url."index.php?module=khachhang&action=index"?>" method="post">

                                <div class="input-group">
                                    Đơn hàng từ :
<input type="date" min="2016-01-01" max="<?= date("Y-m-d")?>" name="ngaybatdau" value="" />
Đến :
<input type="date" name="ngayketthuc" value=""/><br><br>
<em>(Tìm kiếm đơn hàng theo ngày đặt hàng)</em>
<button type="submit" style="background-color: #ff4b82;">Tìm Kiếm</i></button>
</div>
</form>
</form>
<div class="row">
	<div class="col-md-12">
<table class="table table-striped">
	<thead>
<tr>
	<th>STT</th>
    <th>Mã Đơn Hàng</th>
    <th>Tổng Tiền</th>
    <th>Ngày Đặt Hàng</th>
    <th>Trạng Thái</th>
    <th></th>
</tr>

</thead>
<?php $i=0; if ($lichsu==null){ ?>
	<tr>
		<td colspan="15">Không Có Đơn Hàng </td>
	</tr>
<?php }else { ?>
<?php foreach ($lichsu as $value): $i++;?>
	<tr>
    
		<td><?= $i;?></td>
		<td><?=  $value['id_donhang'];?></td>
		<td><?= "<b>".number_format( $value['sotien'])."&nbsp;VNĐ</b>"?></td>
      	<td><?= $value['datedathang'];?></td>
        <td><?php if($value['tinhtrang']==0){echo "Đã Huỷ";}
					else if($value['tinhtrang']==1){echo "Đang Xử Lý";}
					else if($value['tinhtrang']==2){echo "Hoàn Thành";}?></td>
        <td><a href="<?=base_url."index.php?module=khachhang&action=chitietdh&id=".$value['id_donhang']?>">Chi tiết đơn hàng.</a></td>
	</tr>
<?php endforeach;}?>
</table>
</div>
</div>

