<?php
//determine the right Dashboard to display according to the user role
$dasboard="";
if(isset($_SESSION["user"])){
  switch($_SESSION["user"]->role){
    case "patient":
      $dasboard = "patient_dashboard";
      break;
    case "doctor":
      $dasboard = "doctorAdmin";
      break;
    case "admin":
      $dasboard = "admin_dashboard";
      break;
  }
}
 ?>
<header>
     <!--Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark cyan">
         <a class="navbar-brand font-bold logo" href="index.php?page=home">QC/HC</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link <?php echo ($_GET['page']==='home' || !isset($_GET['page']))? 'active' : '' ?>" href="index.php?page=home">Home </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link  <?php echo ($_GET['page']==='about_us')? 'active' : '' ?>" href="index.php?page=about_us"> About us </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?php echo ($_GET['page']==='indexServices')? 'active' : '' ?>" href="index.php?page=indexServices"> Services </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?php echo ($_GET['page']==='indexDoctor')? 'active' : '' ?>" href="index.php?page=indexDoctor"> <i class="fas fa-user-md"></i> Doctors </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?php echo ($_GET['page']==='faq')? 'active' : '' ?>" href="index.php?page=faq">FAQ </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?php echo ($_GET['page']==='patient_register')? 'active' : '' ?>" href="index.php?page=patient_register">Book an appointment </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?php echo ($_GET['page']==='contact')? 'active' : '' ?>" href="index.php?page=contact"><i class="fa fa-envelope"></i> Contact us</a>
                        </li>
                        <?php
                        if(!isset($_SESSION["user"])){
                         ?>
                         <li class="nav-item ">
                             <a class="nav-link <?php echo ($_GET['page']==='user_login')? 'active' : '' ?>" href="index.php?page=user_login">Log in</a>
                         </li>
                         <?php
                       }else{
                          ?>
                          <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> My account </a>
                               <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                  <?php if ($dasboard !== ""): ?>
                                  <a class="dropdown-item" href="index.php?page=<?= $dasboard ?>">Dashboard</a>
                                  <?php endif; ?>
                                   <a class="dropdown-item" href="index.php?page=user_logout">Log out</a>
                               </div>
                           </li>

                        <?php } ?>
                       <!--
                       <li class="nav-item ">
                           <a class="nav-link <?php echo ($_GET['page']==='user_logout')? 'active' : '' ?>" href="index.php?page=user_logout">Log out</a>
                       </li>

                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item" href="#">My account</a>
                                <a class="dropdown-item" href="index.php?page=admin_dashboard">Dashboard</a>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </nav>
            <!--/.Navbar -->
</header>
