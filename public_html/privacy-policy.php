<?php include('isols-admin/function.php'); 
error_reporting(0);
include('connection.php');
session_start();
ob_start();
require_once('class.phpmailer.php');
require_once('class.smtp.php');
$date=date('d-M-Y');
date_default_timezone_set("Asia/Calcutta");
$current_date = date('d-M-Y H:i:s'); 

$page_url="http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'].'<br>';
$string=remove_hyphen($_SERVER['PHP_SELF']);
$string_title = ucwords(trim(str_replace('php', '', $string))).' | '.$_SERVER['HTTP_HOST'];
$page_name = $_SERVER['REQUEST_URI']; 
$utm_source=$page_name;

// Code for Canonical URL
$page_url="http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'].'<br>';
	
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

	<!-- Meta -->
	<!-- Title -->
        <title>Dr. Witty Raina | drwittyraina.com</title>
        <link rel="canonical" href="<?php echo $page_url; ?>" />
        <!-- Both are dynamic -->
<!-- End of Title -->

<!-- Favicon -->
        <link type="image/x-icon" href="<?php echo base_url(); ?>img/favicon.png" rel="shortcut icon">
<!-- End of Favicon -->

<!-- Meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1" />
        <meta name="robots" content="index, follow" />
        <meta name="author" content="" />
        <meta name="language" content="English" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
<!-- End of Meta-->

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/prettyPhoto.css"/>	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/colors/default.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/responsive.css"/>

	<!-- Favicon -->
	<link type="image/x-icon" href="images/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style-menu.css">

<?php include('analytic-code.php'); ?></head>

<body class="layout-narrow layout-1c">

	<!-- Page / Start -->	
	<div id="page" class="hfeed site clearfix">

		<!-- Masthead / Start -->
		<?php include("header.php"); ?>
		<!-- Masthead / End -->

		<!-- Site Main / Start -->
		<main id="main" class="site-main container" role="main">

			<div id="primary" class="content-area column">

	            <!-- Content / Start -->
	            <div id="content">

	                <article class="hentry post">

	                    <h1 class="page-title">Privacy Policy</h1>

	                    <div class="entry-content">        

	                        <p>Maecenas dolor est, interdum a euismod eu, accumsan posuere nisl. Nam sed iaculis massa. Sed nisl lectus, tempor sed euismod quis, sollicitudin nec est. Suspendisse dignissim bibendum tempor. Nam erat felis, commodo sed semper commodo vel mauris suspendisse dignissim bibendum tempus.</p>

	                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>

	                        <blockquote>Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum laoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor.</blockquote>


	                    </div><!-- .entry-content -->

	                </article>            

	            </div>
	            <!-- Content / End -->

			</div>
			<!-- Primary / End -->

		</main>
		<!-- Site Main / End -->
		
		<!-- Footer / Start -->	
		<?php include("footer.php"); ?>
		<!-- Footer / End -->	

	</div>
	<!-- Page / End -->

	<!-- JavaScripts -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.matchHeight.js"></script>		
	<script type="text/javascript" src="js/hoverIntent.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>	
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.sidr.min.js"></script>
	<script type="text/javascript" src="js/retina.js"></script>
	<script type="text/javascript" src="js/jquery.sticky.js"></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
	<script type="text/javascript" src="js/jquery.custom.js"></script>
	<script type="text/javascript" src="js/analytics.js"></script><!-- FOR DEMO ONLY --> 

</body>
</html>
