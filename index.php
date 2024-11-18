<?php
// Ambil URL setelah domain
$request = trim($_SERVER['REQUEST_URI'], '/');

// Jika tidak ada request (root domain), redirect ke /home
if ($request === '' || $request === 'index.php') {
    header("Location: /home");
    exit;
}

// Tangani request manual
switch ($request) {
    case 'home':
        require '/home.php';
        break;

    case 'interior':
        require '/interior.php';
        break;

    case 'furniture':
        require '/furniture.php';
        break;

    // Halaman tidak ditemukan
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}