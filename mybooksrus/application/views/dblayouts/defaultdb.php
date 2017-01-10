<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Collegebooksrus <?php echo $title_for_layout ?></title> 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>
			var base_url = "<?php echo base_url(); ?>";
		</script>
		<link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dbstyle.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ui_msg/style.css" type="text/css">
		<script src="<?php echo base_url();?>assets/js/jquery/jquery.js"></script>
		<?php echo $this->layouts->print_includes(); ?>
	</head>
	<body>
	
		<?php $this->load->view('dblayouts/db_main_header'); ?>
		<?php $this->load->view('dblayouts/db_left_pan'); ?>
			<?php echo $content_for_layout; ?> 
		<?php $this->load->view('dblayouts/db_right_pan'); ?>
		<?php $this->load->view('dblayouts/db_main_footer'); ?>
		
		<script src="<?php echo base_url();?>assets/js/ui_msg/jQuery.miniNoty.js"></script>
		<script src="<?php echo base_url();?>assets/js/common.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/dbscript.js"></script>
	</body> 
</html>
