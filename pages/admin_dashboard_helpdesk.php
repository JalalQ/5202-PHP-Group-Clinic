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

                    <!--HELPDESK-->
                    <div class="mb-5" id="section_helpdesk">
                        <div class="list-group gap-2">
                            <a href="#helpMsg" class="list-group-item section_helpdesk_item" aria-current="true" id="link1">
                                2021-02-21 11:00 Patient Name New
                            </a>
                            <a href="#helpMsg" class="list-group-item section_helpdesk_item">
                                2021-02-21 11:15 Patient Name New
                            </a>
                            <a href="#helpMsg" class="list-group-item section_helpdesk_item">
                                2021-02-21 13:32 Patient Name New
                            </a>
                            <a href="#helpMsg" class="list-group-item section_helpdesk_item">
                                2021-02-21 14:45 Doctor Name New
                            </a>
                            <a href="#helpMsg" class="list-group-item section_helpdesk_item">
                                2021-02-21 16:20 Patient Name New
                            </a>
                        </div>

                        <!--MESSAGE OUTPUT-->
                        <div class="my-3 px-3 py-3 card" id="helpMsg">
                            <p>Name: Alex</p>
                            <p>Subtitle: Inquiry</p>
                            <p>Request Date: 2021-02-21 11:00</p>
                            <p>Message: I am interested in physiotherapy treatment. But I am not sure which service is best for me....</p>

                            <!-- REPLY FORM -->
                            <form method="post" action="" name="helpForm">
                                <div class="form-group">
                                    <label for="reply">Reply Message: </label>
                                    <textarea id="reply" name="reply" class="form-control"></textarea>
                                </div>
                                <input type="submit" class="btn btn-info" id="helpBtn" value="Reply to this message" />
                            </form>
                        </div>
                        <!--END OF MESSAGE OUTPUT-->

                    </div>
                    <!--END OF HELPDESK-->
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

