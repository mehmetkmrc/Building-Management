<?php

class ServicesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Hizmetlerimiz',
            'message' => 'Hizmetlerimizi keşfedin! 💼'
        ];

        $this->view('services', $data);
    }
}
