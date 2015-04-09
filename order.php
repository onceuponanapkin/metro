<?php

include 'config.php'

if(empty($_POST['unleaded'])   ||    
   empty($_POST['mid'])  ||
   empty($_POST['premium'])||   
   empty($_POST['hwy'])  ||
   empty($_POST['dyed'])||  
   empty($_POST['rec'])  ||
   empty($_POST['kerosen'])||  
  {     
       echo "No arguments Provided!";   return false;    
  } 

$customer = ($_post['customer']);
$phone = ($_post['phone#']);
$unleaded = ($_POST['unleaded']);
$mid = ($_POST['mid']);
$premium = ($_POST['premium']);
$hwy = ($_POST['hwy']);
$dyed = ($_POST['dyed']);
$rec = ($_POST['rec']);
$ker = ($_POST['kerosen']);
$message = ($_POST['message']);

// create email body and send it    
 $mail =  mail(WEBMASTER_EMAIL, $email_subject, $email_body, 
 // put your email 
 $email_subject = "Website order submitted by:  $customer#";
 $email_body = "You have received a new order. \n\n".                 
                   " Here are the details:\n \nName: $customer# \n ".                  
                   "Fuel Order \n $unleaded, $mid, $premium, $hwy, $dyed, $rec, $ker Message \n $message"
                   ; 
 $headers = "From: orders@metropetro.net\n"; 
 $headers .= "Reply-To: $phone#";     
 
 mail($to,$email_subject,$email_body,$headers); return true;             
 
// send the user back to the form
header('Location: /#='.urlencode('Order Submitted')); exit;
?>
