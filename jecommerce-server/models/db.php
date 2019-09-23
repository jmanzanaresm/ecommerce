<?php

require __DIR__.'../vendor/autoload.php';
use Kreait\Firebase\Factory;

function get_db() {
    $firebase = (new Factory)
    ->withServiceAccount('../secret_key/jecommerce-615f7-a810bbd0d365.json')
    ->create();

    return $firebase->getDatabase();
}
