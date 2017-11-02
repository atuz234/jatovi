<div class="container">
	<div class="col-md-3">
		<div>
			Danh mục sản phẩm
		</div>
		<div>
            <?php 
                include_once BASEPATH.'models/danhmucside_model.php';
                $danhmuc=$danhmucside_model->select_danhmuc();
                foreach ($danhmuc as $key => $value) {
            ?>
                <div style="font-size: 15px;padding-top: 10px; border-bottom: dotted 1px black;"><a href="<?=$value['dm_url']?>"><?=$value['name']?></a></div>
            <?php
                }
            ?>
        </div>
	</div>
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-5">
				<div class="sanpham_hinhanh">
					<img src="public/images/sanpham/<?=$sanphams['hinhanh']?>" width="260px" height="340px">
				</div>
			</div>
			<div class="col-md-7">
				<div class="tensp" style="font-weight: bold; font-size: 25px;color: red;"><?=$sanphams['ten']?></div>
				<div class="gia" style=" font-size: 30px; border-bottom: dotted 1px black;">
					<span class="nhan_gia" style="font-weight: bold; color: pink;">Giá: </span>
					<span class="old_price"><?=$sanphams['giacu'] ?></span> 
					<span class="new_price"><?=$sanphams['giamoi']?></span> 
				</div>
				<div class="nsx" style="border-bottom: dotted 1px black; margin-bottom:5px; margin-top: 5px; ">
					<span class="nhasanxuat" >Nhà sản xuất: </span>
					<span class="tennsx" style="font-weight: bold;"><?=$sanphams['nsx_ten']?>, </span>
					<span class="xuatsu" style="font-weight: bold;"><?=$sanphams['xuatsu']?></span>
				</div>
                <div>
                	<span class="luotxem">Lượt xem: <?=$sanphams['luotxem']?> |</span>
                    <span class="luotmua">Đã Bán: <?=$sanphams['damua']?></span>
                </div>
				<div class="muahang">
					<a href="<?=base_url."index.php?module=giohang&action=themsp&id=".$sanphams['id']?>">
                        <div class="btn btn-default">
                            Thêm vào giỏ
                        </div>
                    </a>
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
			                                <img src="public/images/sanpham/<?=$value['hinhanh']?>">
			                            </div>
			                            <div class="sp_name" >
			                                <?=$value['ten'];?>
			                            </div>
			                        </a>
			                        <div class="sp_price">
			                            <span class="old_price"><?=number_format($value['giacu'])?></span>
			                            <span class="new_price"><?=number_format($value['giamoi']) ?></span>  
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
