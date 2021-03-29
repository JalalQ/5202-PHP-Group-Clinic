<!--SIDE MENU-->
<aside class="min-vh-100 d-none order-1" id="sidebar_nav">
    <nav class="container-fluid py-5">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active sidebar_item" aria-current="page" href="index.php?page=admin_dashboard">
                    <div class="d-flex justify-content-start">
                        <i class="fas fa-home fa-fw mr-1 icons"></i>
                        <p>Dashboard</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active sidebar_item" aria-current="page" href="#">
                    <div class="d-flex justify-content-start">
                        <i class="fas fa-user fa-fw mr-1 icons"></i>
                        <p>Administrators</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar_item" href="#">
                    <div class="d-flex justify-content-start">
                        <i class="fas fa-hospital-user fa-fw mr-1 icons"></i>
                        <p>Patients</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar_item" href="#">
                    <div class="d-flex justify-content-start">
                        <i class="fas fa-user-md fa-fw mr-1 icons"></i>
                        <p>Doctors</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar_item" href="index.php?page=admin_dashboard_appointments">
                    <div class="d-flex justify-content-start">
                        <i class="fas fa-calendar-check fa-fw mr-1 icons"></i>
                        <p>Appointments</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar_item" href="index.php?page=admin_dashboard_helpdesk">
                    <div class="d-flex justify-content-start">
                        <i class="fas fa-hands-helping fa-fw mr-1 icons"></i>
                        <p>Helpdesk</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar_item" id="sidebar_toggle_btn">
                    Pages
                    <i class="fas fa-sort-down fa-fw"></i>
                </a>
                <div class="dropdown-menu" id="sidebar_toggle_menu">
                    <a class="nav-link sidebar_item sidebar_toggle_item pl-4" href="index.php?page=admin_faq">FAQ</a>
                </div>
            </li>
        </ul>
    </nav>

</aside>

