
<!--part of the code has been taken from
https://www.bootdey.com/snippets/view/Social-network-profile-with-panels-->
<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Our Team</h1>
            <p class="lead text-muted"></p>
            <p>
                <a href="index.php?page=doctorAdmin" class="btn btn-primary my-2">Edit Profile - Admin</a>
                <!--<a href="#" class="btn btn-secondary my-2">Secondary action</a>-->
            </p>
        </div>
    </section>


    <div class="wrapper">
        <div class="container">

            <!-- doctor's information container -->
            <div class="wraper">

                <!-- for each doctor -->
                <?php foreach ($doctorsList as $dr) { ?>
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
                <?php } ?>


            </div>
            <!-- end container -->

            <!-- Appointment -->
			<section class="card my-4 shadow-sm" id="section_appointment">
                <h2 class="mt-3 mb-1 ml-3">Weekly Appointment</h2>
                <div class="container-fluid">
                    <div class="calendar mb-3"><!--table will be generated using PHP-->
                        <table class="table overflow-scroll">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
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
            <!-- Appointment -->
			
        </div>
        <!-- end wrapper -->
    </div>



</main>
