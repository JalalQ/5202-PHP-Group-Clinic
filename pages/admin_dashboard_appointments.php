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
<div class="row">
    <main class="col-lg-10 order-1">
        <div class="container-fluid">
            <!--DROPDOWN MENU-->
            <div class="dropdown dropleft position-fixed">
                <button class="btn btn-secondary" type="button" id="btn-toggle">
                    Menu
                </button>
                <nav>
                    <ul class="dropdown-menu" id="toggle-menu-item">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page=admin_dashboard">
                                <div class="d-flex justify-content-start">
                                    <i class="fas fa-home fa-fw mt-1 mr-1"></i>
                                    <p>Dashboard</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <div class="d-flex justify-content-start">
                                    <i class="fas fa-user fa-fw mt-1 mr-1"></i>
                                    <p>Administrators</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex justify-content-start">
                                    <i class="fas fa-hospital-user fa-fw mt-1 mr-1"></i>
                                    <p>Patients</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="d-flex justify-content-start">
                                    <i class="fas fa-user-md fa-fw mt-1 mr-1"></i>
                                    <p>Doctors</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=admin_dashboard_appointments">
                                <div class="d-flex justify-content-start">
                                    <i class="fas fa-calendar-check fa-fw mt-1 mr-1"></i>
                                    <p>Appointments</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=admin_dashboard_helpdesk">
                                <div class="d-flex justify-content-start">
                                    <i class="fas fa-hands-helping fa-fw mt-1 mr-1"></i>
                                    <p>Helpdesk</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--END OF DROPDOWN MENU-->

            <h1 class="my-3">Appointments Monthly Calendar</h1>

            <!--SELECT MONTH DROP DOWN-->
            <form method="post" action="">
                <label for="month">Select a month: </label>
                <select name="month" id="month">
                    <option value="">&emsp;</option>
                    <option value="Jan">January</option>
                    <option value="Feb">February</option>
                    <option value="March" selected>March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="Aug">August</option>
                    <option value="Sept">September</option>
                    <option value="Oct">October</option>
                    <option value="Nov">November</option>
                    <option value="Dec">December</option>
                </select>
            </form>

            <!--CALENDAR-->
            <div class="mt-3 mb-5 calendar-monthly">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>1</td>
                            <td>2
                                <p>10:00 Doctor1</p>
                                <p>10:30 Doctor2</p>
                            </td>
                            <td>3
                                <p>10:00 Doctor1</p>
                            </td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>8
                                <p>11:00 Doctor3</p>
                            </td>
                            <td>9
                                <p>11:30 Doctor2</p>
                            </td>
                            <td>10
                                <p>11:30 Doctor1</p>
                            </td>
                            <td>11
                                <p>11:30 Doctor4</p>
                            </td>
                            <td>12
                                <p>11:30 Doctor1</p>
                            </td>
                            <td>13
                                <p>11:30 Doctor3</p>
                            </td>
                        </tr>
                        <tr>
                            <td>14
                                <p>10:00 Doctor1</p>
                            </td>
                            <td>15
                                <p>12:00 Doctor4</p>
                                <p>12:30 Doctor2</p>
                            </td>
                            <td>16
                                <p>12:30 Doctor1</p>
                            </td>
                            <td>17
                                <p>12:30 Doctor3</p>
                            </td>
                            <td>18
                                <p>12:30 Doctor2</p>
                            </td>
                            <td>19
                                <p>12:30 Doctor1</p>
                            </td>
                            <td>20
                                <p>12:30 Doctor4</p>
                            </td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>22
                                <p>13:00 Doctor2</p>
                            </td>
                            <td>23
                                <p>13:00 Doctor2</p>
                            </td>
                            <td>24
                                <p>13:00 Doctor1</p>
                                <p>13:30 Doctor4</p>
                            </td>
                            <td>25
                                <p>13:00 Doctor3</p>
                                <p>13:30 Doctor2</p>
                            </td>
                            <td>26
                                <p>11:00 Doctor4</p>
                            </td>
                            <td>27
                                <p>11:00 Doctor1</p>
                            </td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>29
                                <p>14:00 Doctor4</p>
                            </td>
                            <td>30</td>
                            <td>31
                                <p>14:30 Doctor3</p>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!--SIDE MENU-->
    <aside class="col-lg-2 order-0 sidebar_sticky min-vh-100">
        <nav class="sticky-top container-fluid pt-5" id="sidebar_nav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active sidebar_item" aria-current="page" href="index.php?page=admin_dashboard">
                        <div class="d-flex justify-content-start">
                            <i class="fas fa-home fa-fw mr-1 icons"></i>
                            <p>Dashboard</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active sidebar_item" aria-current="page" href="#">
                        <div class="d-flex justify-content-start">
                            <i class="fas fa-user fa-fw mr-1 icons"></i>
                            <p>Administrators</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar_item" href="#">
                        <div class="d-flex justify-content-start">
                            <i class="fas fa-hospital-user fa-fw mr-1 icons"></i>
                            <p>Patients</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar_item" href="#">
                        <div class="d-flex justify-content-start">
                            <i class="fas fa-user-md fa-fw mr-1 icons"></i>
                            <p>Doctors</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar_item" href="index.php?page=admin_dashboard_appointments">
                        <div class="d-flex justify-content-start">
                            <i class="fas fa-calendar-check fa-fw mr-1 icons"></i>
                            <p>Appointments</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar_item" href="index.php?page=admin_dashboard_helpdesk">
                        <div class="d-flex justify-content-start">
                            <i class="fas fa-hands-helping fa-fw mr-1 icons"></i>
                            <p>Helpdesk</p>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
    <!--END OF SIDE MENU-->
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
