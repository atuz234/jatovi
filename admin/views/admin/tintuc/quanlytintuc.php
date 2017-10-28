<?php include_once BASEPATH.'/controllers/admin/quanlytintuc.php';	 ?>
<script>
function myFunction() {
		$("#chonfile").append("<input type='file' name='hinhanh[]'>");
}
</script>
<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Quản Lý Tin Tức</h2>
             <div align="center" id="timkiem">
            	<form method="post" action="<?=base_url."index.php?module=quanlytintuc&action=timkiem"?>"?>
                	<input type="text" name="timkiem"  placeholder="Search..."     value="" />
                 	<input type="submit" value="Tìm Kiếm"    class="btn btn-primary btn-sm" >
            	</form>
            </div>
            
            <a href="#add" class="btn btn-primary " data-toggle="modal">
            <i class="fa fa-plus" aria-hidden="true"></i>
                                    Thêm mới
								</a>
			
            	<div class="modal fade" id="add">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
													&times;
												</button>
												<h4 class="modal-title">Thêm Tin Tức</h4>
											</div>
											<form method="post" enctype="multipart/form-data" action="<?=base_url."index.php?module=quanlytintuc&action=add"?>">
												<div class="modal-body">
													<div class="form-group">
														<label for="txttieude">Tiêu Đề</label>
														<input type="text" value="" name="tieude" class="form-control" required="required">                                                      
                                                         <label for="">Thêm Ảnh</label>
                                                         <div id="chonfile">
															<input type="file" name="hinhanh[]"required="required">
                                                        </div>
                                                        <div onclick="myFunction()"   class="btn btn-primary  btn-sm "  id="themanh">
                                                            
               													 <i class="fa fa-plus" aria-hidden="true" ></i>
                                       										 
                                   							
                                                         </div>
                                                          <br />
                                                        <label for="txtnoidung">Nội Dung</label>
														<textarea id="myeditor" name="noidung" class="form-control" required="required" value=""></textarea >
                                                        <script>
 															CKEDITOR.replace('myeditor');
														</script>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      												 <button type="submit" name="submit	" class="btn btn-primary">Thêm mới</button>
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
		<div class="popover-title">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tiêu Đề </th>
						<th>Ngày Đăng</th>
						<th>Người Đăng</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
					</tr>
				</thead>
				<tbody>
                <?php
				
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
							<td colspan="15">Không Có Tin Tức </td>
						</tr>
					<?php }else { ?>
					<?php foreach ($list as $value): ?>
						<tr>
                        
							<td><?=$value['id_tintuc']?></td>
							<td><?=$value['tieude']?></td>
							<td><?=$value['ngaydang']?></td>
							<td><?=$value['tacgia']?></td>
							<!-- Nút sửa -->
							<td>
								<a href="#edit<?=$value['id_tintuc'];?>" class="btn btn-primary btn-sm" data-toggle="modal">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</a>
								<div class="modal fade" id="edit<?=$value['id_tintuc'];?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
													&times;
												</button>
												<h4 class="modal-title">Sửa Tin Tức </h4>
											</div>
											<form method="post" action="<?=base_url."index.php?module=quanlytintuc&action=edit"?>">
												<div class="modal-body">
													<div class="form-group">
                                                   		<input type="hidden" name="edit_id" value="<?= $value['id_tintuc']; ?>" class="form-control" required="required">
                                                        
														<label for="txttieude">Tiêu Đề</label>
														<input type="text" name="tieude" value="<?= $value['tieude']; ?>" class="form-control" required="required">
                                                        <label for="txtnoidung">Nội Dung</label>
														<textarea id="myeditor<?= $value['id_tintuc']; ?>" name="noidung" class="form-control" required="required" ><?=$value['noidung']?></textarea >
                                                        <script>
 															CKEDITOR.replace('myeditor<?= $value['id_tintuc']; ?>');
														</script>
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
								<a class="btn btn-danger btn-sm" data-toggle="modal" href="#del<?=$value['id_tintuc'];?>">
									<i class="glyphicon glyphicon-trash " aria-hidden="true"></i>
								</a>
								<div class="modal fade" id="del<?=$value['id_tintuc'];?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title">Thông báo</h4>
											</div>
											<div class="modal-body">
												Bạn có chắc chắn muốn xóa tin tức này?
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
												<a href="<?=base_url."index.php?module=quanlytintuc&action=delete&id=".$value['id_tintuc']?>" class="btn btn-danger">Xác nhận xóa</a>
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
                echo '<a href="index.php?module=quanlytintuc&action=timkiem&search='.$search.'&p='.($current_page-1).'">Prev</a>     &nbsp; ';
            }            
             //Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
               //  Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '  &nbsp;<span>'.$i.'</span>    &nbsp;  ';
                }
                else{
				   
                    echo '<a href="index.php?module=quanlytintuc&action=timkiem&search='.$search.'&p='.$i.'">'.$i.'</a>  ';
                }
            }
            
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?module=quanlytintuc&action=timkiem&search='.$search.'&p='.($current_page+1).' ">     &nbsp;Next</a> ';
				
            }		
			?>
           
        </div>
		<?php }?>
		</div>
	</div>
</div>