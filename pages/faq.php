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

    <!-- FAQs -->
    <main>
        <div class="text-center py-4 faq-title-container">
            <h1 class="faq-title mt-4">Frequently Asked Questions</h1>
        </div>

        <div class="container-fluid mt-3 mb-5">
            <p class="text-center">If you can't find your answer you're looking for, please contact us. We are happy to help you.</p>
            <div class="accordion mb-4" id="accordionExample">
                <div class="card w-75 mx-auto mb-3 border border-info rounded">
                    <div class="card-header card-bg" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left faq-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-plus fa-fw mr-2"></i>
                                What kind of service do you provide?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            We offer treatments that help physical rehabilitation, injury prevention, health and fitness. Our services include physiotherapy, Occupational Therapy, and massage therapy.
                        </div>
                    </div>
                </div>

                <div class="card w-75 mx-auto mb-3 border border-info rounded">
                    <div class="card-header card-bg" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed faq-button" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-plus fa-fw mr-2"></i>
                                How do I make an appointment?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            You can make an appointment by calling us at 416-XXX-XXXX or through our online booking system.
                        </div>
                    </div>
                </div>

                <div class="card w-75 mx-auto mb-3 border border-info rounded">
                    <div class="card-header card-bg" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed faq-button" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fas fa-plus fa-fw mr-2"></i>
                                Do I need a referral from my doctor?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            No referral is necessary to receive physiotherapy treatment. However, if you have extended health insurance plans which cover physiotherapy services, the insurance company may require a doctor’s referral to reimburse.
                        </div>
                    </div>
                </div>

                <div class="card w-75 mx-auto mb-3 border border-info rounded">
                    <div class="card-header card-bg" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed faq-button" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fas fa-plus fa-fw mr-2"></i>
                                What happens if I miss an appointment?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            No-shows will be charged $40 of a cancellation fee. To avoid this, please let us know 24 hours before your appointment if you need to cancel it.
                        </div>
                    </div>
                </div>

                <div class="card w-75 mx-auto mb-3 border border-info rounded">
                    <div class="card-header card-bg" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left faq-button" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                <i class="fas fa-plus fa-fw mr-2"></i>
                                What happens if I cannot keep an appointment?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            You can cancel without being charged if you contact us 24 hours before your appointment. Otherwise, $40 will be charged. If you wish to change the appointment schedule, you can contact us at 416-XXX-XXXX.
                        </div>
                    </div>
                </div>

                <div class="card w-75 mx-auto mb-3 border border-info rounded">
                    <div class="card-header card-bg" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left faq-button" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                <i class="fas fa-plus fa-fw mr-2"></i>
                                Will OHIP cover it?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            Unfortunately, QC/HC does not provide physiotherapy treatment covered by OHIP. However, some clinics in Ontario provide OHIP physiotherapy to patients who are under 18 or over 65 years old, and/or have had stayed overnight in a hospital. For more information, please refer to a clinic that offers OHIP physiotherapy.
                        </div>
                    </div>
                </div>

                <div class="card w-75 mx-auto mb-3 border border-info rounded">
                    <div class="card-header card-bg" id="headingSeven">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed faq-button" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fas fa-plus fa-fw mr-2"></i>
                                What is the cost of treatment?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            The cost of treatment is various depends on the type and duration of treatment. Please feel free to contact us at 416-XXX-XXXX or through a contact form. Our associates are happy to help.
                        </div>
                    </div>
                </div>

                <div class="card w-75 mx-auto mb-3 border border-info rounded">
                    <div class="card-header card-bg" id="headingEight">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed faq-button" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="fas fa-plus fa-fw mr-2"></i>
                                What do I need to bring with me?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                            Please bring your extended health insurance card so we may be able to bill directly to your insurer. Also, bring documentation related to your condition to your appointment such as a medical report. If your condition is caused by a work injury, we require information on the case manager’s name, contact details, claim number, and extended health benefits.
                        </div>
                    </div>
                </div>

                <div class="card w-75 mx-auto mb-3 border border-info rounded">
                    <div class="card-header card-bg" id="headingNine">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed faq-button" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <i class="fas fa-plus fa-fw mr-2"></i>
                                How should I dress?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                            Loose and comfortable garments such as shorts, yoga pants, tank tops and t-shirts are recommended to make the affected body parts more accessible for treatment. If your hair is long, it may be a good idea to tie it back.
                        </div>
                    </div>
                </div>

                <div class="card w-75 mx-auto mb-3 border border-info rounded">
                    <div class="card-header card-bg" id="headingTen">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed faq-button" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <i class="fas fa-plus fa-fw mr-2"></i>
                                How do I change my booking information on my online booking account?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                            You can call us at 416-XXX-XXXX. One of our associates will be available to help you.
                        </div>
                    </div>
                </div>

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