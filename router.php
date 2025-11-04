<?php
// router.php

// İstek yapılan dosya veya klasör varsa, PHP doğrudan onu sunsun:
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . $path;

if ($path !== '/' && file_exists($file)) {
    return false;
}

// Aksi halde tüm istekleri index.php'ye yönlendir:
require_once __DIR__ . '/index.php';
