<?php 
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$mobile = $_POST['mobile number'];


	$email_from = 'warism801@gmail.com';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
	               "User Email: $visitor_email.\n".
	               "User Mobile Number: $mobile.\n";


	$to = "contact@andrifyguides.com";

	$headers = "From: $email_from \r\n";

	$headers = "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: job-contact.html");


 ?>