<?php include_once BASEPATH.'controllers/giohang.php';?>
<script>
function capnhat(){
    document.getElementById("capnhatsoluong").style.color = "red";
}
</script>
<?php
$tongtien=0;

?>
<a href="<?=base_url."index.php"?>"><button class="btn btn-default" ><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Tiếp Tục Mua Sắm</button></a>
<form name="qty" id="form" action="<?=base_url."index.php?module=giohang&action=capnhatsoluong"?>" method="post">
<table  class="table table-striped">

				<thead>
					<tr>
						<th>Tên Sản Phẩm</th>
						<th>Số Lượng </th>
						<th>Giá </th>
						<th>Thành Tiền</th>
                        <th>Xóa</th>
					</tr>
				</thead>
				<tbody>
                
				<?php if($list==NULL){?>
						<tr>
							<td colspan="4">Không Có Sản Phẩm trong giỏ hàng </td>
						</tr>
				<?php }else{ foreach ($list as $value): ?>
						<tr>
                        
							<td><?=$value['ten'].'<br>'?></td>
                            <td>
	                            <input type="hidden" name="idsp[]" value="<?=$value['id']?>"  />
	                            <input type="number"  style="width:50px" min="1" max="99" onchange="capnhat()" name="soluong[<?= $value['id']?>]" value="<?= $_SESSION['cart'][$value['id']]?>" >
                 				
                            </td>
							<td><?=number_format($value['giamoi'])?>&nbsp;VNĐ</td>
                           	<td><input type="text" name="thanhtien" style="width:150px" value="<?= number_format($_SESSION['cart'][$value['id']]* $value['giamoi'])?>" disabled="disabled"  />&nbsp;VNĐ</td>
                           <!-- Nút xóa -->
							<td>
								<a class="btn btn-danger btn-sm" data-toggle="modal" href="<?=base_url."index.php?module=giohang&action=xoasp&idsp=".$value['id']?>">
                                
									<i class="glyphicon glyphicon-trash " aria-hidden="true"></i>
								</a>
							</td>
                        </tr>
                            
							<?php  $tongtien = $tongtien + $_SESSION['cart'][$value['id']]* $value['giamoi'];
							 endforeach;?>
                            <th colspan="3" align="center">Tổng Tiền</th><th colspan="2" align="right"><input type="text" style="width:150px" disabled="disabled" name="tongtien" value="<?php echo number_format($tongtien)  ?> "/>&nbsp;VNĐ</th>
                            <tr>
                            <td colspan="2" align="center"><button name="submitsl" id="capnhatsoluong"  type = "submit" style="color:#000" class="btn btn-default" >Cập Nhật Số Lượng </button></td>
                            <td colspan="2" align="center"><button name="submit" type = "submit"  class="btn btn-default" >Thanh Toán</button></td>
                        </tr>
                <?php }; ?>
						</tbody> 
                        </table>
                        </form>
                             
                            