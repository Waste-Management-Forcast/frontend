<?php
if (isset($_COOKIE['X-WASTE-SESSION'])) {
    $url = "http://103.172.205.249/waste-api/protected";
    $authorization = "Authorization: Bearer " . $_COOKIE['X-WASTE-SESSION'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $authorization));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($result, true);
} else {
    echo "<script>alert('Silahkan login dulu '); window.location='../index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel | Waste Management</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content="DashboardKit ">


    <!-- Favicon icon -->
    <link rel="icon" href="#" type="image/x-icon">

    <!-- icon font-awesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.css">

    <!-- font css -->
    <link rel="stylesheet" href="assets/fonts/feather.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/fonts/material.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css" id="main-style-link">

</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Mobile header ] start -->
    <div class="pc-mob-header pc-header">
        <div class="pcm-logo">
            WASTE MANAGEMENT
        </div>
        <div class="pcm-toolbar">
            <a href="#!" class="pc-head-link" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <a href="#!" class="pc-head-link" id="header-collapse">
                <i data-feather="more-vertical"></i>
            </a>
        </div>
    </div>
    <!-- [ Mobile header ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pc-sidebar ">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="dashboard-admin.php" class="b-brand mt-2 fw-bold text-light">
                    WASTE MANAGEMENT
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>MENU</label>
                    </li>
                    <li class="pc-item">
                        <a href="dashboard-admin.php" class="pc-link "><span class="pc-micon">
                                <i class="fas fa-chart-pie fa-2x"></i></span><span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label>Content Management</label>
                    </li>
                    <!-- <a href="sampah.html" class="pc-link "><span class="pc-micon">
                        <i class="fas fa-dumpster fa-2x"></i></span><span class="pc-mtext">Sampah</span><span class="pc-arrow"></span></a> -->
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link "><span class="pc-micon">
                                <i class="fas fa-users fa-2x"></i></span><span class="pc-mtext">User Management</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <a class="pc-link" href="user.php"><i class="fas fa-user mx-1"></i> User</a>
                            <a class="pc-link" href="admin.php"><i class="fas fa-user-edit mx-1"></i> Admin</a>
                            <a class="pc-link" href="sampah.php"><i class="fas fa-folder mx-1"></i> Data Sampah</a>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="pc-header ">
        <div class="header-wrapper">
            <div class="ml-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/user/admin.png" alt="user-image" class="user-avtar">
                            <span>
                                <span class="user-name"><?= $json["data"][0]["name"]; ?></span>
                                <span class="user-desc"><?= $json["data"][0]["role"]; ?></span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                            <a href="../logout.php" class="dropdown-item">
                                <i class="fa fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </header>
    <!-- [ Header ] end -->

    <?php
    $url = "http://103.172.205.249/waste-api/dashboard";
    $obj = json_decode(file_get_contents($url), true);
    echo $obj["data"]["jumlah_kategori_sampah"];
    ?>

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pcoded-content">

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- support-section start -->
                <div class="col-xl-12 col-md-12">
                    <div class="card flat-card">
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-users fa-2x mb-1 text-primary"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5><?= $obj["data"]["jumlah_warga"] ?></h5>
                                        <span>Kepala Keluarga</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-recycle fa-2x mb-1 text-primary"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5><?= $obj["data"]["jumlah_kategori_sampah"] ?> Kg</h5>
                                        <span>Jumlah Kategori Sampah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-table">
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-recycle fa-2x mb-1 text-primary"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5><?= $obj["data"]["jumlah_sampah"] ?> Kg</h5>
                                        <span>Jumlah Sampah</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="fas fa-recycle fa-2x mb-1 text-primary"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5><?= $obj["data"]["rerata_jumlah_sampah"] ?> Kg</h5>
                                        <span>Rata Rata Jumlah Sampah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- support-section end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
    <!-- <script src="assets/js/plugins/clipboard.min.js"></script> -->
    <!-- <script src="assets/js/uikit.min.js"></script> -->

    <!-- Icon font-awesome JS -->
    <script src="assets/fontawesome/js/all.js"></script>
    <script src="assets/fontawesome/js/fontawesome.js"></script>

    <!-- Apex Chart -->
    <script src="assets/js/plugins/apexcharts.min.js"></script>

    <!-- custom-chart js -->
    <script src="assets/js/pages/dashboard-sale.js"></script>
</body>

</html>