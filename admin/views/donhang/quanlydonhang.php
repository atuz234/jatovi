<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Quản Lý Đơn Hàng</h2>
            <div  id="timkiem">
            	<form method="post" action="<?=base_url."index.php?module=quanlydonhang&action=index"?>">
                	<input type="text" name="timkiem" placeholder="Search..."      value="<?= $search;?>" />
      		
                 	<input type="submit" value="Tìm Kiếm" class="btn btn-primary btn-sm" >
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
						<th>Mã Đơn Hàng</th>
						<th>Email</th>
						<th>Số Điện Thoại</th>
						<th>Địa Chỉ</th>
                        <th>Ngày Đặt Hàng</th>
						<th>Tổng Tiền</th>
						<th>Trạng Thái</th>
						<th>Cập Nhật</th>
						<th>Chi Tiết</th>
					</tr>
				</thead>
				<tbody>
                 <?php
				
				 $total_records = count($tongdong);
				
				 	$current_page =$p;
					
       				 $limit = 2;
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
							<td colspan="15">Không Đơn Hàng</td>
						</tr>
					<?php }else { ?>
					<?php foreach ($list as $value):?>
						<tr>
							<td><?= $value['id_donhang'];?></td>
							<td><?= $value['email'];?></td>
							<td><?= $value['sodienthoai'];?></td>
                            <td><?= $value['diachi'];?></td>
                            <td><?= $value['ngaydathang'];?></td>
							<td><?=number_format($value['sotien'])."&nbsp; VNĐ";?></td>
                            <td><?php if($value['tinhtrang']==0){echo "Đã Huỷ";}
										else if($value['tinhtrang']==1){echo "Đăng Xử Lý";}
										else if($value['tinhtrang']==2){echo "Hoàn Thành";}?></td>
                            
                           <!-- cap nhat -->
                            <td >
								<a href="#capnhat<?=$value['id_donhang'];?>" class="btn btn-primary  btn-sm" data-toggle="modal">
									<i class="fa fa-cog" aria-hidden="true"></i> 
								</a>
								<div class="modal fade" id="capnhat<?=$value['id_donhang'];?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
													&times;
												</button>
												<h4 class="modal-title">Cập Nhật Đơn Hàng: <?=$value['id_donhang'];?></h4>
											</div>
											<form method="post" action="<?=base_url."index.php?module=quanlydonhang&action=capnhat"?>">
												<div class="modal-body">
													<div class="form-group">   
                                                    <input type="hidden" name="id_donhang" value="<?= $value['id_donhang']; ?>" class="form-control" required="required">                                                   
														<label for="txttaikhoan" >Trạng Thái</label>: 
														<select  name="tinhtrang" >
                                                        	<option <?php if($value['tinhtrang']==0){echo "selected='selected'";}?> value="0" >Đã Huỷ</option>
                                                          	 <option <?php if($value['tinhtrang']==1){echo "selected='selected'";}?> value="1" >Đang Xử Lý</option>
                                                            <option <?php if($value['tinhtrang']==2){echo "selected='selected'";}?> value="2" >Hoàn Thành</option>
                                                        </select>
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
                           <!-- Xem Chi Tiết -->
							<td>
								<a href="<?=base_url."index.php?module=quanlydonhang&action=chitiet&id=".$value['id_donhang']?>"class="btn btn-primary btn-sm" data-toggle="modal">
									Chi Tiết Đơn Hàng
								</a>
								
							</td>
					<?php endforeach;?>
                    <?php }?>
				</tbody>
			</table>
             <?php
            if($total_records>2){ ?>
              <div  align="center">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG

            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
             if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?module=quanlydonhang&action=index&search='.$search.'&p='.($current_page-1).'">Prev</a>     &nbsp; ';
            }            
             //Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
               //  Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span>    &nbsp;  ';
                }
                else{
				   
                    echo '<a href="index.php?module=quanlydonhang&action=index&search='.$search.'&p='.$i.'">'.$i.'</a>  ';
                }
            }
            
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?module=quanlydonhang&action=index&search='.$search.'&p='.($current_page+1).' ">     &nbsp;Next</a> ';
				
            }		
           ?>
        </div>
        <?php }?>
		</div>
	</div>
</div>