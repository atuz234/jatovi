<div class="container">
	<div class="row">
		<div class="col-md-3">
			Danh mục sản phẩm
		</div>
		<div class="col-md-4">
			
		</div>
		<div class="col-md-5">
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
		<div class="col-md-3">
			
		</div>
		<div class="col-md-9">
			<div class="mota">
				<div class="title">
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
	<div class="row">
		
	</div>
</div>