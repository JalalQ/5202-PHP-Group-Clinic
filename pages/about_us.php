<?php

use WebApp2\Database\{Database,PagePDO};
require_once 'vendor/autoload.php';


$PagePDO = new PagePDO();
$aboutusPage=$PagePDO->getPage('About Us');
//echo $aboutusPage->title;

// var_dump($aboutusPage);
?>



<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>QC/HC - about us</title>

		<!-- Bootstrap 4.5 CSS -->
		<link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="css/style.css">
	    <!-- Style FOR HEADER AND FOOTER -->
	    <link rel="stylesheet" href="css/HeaderFooter.css">
	    <!-- Style CSS -->
	    <link href="css/about_us.css" rel="stylesheet">
	    <!-- Custom styles for this template -->
	    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


	</head>

	<body>
		<?php

			include_once 'header.php';
			echo $aboutusPage->content;
        ?>


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