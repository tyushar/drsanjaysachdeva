<?php include('top-header.php'); ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Appointment | Dr. Sanjay Sachdeva</title>
        <link rel="canonical" href="<?php echo $page_url; ?>" />
        <link type="image/x-icon" href="<?php echo base_url(); ?>/img/favicon.png" rel="shortcut icon">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1" />
        <meta name="robots" content="index, follow" />
        <meta name="author" content="" />
        <meta name="language" content="English" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>3dParty/bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/global.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>3dParty/rs-plugin/css/pi.settings.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/typo.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>3dParty/colorbox/colorbox.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/portfolio.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/slider.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/counters.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/social.css"/>

	<!--Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic'
		  rel='stylesheet' type='text/css'/>

	<!--Fonts with Icons-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>3dParty/fontello/css/fontello.css"/>

</head>
<body>

<div id="pi-all">

<!-- Header -->
<?php
	include('header.php');
?>
<!-- End header -->

<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-base pi-section-base-gradient">
	<div class="pi-texture" style="background: url(img/hexagon.png) repeat;"></div>
	<div class="pi-section" style="padding: 20px 40px 15px;">
		<div class="pi-row">
			<div class="pi-col-sm-12 pi-center-text-xs">
				<h2 class="h1 pi-text-shadow" style="font-size:30px; font-weight:bold;"> Book Your Appointment </h2>
			</div>
		</div>
	</div>
</div>

<!-- Breadcrumbs -->
<div class="pi-section-w pi-border-bottom pi-section-grey">
	<div class="pi-section pi-titlebar pi-breadcrumb-only">
		<div class="pi-breadcrumb">
			<ul>
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li>Appointment</li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<div class="pi-section-w pi-section-white piICheck piStylishSelect">
	<div class="pi-section pi-padding-bottom-80">
		
		<!-- Row -->
		<div class="pi-row">
			
			<!-- Col 6 -->
			<div class="pi-col-xs-2">
			</div>
			<div class="pi-col-sm-8">
				<h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
					Take Appointment
				</h2>

				<!-- Contact form -->
				<form role="form" action="handlers/formContact.php" class="pi-contact-form">
					<div class="pi-error-container"></div>
					<div class="pi-row pi-grid-small-margins">
						<div class="pi-col-sm-6">
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputName1">First Name *</label>
								<input type="text" class="form-control form-control-name" id="exampleInputName1" placeholder="First Name">
							</div>
						</div>
						<div class="pi-col-sm-6">
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputName1">Last Name *</label>
								<input type="text" class="form-control form-control-name" id="exampleInputName1" placeholder="Last Name">
							</div>
						</div>
						<div class="pi-col-sm-6">
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control form-control-email" id="exampleInputEmail1" placeholder="e.g. mail@example.com">
							</div>
						</div>
						<div class="pi-col-sm-6">
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputPhone">Phone *</label>
								<input type="text" class="form-control form-control-phone" id="exampleInputPhone" placeholder="e.g. +11111111">
							</div>
						</div>
					</div>
					<div class="form-group pi-padding-bottom-10">
						<label for="exampleInputSelect">Appointment Date *</label>
						<input type="date" class="form-control form-control-phone" id="exampleInputPhone" placeholder="e.g. +11111111">
					</div>
					<div class="pi-row pi-grid-small-margins">
						<div class="pi-col-sm-12">
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputEmail1">Subject</label>
								<input type="email" class="form-control form-control-email" id="exampleInputEmail1" placeholder="Subject">
							</div>
						</div>
					</div>
					<div class="form-group pi-padding-bottom-10">
						<label for="exampleInputMessage1">Message *</label>
						<textarea class="form-control form-control-comments" id="exampleInputMessage1" placeholder="How can we help?" rows="3"></textarea>
					</div>
					
					<p> <button class="btn pi-btn-base"> Book Appointment </button> </p>
				</form>
				<!-- End contact form -->

			</div>
			<!-- End col 6 -->
			<div class="pi-col-xs-2">
			</div>
			
		</div>
		<!-- End row -->
		
		<hr class="pi-divider-big">
		
	</div>
</div>
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- Footer -->
<?php
	include('footer.php');
?>
<!-- End footer -->

</div>
<div class="pi-scroll-top-arrow" data-scroll-to="0"></div>

<script src="<?php echo base_url(); ?>3dParty/jquery-1.11.0.min.js"></script>
<script src="<?php echo base_url(); ?>3dParty/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>3dParty/requestAnimationFramePolyfill.min.js"></script>
<script src="<?php echo base_url(); ?>3dParty/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url(); ?>3dParty/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>3dParty/colorbox/jquery.colorbox-min.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.global.js"></script>


</body>
</html>