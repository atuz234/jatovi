<?php $JATOVI->load->view('admin/partial/header'); ?>
<div id="wrapper">
	<?php $JATOVI->load->view('admin/partial/sidebar') ?>
	<div id="main">
		<?php $JATOVI->load->view($content, $contentdata) ?>
	</div>
</div>
<?php $JATOVI->load->view('admin/partial/footer'); ?>