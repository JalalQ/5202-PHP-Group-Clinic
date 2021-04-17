<?php
use WebApp2\Database\Database;
?>
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
            <div class="wrapper">

                <?php foreach ($doctorsList as $dr) {
                    //echo "*" . $dr->id;
                    //get the aggregate review rating by a given doctor.
                    $review = $r->getAvgs(Database::getDb(), $dr->id);
                    include "doctorInformation.php";
                }
                ?>


            </div>
            <!-- end container -->
			
        </div>
        <!-- end wrapper -->
    </div>



</main>
