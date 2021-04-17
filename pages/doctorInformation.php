
<!--for each doctor-->

<h1 class="jumbotron-heading text-center" style="margin:1em 0em;">

    <u>Dr. <?= $dr->first_name; ?></u>

</h1>

<div class="row">
    <!--https://getbootstrap.com/docs/4.0/layout/grid/-->
    <div class="col"><!-- General-Information -->

            <div class="panel-heading">
                <h3 class="panel-title">Personal Information</h3>
            </div>
            <div class="panel-body">
                <div class="about-info-p">
                    <strong>Full Name</strong>
                    <br>
                    <p class="text-muted">
                        <span><?= $dr->first_name; ?></span>
                        <span><?= $dr->last_name; ?></span>
                    </p>
                </div>
                <div class="about-info-p">
                    <strong>CPSO registration</strong>
                    <br>
                    <p class="text-muted"><?= $dr->cpso_reg; ?></p>
                </div>
                <div class="about-info-p">
                    <strong>Email</strong>
                    <br>
                    <p class="text-muted"><?= $dr->email; ?></p>
                </div>
                <div class="about-info-p m-b-0">
                    <strong>Education</strong>
                    <br>
                    <p class="text-muted"><?= $dr->education; ?></p>
                </div>
            </div>


        <!-- Expertise -->
        <div class="panel panel-default panel-fill">
            <div class="panel-heading">
                <h3 class="panel-title">Expertise</h3>
            </div>
            <div class="panel-body">
                <?= $dr->expertise; ?>
            </div>
        </div>
        <!-- Expertise -->

    </div><!-- General-Information ENDS-->

    <!-- Biography/ Personal Information -->
    <div class="col-5">

        <div class="panel panel-default panel-fill">
            <div class="panel-heading">
                <h3 class="panel-title">Biography</h3>
            </div>
            <div class="panel-body">
                <p>
                    <?= $dr->biography; ?>
                </p>

                <p><strong>
                        Personal Summary
                    </strong></p>

                <p>
                    <?= $dr->personal; ?>
                </p>
            </div>
        </div>

    </div><!-- Biography/ Personal Information ENDS-->

    <!--Display Reviews about the Doctor -->
    <div class="col">
        <div class="panel panel-default panel-fill">
            <div class="panel-heading">
                <h3 class="panel-title">Rating </h3>
                <h4>Based on <?= $review->drReviews; ?> reviews.</h4>
            </div>

            <div class="panel-body">
                <div class="about-info-p">
                    <strong>Knowledge</strong>
                    <br>
                    <p class="text-muted"><?= $review->knowAvg; ?></p>
                </div>
                <div class="about-info-p">
                    <strong>Friendly</strong>
                    <br>
                    <p class="text-muted"><?= $review->friendAvg;  ?></p>
                </div>
                <div class="about-info-p m-b-0">
                    <strong>Professionalism</strong>
                    <br>
                    <p class="text-muted"><?= $review->profAvg;  ?></p>
                </div>
            </div>

            <form action="index.php?page=submitReview" method="post">
                <input type="hidden" name="id" value="<?= $dr->id; ?>"/>
                <input type="submit" class="button btn btn-success"
                       name="submitReview" value="<?= "Submit Review Dr. " . $dr->first_name; ?>"/>
            </form>

        </div>
    </div>

</div>





