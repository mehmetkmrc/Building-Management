<?php

class Controller
{
    protected function view($view, $data = [])
    {
        extract($data);

        // View dosyasının tam yolunu oluştur
        $viewFile = __DIR__ . "/../app/views/{$view}.php";

        if (!file_exists($viewFile)) {
            die("View '{$view}' bulunamadı: {$viewFile}");
        }

        // main.php içinde erişebilmesi için değişken olarak gönder
        $viewPath = $viewFile;

        require_once __DIR__ . "/../app/views/layouts/main.php";
    }
}

