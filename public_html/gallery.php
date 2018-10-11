<?php include('top-header.php'); ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Galleries | Dr. Sanjay Sachdeva</title>
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
				<h2 class="h1 pi-text-shadow" style="font-size:30px; font-weight:bold;"> Gallery </h2>
			</div>
		</div>
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<!-- Breadcrumbs -->
<div class="pi-section-w pi-border-bottom pi-section-grey">
	<div class="pi-section pi-titlebar pi-breadcrumb-only">
		<div class="pi-breadcrumb">
			<ul>
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li>Gallery</li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-white pi-slider-enabled">
	<div class="pi-section">
	
		
				<?php
				 $slct_sql = "select * from isols_gallery_name";
				 $slct_result = mysql_query($slct_sql);
				while($slct_row = mysql_fetch_assoc($slct_result))
				{
				$gallery_id = $slct_row['id'];
				$gallery_thumb_name = $slct_row['gallery_thumb_name'];
				?>
				<div class="pi-row pi-padding-bottom-20">
				<div class="pi-col-sm-12">
				<h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-20 pi-margin-top-minus-5">
					<?php echo $gallery_thumb_name; ?>
				</h2>
				</div>
				<?php 
				$slct_sqls = "select * from isols_gallery_image WHERE gallery_id='$gallery_id' AND status='1' ORDER BY id DESC";
				

				$slct_results = mysql_query($slct_sqls);
				while($slct_rows = mysql_fetch_array($slct_results))
				{
				$slct_gallery_image = $slct_rows['image'];	
				?>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="<?php echo base_url(); ?>uploaded-images/gallery/<?php echo $slct_gallery_image; ?>"> <img src="<?php echo base_url(); ?>uploaded-images/gallery/<?php echo $slct_gallery_image; ?>" alt=""> </a>
				</div>
			</div>
			<?php  }  ?></div><hr class="pi-divider-gap-10">
				      <?php } ?>
		
		
		

		<!--<div class="pi-row pi-padding-bottom-20">
			<div class="pi-col-sm-12">
				<h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-20 pi-margin-top-minus-5">
					Coblation Technique
				</h2>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-one.png"> <img src="<?php echo base_url(); ?>img/cob-tech-one.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-two.png"> <img src="<?php echo base_url(); ?>img/cob-tech-two.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-three.png"> <img src="<?php echo base_url(); ?>img/cob-tech-three.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-four.png"> <img src="<?php echo base_url(); ?>img/cob-tech-four.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-five.png"> <img src="<?php echo base_url(); ?>img/cob-tech-five.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-six.png"> <img src="<?php echo base_url(); ?>img/cob-tech-six.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-seven.png"> <img src="<?php echo base_url(); ?>img/cob-tech-seven.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-eight.png"> <img src="<?php echo base_url(); ?>img/cob-tech-eight.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-nine.png"> <img src="<?php echo base_url(); ?>img/cob-tech-nine.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-ten.png"> <img src="<?php echo base_url(); ?>img/cob-tech-ten.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-eleven.png"> <img src="<?php echo base_url(); ?>img/cob-tech-eleven.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-twelve.png"> <img src="<?php echo base_url(); ?>img/cob-tech-twelve.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-thirteen.png"> <img src="<?php echo base_url(); ?>img/cob-tech-thirteen.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-fourteen.png"> <img src="<?php echo base_url(); ?>img/cob-tech-fourteen.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-fifteen.png"> <img src="<?php echo base_url(); ?>img/cob-tech-fifteen.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-sixteen.png"> <img src="<?php echo base_url(); ?>img/cob-tech-sixteen.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-seventeen.png"> <img src="<?php echo base_url(); ?>img/cob-tech-seventeen.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-eighteen.png"> <img src="<?php echo base_url(); ?>img/cob-tech-eighteen.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-ninteen.png"> <img src="<?php echo base_url(); ?>img/cob-tech-ninteen.png" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/cob-tech-twenty.png"> <img src="<?php echo base_url(); ?>img/cob-tech-twenty.png" alt=""> </a>
				</div>
			</div>
		</div>-->
		
		<hr class="pi-divider-gap-10">

		<div class="pi-row pi-padding-bottom-20">
			<div class="pi-col-sm-12">
				<h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-20 pi-margin-top-minus-5">
					Endo Ear
				</h2>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/end-ear-one.jpg"> <img src="<?php echo base_url(); ?>img/end-ear-one.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/end-ear-two.jpg"> <img src="<?php echo base_url(); ?>img/end-ear-two.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/end-ear-three.jpg"> <img src="<?php echo base_url(); ?>img/end-ear-three.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/end-ear-four.jpg"> <img src="<?php echo base_url(); ?>img/end-ear-four.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/end-ear-five.jpg"> <img src="<?php echo base_url(); ?>img/end-ear-five.jpg" alt=""> </a>
				</div>
			</div>
		</div>
		
		<hr class="pi-divider-gap-10">

		<div class="pi-row pi-padding-bottom-20">
			<div class="pi-col-sm-12">
				<h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-20 pi-margin-top-minus-5">
					Larynx And Trachea
				</h2>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-one.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-one.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-two.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-two.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-three.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-three.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-four.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-four.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-five.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-five.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-six.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-six.jpg" alt=""> </a>
				</div>
			</div>
			
			<div class="clearfix"> </div>
			
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-seven.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-seven.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-eight.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-eight.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-nine.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-nine.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-ten.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-ten.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-eleven.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-eleven.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-twelve.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-twelve.jpg" alt=""> </a>
				</div>
			</div>
			
			<div class="clearfix"> </div>
			
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-thirteen.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-thirteen.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-fourteen.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-fourteen.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-fifteen.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-fifteen.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-sixteen.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-sixteen.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-seventeen.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-seventeen.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-eighteen.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-eighteen.jpg" alt=""> </a>
				</div>
			</div>
			
			<div class="clearfix"> </div>
			
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-ninteen.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-ninteen.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-twenty.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-twenty.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-twenty-one.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-twenty-one.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-twenty-two.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-twenty-two.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-twenty-three.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-twenty-three.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-twenty-four.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-twenty-four.jpg" alt=""> </a>
				</div>
			</div>
			
			<div class="clearfix"> </div>
			
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-twenty-five.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-twenty-five.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-twenty-six.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-twenty-six.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-twenty-seven.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-twenty-seven.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-twenty-eight.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-twenty-eight.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/lar-tra-twenty-nine.jpg"> <img src="<?php echo base_url(); ?>img/lar-tra-twenty-nine.jpg" alt=""> </a>
				</div>
			</div>
			
		</div>
		
		<hr class="pi-divider-gap-10">
		
		<div class="pi-row pi-padding-bottom-20">
			<div class="pi-col-sm-12">
				<h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-20 pi-margin-top-minus-5">
					Sinus
				</h2>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-one.jpg"> <img src="<?php echo base_url(); ?>img/sin-one.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-two.jpg"> <img src="<?php echo base_url(); ?>img/sin-two.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-three.jpg"> <img src="<?php echo base_url(); ?>img/sin-three.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-four.jpg"> <img src="<?php echo base_url(); ?>img/sin-four.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-five.jpg"> <img src="<?php echo base_url(); ?>img/sin-five.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-six.jpg"> <img src="<?php echo base_url(); ?>img/sin-six.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-seven.jpg"> <img src="<?php echo base_url(); ?>img/sin-seven.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-eight.jpg"> <img src="<?php echo base_url(); ?>img/sin-eight.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-nine.jpg"> <img src="<?php echo base_url(); ?>img/sin-nine.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-ten.jpg"> <img src="<?php echo base_url(); ?>img/sin-ten.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-eleven.jpg"> <img src="<?php echo base_url(); ?>img/sin-eleven.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-twelve.jpg"> <img src="<?php echo base_url(); ?>img/sin-twelve.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-thirteen.jpg"> <img src="<?php echo base_url(); ?>img/sin-thirteen.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sin-fourteen.jpg"> <img src="<?php echo base_url(); ?>img/sin-fourteen.jpg" alt=""> </a>
				</div>
			</div>
			
		</div>
		
		<hr class="pi-divider-gap-10">
		
		<div class="pi-row pi-padding-bottom-20">
			<div class="pi-col-sm-12">
				<h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-20 pi-margin-top-minus-5">
					Skull Base
				</h2>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-one.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-one.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-two.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-two.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-three.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-three.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-four.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-four.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-five.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-five.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-six.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-six.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-seven.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-seven.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-eight.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-eight.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-nine.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-nine.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-ten.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-ten.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-eleven.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-eleven.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-twelve.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-twelve.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-thirteen.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-thirteen.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-fourteen.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-fourteen.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-fifteen.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-fifteen.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-sixteen.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-sixteen.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sku-bas-seventeen.jpg"> <img src="<?php echo base_url(); ?>img/sku-bas-seventeen.jpg" alt=""> </a>
				</div>
			</div>
			
		</div>
		
		<hr class="pi-divider-gap-10">
		
		<div class="pi-row pi-padding-bottom-20">
			<div class="pi-col-sm-12">
				<h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-20 pi-margin-top-minus-5">
					Snoring And OSAS
				</h2>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sno-osa-one.jpg"> <img src="<?php echo base_url(); ?>img/sno-osa-one.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sno-osa-two.jpg"> <img src="<?php echo base_url(); ?>img/sno-osa-two.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sno-osa-three.jpg"> <img src="<?php echo base_url(); ?>img/sno-osa-three.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sno-osa-four.jpg"> <img src="<?php echo base_url(); ?>img/sno-osa-four.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sno-osa-five.jpg"> <img src="<?php echo base_url(); ?>img/sno-osa-five.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sno-osa-six.jpg"> <img src="<?php echo base_url(); ?>img/sno-osa-six.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sno-osa-seven.jpg"> <img src="<?php echo base_url(); ?>img/sno-osa-seven.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sno-osa-eight.jpg"> <img src="<?php echo base_url(); ?>img/sno-osa-eight.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sno-osa-nine.jpg"> <img src="<?php echo base_url(); ?>img/sno-osa-nine.jpg" alt=""> </a>
				</div>
			</div>
			<div class="pi-col-sm-2">
				<div class="gallery-img-wrap marg-bott-twenty">
					<a class="vlightbox1" title="" href="img/sno-osa-ten.jpg"> <img src="<?php echo base_url(); ?>img/sno-osa-ten.jpg" alt=""> </a>
				</div>
			</div>
			
		</div>

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
<script src="<?php echo base_url(); ?>3dParty/jquery.touchSwipe.min.js"></script>
<script src="<?php echo base_url(); ?>3dParty/gauge.min.js"></script>
<script src="<?php echo base_url(); ?>3dParty/inview.js"></script>
<script src="<?php echo base_url(); ?>3dParty/requestAnimationFramePolyfill.min.js"></script>
<script src="<?php echo base_url(); ?>3dParty/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>3dParty/colorbox/jquery.colorbox-min.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.global.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.slider.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.init.slider.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.tooltip.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.init.tooltip.js"></script>
<script src="<?php echo base_url(); ?>3dParty/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.counter.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.init.counter.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.tab.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.init.tab.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.parallax.js"></script>
<script src="<?php echo base_url(); ?>scripts/pi.init.parallax.js"></script>


	<!-- gallery -->
	<script src="<?php echo base_url(); ?>scripts/visuallightbox.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>scripts/vlbdata1.js" type="text/javascript"></script>
	<link href="<?php echo base_url(); ?>css/visuallightbox.css" rel="stylesheet" type="text/css">


</body>
</html>