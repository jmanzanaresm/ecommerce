<?php

use function GuzzleHttp\json_encode;

require __DIR__.'/vendor/autoload.php';
include('Users.php');

$url = explode('api.php', $_SERVER['REQUEST_URI'])[1];

switch($url) {
    case '/users':
        $users = new Users();
        echo json_encode($users->list());
        break;
    case '/users/create':
        $users = new Users();
        $users->create();
        break;
    case (preg_match("/^\/users\/[0-9]+$/i", $url) ? $url : !$url):
        echo 'retrieve';
        break;
    default:
        echo '404';
        break;
}