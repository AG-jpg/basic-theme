<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us to find the best programmers in the world | CodeSpread</title>
</head>

<body>

<section class="column">

<!--Picture-->
<section class="banner-page" id="contact-container">

<div class="banner-column" id="mail-pic">
<img src="https://codespread-assets.s3.us-west-2.amazonaws.com/wordpress/contact.svg" alt="Codespread Developer">
</div>

<!--End of Picture-->

<!--Contact Form-->

<div class="banner-column" id="banner-text">
    <h1>Contact <span style="color:#3080EC">Us</span></h1>
<p>Have any questions? We'd love to hear from you.</p>

<div class="contact-form">

<h4>Name</h4>
<input type="text" name="name" placeholder="Full Name" class="contact-input">
<h4>Email</h4>
<input type="email" name="email" placeholder="E-mail" class="contact-input">
<h4>Your Inquiry</h4>
<input type="text" name="subject" placeholder="Subject" class="contact-input">
<h4>How can we help you?</h4>
<textarea name="message" placeholder="Message" class="contact-input" id="message"></textarea>

<!--Submit Button-->
<input type="submit" name="submit-form" value="Send" id="send">

</div>

</div>

</section>

</section>
<!--End of Contact Form-->

</body>

<?php get_footer(); ?>

</html>