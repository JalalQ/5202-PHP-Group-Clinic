<?php
//Page created by Jalaluddin Qureshi

use WebApp2\Database\Database;
use WebApp2\Database\DoctorPDO;

require_once 'vendor/autoload.php';

$id;

if(isset($_POST['submitReview'])){
    global $id;
    $id= $_POST['id'];
    $d = new DoctorPDO();
    $doctor = $d->getdoctorById($id, Database::getDb());
}

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

    <?php include 'header.php'; ?>


    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Leave a Review for Dr. <?= $doctor->first_name; ?></h1>
                <p class="lead text-muted"></p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <form action="index.php?page=indexDoctor" method="post">

                    <input type="hidden" name="id" value="<?= $id; ?>"/>

                    <h1>Doctor Review</h1>

                    <h4>How was your overall experience?</h4>
                    <p>
                    Rate 1 represents, "Below Expectation", and Rate 5 represents "Exceeds Expectation".
                    </p>
                    <table>
                        <tr>
                            <th class="first-col" style="width:230px"></th>
                            <th style="width:100px">1</th>
                            <th style="width:100px">2</th>
                            <th style="width:100px">3</th>
                            <th style="width:100px">4</th>
                            <th style="width:100px">5</th>
                        </tr>
                        <tr>
                            <td class="first-col">Professional</td>
                            <td><input type="radio" value="1" name="professional" required="required"/></td>
                            <td><input type="radio" value="2" name="professional" required="required"/></td>
                            <td><input type="radio" value="3" name="professional" required="required"/></td>
                            <td><input type="radio" value="4" name="professional" required="required"/></td>
                            <td><input type="radio" value="5" name="professional" required="required"/></td>
                        </tr>
                        <tr>
                            <td class="first-col">Friendliness</td>
                            <td><input type="radio" value="1" name="friendly" required="required"/></td>
                            <td><input type="radio" value="2" name="friendly" required="required"/></td>
                            <td><input type="radio" value="3" name="friendly" required="required"/></td>
                            <td><input type="radio" value="4" name="friendly" required="required"/></td>
                            <td><input type="radio" value="5" name="friendly" required="required"/></td>

                        </tr>
                        <tr>
                            <td class="first-col">Knowledgeable</td>
                            <td><input type="radio" value="1" name="know" required="required"/></td>
                            <td><input type="radio" value="2" name="know" required="required"/></td>
                            <td><input type="radio" value="3" name="know" required="required"/></td>
                            <td><input type="radio" value="4" name="know" required="required"/></td>
                            <td><input type="radio" value="5" name="know" required="required"/></td>
                        </tr>
                    </table>

                    <button type="submit" name="confirmReview" class="btn btn-success" id="btn-submit">
                        Submit Feedback
                    </button>

                </form>
            </div>
        </div>


    </main>




    <?php include 'footer.php'; ?>
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
    </body>
</html>