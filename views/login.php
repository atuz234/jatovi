<?php $JATOVI->load->view('partial/header'); ?>
<form id="form_log" action="<?=base_url?>index.php?action=page_logincheck" method='post'>
	<table>
		<tr>
			<td><input type ="text" name="ten_taikhoan" placeholder="Tài khoản"></td>
		</tr>
		<tr>
			<td><input type ="password" name="matkhau" placeholder="Mật khẩu"></td>
		</tr>
		<tr>
			<td><button type="submit" id="bt_log">Đăng nhập</button></td>
		</tr>
	</table>
</form>
<?php $JATOVI->load->view('partial/footer'); ?>
