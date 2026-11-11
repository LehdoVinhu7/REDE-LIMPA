<?php
// Uso: php -S localhost:8000 -t public public/router.php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($path !== '/' && is_file(__DIR__ . $path)) {
return false; // serve CSS, JS, imagens etc.
}
$_SERVER['SCRIPT_NAME'] = '/index.php'; // BASE_URL ficará vazio
$_GET['url'] = ltrim($path, '/');
require __DIR__ . '/index.php';