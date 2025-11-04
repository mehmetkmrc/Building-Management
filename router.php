<?php
// router.php

// İstek yapılan dosya veya klasör varsa, PHP doğrudan onu sunsun:
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . $path;

if ($path !== '/' && file_exists($file)) {
    return false;
}

// URL’yi al ve GET parametresi gibi hazırla
$_GET['url'] = trim($path, '/');

// Tüm istekleri index.php’ye yönlendir:
require_once __DIR__ . '/index.php';
