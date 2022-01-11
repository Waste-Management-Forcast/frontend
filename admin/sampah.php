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
                                <i class="fas fa-users fa-2x"></i></span><span class="pc-mtext">Data Management</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
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
                            <a href="../index.php" class="dropdown-item">
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
                                    <button type="button" class="btn btn-warning btn-sm mb-3 ms-auto" data-bs-toggle="modal" data-bs-target="#tambahKategori">
                                        Tambah Kategori <i class="fa fa-filter mx-1"></i>
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
                                            <!-- <th scope="col">No</th> -->
                                            <th scope="col">Tanggal Input</th>
                                            <th scope="col">Nama Kepala Keluarga</th>
                                            <th scope="col">Berat Total Sampah</th>
                                            <th scope="col" class="text-center" width="200">Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $url = "http://103.172.205.249/waste-api/dataSampah";
                                    $obj = json_decode(file_get_contents($url), true);
                                    // echo var_dump($obj);
                                    // die;
                                    $z = 1;
                                    foreach ($obj["data"] as $arr) { ?>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php
                                                    $date = date_create($arr['tanggal']);
                                                    echo date_format($date, "d M Y");
                                                    ?>
                                                </td>
                                                <td>
                                                    <?= $arr['warga']['nama_kepala_keluarga']; ?>
                                                </td>
                                                <td>
                                                    <?= $arr['berat_total']; ?>
                                                </td>
                                                <td class="text-center">
                                                    <form action="" method="POST">
                                                        <button type="button" id="buttoneditsampah" data-id="<?= $arr['id_sampah']; ?>" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#editSampah<?= $arr['id_sampah']; ?>">
                                                            <i class="fa fa-pen mt-1"></i>
                                                        </button>
                                                        <button type="submit" name="delete-sampah" value="<?= $arr['id_sampah']; ?>" class="btn btn-danger btn-sm m-1">
                                                            <i class="fa fa-trash mt-1"></i>
                                                        </button>
                                                    </form>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="editSampah<?= $arr['id_sampah']; ?>" tabindex="-1" aria-labelledby="editSampahLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editSampahLabel">Edit Sampah</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class="needs-validation form-contact-me" novalidate action="" method="POST">
                                                                        <div class="form-row">
                                                                            <div class="input-group mb-3">
                                                                                <select class="form-select" name="id_warga<?= $arr['id_sampah']; ?>" required>
                                                                                    <option value="" disabled selected>Nama Kepala Keluarga</option>
                                                                                    <?php
                                                                                    $url = "http://103.172.205.249/waste-api/warga";
                                                                                    $obj = json_decode(file_get_contents($url), true);

                                                                                    foreach ($obj['data'] as $item) :
                                                                                    ?>
                                                                                        <option value="<?= $item['id_warga']; ?>" <?= $arr['warga']['nama_kepala_keluarga'] == $item['nama_kepala_keluarga'] ? 'selected' : '' ?>><?= $item['nama_kepala_keluarga']; ?></option>
                                                                                    <?php endforeach; ?>
                                                                                </select>
                                                                                <div class="valid-feedback">
                                                                                    Yeay! Great
                                                                                </div>
                                                                                <div class="invalid-feedback">
                                                                                    Oh No! Required to Fill
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <select class="form-select" name="id_admin<?= $arr['id_sampah']; ?>" required>
                                                                                    <option value="" disabled selected>Nama Admin</option>
                                                                                    <?php
                                                                                    $url = "http://103.172.205.249/waste-api/admin";
                                                                                    $obj = json_decode(file_get_contents($url), true);
                                                                                    $url2 = "http://103.172.205.249/waste-api/dataSampah/" . $arr['id_sampah'];
                                                                                    $obj2 = json_decode(file_get_contents($url2), true);
                                                                                    // echo var_dump($obj["data"][0]["nama_admin"]);
                                                                                    $i = 1;
                                                                                    foreach ($obj["data"] as $item) { ?>
                                                                                        <option value="<?= $item['id_admin']; ?>" <?= $item['nama_admin'] == $obj2['data']['admin']['nama_admin'] ? 'selected' : ''; ?>><?= $item['nama_admin']; ?></option>
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
                                                                                <input type="date" class="form-control user-input" name="tgl_input<?= $arr['id_sampah']; ?>" id="tanggal" required placeholder="Tanggal Input" value="<?= date_format(date_create($arr['tanggal']), "Y-m-d"); ?>">
                                                                                <label class="title-column" for="tanggal">
                                                                                    Tanggal Input
                                                                                </label>
                                                                                <div class="valid-feedback">
                                                                                    Yeay! Great
                                                                                </div>
                                                                                <div class="invalid-feedback">
                                                                                    Oh No! Required to Fill
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <?php
                                                                            $url = "http://103.172.205.249/waste-api/dataSampah/" . $arr['id_sampah'];
                                                                            $obj = json_decode(file_get_contents($url), true);
                                                                            $j = 1;
                                                                            foreach ($obj['data']['detail_sampah'] as $item) :
                                                                            ?>
                                                                                <div class="card">
                                                                                    <div class="card-body">
                                                                                        <div class="input-group mb-3 mt-3">
                                                                                            <select class="form-select" required name="<?= $arr['id_sampah']; ?>edit_id_kategori_<?= $j; ?>" id="klasifikasi-sampah">
                                                                                                <option value="" disabled selected>Klasifikasi Sampah</option>
                                                                                                <?php
                                                                                                $url = "http://103.172.205.249/waste-api/kategori";
                                                                                                $obj = json_decode(file_get_contents($url), true);
                                                                                                foreach ($obj["data"] as $i) { ?>
                                                                                                    <option value="<?= $i['id_kategori_sampah']; ?>" <?= $i['name_kategori'] == $item['kategori_sampah']['name_kategori'] ? 'selected' : ''; ?>><?= $i['name_kategori']; ?></option>
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
                                                                                            <input type="number" data-name="berat_kategori_edit<?= $arr['id_sampah']; ?>" name="<?= $arr['id_sampah']; ?>edit_berat_kategori_<?= $j++; ?>" class="form-control form-floating-sm user-input berat-edit<?= $arr['id_sampah']; ?>" min="1" id="<?= $item['kategori_sampah']['id_kategori_sampah']; ?>" data-id="<?= $item['kategori_sampah']['id_kategori_sampah']; ?>" required placeholder="berat" value="<?= $item['berat_total_kategori']; ?>">
                                                                                            <label class="title-column" for="berat">Berat Sampah Kategori</label>
                                                                                            <small class="text-primary fw-bold">Dalam Satuan Kg</small>
                                                                                            <div class="valid-feedback">
                                                                                                Good Job!
                                                                                            </div>
                                                                                            <div class="invalid-feedback">
                                                                                                Oh No! Required to Fill
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php endforeach; ?>
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="value-berat-total-edit<?= $arr['id_sampah']; ?>" id="value-berat-total-edit<?= $arr['id_sampah']; ?>">
                                                                    <span class="">Berat Total : <span id="berat-total-edit<?= $arr['id_sampah']; ?>">-</span> Kg</span>
                                                                    <input type="hidden" id="berat_total" name="berat_total" data-id="" value="0">
                                                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                                                                    <button type="submit" name="edit-sampah<?= $arr['id_sampah']; ?>" value="<?= $arr['id_sampah']; ?>" class="btn btn-primary btn-sm">Simpan <i class="fas fa-save ms-1"></i></button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
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

    <!-- Modal -->
    <div class="modal fade" id="tambahSampah" tabindex="-1" aria-labelledby="tambahSampahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahSampahLabel">Tambah Sampah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation form-contact-me" id="formtambahsampah" action="" method="POST" novalidate>
                        <div class="form-row">
                            <div class="input-group mb-3">
                                <select class="form-select" name="id_warga" required>
                                    <option value="" disabled selected>Nama Kepala Keluarga</option>
                                    <?php
                                    $url = "http://103.172.205.249/waste-api/warga";
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
                                <select class="form-select" name="id_admin" required>
                                    <option value="" disabled selected>Nama Admin</option>
                                    <?php
                                    $url = "http://103.172.205.249/waste-api/admin";
                                    $obj = json_decode(file_get_contents($url), true);
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
                                <input type="date" class="form-control user-input" name="tgl_input" id="tanggal" required placeholder="Tanggal Input">
                                <input type="hidden" name="value-berat-total-add" id="value-berat-total-add">
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
                            <div class="hidden-berat-kategori">

                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-sm btn-primary" id="tambah-kategori">Tambah Kategori</button>
                                <span class="">Berat Total : <span id="berat-total">-</span> Kg</span>
                                <input type="hidden" id="berat_total" name="berat_total" value="0">
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3 d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary btn-sm mx-2" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="add-sampah" id="add-sampah" class="btn btn-primary btn-sm">Simpan <i class="fas fa-save ms-1"></i></button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="tambahKategori" tabindex="-1" aria-labelledby="tambahKategoriLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahKategoriLabel">Tambah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation form-contact-me" action="" method="POST" novalidate>
                        <div class="form-row">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control user-input" name="nama_kategori" id="kategori" placeholder="Nama Kategori" required>
                                <label class="title-column" for="kategori">Nama Kategori</label>
                                <div class="valid-feedback">
                                    Yeay! Great
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" name="klasifikasi" required>
                                    <option value="" disabled selected>Klasifikasi</option>
                                    <option value="Organik">Organik</option>
                                    <option value="Anorganik">Anorganik</option>
                                    <option value="B3">B3</option>
                                </select>
                                <div class="valid-feedback">
                                    Yeay! Great
                                </div>
                                <div class="invalid-feedback">
                                    Oh No! Required to Fill
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-12 mt-3 d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary btn-sm mx-2" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="add-kategori" class="btn btn-primary btn-sm">Simpan <i class="fas fa-save ms-1"></i></button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['add-kategori'])) {
        $kategori = $_POST['nama_kategori'];
        $klasifikasi = $_POST['klasifikasi'];

        $url = "http://103.172.205.249/waste-api/kategori";

        $data = array(
            'name_kategori' => $kategori,
            'klasifikasi' => $klasifikasi,
            'jenis' => '',
            'contoh' => '',
            'deskripsi' => '',
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
        echo "<script>alert('Data Berhasil Disimpan !!!'); window.location='sampah.php';</script>";
    }
    ?>


    <?php
    if (isset($_POST['add-sampah'])) {
        $id_warga = $_POST['id_warga'];
        $id_admin = $_POST['id_admin'];
        $date = $_POST['tgl_input'];
        $berat_total = $_POST['value-berat-total-add'];

        //kategori 1
        $id_kategori_1 = $_POST['value_id_kategori_1'];
        $berat_kategori_1 = $_POST['value_berat_kategori_1'];

        //kategori 2
        if (isset($_POST['value_id_kategori_2'])) {
            $id_kategori_2 = $_POST['value_id_kategori_2'];
            $berat_kategori_2 = $_POST['value_berat_kategori_2'];
        } else {
            $id_kategori_2 = '';
            $berat_kategori_2 = '';
        }

        //kategori 3
        if (isset($_POST['value_id_kategori_3'])) {
            $id_kategori_3 = $_POST['value_id_kategori_3'];
            $berat_kategori_3 = $_POST['value_berat_kategori_3'];
        } else {
            $id_kategori_3 = '';
            $berat_kategori_3 = '';
        }

        //kategori 4
        if (isset($_POST['value_id_kategori_4'])) {
            $id_kategori_4 = $_POST['value_id_kategori_4'];
            $berat_kategori_4 = $_POST['value_berat_kategori_4'];
        } else {
            $id_kategori_4 = '';
            $berat_kategori_4 = '';
        }

        //kategori 5
        if (isset($_POST['value_id_kategori_5'])) {
            $id_kategori_5 = $_POST['value_id_kategori_5'];
            $berat_kategori_5 = $_POST['value_berat_kategori_5'];
        } else {
            $id_kategori_5 = '';
            $berat_kategori_5 = '';
        }

        $url = "http://103.172.205.249/waste-api/dataSampah";

        $data = array(
            'id_warga' => $id_warga,
            'tanggal' => $date,
            'berat_total' => $berat_total,
            'id_admin' => $id_admin,
            'id_kategori_sampah' => $id_kategori_1,
            'berat_total_kategori' => $berat_kategori_1,
            'id_kategori_sampah2' => $id_kategori_2,
            'berat_total_kategori2' => $berat_kategori_2,
            'id_kategori_sampah3' => $id_kategori_3,
            'berat_total_kategori3' => $berat_kategori_3,
            'id_kategori_sampah4' => $id_kategori_4,
            'berat_total_kategori4' => $berat_kategori_4,
            'id_kategori_sampah5' => $id_kategori_5,
            'berat_total_kategori5' => $berat_kategori_5,
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
        echo "<script>alert('Data Berhasil Disimpan !!!'); window.location='sampah.php';</script>";
    }
    ?>

    <?php
    $url = "http://103.172.205.249/waste-api/dataSampah";
    $obj = json_decode(file_get_contents($url), true);
    foreach ($obj['data'] as $arr) {
        if (isset($_POST['edit-sampah' . $arr['id_sampah']])) {
            $id_sampah = $_POST['edit-sampah' . $arr['id_sampah']];
            $id_warga = $_POST['id_warga' . $arr['id_sampah']];
            $id_admin = $_POST['id_admin' . $arr['id_sampah']];
            $date = $_POST['tgl_input' . $arr['id_sampah']];
            $berat_total = $_POST['value-berat-total-edit' . $arr['id_sampah']];

            //kategori 1
            $id_kategori_1 = $_POST[$arr['id_sampah'] . 'edit_id_kategori_1'];
            $berat_kategori_1 = $_POST[$arr['id_sampah'] . 'edit_berat_kategori_1'];

            //kategori 2
            if (isset($_POST[$arr['id_sampah'] . 'edit_id_kategori_2'])) {
                $id_kategori_2 = $_POST[$arr['id_sampah'] . 'edit_id_kategori_2'];
                $berat_kategori_2 = $_POST[$arr['id_sampah'] . 'edit_berat_kategori_2'];
            } else {
                $id_kategori_2 = '';
                $berat_kategori_2 = '';
            }

            //kategori 3
            if (isset($_POST[$arr['id_sampah'] . 'edit_id_kategori_3'])) {
                $id_kategori_3 = $_POST[$arr['id_sampah'] . 'edit_id_kategori_3'];
                $berat_kategori_3 = $_POST[$arr['id_sampah'] . 'edit_berat_kategori_3'];
            } else {
                $id_kategori_3 = '';
                $berat_kategori_3 = '';
            }

            //kategori 4
            if (isset($_POST[$arr['id_sampah'] . 'edit_id_kategori_4'])) {
                $id_kategori_4 = $_POST[$arr['id_sampah'] . 'edit_id_kategori_4'];
                $berat_kategori_4 = $_POST[$arr['id_sampah'] . 'edit_berat_kategori_4'];
            } else {
                $id_kategori_4 = '';
                $berat_kategori_4 = '';
            }

            //kategori 5
            if (isset($_POST[$arr['id_sampah'] . 'edit_id_kategori_5'])) {
                $id_kategori_5 = $_POST[$arr['id_sampah'] . 'edit_id_kategori_5'];
                $berat_kategori_5 = $_POST[$arr['id_sampah'] . 'edit_berat_kategori_5'];
            } else {
                $id_kategori_5 = '';
                $berat_kategori_5 = '';
            }

            $url = "http://103.172.205.249/waste-api/dataSampah/" . $id_sampah;

            $data = array(
                'id_warga' => $id_warga,
                'tanggal' => $date,
                'berat_total' => $berat_total,
                'id_admin' => $id_admin,
                'id_kategori_sampah' => $id_kategori_1,
                'berat_total_kategori' => $berat_kategori_1,
                'id_kategori_sampah2' => $id_kategori_2,
                'berat_total_kategori2' => $berat_kategori_2,
                'id_kategori_sampah3' => $id_kategori_3,
                'berat_total_kategori3' => $berat_kategori_3,
                'id_kategori_sampah4' => $id_kategori_4,
                'berat_total_kategori4' => $berat_kategori_4,
                'id_kategori_sampah5' => $id_kategori_5,
                'berat_total_kategori5' => $berat_kategori_5,
            );

            $json = json_encode($data);

            echo ("<script type='text/javascript'> console.log(" . $json . ");</script>");

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
            echo "<script>alert('Data Berhasil Dirubah !!!'); window.location='sampah.php';</script>";
        }
    }
    ?>

    <?php
    if (isset($_POST['delete-sampah'])) {
        $id_sampah = $_POST['delete-sampah'];

        $url = "http://103.172.205.249/waste-api/dataSampah/" . $id_sampah;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $result = json_decode($result);
        curl_close($ch);

        // header("Refresh:0; url=admin.php");
        echo "<script>alert('Data Berhasil Dihapus !!!'); window.location='sampah.php';</script>";
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
    <!-- <script src="../assets/js/script.js"></script> -->
    <?php include '../assets/js/dom-script.php'; ?>
</body>

</html>