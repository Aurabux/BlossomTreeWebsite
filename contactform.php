<?php

if (isset($_POST['submit'])) {
	$mailFrom =$_POST['mail'];
	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$company =$_POST['company'];
	$Address1 =$_POST['Address1'];
	$Address2 =$_POST['Address2'];
	$city =$_POST['City'];
	$zip =$_POST['ZIP'];
	$Country =$_POST['Country'];
	$phone = $_POST['phone'];
	$message =$_POST['message'];
	$subject =$_POST['subject'];




	$selectedProjects  = 'None';
	if(isset($_POST['projects']) && is_array($_POST['projects']) && count($_POST['projects']) > 0){
    $selectedProjects = implode(', ', $_POST['projects']);
	}

	$body .= 'Selected Projects: ' . $selectedProjects;


	$mailTO = "support@blossomtreesoftware.biz";
	$headers = "From: ".$mailFrom;
	$txt = "You have recevied an e-mail from ".$firstname."\n".$lastname.".\n\n"." This Client is from the ".$company." Their address is .\n\n".$Address1."\n\n".$Address2."\n\n".$city."\n\n".$zip."\n\n".$Country.".Their phone is :  ".$phone."\n\n What additional comments they have: \n\n".$message;

	mail($mailTO, $subject, $txt, $headers);
	header("Location: formSubmitted.php");
}


?>