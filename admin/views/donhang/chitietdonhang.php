<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Chi Tiết Đơn Hàng</h2>    
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Tên Sản Phẩm</th>
                        <th>Ngày Đặt Hàng</th>
						<th>Số Lượng</th>
						<th>Đơn Giá</th>
						<th>Thành Tiền</th>
                        
					</tr>
				</thead>
				<tbody>
					<?php if (isset($list)): ?>
						<?php foreach ($list as $value):?>
							<tr>
								<td><?= $value['ten'];?></td>
								<td><?= $value['ngaydathang'];?></td>
								<td><?= $value['soluong'];?></td>
	                            <td><?= $value['dongia'];?></td>
								<td><?php $hanhtien =$value['soluong'] * $value['dongia'];
								echo $hanhtien;?></td>
						<?php endforeach;?>
					<?php else: ?>
						<tr>
							<td colspan="5">Không có dữ liệu</td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>