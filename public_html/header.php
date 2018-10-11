<div class="pi-header">
<!-- Header row -->
<div class="pi-section-w pi-section-dark">
	<div class="pi-section pi-row-sm top-header-wrap">

		<!-- Phone -->
		<div class="pi-row-block pi-row-block-txt"> <i class="pi-row-block-icon icon-phone pi-icon-base pi-icon-square"></i> Call Us : +91-9810129864 </div>
		<!-- End phone -->

		<!-- Email -->
		<div class="pi-row-block pi-row-block-txt header-email pi-hidden-xs"> <i class="pi-row-block-icon icon-mail pi-icon-base pi-icon-square"></i> Email : <a> contact@drsachdevasanjay.com </a> </div>
		<!-- End email -->

		<!-- Social icons -->
		<div class="pi-row-block pi-row-block-txt header-email pi-hidden-xs pi-pull-right appointment-award-achievement pi-hidden-2xs">
			<!--<a href="<?php //echo base_url(); ?>media-release.php"><span> Media Release </span></a> &nbsp; / &nbsp; --> <!--<a href="<?php echo base_url(); ?>faq.php"><span> FAQs </span></a> &nbsp; / &nbsp; --> <a href="<?php echo base_url(); ?>achievement.php"><span> Awards &amp; Achievements </span></a> 
		</div>
		<!-- End social icons -->
	</div>
</div>
<!-- End header row -->

<div class="pi-header-sticky">
<!-- Header row -->
<div class="pi-section-w pi-section-white pi-shadow-bottom pi-row-reducible">
<div class="pi-section pi-row-lg">

<!-- Logo -->
<div class="pi-row-block pi-row-block-logo">
	<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/logo.png" alt=""></a>
</div>
<!-- End logo -->

<!-- Menu -->
<div class="pi-row-block pi-pull-right">
	<ul class="pi-simple-menu pi-has-hover-border pi-full-height pi-hidden-sm">
		<li class="active"><a href="<?php echo base_url(); ?>"><span> <i class="icon-home"> </i> </span></a></li>
		<li class="pi-has-dropdown"><a href="#"><span> About </span></a>
			<ul class="pi-submenu pi-has-border pi-items-have-borders pi-has-shadow pi-submenu-dark">
				<li><a href="<?php echo base_url(); ?>about.php"><span> About Dr. Sanjay Sachdeva </span></a></li>
				<li><a href="<?php echo base_url(); ?>training.php"><span> Professional Training </span></a></li>
				<li><a href="<?php echo base_url(); ?>association.php"><span> Associations </span></a></li>
				<li><a href="<?php echo base_url(); ?>achievement.php"><span> Awards &amp; Achievements </span></a></li>
			</ul>
		</li>
		<li><a href="<?php echo base_url(); ?>media-release.php"><span> Media Release </span></a></li>
		
		<?php               
						  
		$nav_menu_sql = "select * from  isols_menu_category where status =1";
		$nav_menu_query = mysql_query($nav_menu_sql);		 
		while($nav_menu_fetch = mysql_fetch_assoc($nav_menu_query))
		{
   
			$cat_menu_id=$nav_menu_fetch['id'];

			$nav_list_sql = "select * from category where cat_id = 0 and category_menu_id='$cat_menu_id' and status =1";
			$nav_list_result = mysql_query($nav_list_sql);
			while($nav_list_row = mysql_fetch_assoc($nav_list_result))
     		 {  	  
      			  $activecatid = $nav_list_row['id'];
      			  $menu_cat_id = $nav_list_row['category_menu_id']; 
      			  $category_name = $nav_list_row['category_name'];
				  $category_url=$nav_list_row['category_url'];
				  ?>
		
		
		<li class="pi-has-dropdown"><a href="#"><span><?=$category_name;?></span></a>
			<ul class="pi-submenu pi-has-border pi-items-have-borders pi-has-shadow pi-submenu-dark">
		<?php  
        $root_lev1_sql = "select * from category where cat_id = '$activecatid' and category_menu_id='$cat_menu_id' and status=1 order by position asc";
        $root_lev1_result = mysql_query($root_lev1_sql);
        while($root_lev1_row = mysql_fetch_assoc($root_lev1_result))
        {
        	 
        $checkcatid = $root_lev1_row['cat_id'];
        $checkid = $root_lev1_row['id'];
		$cat_url_rewriting = $root_lev1_row['url_rewriting'];
        $root_level_link=$root_lev1_row['category_url'];
        //var_dump($root_level_link);
		
		$submenuquery="select page_layout,category_id from  category_page where category_id='$checkid' and category_menu_id='$cat_menu_id' and status = '1'";
		$submenusend_query=mysql_query($submenuquery);
		$submenurow = mysql_fetch_array($submenusend_query);
		$pagelayoutid = $submenurow['page_layout'];
		$pagelayoutid11 = $submenurow['category_id'];
		$submenuurlquery="select page_layout_name from  isols_page_layout where id='$pagelayoutid' and status = '1'";
		$submenuurlsend_query=mysql_query($submenuurlquery);
		$submenuurlrow = mysql_fetch_array($submenuurlsend_query);
		//var_dump($submenuurlrow);
		$page_layout_name=$submenuurlrow['page_layout_name'];
?>
				
			<li <?php if(empty($root_level_link)) { ?>class="" <?php } ?>>
			  <?php if(empty($page_layout_name)) { 
			   if(!empty($root_level_link)) { ?> <!-- to find external url-->
			   
			 <a href="<?php echo $root_level_link;?> "><?php echo $root_lev1_row['category_name'];?></a>
			 <?php } else { ?>
			 <a href="#"><?php echo $root_lev1_row['category_name'];?></a>
			 <?php } }
			
			 
			 else { ?>
			  <a href="<?php echo $submenuurlrow['page_layout_name'];?>?page=<?php echo $cat_url_rewriting; ?>"><?php echo $root_lev1_row['category_name'];?></a>
			 <?php } 
						$root_lev2_sql = "select * from category where cat_id = '$checkid' and category_menu_id='$cat_menu_id' and status=1 LIMIT 6";
						$root_lev2_result = mysql_query($root_lev2_sql);
						$root_lev2_rows = mysql_fetch_assoc($root_lev2_result);
						$cat_idds=$root_lev2_rows['id'];
				$total_rows=mysql_num_rows($root_lev2_result);
				if($total_rows>0) {
				
				$catname=mysql_query("select category_id from category_page where category_id ='$cat_idds' and status =1"); ?>
			
				<?php /* ?><ul <?php if(mysql_num_rows($catname)>0) { ?><?php } ?> class="pi-submenu" >
					<?php 
						while($root_lev2_row = mysql_fetch_assoc($root_lev2_result))
						{

						$checkcatid2 = $root_lev2_row['cat_id'];
						$checkid2 = $root_lev2_row['id'];
                        $cat_url_rewriting1 = $root_lev2_row['url_rewriting'];
						$category_name2 = $root_lev2_row['category_name'];

						$submenuquery1="select page_layout,category_id from  category_page where category_id='$checkid2' and category_menu_id='$cat_menu_id' and status = '1'";
							    $submenusend_query1=mysql_query($submenuquery1);
								$submenurow1 = mysql_fetch_array($submenusend_query1);
								$pagelayoutid2= $submenurow1['page_layout'];
								$pagelayout_catid1 = $submenurow1['category_id'];
								$submenuurlquery1="select page_layout_name from  isols_page_layout where id='$pagelayoutid2' and status = '1'";
							    $submenuurlsend_query1=mysql_query($submenuurlquery1);
								$submenuurlrow1 = mysql_fetch_array($submenuurlsend_query1);
								//var_dump($submenuurlrow);
								$page_layout_name1=$submenuurlrow1['page_layout_name'];
				
								?>
						<li><a <?php if(empty($page_layout_name1)) { echo 'href="#"'; } else { ?>href="<?php echo $page_layout_name1;?>?page=<?php echo $cat_url_rewriting1; ?>" <?php } ?>><?=$category_name2;?></a>
						
						<ul class="pi-submenu">
								<?php
								$root_lev3_sql = "select * from category where cat_id = '$checkid2' and category_menu_id='$cat_menu_id' and status=1 LIMIT 8";
								$root_lev3_result = mysql_query($root_lev3_sql);
								while($root_lev3_row = mysql_fetch_assoc($root_lev3_result))
									{
								 $checkcatid3 = $root_lev3_row['cat_id'];
								 $checkid3 = $root_lev3_row['id'];
								 $cat_url_rewriting2 = $root_lev3_row['url_rewriting'];
								 $category_name3 = $root_lev3_row['category_name'];
								
								$submenuquery3="select page_layout,category_id from  category_page where category_id='$checkid3' and category_menu_id='$cat_menu_id' and status = '1'";
							    $submenusend_query3=mysql_query($submenuquery3);
								$submenurow3 = mysql_fetch_array($submenusend_query3);
								$pagelayoutid3= $submenurow3['page_layout'];
								$pagelayout_catid3 = $submenurow3['category_id']; //use it when url rewriting on
								$submenuurlquery3="select page_layout_name from  isols_page_layout where id='$pagelayoutid3' and status = '1'";
							    $submenuurlsend_query3=mysql_query($submenuurlquery3);
								$submenuurlrow3 = mysql_fetch_array($submenuurlsend_query3);
								//var_dump($submenuurlrow);
								$page_layout_name3=$submenuurlrow3['page_layout_name'];
								
								
								?>
									<li><a <?php if(empty($page_layout_name3)) { echo 'href="#"'; } else { ?> href="<?php echo $page_layout_name3;?>?page=<?php echo $cat_url_rewriting2; ?>" <?php } ?>><?php echo $category_name3; ?></a></li>
																
								<?php } ?>	
							</ul>
						
						</li>
		<?php }  ?>
					</ul><?php */ ?>
		</li> <?php } } ?>
				
		
			</ul>
		</li>
		<?php } }  ?>
		
		<li><a href="<?php echo base_url(); ?>gallery.php"><span> Galleries </span></a></li>
		<li><a href="<?php echo base_url(); ?>testimonials.php"><span> Testimonials </span></a></li>
		<li><a href="<?php echo base_url(); ?>contact.php"><span> Contact Us </span></a></li>
	</ul>
</div>
<!-- End menu -->

<!-- Mobile menu button -->
<div class="pi-row-block pi-pull-right pi-hidden-lg-only pi-hidden-md-only">
	<button class="btn pi-btn pi-mobile-menu-toggler" data-target="#pi-main-mobile-menu">
		<i class="icon-menu pi-text-center"></i>
	</button>
</div>
<!-- End mobile menu button -->

		<!-- Mobile menu -->
		<div id="pi-main-mobile-menu" class="pi-section-menu-mobile-w pi-section-dark">
			<div class="pi-section-menu-mobile">

				<!-- Search form 
				<form class="form-inline pi-search-form-wide ng-pristine ng-valid" role="form">
					<div class="pi-input-with-icon">
						<div class="pi-input-icon"><i class="icon-search-1"></i></div>
						<input type="text" class="form-control pi-input-wide" placeholder="Search..">
					</div>
				</form>
				<!-- End search form -->

				<ul class="pi-menu-mobile pi-items-have-borders pi-menu-mobile-dark">
					<li><a href="<?php echo base_url(); ?>"><span> Home </span></a></li>
					<li><a href="#"><span> + About </span></a>
						<ul>
							<li><a href="<?php echo base_url(); ?>about.php"><span> About Dr. Sanjay </span></a></li>
							<li><a href="<?php echo base_url(); ?>training.php"><span> Professional Training </span></a></li>
							<li><a href="<?php echo base_url(); ?>association.php"><span> Associations </span></a></li>
							<li><a href="<?php echo base_url(); ?>achievement.php"><span> Awards &amp; Achievements </span></a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url(); ?>media-release.php"><span> Media Release </span></a></li>
					<li><a href="#"><span> + Speciality </span></a>
						<ul>
							<li><a href="<?php echo base_url(); ?>speciality-coachlear.php"><span> Cochlear Implant </span></a></li>
							<li><a href="<?php echo base_url(); ?>speciality-snoring.php"><span> Snoring Surgery </span></a></li>
							<li><a href="<?php echo base_url(); ?>speciality-robotics.php"><span> Robotic Surgery </span></a></li>
							<li><a href="<?php echo base_url(); ?>speciality-skull.php"><span> Skull Base Surgery </span></a></li>
							<li><a href="<?php echo base_url(); ?>speciality-sinus.php"><span> Sinus Surgery </span></a></li>
							<li><a href="<?php echo base_url(); ?>speciality-deafness.php"><span> Treatment for Deafness </span></a></li>
							<li><a href="<?php echo base_url(); ?>speciality-laser.php"><span> Laser Surgery </span></a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url(); ?>gallery.php"><span> Galleries </span></a></li>
					<li><a href="<?php echo base_url(); ?>appointment.php"><span> Book Appointment </span></a></li>
					<li><a href="<?php echo base_url(); ?>faq.php"><span> FAQs </span></a></li>
					
					<!--<li><a href="#"><span> + Patient </span></a>
						<ul>
							<li><a href=""><span> Patient Info </span></a></li>
							<li><a href=""><span> International Patients </span></a></li>
							<li><a href=""><span> Preparing For A Visit </span></a></li>
							<li><a href=""><span> Support Services </span></a></li>
							<li><a href=""><span> Other Facilities </span></a></li>
							<li><a href=""><span> Insurance / TPA </span></a></li>
						</ul>
					</li>-->
					<li><a href="<?php echo base_url(); ?>testimonials.php"><span> Testimonials </span></a></li>
					<li><a href="<?php echo base_url(); ?>contact.php"><span> Contact Us </span></a></li>
				</ul>

			</div>
		</div>
		<!-- End mobile menu -->

</div>
</div>
<!-- End header row -->
</div>

</div>