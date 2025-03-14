<?php 
/**................................................................
 * @package eblog v 1.0
 * @author Comfort muluma 
 * Muluma Technology Ltd.            
 * (comfortmuluma@gmail.com)
 * ................................................................
 */

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

$to = "yankjoy46@gmail.com"; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new mail from YankJoy Investments;. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message: \n $message"; 
	
	$headers = "From: YankJoy Investments\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	//header('Location: contact_success.php');
        	
  echo '<script language = "javascript">';
  // echo "window.location.href='login.php'"; 
  echo "alert('Thanks for contacting YankJoy Investments We shall get back to you soon!');window.location.href='contact.php'";
   echo '</script>';
    exit;

?>
