<?php
use WebApp2\Database\{Database, AdminHelpdeskPDO};
require_once 'vendor/autoload.php';


$dbcon = Database::getDb();
$new = new AdminHelpdeskPDO();
$questioner = $new->getAllInfoForQuestioner($dbcon);
//var_dump($inq->user);
$responder = $new->getAllInfoForResponder($dbcon);

?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>QC/HC - admin dashboard - appointments</title>

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
                <div class="container-fluid">
                    <button class="btn btn-secondary my-4" type="button" id="sidebar_nav_btn">Admin Menu</button>

                    <h1 class="my-3">Helpdesk</h1>

                    <!--INQUIRIES-->
                    <div class="card p-5 mb-5 shadow-sm">
                        <div id="section_helpdesk">
                            <h2 class="mb-3">All Messages</h2>
                            <div class="accordion" id="accordionExample">
                                <?php foreach($questioner as $q) { ?>
                                    <div class="card">
                                        <div class="card-header card-bg section_helpdesk_item" id="heading<?= $q->id; ?>">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left section_helpdesk_btn" type="button" data-toggle="collapse" data-target="#collapse<?= $q->id; ?>" aria-expanded="true" aria-controls="collapse<?= $q->id; ?>">
                                                    <?= $q->id." ".$q->submitted_date." ".$q->firstname." ".$q->lastname." ".$q->status; ?>
                                                </button>
                                            </h2>
                                        </div>

                                        <!--MESSAGE OUTPUT-->
                                        <div id="collapse<?= $q->id; ?>" class="collapse" aria-labelledby="heading<?= $q->id; ?>" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Message: <?= $q->message; ?></p>
                                                <?php foreach($responder as $r) {
                                                    if($q->id == $r->id) {
                                                        ?>
                                                        <p>Reply: <?= $r->reply_message." (".$r->firstname." ".$r->lastname." ".$r->responded_date.")"; ?></p>
                                                    <?php }} ?>
                                            </div>
                                        </div>

                                    </div>
                                    <!--END OF MESSAGE OUTPUT-->
                                <?php } ?>
                            </div>
                        </div>
                        <!--END OF HELPDESK-->
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
        <script type="text/javascript" src="js/admin_dashboard.js"></script>

        <!-- End Script Source Files -->
    </body>

</html>