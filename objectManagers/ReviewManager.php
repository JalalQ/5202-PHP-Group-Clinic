<?php
namespace WebApp2\managers;

require_once "../vendor/autoload.php";


Class ReviewManager{


    /**
     * this function send an invitation to review email to an user.
     */
	public function send_invitation($user)
	{
		// Create the Transport
		$transport = new \Swift_SmtpTransport('smtp.gmail.com', 587,'tls');
		$transport->setUsername('frankyves90@gmail.com');
		$transport->setPassword('KATAgourouma@2021');

		// Create the Mailer using your created Transport
		$mailer = new \Swift_Mailer($transport);

		// Create a message
		$message = new \Swift_Message('Invitation to share your experience');
		$message ->setFrom(['frankyves90@gmail.com' => 'QC/HR']);
		$message ->setTo(['franckyves78@yahoo.fr' => 'franckyves78']);
		$type = $message->getHeaders()->get('Content-Type');
        $type->setValue('text/html');
        $type->setParameter('charset', 'utf-8');
        //generate the page content
        $content = $this->generate_invitation("Franck Yves");
        $message ->setBody($content);
        echo $content;
        $result = $mailer->send($message);

		//printf("Sent %d messages\n", $result);
		

		// Send the message
		//$result = $mailer->send($message);

		//printf("Sent %d messages\n", $result);
		
        // generate the email msg
		/*

		$to = "franckyves78@yahoo.fr";//$user->getEmail();
        $subject = "Invitation to share your experience";
        // set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: frankyves90@gmail.com' . "\r\n".
		            'Reply-To: webmaster@example.com' . "\r\n" .
    				'X-Mailer: PHP/' . phpversion();
        $result = mail($to,$subject,$msg,$headers);//send the email
        echo "$result";*/

	}

    /**
     * this function generate an invitation to review message for an user.
     */
	public function generate_invitation($fullName)
	{
		$message = "<!DOCTYPE html>
			<html lang='en'>
				<head>

					<meta charset='UTF-8'>
					<meta name='viewport' content='width=device-width, initial-scale=1.0, viewport-fit=cover'>
					<meta name='email review' description=' QC/HC s invitation to review'>	    
					<title>QC/HC - review invitation</title>
					
					<!-- Latest compiled and minified CSS -->
					<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' integrity='sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu' crossorigin='anonymous'> 
				    <script src='https://kit.fontawesome.com/c03ea9a48c.js' crossorigin='anonymous'></script>
				    <!-- Style CSS -->
				    <style type='text/css'>
				    	/*============= TOP BAR HEADER =============*/
						header
						{
						    background-color: #276678!important;
						    height: 7rem;
						}
						a#logo {
						    font-family: sans-serif;
						    font-size: 40px;
						    text-align: center;
						    border: 4px white solid;
						    border-radius: 12px;
						    
						    text-decoration: none;
						}

						a#link-inv{
							background-color: #78c4d4;
							color: white;
							border-radius: 10px;
							padding: 0.5em;
							text-decoration: none;

						}

						nav a {				
						    color: white;			    
						}
						
						a:hover {
						    color: gray;
						}
						

						nav{
							padding-top: 1rem;
							padding-left: 0.5em;

						}

						.content-wrapper{
							max-width: 1000px;
							margin: auto;
						}

						h1{
							color: #276678;
							text-transform: capitalize;
						}
						

						p{
							margin-bottom: 2em;
						}

						
				    </style>


				</head>
				<body>
					<header>
			     		<!--Navbar -->
			     		<nav class='navbar navbar-expand-lg navbar-dark cyan'>
			         		<a id='logo' href='http://localhost:8888/Web-App-2/index.php?page=home'>QC/HC</a>

			               
			        	</nav>
			            <!--/.Navbar -->
					</header>
					<main class='content-wrapper'>
						<h1> Invitation to review </h1>
							
						<p> <strong> Dear ". $fullName . ", </strong></p>
						<p>
							Thank you for your recent visit in our hospital. We hope that care provided to you was the one you were looking for. If so, will you consider posting an online review? This helps us to continue providing great quality of services and helps potential patient to make confident decisions. Please, click on the link below share your last experience in our Hospital:
						<div class='invitation-review'>
							<a href='http://localhost:8888/Web-App-2/index.php?' id='link-inv'>Share with us your last experience in our hospital.</a>
						</div>
						</p>

						<p> Thank you in advance for your review and for entrusting us your health. </p>
					</main>
			    </body>
			</html>";

			return $message;
	}
}
$m = new ReviewManager();
$m->send_invitation(null);
?>