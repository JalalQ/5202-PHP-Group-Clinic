<?php
use PHP\classes\Database;
use PHP\classes\doctorDisplay;

require_once 'vendor/autoload.php';

//
require_once 'classes/Database.php';
require_once 'classes/doctorDisplay.php';

$d = new doctorDisplay();
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

<header>
    <nav class="navbar navbar-expand-lg navbar-dark cyan">
        <a class="navbar-brand font-bold logo" href="index.php?page=home">QC/HC</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="index.php?page=home"></i> Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" href="index.php?page=indexDoctor"></i> List of Doctor </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>
<p class="h1 text-center">Doctor Admin Panel</p>
<div class="m-1">

    <a href="./add-model.php" id="btn_addStudent" class="btn btn-success btn-lg float-right">Add New Doctor</a>

    <!--    Displaying Data in Table-->
    <table class="table table-bordered tbl">
        <thead>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">CPSO No.</th>
            <th scope="col">CRUD Modify</th>
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
                            <form action="./detailDoctor.php" method="post">
                                <input type="hidden" name="id" value="<?= $dr->id; ?>"/>
                                <input type="submit" class="button btn btn-secondary" name="detailDoctor" value="View"/>
                            </form>
                        </div>

                        <div class="col-md-4">
                            <form action="./updateDoctor.php" method="post">
                                <input type="hidden" name="id" value="<?= $dr->id; ?>"/>
                                <input type="submit" class="button btn btn-primary" name="updateDoctor" value="Update"/>
                            </form>
                        </div>

                        <div class="col-md-4">
                            <form action="./deleteDoctor.php" method="post">
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

