<?php

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Ana Sayfa',
            'message' => 'MVC yapısı başarıyla çalışıyor! 🚀'
        ];

        $this->view('home', $data);
    }
}
