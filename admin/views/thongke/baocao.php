
<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Báo cáo</h2>
			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table id="tbbaocao" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên sản phẩm</th>
					<th>Danh mục</th>
					<th>Nhà sản xuất</th>
					<th>Doanh thu</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; foreach ($dlbaocao as $key => $value): ?>
					<tr>
						<td><?=$i++?></td>
						<td><?=$value['ten']?></td>
						<td><?=$value['tendm']?></td>
						<td><?=$value['nsx_ten']?></td>
						<td><?=$value['doanhthu']?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>