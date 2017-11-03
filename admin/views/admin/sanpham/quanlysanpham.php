<script>
$(document).ready(function() {
		$(".changepass").change(function() {
			if ($(".changepass").is(":checked")) {
				$(".hinhanh").addClass('show');
			}else {
				$(".hinhanh").removeClass('show');
			}
		});
});
	
</script>
<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Quản lý sản phẩm</h2>
			<div class="clearfix"></div>
              <div id="timkiem">
            	<form method="post" action="<?=base_url."index.php?module=quanlysanpham&action=index"?>"?>
                	<input type="text" name="timkiem"  placeholder="Search Product..."     value="<?= $search?>" />
                 	<input type="submit" value="Tìm Kiếm"    class="btn btn-primary btn-sm" >
            	</form>
            </div>
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
						<form enctype="multipart/form-data" method="post" action="<?=base_url."index.php?module=quanlysanpham&action=insert"?>" action="view/upload/xuly.php?id=<?php echo $id ?>">
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

									<label for="">Hình ảnh</label>
                                                         <div id="chonfile">
															<input type="file" name="hinhanhup[]" required="required" multiple>
                                                        </div>
                                                        <div onclick="myFunction()"   class="btn btn-primary  btn-sm "  id="themanh">
                                                            
               													 <i class="fa fa-plus" aria-hidden="true" ></i>
                                       										 
                                   							
                                                         </div>
                                                          <br />
									
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
						<th>STT</th>
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
                 <?php
				
				 $total_records = count($tongdong);
				
				 	$current_page =$p;
					
       				 $limit = 5;
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
							<td colspan="15">Không Có Tin Tức </td>
						</tr>
					<?php }else { $i=1;?>
					<?php foreach ($list as $value):?> 
                    <?php $a = explode(',', $value['mota']);?>
						<tr>
							<td><?=$i++;?></td>
							<td><?=$value['ten'] ?></td>
							<td><?=$value['nsx_ten']?></td>
							<td><?=$a[0].",".$a[1]."."?></td>
							<td><?=$value['datesanxuat']?></td>
							<td><?=$value['datesudung']?></td>
							<td><?=number_format($value['giacu']);?>&nbsp;VNĐ</td>
							<td><?=number_format($value['giamoi'])?>&nbsp;VNĐ</td>
							<td><?=$value['donvi']?></td>
							<td><img width="150px" height="150px" src="../public/images/sanpham/<?=$value['hinhanh']?>" /></td>
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
										<form enctype="multipart/form-data" action="<?=base_url."index.php?module=quanlysanpham&action=update"?>" action="view/upload/xuly.php?id=<?php echo $id ?>" method="post">
											<div class="modal-body">
												<div class="form-group">
													<input type="hidden" name="idtxt" value="<?=$value['id']?>">

													<label for="txtsanpham">Tên sản phẩm</label>
													<input type="text" name="sanphamtxt" value="<?=$value['ten']?>" class="form-control" required="required">


													<label for="motatxt">Mô tả</label>
													<textarea name="motatxt"  class="form-control" required="required"><?=$value['mota']?></textarea>



													<label for="ngaysanxuattxt">Ngày sản xuất</label>
													<input type="date" name="ngaysanxuattxt" value="<?=$value['datesanxuat']?>" class="form-control" required="required">

													<label for="hansudungtxt">Hạn sử dụng</label>
                                                    
													<input type="date" name="hansudungtxt" value="<?=$value['datesudung']?>" class="form-control" required="required">

													<label for="giacutxt">Giá cũ</label>
													<input type="text"  name="giacutxt" value="<?=number_format($value['giacu']);?>&nbsp;VNĐ" class="form-control" required="required">

													<label for="giamoitxt">Giá mới</label>
													<input type="text" name="giamoitxt" value="<?=number_format($value['giamoi']);?>&nbsp;VNĐ" class="form-control" required="required">

													<label for="donvitxt">Đơn vị tính</label>
													<input type="text" name="donvitxt" value="<?=$value['donvi']?>" class="form-control" required="required">
													<label for="">Hình ảnh</label>
                                                          
															<input type="text" id="imgdf" disabled="disabled" class="form-control" name="hinhanhcu" value="<?=$value['hinhanh']?>" />
                                                            
      <!-- Nút chọn hiển thị  -->
														<div class="form-inline">
															<label for="tennhom">Đổi hình ảnh<span class="required"></span>
															</label>
															<div class="checkbox">
																<input class="changepass" name="changepass" type="checkbox" class="js-switch">
															</div>
														</div>

														<!-- thay hinh anh -->
														<div class="hinhanh" style="display: none">
															<div><label>Hình ảnh mới: </label>
                                                            <input type="file" id="img" name="hinhanh"  multiple >
															<div>
														</div>
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
<?php } ?>
	</tbody>
</table>
 <?php
            if($total_records>5){ ?>
            <div  align="center">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG

            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
             if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?module=quanlysanpham&action=index&search='.$search.'&p='.($current_page-1).'">Prev</a>     &nbsp; ';
            }            
             //Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
               //  Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span>    &nbsp;  ';
                }
                else{
				   
                    echo '<a href="index.php?module=quanlysanpham&action=index&search='.$search.'&p='.$i.'">'.$i.'</a>  ';
                }
            }
            
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?module=quanlysanpham&action=index&search='.$search.'&p='.($current_page+1).' ">     &nbsp;Next</a> ';
				
            }		
			?>
           
        </div>
		<?php }?>