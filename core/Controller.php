<?php

class Controller
{
    protected function view($view, $data = [])
    {
        // Data'yı değişkenlere dönüştür (ör: $title, $message)
        extract($data);

        // View dosya yolunu oluştur (app/views/pages)
        $viewPath = __DIR__ . "/../app/views/{$view}.php";

        if (file_exists($viewPath)) {
            require_once __DIR__ . "/../app/views/layouts/main.php";
        } else {
            die("View '{$view}' bulunamadı: {$viewPath}");
        }
    }
}
