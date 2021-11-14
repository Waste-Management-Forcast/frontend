<?php

$request = $_SERVER['REQUEST_URI'];

echo $request;
require "admin/admin.php";

switch ($request) {
    case '/':
        require __DIR__ . "login/login.html";
        break;
    case '/view-admin':
        require "admin/admin.php";
        break;
    case '/user':
        require "user/dashboard-user.html";
        break;
    default:
        http_response_code(404);
        echo "404";
        break;
}
