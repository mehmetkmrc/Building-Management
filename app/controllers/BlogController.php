<?php

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Blog',
            'message' => 'Blog sayfasına hoş geldiniz! 📝'
        ];

        $this->view('blog', $data);
    }
}
