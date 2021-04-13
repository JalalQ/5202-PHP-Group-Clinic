<?php
use WebApp2\ObjectManagers\MailManager;
require_once 'vendor/autoload.php';

$first="";
$err_first="";
$last="";
$err_last="";
$email="";
$err_email="";
$comment="";
$err_comment="";
$phone="";
$err_phone="";
$subject="";
$err_subject="";
$success_msg ="";
if (isset($_POST['send'])) {

	$first = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
	$last = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
	$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
	$comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_SPECIAL_CHARS);
  $is_inputs_valid = true;
	// inputs validation
  if ($first === "") {
  	$is_inputs_valid = false;
		$err_first = "Please enter your firstname !";
  }
	if ($last === "") {
  	$is_inputs_valid = false;
		$err_last = "Please enter your lastname !";
  }
	if ($subject === "") {
  	$is_inputs_valid = false;
		$err_subject = "Please enter a subject !";
  }
	if (!$email) {
  	$is_inputs_valid = false;
		$err_email = "Please enter a valid email !";
  }
	if ($comment == "") {
  	$is_inputs_valid = false;
		$err_comment = "Please enter your message !";
  }

	if ($is_inputs_valid) {
		// code...
		$senderName = $first . ' ' . $last;
		$mailManager = new MailManager();
		$mailManager->sendContactMessage($subject,$comment,$senderName, $email);
		$success_msg = "Your message has been successfully sent !";
		$comment="";
		$first="";
		$last="";
		$phone="";
		$subject="";
		$email="";
	}

}
 ?>


<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
		<meta name="contact" description=" QC/HC clinic contact">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>QC/HC - contact</title>

		<!-- Bootstrap 4.5 CSS -->
		<link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- contact CSS -->
		<link rel="stylesheet" href="css/contact.css">
	    <!-- Style FOR HEADER AND FOOTER -->
	    <link rel="stylesheet" href="css/HeaderFooter.css">
	    <script src="https://kit.fontawesome.com/c03ea9a48c.js" crossorigin="anonymous"></script>


	</head>

	<body>
		<?php

			include_once 'header.php';

        ?>
        <div class="contact-content-wrapper container">
			<h1>Contact Us</h1>
			<ul id="contact-address">
                	<li>QC health clinic</li>
                	<li>3011 Bayview Avenue</li>
                	<li>Toronto, ON</li>
                	<li>Canada M4N 3M5</li>
                	<li>Phone: <span>705-123-4567</span></li>

                </ul>
			<section>
				<h2>Visiting Hours</h2>

                <p>
                	Due to COVID-19, and under guidance from the Chief Medical Officer, <span class="contact-COVID19-text">visitor restrictions</span> are in place during this time.
                </p>
                <div id="map">
                	<img src="https://maps.googleapis.com/maps/api/staticmap?center=3011 Bayview Avenue,Toronto,CA&zoom=13&size=400x400&scale=2&maptype=terrain&key=AIzaSyA_YZ6LZmY8FhMhgOOmQmZ230h08WaCom0
                ">

                </div>

			</section>
			<form method="post" action="#contact-form" name="contact-form" id="contact-form">
				<h2><a id="contact-form"> Contact form</a></h2>
				<p class="success_msg"> <?= $success_msg ?> </p>
				<div id="contact-form-req"><span>*</span> indicates a required field.</div>
				<div class="form-group">
						<div><span><?= $err_first ?></span></div>
    				<label for="firstname">firstname:<span>*</span></label>
   					<input type="text" class="form-control" id="firstname" name="firstname" value="<?= $first ?>">
  				</div>

  				<div class="form-group">
						<div><span><?= $err_last ?></span></div>
    				<label for="lastname">lastname:<span>*</span></label>
   					<input type="text" class="form-control" id="lastname" name="lastname" value="<?= $last ?>">
  				</div>

				<div class="form-group">
					<div><span><?= $err_email ?></span></div>
    				<label for="email">Email:<span>*</span></label>
   					<input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" placeholder="name@example.com">
  				</div>  				

					<div class="form-group">
						<div><span><?= $err_subject ?></span></div>
    				<label for="subject">Subject:<span>*</span></label>
   					<input type="text" class="form-control"  id="subject" name="subject" value="<?= $subject ?>" >
  				</div>

  				<div class="form-group">
						<div><span><?= $err_comment ?></span></div>
    				<label for="comment">Your message:<span>*</span></label>
   					<textarea class="form-control" id="comment" name="comment" rows="6" ><?= $comment ?></textarea>
  				</div>
  				<button type="submit" name="send" class="btn btn-dark btn-lg">Send</button>
			</form>

			</div>


		<?php
			include_once 'footer.php';
	    ?>
	    <!-- Script Source Files -->

		<!-- jQuery -->
		<script src="js/jquery-3.5.1.min.js"></script>
		<!-- Bootstrap 4.5 JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Font Awesome -->
		<script src="js/all.min.js"></script>

		<!-- End Script Source Files -->




	</body>
</html>
