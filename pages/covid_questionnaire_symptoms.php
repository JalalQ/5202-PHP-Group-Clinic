<?php
	use WebApp2\Database\{Database,PagePDO};
	require_once 'vendor/autoload.php';

  $error_msg ="";
	$PagePDO = new PagePDO();
	$covidPage =$PagePDO->getPage('covid_symptoms');

	if(isset($_POST['continue']) ){

		if (isset($_POST['symptoms'])) {
			if(count($_POST['symptoms'])== 1 && $_POST['symptoms'][0] == "none of the above"){
				header("Location: index.php?page=covid_questionnaire_risk_factors");
				exit;
			}
			else{

				header("Location: index.php?page=covid_questionnaire_fail_result");
				exit;
			}
		}
		else {
			$error_msg = "Please select what corresponds to your current situation !";
		}
	}
?>

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
	    <script type="text/javascript" src="js/covid_questionnaire_symptoms.js"></script>


	</head>

	<body>
		<?php

			include_once 'header.php';
        ?>
        <div>
					<a href="index.php?page=covid_questionnaire_severe_symptoms" class="btn btn-link ">< Back</a>
				</div>
				<div class=" content-wrapper error_msg">
					<?= $error_msg ?>
				</div>
		    <?php
		        echo $covidPage->content;
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
