<?php

class HizmetlerimizController extends Controller
{
    public function index()
    {
        $hizmetler = require __DIR__ . "/../../data/hizmetler.php";

        $data = [
            'title' => 'Hizmetlerimiz',
            'temelHizmetler' => array_slice($hizmetler, 0, 4),
            'tamamlayiciHizmetler' => array_slice($hizmetler, 4)
        ];

        $this->view('hizmetlerimiz', $data);
    }


    public function show($slug)
    {
        $hizmetler = require __DIR__ . "/../../data/hizmetler.php";

        foreach ($hizmetler as $hizmet) {
            if ($hizmet['slug'] === $slug) {
                return $this->view('hizmet-detay', [
                    'hizmet' => $hizmet
                ]);
            }
        }

        http_response_code(404);
        return $this->view('404');
    }

}
