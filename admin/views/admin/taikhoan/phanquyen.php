<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
	float           : left;
	border          : 1px solid #ccc;
	background-color: #f1f1f1;
	width           : 30%;
	height          : 300px;
}

/* Style the buttons inside the tab */
div.tab button {
	display         : block;
	background-color: inherit;
	color           : black;
	padding         : 22px 16px;
	width           : 100%;
	border          : none;
	outline         : none;
	text-align      : left;
	cursor          : pointer;
	transition      : 0.3s;
	font-size       : 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
	float      : left;
	padding    : 0px 12px;
	border     : 1px solid #ccc;
	width      : 70%;
	border-left: none;
	height     : 300px;
}
</style>
<script>
	$(document).ready(function() {
		
	});
</script>
<div class="row">
	<div class="col-md-12">
		<div class="popover-title">
			<h2>Phân quyền</h2>
			<!-- <a class="btn btn-primary" data-toggle="modal" href="#insertdiv"><i class="fa fa-plus-square"></i> Thêm nhóm</a>
			<a class="btn btn-primary" data-toggle="modal" href="#insertdiv2"><i class="fa fa-plus-square"></i> Thêm chức năng</a>
			<div class="clearfix"></div> -->
		</div>
		<!-- <div class="modal fade" id="insertdiv">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Thêm nhóm mới</h4>
					</div>
					<form action="<?=base_url."index.php?module=phanquyen&action=insertnhom"?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label for="insert_taikhoan">Tên nhóm</label>
								<input type="text" name="insert_nhom" value="" class="form-control" required="required">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
								<button type="submit" class="btn btn-primary">Thêm</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade" id="insertdiv2">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Thêm chức năng</h4>
					</div>
					<form action="<?=base_url."index.php?module=phanquyen&action=insertcn"?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label for="insert_taikhoan">Tên chức năng  </label>
								<input type="text" name="insert_nhom" value="" class="form-control" required="required">
								<label for="insert_taikhoan">Trạng thái  </label>
								<input type="checkbox" name="insert_trangthai" value="" checked='checked'>
								<br>
								<label for="insert_taikhoan">URL </label>
								<input type="text" name="insert_nhom" value="" class="form-control" required="required">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
								<button type="submit" class="btn btn-primary">Thêm</button>
						</div>
					</form>
				</div>
			</div>
		</div> -->
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="">
			<!-- hiển thị nhóm -->
			<div class="tab">
				<?php foreach($nhoms as $nhom): ?>
					<?php  
						echo"<button class='tablinks' onclick='openphanquyen(event, {$nhom['idnhom']})'";
						if($nhom['idnhom']==1){echo "id='defaultOpen'";}
						echo">{$nhom['tennhom']}</button>";
					?>
				<?php endforeach; ?>
			</div>
			<!-- Tất cả chức năng -->
			<?php foreach($nhoms as $nhom): ?>
				<div id="<?=$nhom['idnhom']?>" class="tabcontent">
					<table class="table table-striped">
						<caption><?=$nhom['tennhom']?></caption>
						<thead>
							<tr>
								<th>Chức năng</th>
								<th>Chọn</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($chucnangs as $chucnang): ?>
								<tr>
									<td><?php echo $chucnang['ten']; ?></td>
									<td>
										<input type="checkbox" name="cnchon" 
											<?php
												foreach ($dulieu as $value) {
													if ($value['id_nhom']==$nhom['idnhom'] && $value['id_chucnang'] == $chucnang['id']) {
														echo "checked='checked'";
													}
												}
											?> 
										/>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			<?php endforeach; ?>
			
			<script>
			function openphanquyen(evt, name_pq) {
			    var i, tabcontent, tablinks;
			    tabcontent = document.getElementsByClassName("tabcontent");
			    for (i = 0; i < tabcontent.length; i++) {
			        tabcontent[i].style.display = "none";
			    }
			    tablinks = document.getElementsByClassName("tablinks");
			    for (i = 0; i < tablinks.length; i++) {
			        tablinks[i].className = tablinks[i].className.replace(" active", "");
			    }
			    document.getElementById(name_pq).style.display = "block";
			    evt.currentTarget.className += " active";
			}

			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();
			</script>
		</div>
	</div>
</div>