<?php

class CasesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Projelerimiz',
            'message' => 'Tamamladığımız projelere göz atın! 🏗️'
        ];

        $this->view('cases', $data);
    }
}
