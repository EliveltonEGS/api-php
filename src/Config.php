<?php

define('USER', 'root');
define('HOST', 'localhost');
define('DB', 'calendar');
define('PASS', 'q1w2e3r4');

function hashId() {
    return hash('sha512', mt_rand());
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

function responseSuccessPartial($msg, $entity, $data) {
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

function writelog($value, $logName) {
    error_log(json_encode($value) . PHP_EOL, 3, "C:/xampp/htdocs/calendar/log/" . $logName . ".log");
}