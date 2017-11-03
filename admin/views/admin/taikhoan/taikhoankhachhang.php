<script>
function checkkh(){
	alert ("ahihihi");
var check = document.getElementById('chk').checked = '';
	value = document.getElementById('chk').value = '';
if (check == ""){document.getElementById('chk').checked = 'checked';
				value = "1";	}
else if(check == "checked")	{document.getElementById('chk').checked = '';value = "0";}
}
</script>
<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Tài khoản Khách Hàng</h2>
            <div align="center" id="timkiem">
            	<form method="post" action="<?=base_url."index.php?module=taikhoankhachhang&action=index"?>">
                	<input type="text" name="timkiem" placeholder="Search..."      value="" />
                 	<input type="submit" value="Tìm Kiếm"    class="btn btn-primary btn-sm" >
            	</form>
            </div>
            <a href="#add" class="btn btn-primary " data-toggle="modal">
            <i class="fa fa-plus" aria-hidden="true"></i>Thêm mới</a>
			
        	<div class="modal fade" id="add">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title">Thêm Tài Khoản</h4>
						</div>
						<form method="post" action="<?=base_url."index.php?module=taikhoankhachhang&action=add"?>">
							<div class="modal-body">
								<div class="form-group">
									<label for="txttaikhoan">Email</label>
									<input type="email" name="email" value="" class="form-control" required="required">
                                    
                                    <label for="txttaikhoan">Mật Khẩu</label>
									<input type="password" name="matkhau" value="" class="form-control" required="required">
                                    
                                    <label for="txthoten">Số Điện Thoại</label>
									<input type="text" name="sodienthoai" value="" class="form-control" required="required" pattern="[0-9,+]{10,15}" title="Số điện thoại không hợp lệ">
                                    
									<label for="txthoten">Họ tên</label>
									<input type="text" name="ten" value="" class="form-control" required="required">	
                                    
                                    <label for="txthoten">Ngày Sinh</label>
									<input type="date" name="ngaysinh" value="" class="form-control" required="required">		

									<label for="gender">Giới tính</label>
									<br>	
									<input type="radio" name="gioitinh" id="nam" value="1" checked="checked" class="form-inline">Nam	
									<input type="radio" name="gioitinh" id="nu" value="0"  class="form-inline">Nữ					
									<input type="radio" name="gioitinh" id="khac" value="2" class="form-inline">Khác	

									<br>
									<label for="txthoten">Địa Chỉ</label>
									<input type="text" name="diachi" value="" class="form-control" required="required">	
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
									 <button type="submit" class="btn btn-primary">Thêm mới</button>
							</div>
						</form>
					</div>
				</div>
			</div>
    
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Email</th>
						<th>Số Điện Thoại</th>
						<th>Tên </th>
						<th>Ngày Sinh</th>
						<th>Giới Tính</th>
						<th>Địa Chỉ</th>
						<th>Trạng Thái</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody> <?php
				
				 $total_records = count($tongdong);
				
				 	$current_page =$p;
					
       				 $limit = 10;
					 $total_page = ceil($total_records / $limit);
					if ($current_page > $total_page){
						$current_page = $total_page;
					}
					else if ($current_page < 1){
						$current_page =1;
					}
									?>
                        <?php if ($list==NULL){ ?>
						<tr>
							<td colspan="15">Không Tìm Thấy Tài Khoản</td>
						</tr>
					<?php }else { ?>
					<?php foreach ($list as $value): ?>
						<tr>
							<td><?=$value['id']?></td>
							<td><?=$value['email']?></td>
							<td><?=$value['sodienthoai']?></td>
							<td><?=$value['ten']?></td>
                            <td><?=$value['sinhnhat']?></td>
                            <td><?php if($value['gioitinh']==1){echo "Nam";}else if($value['gioitinh']==0){echo "Nữ";}else{echo "Khác";};?></td>
                            <td><?=$value['diachi']?></td>
                            <td><?php if($value['trangthai']==0){echo"Chưa kích hoạt";}elseif($value['trangthai']==1){echo "Đã kích hoạt";}else {echo "Chưa xác định";} ?></td>
							<!-- Nút sửa -->
							<td>
								<a href="#edit<?=$value['id'];?>" class="btn btn-primary btn-sm" data-toggle="modal">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</a>
								<div class="modal fade" id="edit<?=$value['id'];?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
													&times;
												</button>
												<h4 class="modal-title">Sửa tài khoản: <?=$value['email'];?></h4>
											</div>
											<form method="post" action="<?=base_url."index.php?module=taikhoankhachhang&action=edit"?>">
												<div class="modal-body">
													<div class="form-group">
                                                   		<input type="hidden" name="edit_id" value="<?= $value['id']; ?>" class="form-control" required="required">
                                                        
														<label for="txttaikhoan">Email</label>
														<input type="email" name="edit_email" value="<?= $value['email']; ?>" class="form-control" required="required">
                                                        
                                                        <label for="txthoten">Số Điện Thoại</label>
														<input type="text" name="edit_sodienthoai" value="<?= $value['sodienthoai']; ?>" class="form-control" required="required" pattern="[0-9,+]{10,15}" title="Số điện thoại không hợp lệ">
                                                        
														<label for="txthoten">Họ tên</label>
														<input type="text" name="edit_ten" value="<?= $value['ten']; ?>" class="form-control" required="required">	
                                                        
                                                        <label for="txthoten">Ngày Sinh</label>
														<input type="date" name="edit_ngaysinh" value="<?= $value['ngaysinh']; ?>" class="form-control" required="required">		

														<label for="gender">Giới tính</label>
														<br>	
														<input type="radio" name="edit_gioitinh" id="nam" value="1"<?php if($value['gioitinh'] ==1){echo "checked='checked'";}?> class="form-inline">Nam	
														<input type="radio" name="edit_gioitinh" id="nu" value="0" <?php if($value['gioitinh'] ==0){echo "checked='checked'";}?> class="form-inline">Nữ					
														<input type="radio" name="edit_gioitinh" id="khac" value="2" <?php if($value['gioitinh'] ==2){echo "checked='checked'";}?> class="form-inline">Khác	

														<br>
														<label for="txthoten">Địa Chỉ</label>
														<input type="text" name="edit_diachi" value="<?= $value['diachi']; ?>" class="form-control" required="required">	
                                                        <label><input id="chk"  name="chkkh" type="checkbox"<?php if($value['trangthai']==0){echo"value='1'";}
elseif($value['trangthai']==1){echo "checked='checked'"; echo"value='0'";}?>   />Kích hoạt tài khoản</label>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      												 <button type="submit" class="btn btn-primary">Sửa</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</td>
								
							<!-- Nút xóa -->
							<td>
								<a class="btn btn-danger btn-sm" data-toggle="modal" href="#del<?=$value['id'];?>">
									<i class="glyphicon glyphicon-trash " aria-hidden="true"></i>
								</a>
								<div class="modal fade" id="del<?=$value['id'];?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title">Thông báo</h4>
											</div>
											<div class="modal-body">
												Bạn có chắc chắn muốn xóa tài khoản này: <strong><?=$value['email'] ?></strong>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
												<a href="<?=base_url."index.php?module=taikhoankhachhang&action=delete&id=".$value['id']?>" class="btn btn-danger">Xác nhận xóa</a>
											</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
					<?php endforeach;?>
                    <?php }?>
				</tbody>
			</table>
            <?php
            if($total_records>10){ ?>
            <div  align="center">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG

            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
             if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?module=taikhoankhachhang&action=index&search='.$search.'&p='.($current_page-1).'">Prev</a>     &nbsp; ';
            }            
             //Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
               //  Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span>    &nbsp;  ';
                }
                else{
				   
                    echo '<a href="index.php?module=taikhoankhachhang&action=index&search='.$search.'&p='.$i.'">'.$i.'</a>  ';
                }
            }
            
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?module=taikhoankhachhang&action=index&search='.$search.'&p='.($current_page+1).' ">     &nbsp;Next</a> ';
				
            }		
           ?>
        </div>
        <?php }?>
		</div>
	</div>
</div>