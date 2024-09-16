<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="/dashboard/img/fav.png" />

    <!-- Title -->
    <title>Physioscape</title>


    <!-- *************
        ************ Common Css Files *************
        ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="/dashboard/css/bootstrap.min.css">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="/dashboard/fonts/style.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/dashboard/css/main.css">


    <!-- *************
        ************ Vendor Css Files *************
    ************ -->

</head>
<body>

<!-- Loading starts -->
<div id="loading-wrapper">
    <div class='spinner-wrapper'>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
    </div>
</div>
<!-- Loading ends -->


<!-- *************
    ************ Header section start *************
************* -->


<!-- Header start -->
<header class="header">
    <div class="container-fluid">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <a href="index.html" class="logo">THE PHYSIOSCAPE <span></span></a>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">

                <!-- Header actions start -->
                <ul class="header-actions">
                    <li class="dropdown d-none d-sm-block">
                        <a href="#" class="contact">
                            <i class="icon-phone"></i> 012 345 6789
                        </a>
                    </li>
                    <li class="dropdown d-none d-sm-block">
                        <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                            <i class="icon-bell"></i>
                            <span class="count-label"></span>
                        </a>
                        <div class="dropdown-menu lrg" aria-labelledby="notifications">
                            <div class="dropdown-menu-header">
                                <h5>Notifications</h5>
                                <p class="m-0 sub-title">You have 5 unread notifications</p>
                            </div>
                            <ul class="header-notifications">
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="avatar">
                                            <img src="/dashboard/img/user24.png" alt="avatar" />
                                            <span class="notify-iocn icon-drafts text-danger"></span>
                                        </div>
                                        <div class="details">
                                            <h6>Dr. Clive</h6>
                                            <p>Appointed as a new President 2019-2020</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="avatar">
                                            <img src="/dashboard/img/user21.png" alt="avatar" />
                                            <span class="notify-iocn icon-layers text-info"></span>
                                        </div>
                                        <div class="details">
                                            <h6>Dr. G. Levsmia</h6>
                                            <p>Will be on leave on October 2nd week.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="avatar">
                                            <img src="/dashboard/img/user19.png" alt="avatar" />
                                            <span class="notify-iocn icon-person_add text-success"></span>
                                        </div>
                                        <div class="details">
                                            <h6>Dr. George S</h6>
                                            <p>Sent new applointments list</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                            <span class="user-name">Nélson Romyo</span>
                            <span class="avatar">NR<span class="status busy"></span></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                            <div class="header-profile-actions">
                                <div class="header-user-profile">
                                    <div class="header-user">
                                        <img src="/dashboard/img/user11.png" alt="Royal Hospitals Admin Template" />
                                    </div>
                                    <h5>Nélson Romyo</h5>
                                    <p>Admin</p>
                                </div>
                                <a href="hospital-add-doctor.html"><i class="icon-user1"></i> My Profile</a>
                                <a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
                                <a href="hospital-reviews.html"><i class="icon-activity"></i> Activity Logs</a>
                                <a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Header actions end -->

            </div>
        </div>
        <!-- Row end -->

    </div>
</header>
<!-- Header end -->

<!-- *************
    ************ Header section end *************
************* -->


<div class="container-fluid">


    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#royalHospitalsNavbar" aria-controls="royalHospitalsNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
        </button>
        <div class="collapse navbar-collapse" id="royalHospitalsNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active-page' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="icon-devices_other nav-icon"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->is('control/dashboard/careers*') ? 'active-page' : '' }} dropdown-toggle" href="#" id="doctoRs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-users nav-icon"></i>
                        Careers
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="doctoRs">
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.careers.manage-jobs') }}">add a career</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.careers.manage-internships') }}">Internship Opportunities</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->is('control/dashboard/centers*') ? 'active-page' : '' }} dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Centers
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <li>
                            <a class="dropdown-item" href="calendar.html">Accredited Centers</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="default-layout.html">Awaiting Accreditation</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->is('control/dashboard/events*') ? 'active-page' : '' }} dropdown-toggle" href="#" id="formsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-edit1 nav-icon"></i>
                        Events
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="formsDropdown">
                        <li>
                            <a class="dropdown-item" href="datepickers.html">News</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="wizard.html">Conferences</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="bs-select.html">Outreach</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="uiElementsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-image nav-icon"></i>
                        Post
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="formsDropdown">
                        <li>
                                <a class="dropdown-item" href="datepickers.html">Manage</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="wizard.html">Categories</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="bs-select.html">Others</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="tablesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-border_all nav-icon"></i>
                        Setting
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="tablesDropdown">
                        <li>
                            <a class="dropdown-item" href="bs-tables.html">Account Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="data-tables.html">Profile Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="data-tables.html">Sub-Admin Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navigation end -->


    <!-- *************
        ************ Main container start *************
    ************* -->
    <div class="main-container">


        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
{{--            <div class="site-award">--}}
{{--                <img src="/dashboard/img/award.svg" alt="Award"> Best Hospital--}}
{{--            </div>--}}
        </div>
        <!-- Page header end -->


        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <x-_partials._alert />

            {!! $slot !!}

        </div>
        <!-- Content wrapper end -->


    </div>
    <!-- *************
        ************ Main container end *************
    ************* -->

    <footer class="main-footer">© Royal Hospitals 2019</footer>

</div>

<!-- *************
    ************ Required JavaScript Files *************
************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="/dashboard/js/jquery.min.js"></script>
<script src="/dashboard/js/bootstrap.bundle.min.js"></script>
<script src="/dashboard/js/moment.js"></script>


<!-- *************
    ************ Vendor Js Files *************
************* -->

<!-- Apex Charts -->
<script src="/dashboard/vendor/apex/apexcharts.min.js"></script>
<script src="/dashboard/vendor/apex/examples/mixed/hospital-line-column-graph.js"></script>
<script src="/dashboard/vendor/apex/examples/mixed/hospital-line-area-graph.js"></script>
<script src="/dashboard/vendor/apex/examples/bar/hospital-patients-by-age.js"></script>

<!-- Rating JS -->
<script src="/dashboard/vendor/rating/raty.js"></script>
<script src="/dashboard/vendor/rating/raty-custom.js"></script>

<!-- Main Js Required -->
<script src="/dashboard/js/main.js"></script>

</body>
</html>
