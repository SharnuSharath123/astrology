<?php 

  $to = "vigorinnovation2023@gmail.com"; // this is your Email address
    $from = "info@vigorinnovation.in"; // this is the sender's Email address
    $first_name = $_POST['name'];
    $ph = $_POST['phone'];
     $email = $_POST['email'];
    
    $subject = $_POST['subject'];
 
    $message = $first_name . "\nWrote the following: \n contact : $ph \n email :  $email \nMessage : " . $_POST['message'];
    $message2 = "We will get in touch with you shortly...";

    $headers = "From:" .$from; 
    mail($to,$subject,$message,$headers);  
 
 
	echo '<script>alert(" Mail Sent Successfully ")</script>';
    echo '<script>window.location.replace("index.html")</script>';
    
?> 

