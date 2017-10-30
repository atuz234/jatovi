<div class="container">
	
	<div class="col-md-3">
		Danh mục sản phẩm
	</div>
	<div class="col-md-9">

		<div class="row">
			<div class="col-md-5">
				
			</div>
			<div class="col-md-7">
				<div class="tensp"><?=$sanphams['ten']?></div>
				<div class="gia">
					<span class="nhan_gia">Giá: </span>
					<span class="old_price"><?=$sanphams['giacu'] ?></span> 
					<span class="new_price"><?=$sanphams['giamoi']?></span> 
				</div>
				<div class="nsx">
					<span class="nhasanxuat">Nhà sản xuất: </span>
					<span class="tennsx"><?=$sanphams['nsx_ten']?>, </span>
					<span class="xuatsu"><?=$sanphams['xuatsu']?></span>
				</div>
				<div class="muahang">
					<input type="number" name="slmua" style="width: 50px">
					<div class="btn btn-default">Mua hàng</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="mota">
					<div class="tieude">
						<span>
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
				<div class="splienquan">
					<div class="tieude">
						<span>
							Sản phẩm liên quan
						</span>
					</div>
					<div class="splq">
						
						<?php foreach($splienquan as $key=>$value): ?>
                    
		                    <div class="col-md-3">
		                        <a href="<?=base_url?>index.php?module=sanpham&id=<?=$value['id']?>">
		                            <div class="spnb_image">
		                                <img src="<?=$value['hinhanh']?>">
		                            </div>
		                            <div class="spnb_name">
		                                <?=$value['ten'];?>
		                            </div>
		                        </a>
		                        <div class="spnb_price">
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
		<?php endif; ?>
	</div>	
	
</div>