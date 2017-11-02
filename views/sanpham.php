<div class="container">
	<div class="col-md-3">
		<div>
			Danh mục sản phẩm
		</div>
		<div>
			
		</div>
	</div>
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-5">
				<div class="sanpham_hinhanh">
					<img src="<?=$sanphams['hinhanh']?>" width="260px" height="340px">
				</div>
			</div>
			<div class="col-md-7">
				<div class="tensp" style="font-weight: bold; font-size: 25px;color: red;"><?=$sanphams['ten']?></div>
				<div class="gia" style=" font-size: 30px;">
					<span class="nhan_gia" style="font-weight: bold; color: pink;">Giá: </span>
					<span class="old_price"><?=$sanphams['giacu'] ?></span> 
					<span class="new_price"><?=$sanphams['giamoi']?></span> 
				</div>
				<div class="nsx">
					<span class="nhasanxuat" >Nhà sản xuất: </span>
					<span class="tennsx" style="font-weight: bold;"><?=$sanphams['nsx_ten']?>, </span>
					<span class="xuatsu" style="font-weight: bold;"><?=$sanphams['xuatsu']?></span>
				</div>
				<div class="muahang">
					<input type="number" value="1" min="1" name="slmua" style="width: 50px">
					<div class="btn btn-default">Mua hàng</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="mota">
					<div class="tieude" style="margin-top: 15px; margin-bottom: 10px">
						<span style="padding:10px;border-top-left-radius: 20px; border-bottom-right-radius: 20px; background-color: #FF4B82;">
							Mô tả
						</span>
					</div>
					<div class="noidung">
						<?=$sanphams['mota']?>
					</div>
				</div>
			</div>
		</div>
		<?php if(isset($splienquan)): ?>
			<div class="row">
			<div class="col-md-12">
				<div class="nhomsp" >
					<div class="nhomsp_title">
						<span>
							Sản phẩm liên quan
						</span>
					</div>
					<div class="nhomsp_items">
		            	<div class="row">
		            		<?php foreach($splienquan as $key=>$value): ?>
	                    
			                    <div class="col-md-3">
			                        <a href="<?=base_url?>index.php?module=sanpham&id=<?=$value['id']?>">
			                            <div class="sp_image">
			                                <img src="<?=$value['hinhanh']?>">
			                            </div>
			                            <div class="sp_name" >
			                                <?=$value['ten'];?>
			                            </div>
			                        </a>
			                        <div class="sp_price">
			                            <span class="old_price"><?=$value['giacu']?></span>
			                            <span class="new_price"><?=$value['giamoi'] ?></span>  
			                        </div>
			                        <a href="#">
			                            <div class="btn btn-default">
			                                Thêm vào giỏ
			                            </div>
			                        </a>
			                    </div>
			                    
			                <?php endforeach; ?>
		            	</div>
					</div>
				</div>
			</div>
			</div>
		<?php endif; ?>
	</div>	
	
</div>