

<!--for each doctor-->


<h1 class="jumbotron-heading text-center" style="margin:1em 0em;">

    <u>Dr. <?= $dr->first_name; ?></u>

</h1>

<div class="row">
    <div class="col-lg-12">


            <div class="tab-pane active" id="home-2">
                <div class="row">
                    <div class="col-md-4">

                        <!-- General-Information -->
                        <div class="panel panel-default panel-fill">
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
                        </div>
                        <!-- General-Information -->

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

                    </div>

                    <!-- Biography/ Personal Information -->
                    <div class="col-md-8">

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
                        <!-- Biography/ Personal Information -->


                    </div>

                </div>
            </div>


    </div>
</div>

