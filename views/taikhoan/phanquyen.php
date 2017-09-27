<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
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
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
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
			<a class="btn btn-primary" data-toggle="modal" href="#insertdiv"><i class="fa fa-plus-square"></i> Thêm mới</a>
			<div class="clearfix"></div>
		</div>
		<!-- <div class="modal fade" id="insertdiv">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Thêm tài khoản</h4>
					</div>
					<form action="<?=base_url."index.php?module=taikhoanadmin&action=insert"?>" method="post">
						<div class="modal-body">
							<div class="form-group">

								<label for="insert_taikhoan">Tên tài khoản</label>
								<input type="text" name="insert_taikhoan" value="" class="form-control" required="required">

								<label for="insert_hoten">Họ tên</label>
								<input type="text" name="insert_hoten" value="" class="form-control" required="required">	
								
								<label for="insert_gender">Giới tính</label>
								<br>	
								<input type="radio" name="insert_gender" id="nam" value="1" checked="checked" class="form-inline">Nam 	
								<input type="radio" name="insert_gender" id="nu" value="0" class="form-inline">Nữ	 				
								<input type="radio" name="insert_gender" id="khac" value="2" class="form-inline">Khác	

								<br>
								<label for="insert_nhom">Nhóm</label>
								<select name="insert_nhom" id="" class="form-control" required="required">
									<?php foreach($groups as $nhom): ?>
										<option value="<?=$nhom['grid'];?>" ><?=$nhom['tennhom'];?></option>
									<?php endforeach ?>
								</select>
								
								<label for="insert_password">Mật khẩu</label>
								<input type="password" name="insert_password" value="" class="form-control" required="required">
							
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
						echo"<button class='tablinks' onclick='openCity(event, {$nhom['idnhom']})'";
						if($nhom['idnhom']==1){echo "id='defaultOpen'";}
						echo">{$nhom['tennhom']}</button>";
					?>
				<?php endforeach; ?>
			</div>
			<!-- Tất cả chức năng -->
			<?php foreach($nhoms as $nhom): ?>
				<div id="<?=$nhom['idnhom']?>">
					
				</div>
			<?php endforeach; ?>
			<div id="London" class="tabcontent">
			  <h3>London</h3>
			  <p>London is the capital city of England.</p>
			</div>

			<div id="1" class="tabcontent">
			  <h3>Paris</h3>
			  <p>Paris is the capital of France.</p> 
			</div>

			<div id="3" class="tabcontent">
			  <h3>Tokyo</h3>
			  <p>Tokyo is the capital of Japan.</p>
			</div>
			<script>
			function openCity(evt, cityName) {
			    var i, tabcontent, tablinks;
			    tabcontent = document.getElementsByClassName("tabcontent");
			    for (i = 0; i < tabcontent.length; i++) {
			        tabcontent[i].style.display = "none";
			    }
			    tablinks = document.getElementsByClassName("tablinks");
			    for (i = 0; i < tablinks.length; i++) {
			        tablinks[i].className = tablinks[i].className.replace(" active", "");
			    }
			    document.getElementById(cityName).style.display = "block";
			    evt.currentTarget.className += " active";
			}

			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();
			</script>
		</div>
	</div>
</div>