<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
$factory = (new Factory)
    ->withServiceAccount('investmentvip-2037b-firebase-adminsdk-g97kq-1947ff0922.json')
    ->withDatabaseUri('https://investmentvip-2037b-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();    
?>