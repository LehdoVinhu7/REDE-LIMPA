<?php

declare(strict_types=1);

// 0) Caminho base: '/projeto_mvc' em subpasta, '' em VirtualHost

$base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

define('BASE_URL', $base);

// 1) Autoload

spl_autoload_register(function (string $class) {
    $file = __DIR__ . '/../app/'
        . str_replace(['App\\', '\\'], ['', '/'], $class) . '.php';

    if (is_file($file)) {
        require $file;
    }
});

require __DIR__ . '/../app/helpers.php';

// 2) Interpretação da URL

$url = explode('/', trim(($_GET['url'] ?? '') ?: 'user/index', '/'));

// 3) Identificação do controller e método

$controller = 'App\\Controllers\\' . ucfirst($url[0]) . 'Controller';

$method = $url[1] ?? 'index';

$params = array_slice($url, 2);

// 4) Validação e despacho

if (!class_exists($controller) || !method_exists($controller, $method)) {
    http_response_code(404);
    exit(
        'Controller: ' . $controller .
        ' | Método: ' . $method
    );
}
(new $controller())->$method(...$params);