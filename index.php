<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin Panel Waste Management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="aset-login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="aset-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="aset-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="aset-login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="aset-login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="aset-login/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="aset-login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="aset-login/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="aset-login/css/util.css">
    <link rel="stylesheet" type="text/css" href="aset-login/css/main.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('aset-login/images/bg-login.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Waste Management Forecast
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" action="" method="POST">

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" autocomplete="off" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button type="submit" class="login100-form-btn" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Process add data admin using POST Method CuRL -->
    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $url = "http://103.172.205.249/waste-api/login";

        $data = array(
            'username' => $username,
            'password' => $password
        );


        $postvars = http_build_query($data) . "\n";

        $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);
        $jwt = json_decode($server_output);

        if ($httpcode == 200) {
            setcookie("X-WASTE-SESSION", $jwt->data->access_token);
            echo "<script>alert('" . $jwt->message . "'); window.location='admin/dashboard-admin.php';</script>";
        } else {
            echo "<script>alert('Login Gagal'); window.location='index.php';</script>";
        }
    }
    ?>


    <div id="dropDownSelect1"></div>

    <script src="aset-login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="aset-login/vendor/animsition/js/animsition.min.js"></script>
    <script src="aset-login/vendor/bootstrap/js/popper.js"></script>
    <script src="aset-login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="aset-login/vendor/select2/select2.min.js"></script>
    <script src="aset-login/vendor/daterangepicker/moment.min.js"></script>
    <script src="aset-login/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="aset-login/vendor/countdowntime/countdowntime.js"></script>
    <script src="aset-login/js/main.js"></script>

</body>

</html>