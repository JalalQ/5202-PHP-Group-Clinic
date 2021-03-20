
<!--part of the code has been taken from
https://www.bootdey.com/snippets/view/Social-network-profile-with-panels-->
<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Dr Deo's Profile</h1>
            <p class="lead text-muted"></p>
            <p>
                <a href="#" class="btn btn-primary my-2">Edit Profile</a>
                <!--<a href="#" class="btn btn-secondary my-2">Secondary action</a>-->
            </p>
        </div>
    </section>


    <div class="wrapper">
        <div class="container">

            <div class="wraper">

                <div class="row">
                    <div class="col-lg-12">


                            <div class="tab-pane active" id="home-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Personal Information</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br>
                                                    <p class="text-muted">Johnathan Deo</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>CPSO registration</strong>
                                                    <br>
                                                    <p class="text-muted">3849 39</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted">johnathandeon@moltran.com</p>
                                                </div>
                                                <div class="about-info-p m-b-0">
                                                    <strong>Education</strong>
                                                    <br>
                                                    <p class="text-muted">BSc (McMaster)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->

                                        <!-- Languages -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Expertise</h3>
                                            </div>
                                            <div class="panel-body">
                                                <ul>
                                                    <li>Family Practise</li>
                                                    <li>Nutrition Support OSAP approved</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Languages -->

                                    </div>

                                    <div class="col-md-8">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Biography</h3>
                                            </div>
                                            <div class="panel-body">
                                                <p>
                                                    Dr. Deo is the medical office specializing in delivering high-quality
                                                    urgent care medicine. He’s a board-certified medical doctor,
                                                    specializing in family practise. Dr. Deo was born in Nova Scotia and
                                                    raised in British Columbia, CA. He graduated from McMaster University,
                                                    and attended medical school at the University of California,
                                                    Irvine.
                                                </p>

                                                <p><strong>
                                                        Personal Summary
                                                    </strong></p>

                                                <p>Dr Deo is married with 2 kids, and live in Hamilton. Dr Deo enjoys
                                                gardening and hiking.</p>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->


                                    </div>

                                </div>
                            </div>


                    </div>
                </div>


            </div>
            <!-- end container -->
			
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
			
        </div>
        <!-- end wrapper -->
    </div>



</main>
