<?php include_once '../../cores/define.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jatovi | Login</title>
	<link rel="stylesheet" href="../../public/scripts/css/form_style.css">
</head>
<body>
	<div class="login_wrapper">
		
			<div class="form_login">
				<form id="form_log" action="<?=base_url?>index.php?module=page&action=page_logincheck" method='post'>
					<table style="padding-top: 50px;">
						<tr>
							<td><input type ="text" name="ten_taikhoan" placeholder="  Tài khoản"></td>
						</tr>
						<tr>
							<td><input type ="password" name="matkhau" placeholder="  Mật khẩu"></td>
						</tr>
						<tr>
							<td><button type="submit" id="bt_log">Đăng nhập</button></td>
						</tr>
					</table>
				</form>
			</div>
		
	</div>
		
</body>
</html>
