<?php

use Calendar\Entity\User;
use Calendar\Service\UserService;

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

$router->get("/users", function() {

    echo json_encode((new UserService())->find());

});

$router->post("/user/create", function() {

    $json = file_get_contents("php://input");
    $obj = json_decode($json);

    $user = new User();
    $user->setFirst_name($obj->first_name);
    $user->setLast_name($obj->last_name);
    $user->setMail($obj->mail);
    $user->setPwd($obj->pwd);
    $user->setConfirm_pwd($obj->confirm_pwd);

    //(new UserService())->create($user);
    echo json_encode($user->toString());

});

$result = $router->handler();

// if return false, page 404 not found
if (!$result) {
    http_response_code(404);
    echo '<h1>404 Not Found!</h1>';
    die();
}

// print page actual
echo $result($router->getParams());