<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    $project_location = "/frontend";
    $me = $project_location;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/' :
            require "login/login.html";
            break;
        case $me.'/admin' :
            require "admin/dashboard-admin.html";
            break;
        case $me.'/user' :
            require "user/dashboard-user.html";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }
?>~