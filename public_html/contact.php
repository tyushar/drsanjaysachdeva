<?php include('top-header.php'); ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Contact Us | Dr. Sanjay Sachdeva</title>
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
				<h2 class="h1 pi-text-shadow" style="font-size:30px; font-weight:bold;"> Contact </h2>
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
				<li>Contact</li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-white piICheck piStylishSelect piSocials">
	<div class="pi-section">

		<div class="pi-row">
			<div class="pi-col-sm-8">
				<h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
					Get In Touch
				</h2>

				<!-- Contact form -->
				<div class="pi-contact-form">
					<div class="pi-error-container"></div>
					<div class="">
						
						<div class="form-group pi-padding-bottom-10">
							<label for="exampleInputName1">Full Name *</label>
							<input type="text" name="contact_name" id="contact_name" class="form-control form-control-name" placeholder="your name">
							<span style="color: #EC2027;" id="contact_name_err"></span>
							
						</div>
						
						
						
						<div class="form-group pi-padding-bottom-10">
							<label for="exampleInputEmail1">Email address *</label>
							<input type="text" name="contact_email" id="contact_email" class="form-control form-control-email" placeholder="your email">
							<span style="color: #EC2027;" id="contact_email_err"></span>
						</div>
						
						<div class="form-group pi-padding-bottom-10">
							<label for="exampleInputPhone">Phone</label><input type="tel" class="form-control form-control-phone" name="h-user-phone" id= "hpuserphone" placeholder="Your Mobile No." maxlength="10" />
                            <span style="color: #EC2027;" id="h_user_phone_err" ></span>
							
						</div>
						
						<div class="form-group pi-padding-bottom-10">
							<label for="exampleInputMessage1">Message *</label>
							<textarea name="contact_comments" class="form-control form-control-comments" id="contact_comments" placeholder="write message here"></textarea>
							<span style="color: #EC2027;" id="contact_comments_err"></span>
							
						</div>
						<input type="hidden" name="type" value="contact" id="contact"/>
						<p>
						<button onclick="contact_validate()" class="btn pi-btn-base">Send Message</button><br>
						<span style="color: #24DA5C; font-size:14px;" id="contact_success"></span>
							
						</p>
					</div>
				</div>
				<!-- End contact form -->

			</div>
			<div class="pi-col-sm-4">

				<h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
					Contact Us
				</h2>
				
				<ul class="pi-list-with-icons pi-list-big-margins pi-padding-bottom-10">
					<li><span class="pi-bullet-icon"><i class="icon-location"></i></span> B-163, Greater Kailash – 1,<br> New Delhi – 110048<br> Contact No.: +91-11-46510855, +91-11-29247507 <!--<br> <a href="#map-attached">Get Directions</a>--></li>
					
					<li><span class="pi-bullet-icon"><i class="icon-mail"></i></span><a>contact@drsachdevasanjay.com</a></li>
					
					<li><span class="pi-bullet-icon"><i class="icon-phone"></i></span><strong> +91-9810129864,
 9910317286, 9717117594</strong></li>
					
					<li><span class="pi-bullet-icon"><i class="icon-clock"></i></span>Monday - Saturday: <strong>09:00 AM - 8:00 PM</strong>
					<br>
					Sunday: <strong>Closed</strong></li>
				</ul>
				<!--<ul class="pi-social-icons pi-small pi-jump pi-colored-bg pi-round pi-padding-bottom-10">
					<li><a href="#" class="pi-social-icon-facebook"><i class="icon-facebook"></i></a></li>
					<li><a href="#" class="pi-social-icon-twitter"><i class="icon-twitter"></i></a></li>
					<li><a href="#" class="pi-social-icon-gplus"><i class="icon-gplus"></i></a></li>
				</ul>-->

			</div>
		</div>
	
	
		<div class="pi-row margi-top-fifty" id="map-attached">
			<div class="pi-col-sm-12">
				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:100%;'><div id='gmap_canvas' style='height:440px;width:100%;'></div><div><small><a href="http://www.googlemapsgenerator.com/en/">Quickly generate and embed a Google Map on your site!									Click here									Visit our website</a></small></div><div><small><a href="https://premiumlinkgenerator.com/">hitfile net premium downloads website</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(28.55524219784403,77.23541617672115),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.55524219784403,77.23541617672115)});infowindow = new google.maps.InfoWindow({content:'<strong>Dr, Sanjay Sachdeva</strong><br>B-163 Greater Kailash – 1,<br>  New Delhi – 110048<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
			</div>
		</div>

	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->
<div class="pi-section-w pi-section-white">
	<div class="pi-google-map pi-google-map-wide googleMap"
		 data-map-type="roadmap"
		 data-map-zoom="14"
		 data-map-style="base"
		 data-map-marker="img/marker-base.png"
		 data-map-marker-size="67,81"
		 data-map-marker-anchor="30,81"
		 data-map-coords="40.70502;-74.006344"
		 data-map-address="Vancouver"
		 data-map-address2="Toronto">
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
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
<script src="<?php echo base_url(); ?>scripts/pi.googleMapStyles.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php echo base_url(); ?>3dParty/jquery.gmap.min.js"></script>
<script src="<?php echo base_url(); ?>3dParty/requestAnimationFramePolyfill.min.js"></script>
<script src="<?php echo base_url(); ?>3dParty/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url(); ?>3dParty/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>3dParty/colorbox/jquery.colorbox-min.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.global.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.init.map.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.parallax.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.init.parallax.js"></script>
<script src="<?php echo base_url(); ?>scripts/allform-validation.js"></script>


</body>
</html>