<?php
session_start();
require_once 'vendor/autoload.php';
?>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Query Crew - Health Clinic</title>

    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Style FOR HEADER AND FOOTER -->
    <link rel="stylesheet" href="css/HeaderFooter.css">


</head>
<?php include "header.php";?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                <div class="row">
                    <div class="box  text-center">
                        <h1>Are you sure you would like to delete this user?</h1>
                        <div class=" container  my-4">
                            <form name="delete" method="post" action="index.php?page=deletedUser">
                                <input type="hidden" name="id" value="#">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a class="btn btn-secondary my-0" href="index.php?page=admin_dashboard">Return</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once 'footer.php.php';
?>
<!-- jQuery -->
<script src="js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap 4.5 JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Font Awesome -->
<script src="js/all.min.js"></script>