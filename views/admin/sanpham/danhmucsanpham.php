<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Quản lý danh mục sản phẩm</h2>
			<a class="btn btn-primary" data-toggle="modal" href="#insertdiv"><i class="fa fa-plus-square"></i> Thêm mới</a>
			<div class="modal fade" id="insertdiv">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Thêm danh mục</h4>
							<div>
								<form action="<?=base_url."index.php?module=danhmucsanpham&action=insert"?>" method="post">
									<div class="modal-body">
										<div class="form-group">
											<label for="name">Tên danh mục</label>
											<input type="text" name="name"  class="form-control" required="required">

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
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($danhmuc as $value): ?>
					<tr>
						<td><?=$value['id']?></td>
						<td><?=$value['name']?></td>			
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
											<h4 class="modal-title">Thay đổi thông tin danh mục sản phẩm: <?=$value['name'];?></h4>
										</div>
										<form action="<?=base_url."index.php?module=danhmucsanpham&action=update"?>" method="post" >
											<div class="modal-body">
												<div class="form-group">
													<input type="hidden" name="txtid" value="<?=$value['id']?>">

													<label for="txtdanhmuc">Tên Danh mục</label>
													<input type="text" name="txtdanhmuc" value="<?=$value['name']?>" class="form-control" required ="required">
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
										Bạn chắc chắn muốn xóa danh mục <strong><?=$value['name']?></strong> này? 
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
										<a href="<?=base_url."index.php?module=danhmucsanpham&action=delete&id=".$value['id']?>" class="btn btn-danger">Xác nhận xóa</a>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
				</tbody>
			</table>