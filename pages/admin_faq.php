<?php
use PHP\Classes\{Database,Faq};
require_once 'vendor/autoload.php';

$dbcon = Database::getDb();

//Generate a table
$newFaqs = new Faq();
$faqs = $newFaqs->getFaqs($dbcon);

//Add s new faq
if(isset($_POST['addFaq'])){
    $question = filter_input(INPUT_POST,'question', FILTER_SANITIZE_STRING);
    $answer = filter_input(INPUT_POST,'answer', FILTER_SANITIZE_STRING);

    if($question == "" || $answer == ""){
        $addMsg = "Please fill out the required field.";
    } else {
        $newFaq = new Faq();
        $addnew = $newFaq->addFaq($dbcon, $question, $answer);

        if($addnew) {
            $addMsg = "Added successfully.";
            $faqs = $newFaqs->getFaqs($dbcon);

        } else {
            $addMsg = "Failed to add. Please try it again.";
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
        <div class="container-fluid">
            <button class="btn btn-secondary my-4" type="button" id="sidebar_nav_btn">Admin Menu</button>

            <div class="card mb-5">
                <h1 class="pl-3 py-2">Edit FAQs</h1>

                <!--Add new faq form-->
                <form action="" method="post" class="px-3">
                    <span><?= isset($addMsg) ? $addMsg : ""; ?></span>
                    <div class="form-group">
                        <label for="question">Question<span>&ast;</span></label>
                        <textarea class="form-control" id="question" name="question"><?= isset($question) ? $question : "";?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer<span>&ast;</span></label>
                        <textarea type="text" class="form-control" id="answer" name="answer"><?= isset($answer) ? $answer : "";?></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark" name="addFaq" >Add</button>
                </form>

                <!--List of faqs-->
                <div class="p-3 faq-list overflow-auto">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Questioner ID</th>
                            <th scope="col">Question</th>
                            <th scope="col">Answer</th>
                            <th scope="col">&nbsp;</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($faqs as $faq) { ?>
                            <tr>
                                <td><?= $faq->id; ?></td>
                                <td><?= $faq->questioner_id; ?></td>
                                <td><?= $faq->question; ?></td>
                                <td><?= $faq->answer; ?></td>
                                <td>
                                    <form action="index.php?page=admin_faq_update" method="post">
                                        <input type="hidden" name="id" value="<?= $faq->id; ?>"/>
                                        <input type="submit" class="button btn btn-info" name="updFaq" value="update"/>
                                    </form>
                                </td>
                                <td>
                                    <form action="index.php?page=admin_faq_delete" method="post">
                                        <input type="hidden" name="id" value="<?= $faq->id; ?>"/>
                                        <input type="submit" class="button btn btn-primary" name="dltFaq" value="delete"/>
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
<script type="text/javascript" src="js/admin_dashboard.js"></script>

<!-- End Script Source Files -->


</body>
</html>