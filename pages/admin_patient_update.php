<?php
use WebApp2\Database\{Database,PatientPDO,AdminAllUsersPDO};
require_once 'vendor/autoload.php';

$dbcon = Database::getDb();
$patient = new AdminAllUsersPDO();
$roles = $patient->getRoles($dbcon);

$fname = $lname = $address = $phone = $email = "";

//Get patient data
if(isset($_POST['updPatient'])){
    $id = $_POST['id'];
    $p = $patient->getPatientById($dbcon, $id);

    $fname =  $p->firstname;
    $lname = $p->lastname;
    $username = $p->username;
    $email = $p->email;
    $role = $p->user_role_id;
}

//update patient
if(isset($_POST['updatePatient'])){
    $id= $_POST['uid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    if($fname == "" || $lname == "" || $username == "" || $email == "" || $role == ""){
        $updateMsg = "Please fill out the required field.";
    } else if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $updateMsg = "Please enter valid email.";
    } else {
        $p = new AdminAllUsersPDO();
        $patient = $p->updateUser($dbcon, $id, $fname, $lname, $username, $email, $role);

        if($patient){
            header('Location:  index.php?page=admin_patients');
        } else {
            $updateMsg = "Failed to update. Please try again.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QC/HC - admin dashboard</title>

    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
    <!-- Style FOR HEADER AND FOOTER -->
    <link rel="stylesheet" href="css/HeaderFooter.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/admin-style/admin_dashboard.css">

</head>

<body>
<?php include_once 'header.php'; ?>

<div class="d-lg-flex align-items-stretch w-100">
    <?php include_once 'admin_sidebar.php'; ?>
    <main class="w-100 order-2" id="admin_main">
        <div class="container-fluid mb-5">
            <button class="btn btn-secondary my-4" type="button" id="sidebar_nav_btn">Admin Menu</button>

            <div class="card mb-3">
                <h1 class="p-3">Update Patient</h1>

                <!--Update faq-->
                <form action="" method="post" class="p-3">
                    <input type="hidden" name="uid" value="<?= $id; ?>" />
                    <span><?= isset($updateMsg) ? $updateMsg : ""; ?></span>
                    <div class="form-group">
                        <label for="fname">First Name<span>&ast;</span></label>
                        <input class="form-control" id="fname" name="fname" value="<?= $fname; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name<span>&ast;</span></label>
                        <input type="text" class="form-control" id="lname" name="lname" value="<?= $lname; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="username">Username<span>&ast;</span></label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $username; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Last Name<span>&ast;</span></label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $email; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="role">User Role<span>&ast;</span></label>
                        <select class="form-control" id="role" name="role">
                            <option value="0">Roles</option>
                            <?php foreach ($roles as $r) {
                                $select = $html_dropdown = "";
                                if($role == $r->id){ $selected = "selected"; } else { $selected = "";};
                                echo $html_dropdown .= "<option $selected value='$r->id'>$r->type</option>";
                            }?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark" name="updatePatient">Update</button>
                </form>

            </div>

            <!--Link to the patient list page-->
            <a class="sidebar_item" href="index.php?page=admin_patients">Go back to list</a>

        </div>
    </main>
    <?php include_once 'admin_sidebar.php'; ?>
</div>


<?php include_once 'footer.php'; ?>

<!-- Script Source Files -->

<!-- jQuery -->
<script src="js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap 4.5 JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Font Awesome -->
<script src="js/all.min.js"></script>
<!--CUSTOM JS-->
<script type="text/javascript" src="js/admin_dashboard.js"></script>

<!-- End Script Source Files -->


</body>
</html>
