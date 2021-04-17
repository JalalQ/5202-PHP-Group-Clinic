<?php
 
use WebApp2\Database\{Database,FaqPDO};
require_once 'vendor/autoload.php';

if($_SESSION['user']->role !== "admin") {
    header("location: index.php?page=user_login");
}

$dbcon = Database::getDb();
$question = $answer = "";

//Get FAQ data
if(isset($_POST['updFaq'])){
    $id = $_POST['id'];

    $f = new FaqPDO();
    $faq = $f->getFaqById($dbcon, $id);

    $question =  $faq->question;
    $answer = $faq->answer;
}

//update FAQ
if(isset($_POST['updateFaq'])){
    $id= $_POST['uid'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    if($question == "" || $answer == ""){
        $updateMsg = "Please fill out the required field.";
    } else {
        $f = new Faq();
        $updatedFaq = $f->updateFaq($dbcon, $id, $question, $answer);

        if($updatedFaq){
            header('Location:  index.php?page=admin_faq');
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
    <link rel="stylesheet" href="css/admin-style/admin_sidebar.css">

</head>

<body>
<?php include_once 'header.php'; ?>

<div class="d-lg-flex align-items-stretch w-100">
    <?php include_once 'admin_sidebar.php'; ?>
    <main class="w-100 order-2" id="admin_main">
        <div class="container-fluid mb-5">
            <button class="btn btn-secondary my-4" type="button" id="sidebar_nav_btn">Admin Menu</button>

            <div class="card mb-3">
                <h1 class="p-3">Edit FAQs</h1>

                <!--Update faq-->
                <form action="" method="post" class="p-3">
                    <input type="hidden" name="uid" value="<?= $id; ?>" />
                    <span><?= isset($updateMsg) ? $updateMsg : ""; ?></span>
                    <div class="form-group">
                        <label for="question">Question<span>&ast;</span></label>
                        <textarea class="form-control" id="question" name="question"><?= $question; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer<span>&ast;</span></label>
                        <textarea type="text" class="form-control" id="answer" name="answer"><?= $answer; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark" name="updateFaq">Update</button>
                </form>

            </div>

            <!--Link to the faq list page-->
            <a class="sidebar_item" href="index.php?page=admin_faq">Go back to list</a>

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
<script type="text/javascript" src="js/admin_sidebar.js"></script>

<!-- End Script Source Files -->


</body>
</html>
