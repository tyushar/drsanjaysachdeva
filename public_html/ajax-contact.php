<?php
session_start();
	$page_urldb=$_SESSION['page_url'];
	if($_POST && $_POST['type']=='contact'){
		include_once('connection.php');
		include ('isols-admin/function.php');
		require_once('class.phpmailer.php');
		require_once('class.smtp.php');
		$contact_name=$_POST['contact_name'];
		$contact_email=$_POST['contact_email'];
		$contact_no=$_POST['hpuserphone'];
		$contact_comments=$_POST['contact_comments'];
		$date=date('d-M-Y');
		date_default_timezone_set("Asia/Calcutta");
		$current_date = date('d-M-Y H:i:s'); 
		$utm_source="contact";
		$successmessage = "Request has been sent successfully";
		$query = mysql_query("INSERT INTO isols_contact_us (name,email,mobile_no,message,Add_Date,Add_Date_Time,page_name,page_url,utm_source) VALUES ('$contact_name','$contact_email','$contact_no','$contact_comments','$date',now(),'contact','$page_urldb','$utm_source')");
		
		// mail to client
		// <!-----------4email----------->

		 $html = "<center>
						<table width='500' cellpadding='4' cellspacing='1' bgcolor='#ffffff' style='border:1px solid;font-family:arial;font-size:14px;'>
						<tr bgcolor='#1b9dd9'>
							<td colspan='2' align='center' style='color:#FFF; font-weight:bold;'>Send us a Message</td>
						</tr>
						
						<tr>
							<td width='150' bgcolor='#9AC0E1' style='color:#333; padding:8px;'>Name </td>
							<td bgcolor='#d7eafb' style='padding:8px;'>$contact_name</td>
						</tr>
						
						<tr>
							<td width='150' bgcolor='#9AC0E1' style='color:#333; padding:8px;'>Email</td>
							<td bgcolor='#d7eafb' style='padding:8px;'>$contact_email</td>
						</tr>
						
						<tr>
							<td width='150' bgcolor='#9AC0E1' style='color:#333; padding:8px;'>Contact No</td>
							<td bgcolor='#d7eafb' style='padding:8px;'>$contact_no</td>
						</tr>
						
						<tr>
							<td width='150' bgcolor='#9AC0E1' style='color:#333; padding:8px;'>Message</td>
							<td bgcolor='#d7eafb' style='padding:8px;'>$contact_comments</td>
						</tr>
						
						
					</table>
					</center>";

		$subject = "Get in Touch Contact Form -" . $current_date; 
		$to ="contact@drsachdevasanjay.com"; 
       // $to = "isolsgrouptesting@gmail.com"; 
		$from = "contact@drsachdevasanjay.com"; 
		$mail = new PHPMailer(); 
		$mail->IsSMTP();                                     
		$mail->Host = "mail.drsachdevasanjay.com"; 
		$mail->SMTPAuth = true;    
		$mail->Username = "web@drsachdevasanjay.com"; 
		$mail->Password = "hdevasweb@123";  
		$mail->From = $from;
		$mail->FromName = "Dr. Sanjay Sachdeva";
		$mail->ConfirmReadingTo = $from;
		$mail->Sender = $from;
		$mail->AddAddress($to);      
		$mail->IsHTML(true);
		$mail->Subject = $subject;
		$mail->Body    = $html; 
		$mail->AddBcc("success.is.knowledge@gmail.com");   
		$mail->Send();
		
		// <!----------endz 4email--------->
		//mail to users
				
				//$userto  = $contact_email; // note the comma
				$subject1 = "Get in Touch Contact Form -" . $current_date;
				$message = '<html>
					<head>
						<style>
							@media screen and (max-width:550px){
								.exam-detail-wrap-mailer-right{ width:100% !important; }
							}
							@media screen and (max-width:400px){
								.logo-wrap{ width:100% !important; }
								.social-wrap{ width:100% !important; }
								.social-wrap img{ width:30px !important; float:left !important; margin-top:10px; margin-bottom:10px; }
								.social-wrap img:first-child{ margin-left:30%; }
							}
							.exam-detail-wrap-mailer:last-child{ border-bottom:0px solid #ffffff !important; }
							
						</style>
					</head>
					<body style="margin:0; padding:0;">

						<div style="width:90%; margin-left:5%; margin-top:20px;">
							<div style="background:#e5e5e5; float:left; width:90%; padding:10px 5%; border:1px solid #e5e5e5;">
								<div class="logo-wrap" style="width:250px; float:left;">
									<img style="width:30%;" src="http://www.drsachdevasanjay.com/img/logo.png">
								</div>
								
							</div><br/><br/><div style="width:100%; margin-left:0%;">
							<div style="width:100%;border: 1px solid rgba(51, 51, 51, 0.16);">
							<div style="background:#005387; float:left; width:100%;">
							
							</div>
							<div style="clear:both;"></div>
							<div style="background:#f9f9f9; padding:20px 5%; border-bottom:1px solid #9a9a9a;">
							<h2> Dear <span style="color:#017fb9;"> '.$contact_name.', </span> </h2>
							<table>
							
							</tr>
										
							<br>
				            <tr><td><p> <b>Thank you for Contacting me.</b></p></td></tr>
							</table>
							
						   </div>
						  </div>
						 </div>
						 <div style="background:#e5e5e5; float:left; width:90%; padding:10px 5%; border:1px solid #e5e5e5;">
								<p style="margin:0; text-align:right; font-family:arial; font-size:12px;"> Copyright &copy; 2017 | Powered by <a style="color:#c1272d; text-decoration:none;" href="http://www.isolsgroup.com/" target="_blank"> isolsgroup.com </a></p>
							</div>
						</div>
					</body>
				</html>';
				 $to = $contact_email; 
		$from = "contact@drsachdevasanjay.com"; 
		$mail = new PHPMailer(); 
		$mail->IsSMTP();                                     
		$mail->Host = "mail.drsachdevasanjay.com"; 
		$mail->SMTPAuth = true;    
		$mail->Username = "web@drsachdevasanjay.com"; 
		$mail->Password = "hdevasweb@123";  
		$mail->From = $from;
		$mail->FromName = "Dr. Sanjay Sachdeva";
		$mail->ConfirmReadingTo = $from;
		$mail->Sender = $from;
		$mail->AddAddress($to);      
		$mail->IsHTML(true);
		$mail->Subject = $subject;
		$mail->Body    = $message; 
		//$mail->AddBcc("success.is.knowledge@gmail.com");   
		$mail->Send();
		// $_SESSION['succsmsg'] = "Your request has been sent successfully, we will contact You soon...";
		echo $successmessage;
		$contact_name='';
		$contact_email='';
		$contact_comments='';
		$contact_no='';
		// <!----------endz 4email--------->
	}
	
	else
		
		{
		include_once('connection.php');
		include ('isols-admin/function.php');
		require_once('class.phpmailer.php');
		require_once('class.smtp.php');
		$contact_name=$_POST['contact_name'];
		$contact_email=$_POST['contact_email'];
		$contact_no=$_POST['hpuserphone'];
		$contact_comments=$_POST['contact_comments'];
		$date=date('d-M-Y');
		date_default_timezone_set("Asia/Calcutta");
		$current_date = date('d-M-Y H:i:s'); 

		$successmessage = "Request has been sent successfully";
		$query = mysql_query("INSERT INTO isols_contact_us (name,email,mobile_no,message,Add_Date,Add_Date_Time,page_name) VALUES ('$contact_name','$contact_email','$contact_no','$contact_comments','$date',now(),'appointment')");
		
		// mail to client
		
		// <!-----------4email----------->

		 $html = "<center>
						<table width='500' cellpadding='4' cellspacing='1' bgcolor='#ffffff' style='border:1px solid;font-family:arial;font-size:14px;'>
						<tr bgcolor='#1b9dd9'>
							<td colspan='2' align='center' style='color:#FFF; font-weight:bold;'>Send us a Message</td>
						</tr>
						
						<tr>
							<td width='150' bgcolor='#9AC0E1' style='color:#333; padding:8px;'>Name </td>
							<td bgcolor='#d7eafb' style='padding:8px;'>$contact_name</td>
						</tr>
						
						<tr>
							<td width='150' bgcolor='#9AC0E1' style='color:#333; padding:8px;'>Email</td>
							<td bgcolor='#d7eafb' style='padding:8px;'>$contact_email</td>
						</tr>
						
						<tr>
							<td width='150' bgcolor='#9AC0E1' style='color:#333; padding:8px;'>Contact No</td>
							<td bgcolor='#d7eafb' style='padding:8px;'>$contact_no</td>
						</tr>
						
						<tr>
							<td width='150' bgcolor='#9AC0E1' style='color:#333; padding:8px;'>Message</td>
							<td bgcolor='#d7eafb' style='padding:8px;'>$contact_comments</td>
						</tr>
						
						
					</table>
					</center>";

		$subject = "Appointment Form -" . $current_date; 
		$to ="contact@drsachdevasanjay.com"; 
                //$to = "sonikrishna08@gmail.com";
		$from = "contact@drsachdevasanjay.com"; 
		$mail = new PHPMailer(); 
		$mail->IsSMTP();                                     
		$mail->Host = "drsachdevasanjay.com"; 
		$mail->SMTPAuth = false;    
		$mail->Username = "drsachdevas"; 
		$mail->Password = "O?V]s~Rx7Icv";  
		$mail->From = $from;
		$mail->FromName = "Dr. Sanjay Sachdeva";
		$mail->ConfirmReadingTo = $from;
		$mail->Sender = $from;
		$mail->AddAddress($to);      
		$mail->IsHTML(true);
		$mail->Subject = $subject;
		$mail->Body    = $html; 
		$mail->AddBcc("success.is.knowledge@gmail.com");   
		$mail->Send();
		
		// <!----------endz 4email--------->
		
		//mail to users
				
				$userto  = $contact_email; // note the comma
				//$to.= 'amitkumar@isolsgroup.com'; // note the comma
				$subject = "Appointment Form -" . $current_date;
				$message = '<html>
					<head>
						<style>
							@media screen and (max-width:550px){
								.exam-detail-wrap-mailer-right{ width:100% !important; }
							}
							@media screen and (max-width:400px){
								.logo-wrap{ width:100% !important; }
								.social-wrap{ width:100% !important; }
								.social-wrap img{ width:30px !important; float:left !important; margin-top:10px; margin-bottom:10px; }
								.social-wrap img:first-child{ margin-left:30%; }
							}
							.exam-detail-wrap-mailer:last-child{ border-bottom:0px solid #ffffff !important; }
							
						</style>
					</head>
					<body style="margin:0; padding:0;">

						<div style="width:90%; margin-left:5%; margin-top:20px;">
							<div style="background:#e5e5e5; float:left; width:90%; padding:10px 5%; border:1px solid #e5e5e5;">
								<div class="logo-wrap" style="width:250px; float:left;">
									<img style="width:30%;" src="http://www.drsachdevasanjay.com/img/logo.png">
								</div>
								
							</div><br/><br/><div style="width:100%; margin-left:0%;">
							<div style="width:100%;border: 1px solid rgba(51, 51, 51, 0.16);">
							<div style="background:#005387; float:left; width:100%;">
							
							</div>
							<div style="clear:both;"></div>
							<div style="background:#f9f9f9; padding:20px 5%; border-bottom:1px solid #9a9a9a;">
							<h2> Dear <span style="color:#017fb9;"> '.$contact_name.', </span> </h2>
							<table>
							
							</tr>
										
							<br>
				            <tr><td><p> <b>Thank you for Appointment.</b></p></td></tr>
							</table>
							
						   </div>
						  </div>
						 </div>
						 <div style="background:#e5e5e5; float:left; width:90%; padding:10px 5%; border:1px solid #e5e5e5;">
								<p style="margin:0; text-align:right; font-family:arial; font-size:12px;"> Copyright &copy; 2017 | Powered by <a style="color:#c1272d; text-decoration:none;" href="http://www.isolsgroup.com/" target="_blank"> isolsgroup.com </a></p>
							</div>
						</div>
					</body>
				</html>';
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: Dr. Sanjay Sachdeva <contact@drsachdevasanjay.com>' . "\r\n";
				mail($userto, $subject, $message, $headers);
		// $_SESSION['succsmsg'] = "Your request has been sent successfully, we will contact You soon...";
		echo $successmessage;
		$contact_name='';
		$contact_email='';
		$contact_comments='';
		$contact_no='';
		// <!----------endz 4email--------->
	}
?>