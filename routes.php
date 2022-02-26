<?php

use Calendar\Controller\CustomerController;

require __DIR__ . '/vendor/autoload.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/';
$router = new Calendar\Router($method, $path);

/*$router->get('/', function () {
    return 'Olá mundo';
});

$router->get('/ola-{nome}-{sobrenome}', function ($params) {
    return 'Olá '. $params[1] . ' ' . $params[2];
});

$router->get('/contact', function () {
    return 'contact';
});*/

$router->get("/customers", function() {

    $customerController = new CustomerController();
    $results = $customerController->findAll();
    echo json_encode($results);

});



$result = $router->handler();

// if return false, page 4040 not found
if (!$result) {
    http_response_code(404);
    echo '<h1>404 Not Found!</h1>';
    die();
}

// print page actual
echo $result($router->getParams());