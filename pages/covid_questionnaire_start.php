<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
		<meta name="covid-19 questionnaire" description=" coronavirus self-assessment">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>QC/HC - covid questionaire</title>
		
		<!-- Bootstrap 4.5 CSS -->
		<link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- questionaire CSS -->
		<link rel="stylesheet" href="css/questionnaire.css">
	    <!-- Style FOR HEADER AND FOOTER -->
	    <link rel="stylesheet" href="css/HeaderFooter.css">
	    <script src="https://kit.fontawesome.com/c03ea9a48c.js" crossorigin="anonymous"></script>


	</head>

	<body>
		<?php

			include_once 'header.php';
        ?>
        <main class="content-wrapper container">
        	<h1>COVID-19 questionnaire</h1>

        	<div class="questionnaire-info">        		
        		<p id="updated-date"> <strong>Last updated: March 15, 2021</strong></p>
        		<p id="version"> <strong> Version 1.0 </strong></p>
        		<p>The questions and results have been updated to align with newest public health guidance.</p>
        	</div>

        	<p>
        		Take this self-assessment questionnaire if you have an appointment in our hospital.
        		You will get a recommendation on what to do next at the end of the questionnaire.

        	</p>
        	<p>
        		The questionnaire is only meant as an aid and cannot diagnose you. <strong> If this is a medical emergency, please call 911 </strong> and advise them of your symptoms and if you have recently travelled.
        	</p>
        	<div class="questionaire-link-wrapper">

        		<a href="index.php?page=covid_questionnaire_severe_symptoms" class="btn btn-info btn-lg"> start questionnaire</a>
        		
        	</div>
        	
        </main>
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