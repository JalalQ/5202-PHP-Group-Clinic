<?php

if(isset($_POST['continue']) && isset($_POST['symptoms'])){
	
	if(count($_POST['symptoms'])== 1 && $_POST['symptoms'][0] == "none of the above"){
		header("Location: index.php?page=covid_questionnaire_risk_factors");
		exit;
	}
	else{
		
		header("Location: index.php?page=covid_questionnaire_fail_result");
		exit;
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
        <div> <a href="index.php?page=covid_questionnaire_severe_symptoms" class="btn btn-link ">< Back</a></div>
        <main class="content-wrapper container">

        	<h1>COVID-19 questionnaire</h1>
            
        	<p class="question"><strong>Are you currently experiencing any of these symptoms?</strong></p>

        	<div class="answers-wrapper">

        		<form  action="#" method="post" id="form-symptoms">
        			<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input " name="symptoms[]" value="fever and/or chills">
					    <label class="form-check-label" for="symptoms[]">Fever and/or chills</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="cough or barking cough">
					    <label class="form-check-label" for="symptoms[]">Cough or barking cough (croup)</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="shortness of breath">
					    <label class="form-check-label" for="symptoms[]">Shortness of breath</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="sore throat">
					    <label class="form-check-label" for="symptoms[]">Sore throat</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="difficulty swallowing">
					    <label class="form-check-label" for="symptoms[]">Difficulty swallowing</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="runny or stuffy/congested nose">
					    <label class="form-check-label" for="symptoms[]">Runny or stuffy/congested nose</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="decrease or loss of taste or smell">
					    <label class="form-check-label" for="symptoms[]">Decrease or loss of taste or smell</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="pink eye">
					    <label class="form-check-label" for="symptoms[]">Pink eye</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="headache">
					    <label class="form-check-label" for="symptoms[]">Headache</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="digestive issues like nausea/vomiting, diarrhea, stomach pain">
					    <label class="form-check-label" for="symptoms[]">Digestive issues like nausea/vomiting, diarrhea, stomach pain</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="muscle aches">
					    <label class="form-check-label" for="symptoms[]">Muscle aches</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="extreme tiredness">
					    <label class="form-check-label" for="symptoms[]">Extreme tiredness</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="falling down often">
					    <label class="form-check-label" for="symptoms[]">Falling down often</label>
					</div>
					<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" name="symptoms[]" value="none of the above" id="no-symptom">
					    <label class="form-check-label" for="symptoms[]">None of the above</label>
					</div>
					<div class="choices-wrapper">

        		        <input type="submit" value="continue" name="continue" class="btn btn-secondary btn-lg">
        		
        	       </div>
        		</form>      		
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
