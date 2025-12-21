<?php

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kalkedon - Kadıköy bina yönetimi',
            'message' => 'MVC yapısı başarıyla çalışıyor! 🚀'
        ];

        $this->view('home', $data);
    }
}
