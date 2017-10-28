<script>
	$(document).ready(function() {
		$(".changepass").change(function() {
			if ($(".changepass").is(":checked")) {
				$(".newpass").addClass('show');
			}else {
				$(".newpass").removeClass('show');
			}
		});
	});
</script>
<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Tài khoản admin</h2>
            <div align="center" id="timkiem">
            	<form method="post" action="<?=base_url."index.php?module=taikhoanadmin&action=index"?>">
                	<input type="text" name="timkiem"  placeholder="Search..."   value="" />
                 	<input type="submit" value="Tìm Kiếm"    class="btn btn-primary btn-sm" >
            	</form>
            </div>
			<a class="btn btn-primary" data-toggle="modal" href="#insertdiv"><i class="fa fa-plus-square"></i> Thêm mới</a>
			<div class="clearfix"></div>
		</div>
		<div class="modal fade" id="insertdiv">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Thêm tài khoản</h4>
					</div>
					<form action="<?=base_url."index.php?module=taikhoanadmin&action=insert"?>" method="post">
						<div class="modal-body">
							<div class="form-group">

								<label for="insert_taikhoan">Tài Khoản</label>
								<input type="text" name="insert_taikhoan" value="" class="form-control" required="required">

								<label for="insert_hoten">Họ tên</label>
								<input type="text" name="insert_hoten" value="" class="form-control" required="required">	
								
								<label for="insert_gender">Giới tính</label>
								<br>	
								<input type="radio" name="insert_gender" id="nam" value="1" checked="checked" class="form-inline">Nam 	
								<input type="radio" name="insert_gender" id="nu" value="0" class="form-inline">Nữ	 				
								<input type="radio" name="insert_gender" id="khac" value="2" class="form-inline">Khác	

								<br>
								<label for="insert_nhom">Nhóm</label>
								<select name="insert_nhom" id="" class="form-control" required="required">
									<?php foreach($groups as $nhom): ?>
										<option value="<?=$nhom['grid'];?>" ><?=$nhom['tennhom'];?></option>
									<?php endforeach ?>
								</select>
								
								<label for="insert_password">Mật khẩu</label>
								<input type="password" name="insert_password" value="" class="form-control" required="required">
							
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
								<button type="submit" class="btn btn-primary">Thêm</button>
						</div>
					</form>
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
						<th>Tên tài khoản</th>
						<th>Họ tên</th>
						<th>Giới tính</th>
						<th>Nhóm</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
                 <?php
				
				 $total_records = count($tongdong);
				
				 	$current_page =$p;
					
       				 $limit = 10;
					 //tinh so trang
					 $total_page = ceil($total_records / $limit);
					 // Giới hạn current_page trong khoảng 1 đến total_page
					 for($i = 1; $i<=$total_page; $i++){
						 
						 }
					if ($current_page > $total_page){
						$current_page = $total_page;
					}
					else if ($current_page < 1){
						$current_page =1;
					}
									?>
                        <?php if ($tkadmin==NULL){ ?>
                        <tr>
							<td colspan="15">Không Có Tài Khoản Nào</td>
						</tr>
					<?php }else { ?>
					<?php foreach ($tkadmin as $value): ?>
						<tr>
							<td><?=$value['ten_taikhoan']?></td>
							<td><?=$value['hoten']?></td>
							<td><?php if($value['gioitinh']==1){echo "Nam";}else if($value['gioitinh']==0){echo "Nữ";}else{echo "Khác";};?></td>
							<td><?=$value['tennhom']?></td>
							<!-- Nút sửa -->
							<td>
								<a href="#edit<?=$value['idadmin'];?>" class="btn btn-primary btn-sm" data-toggle="modal">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</a>
								<div class="modal fade" id="edit<?=$value['idadmin'];?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
													&times;
												</button>
												<h4 class="modal-title">Sửa tài khoản: <?=$value['ten_taikhoan'];?></h4>
											</div>
											<form action="<?=base_url."index.php?module=taikhoanadmin&action=update"?>" method="post">
												<div class="modal-body">
													<div class="form-group">
														<input type="hidden" name="txtid" value="<?=$value['idadmin']?>">

														<label for="txttaikhoan">Tên tài khoản</label>
														<input type="text" name="txttaikhoan" value="<?=$value['ten_taikhoan']?>" class="form-control" required="required">

														<label for="txthoten">Họ tên</label>
														<input type="text" name="txthoten" value="<?=$value['hoten']?>" class="form-control" required="required">	

														<label for="gender">Giới tính</label>
														<br>	
														<input type="radio" name="gender" id="nam" value="1" <?php if($value['gioitinh']==1){echo "checked='checked'";}?> class="form-inline">Nam 	
														<input type="radio" name="gender" id="nu" value="0" <?php if($value['gioitinh']==0){echo "checked='checked'";}?> class="form-inline">Nữ	 				
														<input type="radio" name="gender" id="khac" value="2" <?php if($value['gioitinh']==2){echo "checked='checked'";}?> class="form-inline">Khác	

														<br>
														<label for="nhom">Nhóm</label>
														<select name="nhom" id="" class="form-control" required="required">
															<?php foreach($groups as $nhom): ?>
																<option value="<?=$nhom['grid'];?>" <?php if($nhom['grid'] == $value['idnhom']){echo "selected='selected'";} ?> ><?=$nhom['tennhom'];?></option>
															<?php endforeach ?>
														</select>
														
														<!-- Nút chọn hiển thị dòng nhập mật khẩu mới -->
														<div class="form-inline">
															<label for="tennhom">Đổi mật khẩu <span class="required">*</span>
															</label>
															<div class="checkbox">
																<input class="changepass" name="changepass" type="checkbox" class="js-switch">
															</div>
														</div>

														<!-- Dòng nhập mật khẩu mới -->
														<div class="newpass" style="display: none">
															<label for="newpass">Mật khẩu mới <span class="required">*</span>
															</label>
															
															<input type="password" name="newpass" class="form-control" >
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
       												<button type="submit" class="btn btn-primary">Cập nhật</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</td>
								
							<!-- Nút xóa -->
							<td>
								<a class="btn btn-danger btn-sm" data-toggle="modal" href="#del<?=$value['idadmin'];?>">
									<i class="glyphicon glyphicon-trash " aria-hidden="true"></i>
								</a>
								<div class="modal fade" id="del<?=$value['idadmin'];?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title">Thông báo</h4>
											</div>
											<div class="modal-body">
												Bạn có chắc chắn muốn xóa tài khoản này: <strong><?=$value['ten_taikhoan'] ?></strong>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
												<a href="<?=base_url."index.php?module=taikhoanadmin&action=delete&id=".$value['idadmin'] ?>" class="btn btn-danger">Xác nhận xóa</a>
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
                echo '<a href="index.php?module=taikhoanadmin&action=index&search='.$search.'&p='.($current_page-1).'">Prev</a>     &nbsp; ';
            }            
             //Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
               //  Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span>    &nbsp;  ';
                }
                else{
				   
                    echo '<a href="index.php?module=taikhoanadmin&action=index&search='.$search.'&p='.$i.'">'.$i.'</a>  ';
                }
            }
            
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?module=taikhoanadmin&action=index&search='.$search.'&p='.($current_page+1).' ">     &nbsp;Next</a> ';
				
            }		
           ?>
		</div>
        <?php }?>
	</div>
</div>