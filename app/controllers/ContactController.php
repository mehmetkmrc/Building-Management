<?php

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'İletişim',
            'message' => 'Bizimle iletişime geçin! 📞'
        ];

        $this->view('contact', $data);
    }
}
