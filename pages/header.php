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
                            <a class="nav-link <?php echo ($_GET['page']==='indexDoctor')? 'active' : '' ?>" href="index.php?page=indexDoctor"> Doctor </a>
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
                        <li class="nav-item ">
                            <a class="nav-link <?php echo ($_GET['page']==='indexServices')? 'active' : '' ?>" href="index.php?page=home">Login</a>
                        </li>
                       <!-- <li class="nav-item dropdown">
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