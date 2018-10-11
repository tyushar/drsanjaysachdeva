<?php include('top-header.php'); ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Testimonials</title>
        <link rel="canonical" href="<?php echo $page_url; ?>" />
        <link type="image/x-icon" href="<?php echo base_url(); ?>/img/favicon.png" rel="shortcut icon">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1" />
        <meta name="robots" content="index, follow" />
        <meta name="author" content="" />
        <meta name="language" content="English" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
	
	<link rel="shortcut icon" href="/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>3dParty/bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/global.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/typo.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>3dParty/colorbox/colorbox.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/testimonials.css"/>
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

<div id="page"><div class="pi-section-w pi-section-white">
	<div class="pi-section">
		
		<h4 class="pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-25">
			Testimonials
		</h4>
		
		<!-- Row -->
		<div class="pi-row">
			
			<!-- Col 6 -->
			<div class="pi-col-xs-8">
			
				<?php
					$slct_sql = "select * from isols_testimonial Where status='1'";
					$slct_result = mysql_query($slct_sql);
					while($slct_row = mysql_fetch_assoc($slct_result))
					{	
					$heading = $slct_row['heading'];
					$profession = $slct_row['profession'];
					$htestimonial = $slct_row['testimonial'];
					$image = $slct_row['image'];
					?>
			
				<div class="pi-testimonial pi-testimonial-author-with-photo">
					<div class="pi-testimonial-content pi-testimonial-content-quotes">
						<?php echo $htestimonial; ?>
					</div>
					<div class="pi-testimonial-author pi-clearfix">
						<span class="pi-testimonial-author-photo pi-img-round"><img src="<?php echo base_url(); ?>uploaded-images/testimonial/<?php echo $image; ?>" alt="" /></span>
						<div>
							<p class="pi-italic pi-no-margin-bottom"><a> - <?php echo $profession; ?></a></p>
						</div>
					</div>
				</div>
				<?php } ?>

			</div>

			<div class="pi-col-xs-4">
			
				

			</div>
		</div>
		<!-- End row -->
		
		<hr class="pi-divider-gap-40">
		
	</div>
</div>

</div>

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