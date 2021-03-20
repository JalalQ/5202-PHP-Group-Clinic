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
    <link rel="stylesheet" href="css/patient_register.css">
    <!-- Style FOR HEADER AND FOOTER -->
    <link rel="stylesheet" href="css/HeaderFooter.css">
    <script src="https://kit.fontawesome.com/c03ea9a48c.js" crossorigin="anonymous"></script>


</head>

<body>
<?php

include_once 'header.php';
?>
<div class="contact-content-wrapper container">
    <h1>Patient Info</h1>

<!--will come from the database-->
    <form method="#" action="POST" name="register-form" id="contact-form">

        <label id="contact-form-req"><span>*</span> indicates a required field.</label>
        <div class="form-group">
            <label for="firstname">first name<span>*</span></label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
        </div>

        <div class="form-group">
            <label for="lastname">last name<span>*</span></label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>

        <div class="form-group">
            <label for="Address">Address<span>*</span></label>
            <input type="text" class="form-control" id="address" name="address">
        </div>

        <div class="form-group">
            <label for="phone">Phone<span>*</span></label>
            <input type="phone" class="form-control" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="comment">Medical History<span>*</span></label>
            <textarea class="form-control" id="medical" name="medical" required></textarea>
        </div>


        <button type="submit" class="btn btn-dark btn-lg">Submit</button>
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