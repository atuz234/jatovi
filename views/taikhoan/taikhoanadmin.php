<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Tài khoản admin</h2>
			<a class="btn btn-primary" data-toggle="modal" href="#addnewad"><i class="fa fa-plus-square"></i> Thêm mới</a>
			<div class="clearfix"></div>
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
											<form action="<?=base_url."index.php?module=taikhoanadmin&action=update"?>">
												<div class="modal-body">
													<div class="form-group">
														<label for="txttaikhoan">Tên tài khoản</label>
														<input type="text" name="txttaikhoan" value="<?=$value['ten_taikhoan']?>" class="form-control" required="required">

														<label for="txthoten">Họ tên</label>
														<input type="text" name="txthoten" value="<?=$value['hoten']?>" class="form-control" required="required">	

														<label for="gender">Giới tính</label>
														<br>	
														<input type="radio" name="gender" id="nam" value="1" selected="selected" class="form-inline">Nam	
														<input type="radio" name="gender" id="nu" value="0" selected="selected" class="form-inline">Nữ					
														<input type="radio" name="gender" id="khac" value="2" selected="selected" class="form-inline">Khác	

														<br>
														<label for="nhom">Nhóm</label>
														<select name="nhom" id="" class="form-control" required="required">
															<?php foreach($groups as $nhom): ?>
																<option value="<?=$nhom['grid'];?>" <?php if($nhom['grid'] == $value['idnhom']){echo "selected='selected'";} ?> ><?=$nhom['tennhom'];?></option>
															<?php endforeach ?>
														</select>
													</div>
												</div>
												<div class="modal-footer">
													
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
				</tbody>
			</table>
		</div>
	</div>
</div>