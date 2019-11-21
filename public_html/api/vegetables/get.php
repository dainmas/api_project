<?php

require '../../../bootloader.php';

$response = new \Core\Api\Response();

$model = new App\Vegetables\Model();

$conditions = $_POST ?? [];

$vegetables = $model->get($conditions);
if ($vegetables !== false) {
    foreach ($vegetables as $vegetable) {
        $response->addData($vegetable->getData());
    }
} else {
    $response->addError('Could not pull data from database!');
}

$response->print();