<?php
ob_start();
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Home PHP</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../Assets/Template/Admin/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendor/css/core.css"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendor/css/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../Assets/Template/Admin/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendor/libs/apex-charts/apex-charts.css" />
  <link rel="stylesheet" href="../Assets/Template/css/form.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../Assets/Template/Admin/assets/vendor/js/helpers.js"></script>
  <script src="../Assets/Template/Admin/assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">


      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder">Women's Partner</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">

          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bxs-user-account"></i>
              <div data-i18n="Authentications">Manage Account</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="Userverification.php" class="menu-link">
                  <div data-i18n="Basic">Users</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="Doctorverification.php" class="menu-link">
                  <div data-i18n="Basic">Doctors</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-location-plus"></i>
              <div data-i18n="Account Settings">Location</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="District.php" class="menu-link">
                  <div data-i18n="Account">District</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="Place.php" class="menu-link">
                  <div data-i18n="Notifications">Place</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-cube-alt"></i>
              <div data-i18n="Misc">Basic Data</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="Category.php" class="menu-link">
                  <div data-i18n="Error">Category</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="Subcategory.php" class="menu-link">
                  <div data-i18n="Under Maintenance">Sub Category</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="Department.php" class="menu-link">
                  <div data-i18n="Under Maintenance">Department</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="Information.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Basic">Articles</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="Complaints.php" class="menu-link">
              <i class="menu-icon tf-icons bx bxs-report"></i>
              <div data-i18n="Basic">Complaints</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="Login.php" class="menu-link">
              <i class="menu-icon tf-icons bx bxs-report"></i>
              <div data-i18n="Basic">User Activity</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar Start -->
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">


              <!-- User -->
              <li>
                <a class="dropdown-item" href="logout.php">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">Log Out</span>
                </a>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div id="tab" align="center">

              <!--/ Transactions -->