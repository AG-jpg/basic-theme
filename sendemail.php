<?php

// Define some constants
define( "RECIPIENT_NAME", "CodeSpread" );
$addresses=array("aldo@codespread.io","cnxlan@hotmail.com");
//define( "RECIPIENT_EMAIL",  $addresses );

// Read the form values
$success = false;
$senderName = isset( $_POST['name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$subject = isset( $_POST['subject'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $subject && $message) {
  $recipient = RECIPIENT_NAME . " < " . RECIPIENT_EMAIL . ">";
  $headers = "New Message: " . $senderName . " <" . $senderEmail . ">";
  $msgBody = " Subject: " . $subject . " Message: " . $message . "";
  $success = mail( $to = implode(", ", $addresses), $headers, $msgBody );

  //Set Location After Successsfull Submission

  $response ="Message sent";
  header( "refresh:5;url=page-contact.php" );
}

else{
	//Set Location After Unsuccesssfull Submission
  $response ="Message couldn't be delivered.";
  header( "refresh:5;url=page-contact.php" );
}

?>
<?php get_header(); ?>

<section class="video-section">

<h1>Contact <span style="color:#3080EC">Us</span></h1>

<p><?php echo $response?></p>

</section>

    <?php get_footer(); ?>