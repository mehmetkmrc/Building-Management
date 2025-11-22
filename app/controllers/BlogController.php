<?php

class BlogController extends Controller
{
    public function index()
    {
        // Doğru path: iki klasör yukarı → data/
        $blogs = require __DIR__ . "/../../data/blogs.php";

        $data = [
            'title' => 'Blog',
            'blogs' => $blogs
        ];

        $this->view('blog', $data);
    }

    public function show($slug)
{
    $blogs = require __DIR__ . "/../../data/blogs.php";

    foreach ($blogs as $blog) {
        if ($blog['slug'] === $slug) {
            return $this->view('blog_detail', [
                'blog' => $blog,
                'blogs' => $blogs // ← bunu ekledik
            ]);
        }
    }

    http_response_code(404);
    return $this->view('404');
}
}
