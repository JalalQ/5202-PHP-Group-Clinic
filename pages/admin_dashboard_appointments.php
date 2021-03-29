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
