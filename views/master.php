<?php require BASEPATH.'/views/partial/header.php'; ?>
<div id="wrapper">
	<?php $JATOVI->load->view('partial/sidebar') ?>
	<a href="<?=base_url?>index.php?action=page_logout">Đăng xuất</a>
	<div id="content">
		<h1>This is master</h1>
	</div>
</div>
<?php require BASEPATH.'/views/partial/footer.php'; ?>