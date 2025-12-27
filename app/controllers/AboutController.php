<?php

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Hakkımızda',
            'message' => 'Hakkında sayfasına hoş geldiniz! 📝'
        ];

        $this->view('about', $data);
    }
}
