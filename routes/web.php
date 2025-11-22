$router->get('/blog', 'BlogController@index');
$router->get('/blog/{slug}', 'BlogController@show');