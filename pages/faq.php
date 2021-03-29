<?php
use PHP\Classes\{Database, Faq};
require_once 'vendor/autoload.php';

$dbcon = Database::getDb();

//Get FAQ contents from faq table
$newFaqs = new Faq();
$faqs = $newFaqs->getFaqs($dbcon);
//var_dump($faqs);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>QC/HC - FAQs</title>

      <!-- Bootstrap 4.5 CSS -->
      <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
      <!-- Style FOR HEADER AND FOOTER -->
      <link rel="stylesheet" href="css/HeaderFooter.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/faq.css">
  </head>
  <body>
    <!-- Header -->
    <?php include_once 'pages/header.php'; ?>

    <!--Main-->
    <main>
        <div class="text-center py-4 faq-title-container">
            <h1 class="faq-title mt-4">Frequently Asked Questions</h1>
        </div>

        <div class="container-fluid mt-3 mb-5">
            <p class="text-center">If you can't find your answer you're looking for, please contact us. We are happy to help you.</p>
            <div class="accordion mb-4" id="accordionExample">

                <?php foreach ($faqs as $faq) { ?>
                    <div class="card w-75 mx-auto mb-3 border border-info rounded">
                        <div class="card-header card-bg" id="heading<?= $faq->id; ?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left faq-button" type="button" data-toggle="collapse" data-target="#collapse<?= $faq->id; ?>" aria-expanded="true" aria-controls="collapse<?= $faq->id; ?>">
                                    <i class="fas fa-plus fa-fw mr-2"></i>
                                    <?= $faq->question; ?>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse<?= $faq->id; ?>" class="collapse" aria-labelledby="heading<?= $faq->id; ?>" data-parent="#accordionExample">
                            <div class="card-body">
                                <?= $faq->answer; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

    </main>


    <!-- Footer -->
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
    <script src="js/faq.js"></script>

    <!-- End Script Source Files -->
  </body>
</html>