<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use function GuzzleHttp\json_encode;

require __DIR__.'/vendor/autoload.php';

include('models/Users.php');

$url = explode('api.php', $_SERVER['REQUEST_URI'])[1];

switch($url) {
    case '/users':
        $users = new Users();
        echo 'Cum Laude';
        echo json_encode($users->list());
        break;

    case '/users/create':
        $users = new Users();

        $name = 'Christopher Flores';
        $email = 'kershingf@gmail.com';
        $password = 'P3mq5C3UP';

        $users->create($name, $email, $password);
        break;

    case (preg_match("/^\/users\/[0-9]+$/i", $url) ? $url : !$url):
        $users = new Users();
        echo json_encode($users->retrieve(''));
        break;

    default:
        echo '404';
        break;
}