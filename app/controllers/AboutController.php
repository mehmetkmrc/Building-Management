<?php

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'About',
            'message' => 'Hakkında sayfasına hoş geldiniz! 📝'
        ];

        $this->view('about', $data);
    }
}
