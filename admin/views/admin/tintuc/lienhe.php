<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Liên hệ</h2>
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
						<th>STT</th>
						<th>Tên</th>
						<th>Email</th>
						<th>Tiêu đề</th>
						<th>Nội dung</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach ($lienhe as $value): ?>
						<tr>
							<td><?=$i++?></td>
							<td><?=$value['ten']?></td>
							<td><?=$value['email']?></td>
							<td><?=$value['tieude']?></td>
							<td><?=$value['noidung']?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>