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
        <div> <a href="index.php?page=covid_questionnaire_symptoms" class="btn btn-link ">< Back</a></div>
        <main class="content-wrapper container">

        	<h1>COVID-19 self-assessment result</h1>
            <p class="result-datetime">
           	<?php
           	date_default_timezone_set("America/New_York");
           	echo date("Y-m-d h:i a");
           	?>
            </p>

            <div class="fail-result-wrapper">
        		<p>
        			<strong>
        			Dear fullname,
        			</strong>
        		</p>
        		<p>
        			<strong>
        			Based on your answers, we recommend that you get tested before coming to our hospital, because you have symptoms or are a "close contact" of someone who currently has COVID-19.
        			</strong>
        		</p>
        		Since you have symptoms or have been exposed to COVID-19, you can only be tested at an assessment centre or community lab. Pharmacy tests are only available for those without symptoms or exposure. For more informations the testing locations nearby your neighborhood go on <a href="https://covid-19.ontario.ca/assessment-centre-locations?pcd=m9v&s=true">Ontario testing locations.</a>
        		</p>
        	 </div>

        	<div class="choices-wrapper">

        		
        		<a href="index.php?page=home" class="btn btn-secondary btn-lg">Quit</a>
        		
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