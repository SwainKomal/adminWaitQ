<?php

require __DIR__. '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/cloudone-4a412-firebase-adminsdk-z1c7u-a1f4128bc7.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri('cloudone-4a412')
    ->create();

$database = $firebase->getDatabase();

?>
