<?php
use WebApp2\Database\Database;
use WebApp2\Database\DoctorPDO;

require_once 'vendor/autoload.php';



$d = new DoctorPDO();
$doctorsList = $d->getAllDoctors(Database::getDb());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Query Crew - Health Clinic</title>

    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
    <!-- Style FOR HEADER AND FOOTER -->
    <link rel="stylesheet" href="css/HeaderFooter.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/admin-style/admin_dashboard.css">

</head>

<body>
    <?php

        include_once 'header.php';
            
    ?>

<body>
    <div class="wrapper">
        <div class="container">
            <p class="h1 text-center" style="margin-top: 0.5em;">Doctor Admin Panel</p>
            <div class="m-1">

                <a href="index.php?page=addDoctor" id="btn_addStudent" class="btn btn-success btn-lg float-right">Add New Doctor</a>

                <!--    Displaying Data in Table-->
                <table class="table table-bordered tbl">
                    <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">CPSO No.</th>
                        <th scope="col">CRUD Operations</th>
                        <!--<th scope="col">Update</th>
                        <th scope="col">Delete</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($doctorsList as $dr) { ?>
                        <tr>
                            <td><?= $dr->first_name; ?></td>
                            <td><?= $dr->last_name; ?></td>
                            <td><?= $dr->cpso_reg; ?></td>
                            <td>
                                <div class="row">
                                    <div class="col-md-4">
                                        <form action="index.php?page=detailDoctor" method="post">
                                            <input type="hidden" name="id" value="<?= $dr->id; ?>"/>
                                            <input type="submit" class="button btn btn-secondary" name="detailDoctor" value="View"/>
                                        </form>
                                    </div>

                                    <div class="col-md-4">
                                        <form action="index.php?page=updateDoctor" method="post">
                                            <input type="hidden" name="id" value="<?= $dr->id; ?>"/>
                                            <input type="submit" class="button btn btn-primary" name="updateDoctor" value="Update"/>
                                        </form>
                                    </div>

                                    <div class="col-md-4">
                                        <form action="index.php?page=deleteDoctor" method="post">
                                            <input type="hidden" name="id" value="<?=  $dr->id; ?>"/>
                                            <input type="submit" class="button btn btn-danger" name="deleteDoctor" value="Delete"/>
                                        </form>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>


            </div>

        </div>
    </div>
</body>

<?php
include 'footer.php';
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

</html>

