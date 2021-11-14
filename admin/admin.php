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
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.css">

    <!-- font css -->
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="../assets/fonts/material.css">

    <link rel='stylesheet' href='../assets/sweetalert/dist/sweetalert2.min.css'>

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
                <a href="dashboard-admin.html" class="b-brand mt-2 fw-bold text-light">
                    WASTE MANAGEMENT
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>MENU</label>
                    </li>
                    <li class="pc-item">
                        <a href="dashboard-admin.html" class="pc-link "><span class="pc-micon">
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
                            <img src="../assets/images/user/admin.png" alt="user-image" class="user-avtar">
                            <span>
                                <span class="user-name">Administrator</span>
                                <span class="user-desc">Super Admin</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                            <a href="auth-signin.html" class="dropdown-item">
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
                            <h3>Daftar Admin</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <button type="button" id="btntambahadmin" class="btn btn-primary btn-sm mb-3 ms-auto" data-bs-toggle="modal" data-bs-target="#tambahAdmin">
                                        Tambah Admin <i class="fa fa-plus mx-1"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-lg-4 col-12">
                                    <form>
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control form-control-sm" placeholder="Cari berdasarkan nama admin" aria-label="Cari berdasarkan nama admin" aria-describedby="btn-search">
                                            <button class="btn btn-primary ms-1 btn-sm" type="button" id="btn-search"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col" width="250">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">No Telepon</th>
                                            <th scope="col" class="text-center" width="200">Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $url = "http://116.193.190.156/waste-api/admin";
                                    $obj = json_decode(file_get_contents($url), true);
                                    // echo var_dump($obj);
                                    // die;
                                    $i = 1;
                                    foreach ($obj["data"] as $arr) { ?>
                                        <tbody>
                                            <tr>
                                                <th><?php echo $i++; ?></th>
                                                <td><?php echo $arr['nama_admin']; ?></td>
                                                <td><?php echo $arr['email']; ?></td>
                                                <td><?php echo $arr['no_telp']; ?></td>
                                                <td class="text-center">
                                                    <form action="" method="POST">
                                                        <button name="edit-admin" type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#editAdmin<?php echo $arr['id_admin']; ?>">
                                                            <i class="fa fa-pen mt-1"></i>
                                                        </button>
                                                        <button name="delete-admin" type="submit" value="<?php echo $arr['id_admin']; ?>" class="btn btn-danger btn-sm m-1">
                                                            <i class="fa fa-trash mt-1"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- Modal Edit Admin -->
                                        <div class="modal fade" id="editAdmin<?php echo $arr['id_admin']; ?>" tabindex="-1" aria-labelledby="editAdminLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editAdminLabel">Edit User</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <?php
                                                    $url1 = $url . "/" . $arr['id_admin'];
                                                    $obj1 = json_decode(file_get_contents($url1), true);
                                                    ?>
                                                    <div class="modal-body">
                                                        <form class="needs-validation form-contact-me" action="" method="POST" novalidate>
                                                            <div class="form-row">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" name="nama" class="form-control user-input" id="name" required placeholder="Masukan Nama">
                                                                    <label class="title-column" for="name">Nama</label>
                                                                    <div class="valid-feedback">
                                                                        Yeay! Great
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        Oh No! Required to Fill
                                                                    </div>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="date" name="tgl-lahir" class="form-control user-input" id="tgl-lahir" required>
                                                                    <label class="title-column" for="tgl-lahir">Tanggal lahir</label>
                                                                    <div class="valid-feedback">
                                                                        Yeay! Great
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        Oh No! Required to Fill
                                                                    </div>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" name="tempat-lahir" class="form-control user-input" id="tempatlahir" required placeholder="Masukan Tempat Lahir">
                                                                    <label class="title-column" for="tempatlahir">Tempat Lahir</label>
                                                                    <div class="valid-feedback">
                                                                        Yeay! Great
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        Oh No! Required to Fill
                                                                    </div>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" name="agama" class="form-control user-input" id="agama" required placeholder="Masukan Agama">
                                                                    <label class="title-column" for="agama">Agama</label>
                                                                    <div class="valid-feedback">
                                                                        Yeay! Great
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        Oh No! Required to Fill
                                                                    </div>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <textarea class="form-control user-input" required placeholder="alamat" name="alamat" style="height: 160px;"></textarea>
                                                                    <label class="title-column" for="alamat">Alamat</label>
                                                                    <div class="valid-feedback">
                                                                        Good Job!
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        Oh No! Required to Fill
                                                                    </div>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    Jenis Kelamin
                                                                    <div class="form-check mt-2">
                                                                        <input class="form-check-input" type="radio" name="jenis-kelamin" id="jeniskelamin1" value="0" checked>
                                                                        <label class="form-check-label" for="jeniskelamin1">
                                                                            Laki-Laki
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="jenis-kelamin" id="jeniskelamin2" value="1">
                                                                        <label class="form-check-label" for="jeniskelamin2">
                                                                            Perempuan
                                                                        </label>
                                                                    </div>
                                                                    <div class="valid-feedback">
                                                                        Yeay! Great
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        Oh No! Required to Fill
                                                                    </div>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="email" name="email" class="form-control user-input" id="email" required placeholder="Masukan Email Valid">
                                                                    <label class="title-column" for="email">Email</label>
                                                                    <div class="valid-feedback">
                                                                        Yeay! Great
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        Oh No! Required to Fill
                                                                    </div>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="number" name="no-telp" class="form-control user-input" id="notelepon" required placeholder="notelepon">
                                                                    <label class="title-column" for="notelepon">No Telepon</label>
                                                                    <div class="valid-feedback">
                                                                        Good Job!
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        Oh No! Required to Fill
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" value="<?php echo $obj1['data']['id_admin']; ?>" name="edit-admin" class="btn btn-primary btn-sm">Simpan <i class="fas fa-save ms-1"></i></button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Of Modal Edit Admin -->

                                    <?php } ?>
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

    <!-- Modal Add Admin-->
    <div class="modal fade" id="tambahAdmin" tabindex="-1" aria-labelledby="tambahAdminLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahAdminLabel">Tambah Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation form-contact-me" action="" method="POST" novalidate>
                        <div class="form-row">
                            <div class="form-floating mb-3">
                                <input type="text" name="nama" class="form-control user-input" id="name" required placeholder="Masukan Nama">
                                <label class="title-column" for="name">Nama</label>
                                <div class="valid-feedback">
                                    Yeay! Great
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" name="tgl-lahir" class="form-control user-input" id="tgl-lahir" required>
                                <label class="title-column" for="tgl-lahir">Tanggal lahir</label>
                                <div class="valid-feedback">
                                    Yeay! Great
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="tempat-lahir" class="form-control user-input" id="tempatlahir" required placeholder="Masukan Tempat Lahir">
                                <label class="title-column" for="tempatlahir">Tempat Lahir</label>
                                <div class="valid-feedback">
                                    Yeay! Great
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="agama" class="form-control user-input" id="agama" required placeholder="Masukan Agama">
                                <label class="title-column" for="agama">Agama</label>
                                <div class="valid-feedback">
                                    Yeay! Great
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control user-input" required placeholder="alamat" name="alamat" style="height: 160px;"></textarea>
                                <label class="title-column" for="alamat">Alamat</label>
                                <div class="valid-feedback">
                                    Good Job!
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                Jenis Kelamin
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="jenis-kelamin" id="jeniskelamin1" value="0" checked>
                                    <label class="form-check-label" for="jeniskelamin1">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis-kelamin" id="jeniskelamin2" value="1">
                                    <label class="form-check-label" for="jeniskelamin2">
                                        Perempuan
                                    </label>
                                </div>
                                <div class="valid-feedback">
                                    Yeay! Great
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control user-input" id="email" required placeholder="Masukan Email Valid">
                                <label class="title-column" for="email">Email</label>
                                <div class="valid-feedback">
                                    Yeay! Great
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" name="no-telp" class="form-control user-input" id="notelepon" required placeholder="notelepon">
                                <label class="title-column" for="notelepon">No Telepon</label>
                                <div class="valid-feedback">
                                    Good Job!
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="add-admin" class="btn btn-primary btn-sm">Simpan <i class="fas fa-save ms-1"></i></button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Process add data admin using POST Method CuRL -->
    <?php
    if (isset($_POST['add-admin'])) {
        $nama_admin = $_POST['nama'];
        $tanggal_lahir = $_POST['tgl-lahir'];
        $tempat_lahir = $_POST['tempat-lahir'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis-kelamin'];
        $no_telp = $_POST['no-telp'];
        $agama = $_POST['agama'];
        $email = $_POST['email'];
        // $defaultPassword = "123";

        $url = "http://116.193.190.156/waste-api/admin";

        $data = array(
            'nama_admin' => $nama_admin,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin == '0' ? 'Laki-laki' : 'Perempuan',
            'no_telp' => $no_telp,
            'agama' => $agama,
            'email' => $email
        );


        $postvars = http_build_query($data) . "\n";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close($ch);
        // header("Refresh:0; url=admin.php");
        echo "<script>alert('Data Berhasil Ditambah !!!'); window.location='admin.php';</script>";
    }
    ?>

    <!-- Process edit data admin using PUT Method CuRL -->
    <?php
    if (isset($_POST['update-admin'])) {
        $id_admin = $_POST['edit-admin'];
        $nama_admin = $_POST['edit-nama'];
        $tanggal_lahir = $_POST['edit-tanggal-lahir'];
        $tempat_lahir = $_POST['edit-tempat-lahir'];
        $alamat = $_POST['edit-alamat'];
        $jenis_kelamin = $_POST['edit-jenis-kelamin'];
        $no_telp = $_POST['edit-notelp'];
        $agama = $_POST['edit-agama'];
        $email = $_POST['edit-email'];
        $defaultPassword = "123";

        $url = "http://116.193.190.156/waste-api/admin/" . $id_admin;

        $data = array(
            'nama_admin' => $nama_admin,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'no_telp' => $no_telp,
            'agama' => $agama,
            'email' => $email,
            'defaultPassword' => '123'
        );


        $postvars = http_build_query($data) . "\n";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        $result = curl_exec($ch);
        $result = json_decode($result);
        curl_close($ch);

        // header("Refresh:0; url=admin.php");
        echo "<script>alert('Data Berhasil Diubah !!!'); window.location='admin.php';</script>";
    }
    ?>

    <!-- Process delete data admin using DELETE Method CuRL -->
    <?php
    if (isset($_POST['delete-admin'])) {
        $id_admin = $_POST['delete-admin'];

        $url = "http://116.193.190.156/waste-api/admin/" . $id_admin;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $result = json_decode($result);
        curl_close($ch);

        // header("Refresh:0; url=admin.php");
        echo "<script>alert('Data Berhasil Dihapus !!!'); window.location='admin.php';</script>";
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

    <!-- Icon font-awesome JS -->
    <script src="../assets/fontawesome/js/all.js"></script>
    <script src="../assets/fontawesome/js/fontawesome.js"></script>

    <!-- Apex Chart -->
    <script src="../assets/js/plugins/apexcharts.min.js"></script>

    <!-- custom-chart js -->
    <script src="../assets/js/pages/dashboard-sale.js"></script>

    <script src="../assets/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="../assets/jquery/jquery-3.6.0.min.js"></script>

    <!-- MY JS -->
    <script src="../assets/js/script.js"></script>
</body>

</html>