<?php

define('USER', 'root');
define('HOST', 'localhost');
define('DB', 'api');
define('PASS', 'q1w2e3r4');

function hashId() {
    return hash('sha512', mt_rand());
}

function responseErro($msg, $entity, $data) {
    $response = [
        'status'   => 401,
        'error'    => true,
        'messages' => [
            'error' => $msg,
            $entity => $data
        ]
    ];

    return $response;
}

function writelog($value, $logName) {
    error_log(json_encode($value) . PHP_EOL, 3, "C:/xampp/htdocs/api-php/log/" . $logName . ".log");
}