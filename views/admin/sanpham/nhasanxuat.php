<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Quản lý Nhà sản xuất</h2>
			<a class="btn btn-primary" data-toggle="modal" href="#insertdiv"><i class="fa fa-plus-square"></i> Thêm mới</a>
			<div class="modal fade" id="insertdiv">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Thêm sản phẩm</h4>
							<div>
								<form action="<?=base_url."index.php?module=nhasanxuat&action=insert"?>" method="post" enctype="multipart/form-data">
									<div class="modal-body">
										<div class="form-group">
											<label for="ten">Tên nhà sản xuất</label>
											<input type="text" name="ten" value="" class="form-control" required="required">

											<label for="diachi">Địa chỉ</label>
											<input type="text" name="diachi" value="" class="form-control" required="required">

											<label for="sodienthoai">Số điện thoại</label>
											<input type="phone" name="sodienthoai" value="" class="form-control" required="required">

											<label for="email">Email</label>
											<input type="email" name="email" value="" class="form-control" required="required">

											<label for="Website">Website</label>
											<input type="website" name="website" value="" class="form-control" required="required">

											<label for="logo">Logo</label>
											<input type="file" name="logo" class="form-control" required="required">
											


											<label for="mota">Mô tả</label>
											<input type="text" name="mota" value="" class="form-control" required="required">
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
											<button type="submit" class="btn btn-primary">Thêm</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

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
						<th>ID</th>
						<th>Tên</th>
						<th>Địa chỉ</th>
						<th>Số điện thoại</th>
						<th>Email</th>
						<th>Website</th>
						<th>Logo</th>
						<th>Mô tả</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($nsx as $value): ?>
					<tr>
						<td><?=$value['id']?></td>
						<td><?=$value['nsx_ten']?></td>
						<td><?=$value['nsx_diachi']?></td>
						<td><?=$value['nsx_sodienthoai']?></td>
						<td><?=$value['nsx_email']?></td>
						<td><?=$value['nsx_website']?></td>
						<td><?=$value['nsx_logo']?></td>
						<td><?=$value['nsx_mota']?></td>				
					<!-- Nút sửa -->
							<td>
							<a href="#edit<?=$value['id'];?>" class="btn btn-primary btn-sm" data-toggle="modal">
								<i class="fa fa-pencil" aria-hidden = "true"></i>
							</a>
							<div class="modal fade" id="edit<?=$value['id'];?>">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;
											
											</button>
											<h4 class="modal-title">Thay đổi thông tin nhà sản xuất: <?=$value['nsx_ten'];?></h4>
										</div>
										<form action="<?=base_url."index.php?module=nhasanxuat&action=update"?>" method="post" >
											<div class="modal-body">
												<div class="form-group">
													<input type="hidden" name="txtid" value="<?=$value['id']?>">

													<label for="txtnhasanxuat">Tên nhà sản xuất</label>
													<input type="text" name="txtnhasanxuat" value="<?=$value['nsx_ten']?>" class="form-control" required ="required">
												
													<label for="txtdiachi">Địa chỉ</label>
													<input type="text" name="txtdiachi" value="<?=$value['nsx_diachi']?>" class="form-control" required="required">

													<label for="txtsodienthoai">Số điện thoại</label>
													<input type="text" name="txtsodienthoai" value="<?=$value['nsx_sodienthoai']?>" class="form-control" required="required">

													<label for="txtemail">Email</label>
													<input type="email" name="txtemail" value="<?=$value['nsx_email']?>" class="form-control" required="required">

													<label for="txtwebsite">Website</label>
													<input type="Website" name="txtwebsite" value="<?=$value['nsx_website']?>" class="form-control" required="required">

													<label for="logo">Logo</label>
													<input type="file" name="logo" value="<?=$value['nsx_logo']?>" class="form-control" required="required">

													<label for="txtmota">Mô tả</label>
													<input type="text" name="txtmota" value="<?=$value['nsx_mota']?>" class="form-control" required="required">
													</input>
												</div>
											</div>

											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
												<button type="submit" class="btn btn-primary">Lưu</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</td>

						<!--Nút xóa-->
						<td>
							<a class="btn btn-danger btn-sm" data-toggle="modal" href="#del<?=$value['id'];?>">
								<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
							</a>
							<div class="modal fade" id="del<?=$value['id'];?>">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Thông báo</h4>
									</div>
									<div class="modal-body">
										Bạn chắc chắn muốn xóa nhà sản xuất <strong><?=$value['nsx_ten']?></strong> này? 
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
										<a href="<?=base_url."index.php?module=nhasanxuat&action=delete&id=".$value['id']?>" class="btn btn-danger">Xác nhận xóa</a>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
				</tbody>
			</table>