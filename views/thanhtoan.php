<script>
function themdiachi(){
    document.getElementById("address").innerHTML ="Nhập địa chỉ mới:<input type='text' id='diachithem' name'diachimoi' onchange='thaydoidiachi()' value=''/>";
}
function thaydoidiachi(){
	
var diachia = document.getElementById("diachithem").value;
if(diachia !=""){document.getElementById("diachism").value = diachia;}
else{
	document.getElementById("diachism").value;
	}
		
}
</script>
<?php include_once BASEPATH.'controllers/giohang.php';
$tongtien = 0;
 $i = -1;
 if(isset($_SESSION['khachhang_ID'])){
     $diachi = $_SESSION['khachhang_Address'];
?>
<form action="<?=base_url."index.php?module=giohang&action=dathang"?>" method="post">
Đơn Hàng Của Bạn :<br>
<table border="1">
<tr>
	<th>Sản Phẩm</th>
    <th>Số Lượng</th>
    <th>Tổng Cộng</th>
</tr>
<?php  foreach ($list as $value): ?>
<?php $i++; $thanhtien = $value['giamoi']*$soluong[$value['id']];  ?>
<tr>
<td><?= $value['ten'] ?> </td>
<td><?php echo "<b> x ".$soluong[$value['id']]."</b>"; ?></td>
<td><?php echo "<b> ". number_format($thanhtien)."&nbsp;VNĐ</b>"?></td>
</tr>

<input type="hidden" name="idsp[]" value="<?= $value['id']?>" />
<input type="hidden" name="gia[]" value="<?= $value['giamoi']?>" />
<input type="hidden" name="soluong[]" value="<?php echo $soluong[$value['id']];?>" />
<?php $tongtien += $thanhtien;  endforeach;?>
<tr>
<th>Địa Chỉ</th>
	<td colspan="2"><?=$_SESSION['khachhang_Address']."<br>";?>
 
 <label onclick="themdiachi()">
     <input type="checkbox" id="address1" value=""  />Thay đổi địa chỉ?</label><br />
 <label id="address"></label>
    </td>
</tr>
<input type="hidden" name="iddh" value="<?= $maxdh+1?>"/>
<input type="hidden" name="diachi" id="diachism" value="<?php echo $diachi;?>" />
<input type="hidden" name="tongtien" value="<?= $tongtien;?>" />
<tr><th>Tổng Cộng</th><th colspan="2"><?php echo number_format( $tongtien)."&nbsp;VNĐ" ;?></th></tr>
<tr><td colspan="3" align="center"><button type="submit" name="submit" class="btn btn-default" >Đặt Hàng</button></td></tr>
</table>
<div class="modal" id="themdiachi"></div>
</form><?php }else{?>
<div align="center">
<label style="font-size:25px;" >Bạn Hãy Đăng Nhập Để Đặt Hàng.&nbsp;
<a class="btn btn-default" id="login" onclick="document.getElementById('id01').style.display='block'"  style="width: auto; cursor: pointer; color:red; "> Đăng nhập</a></label></div>
<?php  }?>