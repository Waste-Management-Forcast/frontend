<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel Waste Management</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content="DashboardKit ">


    <!-- Favicon icon -->

    <!-- icon font-awesome -->
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.css">

    <!-- font css -->
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="../assets/fonts/material.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">

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
                <a href="dashboard-user.html" class="b-brand mt-2 fw-bold text-light">
                    WASTE MANAGEMENT
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>MENU</label>
                    </li>
                    <li class="pc-item">
                        <a href="dashboard-user.html" class="pc-link "><span class="pc-micon">
                                <i class="fas fa-chart-pie fa-2x"></i></span><span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label>Content Management</label>
                    </li>
                    <a href="sampah.html" class="pc-link "><span class="pc-micon">
                            <i class="fas fa-dumpster fa-2x"></i></span><span class="pc-mtext">Sampah</span><span class="pc-arrow"></span></a>
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
                            <img src="../assets/images/user/user.png" alt="user-image" class="user-avtar">
                            <span>
                                <span class="user-name">Bpk. Agung</span>
                                <span class="user-desc">Pengguna</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                            <a href="../login/login.html" class="dropdown-item">
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

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pcoded-content">
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- customer-section start -->
                <div class="col-xl-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Daftar Sampah</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <button type="button" class="btn btn-primary btn-sm mb-3 ms-auto" data-bs-toggle="modal" data-bs-target="#tambahSampah">
                                        Tambah Sampah <i class="fa fa-plus mx-1"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-lg-4 col-12">
                                    <form>
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control form-control-sm" placeholder="Cari berdasarkan tanggal input, kategori" aria-label="Cari berdasarkan tanggal input, kategori" aria-describedby="btn-search">
                                            <button class="btn btn-primary ms-1 btn-sm" type="button" id="btn-search"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-12 ms-auto">
                                    <form>
                                        <select class="form-select form-select-sm" aria-label="Default select example">
                                            <option selected disabled>Filter By Kategori Sampah</option>
                                            <option value="1">Organik</option>
                                            <option value="2">Anorganik</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-12 ms-auto d-none d-sm-block d-md-none">
                                    <form>
                                        <select class="form-select form-select-sm" aria-label="Default select example">
                                            <option selected disabled>Filter By Kategori Sampah</option>
                                            <option value="1">Organik</option>
                                            <option value="2">Anorganik</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tanggal Input</th>
                                            <th scope="col">Klasifikasi</th>
                                            <th scope="col">Berat Total Sampah</th>
                                            <th scope="col" class="text-center" width="200">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>
                                                23 Oktober 2021
                                            </td>
                                            <td>
                                                <span class="badge bg-primary">Organik</span>
                                            </td>
                                            <td>
                                                65 Kg
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#editSampah">
                                                    <i class="fa fa-pen mt-1"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editSampah" tabindex="-1" aria-labelledby="editSampahLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editSampahLabel">Edit Sampah</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="needs-validation form-contact-me" novalidate>
                                                                    <div class="form-row">
                                                                        <div class="input-group mb-3">
                                                                            <select class="form-select" name="id-warga" required>
                                                                                <option value="" disabled selected>Nama Kepala Keluarga</option>
                                                                                <?php
                                                                                $url = "http://116.193.190.156/waste-api/warga";
                                                                                $obj = json_decode(file_get_contents($url), true);
                                                                                // echo var_dump($obj["data"][0]["nama_admin"]);
                                                                                $i = 1;
                                                                                foreach ($obj["data"] as $arr) { ?>
                                                                                    <option value="<?= $arr['id_warga']; ?>"><?= $arr['nama_kepala_keluarga']; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                            <div class="valid-feedback">
                                                                                Yeay! Great
                                                                            </div>
                                                                            <div class="invalid-feedback">
                                                                                Oh No! Required to Fill
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <select class="form-select" name="id-admin" required>
                                                                                <option value="" disabled selected>Nama Admin</option>
                                                                                <?php
                                                                                $url = "http://116.193.190.156/waste-api/admin";
                                                                                $obj = json_decode(file_get_contents($url), true);
                                                                                // echo var_dump($obj["data"][0]["nama_admin"]);
                                                                                $i = 1;
                                                                                foreach ($obj["data"] as $arr) { ?>
                                                                                    <option value="<?= $arr['id_admin']; ?>"><?= $arr['nama_admin']; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                            <div class="valid-feedback">
                                                                                Yeay! Great
                                                                            </div>
                                                                            <div class="invalid-feedback">
                                                                                Oh No! Required to Fill
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-floating mb-4">
                                                                            <input type="date" class="form-control user-input" name="tgl-input" id="tanggal" required placeholder="Tanggal Input">
                                                                            <input type="hidden" name="value-berat-total" id="value-berat-total">
                                                                            <label class="title-column" for="tanggal">Tanggal Input</label>
                                                                            <div class="valid-feedback">
                                                                                Yeay! Great
                                                                            </div>
                                                                            <div class="invalid-feedback">
                                                                                Oh No! Required to Fill
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="container px-2" id="area-tambah-kategori">

                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary btn-sm">Simpan <i class="fas fa-save ms-1"></i></button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="button" class="btn btn-danger btn-sm m-1">
                                                    <i class="fa fa-trash mt-1"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- customer-section end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Modal -->
    <div class="modal fade" id="tambahSampah" tabindex="-1" aria-labelledby="tambahSampahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahSampahLabel">Tambah Sampah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation form-contact-me" action="" method="POST" novalidate>
                        <div class="form-row">
                            <div class="input-group mb-3">
                                <select class="form-select" name="id-warga" required>
                                    <option value="" disabled selected>Nama Kepala Keluarga</option>
                                    <?php
                                    $url = "http://116.193.190.156/waste-api/warga";
                                    $obj = json_decode(file_get_contents($url), true);
                                    // echo var_dump($obj["data"][0]["nama_admin"]);
                                    $i = 1;
                                    foreach ($obj["data"] as $arr) { ?>
                                        <option value="<?= $arr['id_warga']; ?>"><?= $arr['nama_kepala_keluarga']; ?></option>
                                    <?php } ?>
                                </select>
                                <div class="valid-feedback">
                                    Yeay! Great
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" name="id-admin" required>
                                    <option value="" disabled selected>Nama Admin</option>
                                    <?php
                                    $url = "http://116.193.190.156/waste-api/admin";
                                    $obj = json_decode(file_get_contents($url), true);
                                    // echo var_dump($obj["data"][0]["nama_admin"]);
                                    $i = 1;
                                    foreach ($obj["data"] as $arr) { ?>
                                        <option value="<?= $arr['id_admin']; ?>"><?= $arr['nama_admin']; ?></option>
                                    <?php } ?>
                                </select>
                                <div class="valid-feedback">
                                    Yeay! Great
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="date" class="form-control user-input" name="tgl-input" id="tanggal" required placeholder="Tanggal Input">
                                <input type="hidden" name="value-berat-total" id="value-berat-total">
                                <label class="title-column" for="tanggal">Tanggal Input</label>
                                <div class="valid-feedback">
                                    Yeay! Great
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                            <hr>
                            <div class="container px-2" id="area-tambah-kategori">

                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-sm btn-primary" id="tambah-kategori">Tambah Kategori</button>
                                <span class="">Berat Total : <span id="berat-total">-</span> Kg</span>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3 d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary btn-sm mx-2" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="add-sampah" class="btn btn-primary btn-sm">Simpan <i class="fas fa-save ms-1"></i></button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['add-sampah'])) {
        $id_warga = $_POST['id-warga'];
        $id_admin = $_POST['id-admin'];
        $tanggal_input = $_POST['tgl-input'];
        $klasifikasi = $_POST['klasifikasi-sampah'];
        $kategori = $_POST['nama-kategori'];
        $berat_kategori = $_POST['berat-kategori'];
        $berat_total = $_POST['value-berat-total'];
        $id_kategori = 1;

        $url1 = "http://116.193.190.156/waste-api/dataSampah";
        $url2 = "http://116.193.190.156/waste-api/kategori";

        $data1 = array(
            'id_warga' => $id_warga,
            'tanggal' => $tanggal_input,
            'berat_total' => $berat_total,
            'id_admin' => $id_admin,
            'id_kategori_sampah' => 1,
            'berat_total_kategori' => 20,
            'id_kategori_sampah2' => 2,
            'berat_total_kategori2' => 20,
            'id_kategori_sampah3' => 3,
            'berat_total_kategori3' => 20,
            'id_kategori_sampah4' => 4,
            'berat_total_kategori4' => 20,
            'id_kategori_sampah5' => 5,
            'berat_total_kategori5' => 20,
        );

        $data2 = array(
            'name_kategori' => $kategori,
            'klasifikasi' => $klasifikasi,
        );

        $postvars = http_build_query($data1) . "\n";
        $postvars2 = http_build_query($data2) . "\n";

        $ch = curl_init($url1);
        $ch2 = curl_init($url2);
        curl_setopt($ch, CURLOPT_URL, $url1);
        curl_setopt($ch2, CURLOPT_URL, $url2);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch2, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $postvars2);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);
        $server_output = curl_exec($ch2);

        curl_close($ch);
        curl_close($ch2);
        // header("Refresh:0; url=admin.php");
        echo "<script>alert('Data Berhasil Disimpan !!!'); window.location='sampah.php';</script>";
    }
    ?>

    <?php
    if (isset($_POST['edit-sampah'])) {
        $id_warga = $_POST['id-warga'];
        $id_admin = $_POST['id-admin'];
        $tanggal_input = $_POST['tgl-input'];
        $klasifikasi = $_POST['klasifikasi-sampah'];
        $kategori = $_POST['nama-kategori'];
        $berat_kategori = $_POST['berat-kategori'];
        $berat_total = $_POST['value-berat-total'];
        $id_kategori = 1;

        $url1 = "http://116.193.190.156/waste-api/dataSampah";
        $url2 = "http://116.193.190.156/waste-api/kategori";

        $data1 = array(
            'id_warga' => $id_warga,
            'tanggal' => $tanggal_input,
            'berat_total' => $berat_total,
            'id_admin' => $id_admin,
            'id_kategori_sampah' => 1,
            'berat_total_kategori' => 20,
            'id_kategori_sampah2' => 2,
            'berat_total_kategori2' => 20,
            'id_kategori_sampah3' => 3,
            'berat_total_kategori3' => 20,
            'id_kategori_sampah4' => 4,
            'berat_total_kategori4' => 20,
            'id_kategori_sampah5' => 5,
            'berat_total_kategori5' => 20,
        );

        $data2 = array(
            'name_kategori' => $kategori,
            'klasifikasi' => $klasifikasi,
        );

        $postvars = http_build_query($data1) . "\n";
        $postvars2 = http_build_query($data2) . "\n";

        $ch = curl_init($url1);
        $ch2 = curl_init($url2);
        curl_setopt($ch, CURLOPT_URL, $url1);
        curl_setopt($ch2, CURLOPT_URL, $url2);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch2, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $postvars2);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);
        $server_output = curl_exec($ch2);

        curl_close($ch);
        curl_close($ch2);
        // header("Refresh:0; url=admin.php");
        echo "<script>alert('Data Berhasil Disimpan !!!'); window.location='sampah.php';</script>";
    }
    ?>

    <script>
        // Bootstrap Form Validation
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <!-- Required Js -->
    <script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Jquery -->
    <script src="../assets/jquery/jquery-3.6.0.min.js"></script>

    <!-- Icon font-awesome JS -->
    <script src="../assets/fontawesome/js/all.js"></script>
    <script src="../assets/fontawesome/js/fontawesome.js"></script>

    <!-- Apex Chart -->
    <script src="../assets/js/plugins/apexcharts.min.js"></script>

    <!-- custom-chart js -->
    <script src="../assets/js/pages/dashboard-sale.js"></script>

    <!-- MY JS -->
    <script src="../assets/js/script.js"></script>
</body>

</html>