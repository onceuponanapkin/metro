<?php
include 'config.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{

$customer = Trim(stripslashes($_POST['customer']));
$email = Trim(stripslashes($_POST['email']));
$tel = Trim(stripslashes($_POST['tel'])); 
$subject = "You have a new web order:  $customer";
$unleaded = Trim(stripslashes($_POST['unleaded']));
$mid = Trim(stripslashes($_POST['mid'])); 
$premium = Trim(stripslashes($_POST['premium']));
$hwy = Trim(stripslashes($_POST['hwy']));
$dyed = Trim(stripslashes($_POST['dyed']));
$rec = Trim(stripslashes($_POST['rec']));  
$kerosene = Trim(stripslashes($_POST['kerosene']));
$date = Trim(stripslashes($_POST['date']));  
$notes = Trim(stripslashes($_POST['notes'])); 


// prepare email body text
$body = "";
$body .= "Customer#: ";
$body .= $customer;
$body .= "\n";
$body .= "Email: ";
$body .= $email;
$body .= "\n";
$body .= "Phone#: ";
$body .= $tel;
$body .= "\n";
$body .= "Delivery Date: ";
$body .= $date;
$body .= "\n";
$body .= "Unleaded: ";
$body .= $unleaded;
$body .= "\n";
$body .= "Midgrade: ";
$body .= $mid;
$body .= "\n";
$body .= "Premium: ";
$body .= $premium;
$body .= "\n";
$body .= "Hwy Diesel: ";
$body .= $hwy;
$body .= "\n";
$body .= "Dyed Diesel: ";
$body .= $dyed;
$body .= "\n";
$body .= "Rec 90: ";
$body .= $rec;
$body .= "\n";
$body .= "Kerosene: ";
$body .= $kerosene;
$body .= "\n";
$body .= "Special Instructions: ";
$body .= $notes;
$body .= "\n";

$error = '';

if(!$error)
{
$mail = mail(WEBMASTER_EMAIL, $subject, $body,
     "From: ".$customer." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());


if($mail)
{
$sendmessage = "Sent! Thank you.";
}
else {
       $message = "Oops...";
   }
   echo '<div id="message">'.$message.'<div id="close-button"></div></div>';
}


}

?>
