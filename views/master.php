<?php $JATOVI->load->view('partial/header'); ?>
<div id="wrapper">
	<?php $JATOVI->load->view('partial/sidebar') ?>
	<div id="main">
		<?php $JATOVI->load->view($content, $contentdata) ?>
	</div>
</div>
<?php $JATOVI->load->view('partial/footer'); ?>