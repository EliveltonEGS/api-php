<?php

define('USER', 'root');
define('HOST', 'localhost');
define('DB', 'calendar');
define('PASS', '');

function hashId() {
    return hash('sha512', mt_rand());
}

function responseErro($msg, $entity, $data) {
    $response = [
        'status'   => 201,
        'error'    => true,
        'messages' => [
            'error' => $msg,
            $entity => $data
        ]
    ];

    return $response;
}

function responseSuccess($msg, $entity, $data) {
    $response = [
        'status'   => 200,
        'error'    => null,
        'messages' => [
            'error' => $msg,
            $entity => $data
        ]
    ];

    return $response;
}