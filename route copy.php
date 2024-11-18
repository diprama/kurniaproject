<?php
// Ambil request URL
$request = $_SERVER['REQUEST_URI'];

// Bersihkan URL (hilangkan query string jika ada)
$request = strtok($request, '?');

// Daftar routing
switch ($request) {
    case '/construction':
        require 'construction.php';
        break;

    case '/furniture':
        require 'furniture.php';
        break;

    case '/interior':
        require 'interior.php';
        break;

    case '/home':
        require 'index.php';
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}