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
                <div class="container-fluid">
                    <button class="btn btn-secondary my-4" type="button" id="sidebar_nav_btn">Admin Menu</button>

                    <!--3 COLUMNS-->
                    <h1 class="pb-4">Hi, user name</h1><!--User name will be retrieved from database-->
                    <div class="row container-fluid" id="card_col-3">
                        <div class="col-lg-4 mt-3"><!--APPOINTMENT NUMBER-->
                            <div class="card shadow-sm text-center" id="card_number">
                                <div class="nav-link card_item">
                                    <p class="h1 d-block">25</p><!--Data will be retrieved from database-->
                                    <p>Today's appointment number</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3"><!--PATIENTS-->
                            <div class="card shadow-sm text-center" id="card_patients">
                                <a href="#" class="nav-link">
                                    <span class="h2 card_item">Patients <i class="fas fa-hospital-user"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3"><!--DOCTORS-->
                            <div class="card shadow-sm text-center" id="card_doctors">
                                <a href="#" class="nav-link">
                                    <span class="h2 card_item">Doctors <i class="fas fa-user-md"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--END OF 3 COLUMNS-->

                    <!--APPOINTMENTS-->
                    <section class="card my-4 shadow-sm" id="section_appointment">
                        <h2 class="mt-3 mb-1 ml-3">Today's Appointments</h2>
                        <a href="index.php?page=admin_dashboard_appointments" class="nav-link mb-2 detail-links" >Check Monthly Calendar</a>
                        <div class="container-fluid">
                            <div class="calendar mb-3"><!--table will be generated using PHP-->
                                <table class="table overflow-scroll">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Doctor1</th>
                                            <th>Doctor2</th>
                                            <th>Doctor3</th>
                                            <th>Doctor4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10:00</td>
                                            <td></td>
                                            <td>
                                                <p>10:00 Appointment</p>
                                                <p>10:30 Appointment</p>
                                            </td>
                                            <td>10:00 Appointment</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>11:00</td>
                                            <td>11:00 Appointment</td>
                                            <td>11:30 Appointment</td>
                                            <td>11:00 Appointment</td>
                                            <td>11:00 Appointment</td>
                                        </tr>
                                        <tr>
                                            <td>12:00</td>
                                            <td>
                                                <p>12:00 Appointment</p>
                                                <p>12:30 Appointment</p>
                                            </td>
                                            <td>12:30 Appointment</td>
                                            <td>12:30 Appointment</td>
                                            <td>12:00 Appointment</td>
                                        </tr>
                                        <tr>
                                            <td>13:00</td>
                                            <td>13:00 Appointment</td>
                                            <td>13:00 Appointment</td>
                                            <td>
                                                <p>13:00 Appointment</p>
                                                <p>13:30 Appointment</p>
                                            </td>
                                            <td>
                                                <p>13:00 Appointment</p>
                                                <p>13:30 Appointment</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14:00</td>
                                            <td>14:00 Appointment</td>
                                            <td></td>
                                            <td>14:30 Appointment</td>
                                            <td>14:30 Appointment</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!--END OF APPOINTMENTS-->

                    <!--HELPDESK-->
                    <section class="card mb-5 shadow-sm" id="section_helpdesk">
                        <h2 class="mt-3 mb-1 ml-3">Helpdesk</h2>
                        <a href="index.php?page=admin_dashboard_helpdesk" class="nav-link mb-2 detail-links">Reply to Messages</a>
                        <div class="container-fluid pb-3"><!--Data will be retrieved from database using PHP-->
                            <div class="list-group gap-2">
                                <a href="#" class="list-group-item section_helpdesk_item" aria-current="true">
                                    2021-02-21 11:00 Patient Name New
                                </a>
                                <a href="#" class="list-group-item section_helpdesk_item">
                                    2021-02-21 11:15 Patient Name New
                                </a>
                                <a href="#" class="list-group-item section_helpdesk_item">
                                    2021-02-21 13:32 Patient Name New
                                </a>
                                <a href="#" class="list-group-item section_helpdesk_item">
                                    2021-02-21 14:45 Doctor Name New
                                </a>
                                <a href="#" class="list-group-item section_helpdesk_item">
                                    2021-02-21 16:20 Patient Name New
                                </a>
                            </div>
                        </div>
                    </section>
                    <!--END OF HELPDESK-->
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