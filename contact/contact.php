<?php 
	
	$name = $_REQUEST[ 'contact-name' ];
	$number = $_REQUEST[ 'contact-number' ];
	$email = $_REQUEST['contact-email'];
	$message = $_REQUEST[ 'contact-description' ];
	$mail_subject = "Inquiry" . "( Customer :".$name." )";
	$message = "Name: ".$name." \n\nEmail: ".$email." \n\nContact Number: ".$number." \n\nMessage: ".$message;
	

	if($name == "" || $number == "" || $email == "" || $message == ""){
		echo "Error in sending message !!! Please try again";
	} else {
		if(!preg_match('/^[0-9]{10}+$/', $number) || preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email)) {
			echo "Error in sending message !!! Please try again";
		} else {
			if ( mail( 'ketancorporation@gmail.com', $mail_subject, $message, "From: noreply@ketancorporation.in" ) ) {
				echo "Thank you <strong>$name</strong> for contacting with us !!!";
			} else {
				echo "Error in sending message !!! Please try again";
			}
		}
	}
	
 ?>