<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "cnxlan@hotmail.com";  //My email address
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $subject = $_POST['subject']; //getting subject line from client
 
 //Email body I will receive
 $message = "User Name: " . $name . "\n"
 . "User Message: " . "\n" . $_POST['message'];
 
 //Email headers
 $headers = "From: " . $fromEmail; // User email, I will receive
 
 //PHP mailer function
  $result = mail($mailto, $subject, $message, $headers); // This email sent to My address
 
  //Checking if Mails sent successfully
 
  if ($result) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }

}
 
?>