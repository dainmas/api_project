<?php

use App\App;

require '../../../bootloader.php';

// Check user authorization
if (!App::$session->userLoggedIn()) {
    $response = new \Core\Api\Response();
    $response->addError('You are not authorized!');
    $response->print();
}

// Filter received data
$form = (new \App\Vegetables\Views\ApiForm())->getData();
$filtered_input = get_form_input($form);
validate_form($filtered_input, $form);

/**
 * If request passes validation
 * this function is automatically
 * called
 * 
 * @param type $filtered_input
 * @param type $form
 */
function form_success($filtered_input, $form) {
    $response = new \Core\Api\Response();

    $vegetable = new \App\Vegetables\Vegetable($filtered_input);
    $model = new \App\Vegetables\Model();
    $id = $model->insert($vegetable);

    if ($id !== false) {
        $vegetable->setId($id);
        $response->setData($vegetable->getData());
    } else {
        $response->addError('Insert to database failed!');
    }
    
    $response->print();
}

/**
 * If request fails validation
 * this function is automatically
 * called
 * 
 * @param type $filtered_input
 * @param type $form
 */
function form_fail($filtered_input, $form) {
    $response = new \Core\Api\Response();

    foreach ($form['fields'] as $field_id => $field) {
        if (isset($field['error'])) {
            $response->addError($field['error'], $field_id);
        }
    }

    $response->print();
}
