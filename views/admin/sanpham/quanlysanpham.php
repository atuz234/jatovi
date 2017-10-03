<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Quản lý sản phẩm</h2>

			<div class="clearfix"></div>
			<a class="btn btn-primary" data-toggle="modal" href="#insert">
				<i class="fa fa-plus-square"></i>Thêm mới</a>

			<div class="modal fade" id="insert">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
							</button>
							<h4 class="modal-title">Thêm sản phẩm</h4>
						</div>
						<form method="post" action="<?=base_url."index.php?module=quanlysanpham&action=insert"?>">
							<div class="modal-body">
								<div class="form-group">
									<label for="ten">Tên sản phẩm</label>
									<input type="text" name="ten" value="" class="form-control" required="required">

									<label for="mota">Mô tả</label>
									<input type="text" name="mota" value="" class="form-control" required="required">

									<label for="id_danhmuc">Danh mục</label>
											<select name="id_danhmuc" class="form-control" required="required">
												<?php foreach ($danhmuc as $value):?>
													<option value="<?=$value['id'];?>" ><?=$value['name'];?></option>
												<?php endforeach ?>
											</select>
												
									
									<label for="id_nsx">Nhà sản xuất</label>
											<select name="id_nsx" class="form-control" required="required">
												<?php foreach ($nsx as $value):?>
													<option value="<?=$value['id']?>"><?=$value['nsx_ten'];?></option>
												<?php endforeach ?>
											</select>

									<label for="xuatsu">Xuất sứ</label>
									<input type="text" name="xuatsu" value="" class="form-control" required="required">

									<label for="giacu">Giá cũ</label>
									<input type="text" name="giacu" value="" class="form-control" required="required">

									<label for="giamoi">Giá mới</label>
									<input type="text" name="giamoi" value="" class="form-control" required="required">

									<label for="ngaysanxuat">Ngày sản xuất</label>
									<input type="date" name="ngaysanxuat" value="" class="form-control" required="required">

									<label for="hansudung">Hạn sử dụng</label>
									<input type="date" name="hansudung" value="" class="form-control" required="required">

									<label for="donvi">Đơn vị</label>
									<input type="text" name="donvi" value="" class="form-control" required="required">

									
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn_default" data-dismiss="modal">Đóng</button>
									<button type="submit" class="btn btn-primary">Thêm mới</button>
							</div>
						</div>
							
				</form>
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
						<th>ID</th>
						<th>Tên sản phẩm</th>
						<th>Nhà sản xuất</th>
						<th>Mô tả</th>
						<th>Ngày sản xuất</th>
						<th>Hạn sử dụng</th>
						<th>Giá cũ</th>
						<th>Giá mới</th>
						<th>ĐVT</th>
						<th>Hình ảnh</th>
						<th>Lượt xem</th>
						<th>Lượt mua</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($sanpham as $value): ?> 
						<tr>
							<td><?=$value['id']?></td>
							<td><?=$value['ten'] ?></td>
							<td><?=$value['nsx_ten']?></td>
							<td><?=$value['mota']?></td>
							<td><?=$value['datesanxuat']?></td>
							<td><?=$value['datesudung']?></td>
							<td><?=$value['giacu']?></td>
							<td><?=$value['giamoi']?></td>
							<td><?=$value['donvi']?></td>
							<td><?=$value['hinhanh']?></td>
							<td><?=$value['luotxem']?></td>
							<td><?=$value['damua']?></td>
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
											<h4 class="modal-title">Thay đổi thông tin sản phẩm: <?=$value['ten'];?></h4>
										</div>
										<form action="<?=base_url."index.php?module=quanlysanpham&action=update"?>" method="post">
											<div class="modal-body">
												<div class="form-group">
													<input type="hidden" name="txtid" value="<?=$value['id']?>">

													<label for="txtsanpham">Tên sản phẩm</label>
													<input type="text" name="txtsanpham" value="<?=$value['ten']?>" class="form-control" required="required">


													<label for="motatxt">Mô tả</label>
													<input type="text" name="motatxt" value="<?=$value['mota']?>" class="form-control" required="required">



													<label for="ngaysanxuattxt">Ngày sản xuất</label>
													<input type="text" name="ngaysanxuattxt" value="<?=$value['datesanxuat']?>" class="form-control" required="required">

													<label for="hansudungtxt">Hạn sử dụng</label>
													<input type="text" name="hansudungtxt" value="<?=$value['datesudung']?>" class="form-control" required="required">

													<label for="giacutxt">Giá cũ</label>
													<input type="text" name="giacutxt" value="<?=$value['giacu']?>" class="form-control" required="required">

													<label for="giamoitxt">Giá mới</label>
													<input type="text" name="giamoitxt" value="<?=$value['giamoi']?>" class="form-control" required="required">

													<label for="donvitxt">Đơn vị tính</label>
													<input type="text" name="donvitxt" value="<?=$value['donvi']?>" class="form-control" required="required">

													<label for="hinhanh">Hình ảnh</label>
													<input type="text" name="hinhanhtxt" value="<?=$value['hinhanh']?>" class="form-control" required="required">

													</input>
												</div>
											</div>

											<div class="modal-footer">
												<button type="button" class="btn btn_default" data-dismiss="modal">Đóng</button>
												<button type="submit" class="btn btn-defaults">Lưu</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</td>

						<!--Nút xóa -->
						<td>
							<a class="btn btn-danger btn-sm" data-toggle="modal" href="#del<?=$value['idsanpham'];?>">
								<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
							</a>
							<div class="modal fade" id="del<?=$value['idsanpham'];?>">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Thông báo</h4>
										</div>
										<div class="modal-body">
											Bạn chắc chắn muốn xóa sản phẩm này??: <strong><?=$value['ten']?></strong>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn_default" data-dismiss="modal">Đóng</button>
											<a href="<?=base_url."index.php?module=quanlysanpham&action=delete&id=".$value['idsanpham']?>" class="btn btn-danger">Xác nhận xóa</a>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>

<?php endforeach; ?>
	</tbody>
</table>