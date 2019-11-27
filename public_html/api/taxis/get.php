<?php

require '../../../bootloader.php';

$response = new \Core\Api\Response();

$model = new App\Taxis\Model();

$conditions = $_POST ?? [];

$taxis = $model->get($conditions);
if ($taxis !== false) {
    foreach ($taxis as $taxi) {
        $response->addData($taxi->getData());
    }
} else {
    $response->addError('Could not pull data from database!');
}

$response->print();