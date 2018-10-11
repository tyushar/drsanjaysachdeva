<?php include('top-header.php'); ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Dr. Sanjay Sachdeva</title>
        <link rel="canonical" href="<?php echo $page_url; ?>" />
        <link type="image/x-icon" href="<?php echo base_url(); ?>/img/favicon.png" rel="shortcut icon">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1" />
        <meta name="robots" content="index, follow" />
        <meta name="author" content="" />
        <meta name="language" content="English" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css">

<style>
	.page_not_found{ width:100%; float:left; }
	.page_not_found img{ width:100%; float:left; }
</style>
	
	<!--Analytic Code-->
	<?php include('analytic-code.php') ?>
</head>

<body>
<div class="page-wrapper">
	<div class="preloader"></div>
	<?php include('header.php') ?>
		<div style="clear:both;"></div>
			<div class="page_not_found">
				<img src="<?php echo base_url(); ?>page_not_found.jpg" />
			</div>
		<div style="clear:both;"></div>
	<!-- Footer -->
	<?php include('footer.php') ?>
</div>
<!--Java script-->
</html>