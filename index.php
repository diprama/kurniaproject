<?php
// Ambil URL setelah domain
$request = trim($_SERVER['REQUEST_URI'], '/');



// Daftar routing: URL -> File PHP
$routes = [
    'interior' => 'interior.php',
    'furniture' => 'furniture.php',
    'construction' => 'construction.php',
    'home' => 'home.php',
];

// Jika tidak ada URL (halaman utama), redirect ke /interior
if ($request === '') {
    header("Location: /home");
    exit;
}

// Cek apakah URL cocok dengan daftar routing
if (array_key_exists($request, $routes)) {
    require $routes[$request]; // Jalankan file PHP yang sesuai
} else {
    http_response_code(404); // Jika tidak ditemukan
    echo "404 Not Found";
}