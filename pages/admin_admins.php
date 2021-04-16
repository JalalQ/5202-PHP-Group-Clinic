<?php
session_start();
use WebApp2\Database\{Database,AdminAllUsersPDO};
require_once 'vendor/autoload.php';

if($_SESSION['user']->role !== "admin") {
    header("location: index.php?page=user_login");
}

$dbcon = Database::getDb();

//Generate a table
$newAdmins = new AdminAllUsersPDO();
$admins = $newAdmins->getAdmins($dbcon);

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
    <link rel="stylesheet" href="css/admin-style/admin_sidebar.css">

</head>

<body>
<?php include_once 'header.php'; ?>

<div class="d-lg-flex align-items-stretch w-100">
    <?php include_once 'admin_sidebar.php'; ?>
    <main class="w-100 order-2" id="admin_main">
        <div class="container-fluid">
            <button class="btn btn-secondary my-4" type="button" id="sidebar_nav_btn">Admin Menu</button>

            <div class="card mb-5">
                <h1 class="pl-3 py-2">Administrators List</h1>

                <!--List of patients-->
                <div class="p-3 faq-list overflow-auto">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($admins as $a) {
                            $name = $a->firstname.' '.$a->lastname;
                            ?>
                            <tr>
                                <td><?= $a->id; ?></td>
                                <td><?= $name; ?></td>
                                <td><?= $a->username; ?></td>
                                <td><?= $a->email; ?></td>
                                <td>
                                    <form action="index.php?page=admin_admin_update" method="post">
                                        <input type="hidden" name="id" value="<?= $a->id; ?>"/>
                                        <input type="submit" class="button btn btn-info" name="updAdmin" value="update"/>
                                    </form>
                                </td>
                                <td>
                                    <form action="index.php?page=admin_admin_delete" method="post">
                                        <input type="hidden" name="id" value="<?= $a->id; ?>"/>
                                        <input type="submit" class="button btn btn-primary" name="dltAdmin" value="delete"/>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
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
<script type="text/javascript" src="js/admin_sidebar.js"></script>

<!-- End Script Source Files -->


</body>
</html>