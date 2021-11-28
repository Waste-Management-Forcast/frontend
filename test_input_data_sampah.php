<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <select name="id_warga" required>
            <option value="" disabled selected>Nama Kepala Keluarga</option>
            <?php
            $url = "http://116.193.190.156/waste-api/warga";
            $obj = json_decode(file_get_contents($url), true);
            foreach ($obj["data"] as $arr) { ?>
                <option value="<?= $arr['id_warga']; ?>"><?= $arr['nama_kepala_keluarga']; ?></option>
            <?php } ?>
        </select>
        <br>
        <select name="id_admin" required>
            <option value="" disabled selected>Nama Admin</option>
            <?php
            $url = "http://116.193.190.156/waste-api/admin";
            $obj = json_decode(file_get_contents($url), true);
            foreach ($obj["data"] as $arr) { ?>
                <option value="<?= $arr['id_admin']; ?>"><?= $arr['nama_admin']; ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="date" name="date">
        <br>
        <input type="number" name="berat_total" placeholder="berat total">
        <br>
        <br>
        <label for="">Kategori 1</label>
        <br>
        <select name="id_kategori_1" required>
            <option value="" disabled selected>Kategori</option>
            <?php
            $url = "http://116.193.190.156/waste-api/kategori";
            $obj = json_decode(file_get_contents($url), true);
            foreach ($obj["data"] as $arr) { ?>
                <option value="<?= $arr['id_kategori_sampah']; ?>"><?= $arr['name_kategori']; ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="number" name="berat_kategori_1" placeholder="berat sampah">
        <br>
        <br>
        <label for="">Kategori 2</label>
        <br>
        <select name="id_kategori_2">
            <option value="" disabled selected>Kategori</option>
            <?php
            $url = "http://116.193.190.156/waste-api/kategori";
            $obj = json_decode(file_get_contents($url), true);
            foreach ($obj["data"] as $arr) { ?>
                <option value="<?= $arr['id_kategori_sampah']; ?>"><?= $arr['name_kategori']; ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="number" name="berat_kategori_2" placeholder="berat sampah">
        <br>
        <br>
        <label for="">Kategori 3</label>
        <br>
        <select name="id_kategori_3">
            <option value="" disabled selected>Kategori</option>
            <?php
            $url = "http://116.193.190.156/waste-api/kategori";
            $obj = json_decode(file_get_contents($url), true);
            foreach ($obj["data"] as $arr) { ?>
                <option value="<?= $arr['id_kategori_sampah']; ?>"><?= $arr['name_kategori']; ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="number" name="berat_kategori_3" placeholder="berat sampah">
        <br>
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $id_warga = $_POST['id_warga'];
        $id_admin = $_POST['id_admin'];
        $date = $_POST['date'];
        $berat_total = $_POST['berat_total'];

        //kategori 1
        $id_kategori_1 = $_POST['id_kategori_1'];
        $berat_kategori_1 = $_POST['berat_kategori_1'];

        //kategori 2
        if (isset($_POST['id_kategori_2'])) {
            $id_kategori_2 = $_POST['id_kategori_2'];
            $berat_kategori_2 = $_POST['berat_kategori_2'];
        } else {
            $id_kategori_2 = '';
            $berat_kategori_2 = '';
        }

        //kategori 3
        if (isset($_POST['id_kategori_3'])) {
            $id_kategori_3 = $_POST['id_kategori_3'];
            $berat_kategori_3 = $_POST['berat_kategori_3'];
        } else {
            $id_kategori_3 = '';
            $berat_kategori_3 = '';
        }

        $url = "http://116.193.190.156/waste-api/dataSampah";

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
        // echo "<script>alert('Data Berhasil Disimpan !!!'); window.location='admin.php';</script>";
    }
    ?>
</body>

</html>