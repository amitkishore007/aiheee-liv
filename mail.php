<?php 
$from =  "info@aiheee.com";
$myemail = 'chairman@aiheee.com';//<-----Put Your email address here.
 $name = $_REQUEST['name'];
 $phone = $_REQUEST['phone']; 
 $email = $_REQUEST['email'];
 $comments= $_REQUEST['comments'];




 

	$to = $myemail; 
	$email_subject = "Inquiry From: Aiheee Website  ";
	$email_body = "You have received a new message from INQUIRY. \n \n
	
	Here are the inquiry details:\n \n 
	Name : $name \n 
	Phone : $phone \n 
	Email : $email \n
    Comments : $comments";
	
	$headers = "From: $from\n"; 
	$headers .= "Reply-To: $email";
	
	
	mail($to,$email_subject,$email_body,$headers);
	
	
	
	$email_subject1 = 'Thank you for visiting Aiheee';

	$email_message1 = "Dear : ".$name." 
	
	Thank You! for visiting  AIHEEE, and submitting your
	Inquiry and showing interest in our services. We will contact 
	you as soon.
	
	NOTE:-THIS IS AN AUTO-GENERATED MAIL DO NOT REVERT BACK ON THIS";  
	$headers1 = "From: ".$from; 
	
		$client_email_to =$email;
	
	
	
	mail($client_email_to,$email_subject1,$email_message1,$headers1);
	
?>


<script>
alert('Your Inquiry has been successfully sent.');
window.location='index.php';
</script>