<?php

use \App\App;

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
function form_success($filtered_input, &$form) {
    $response = new \Core\Api\Response();
    $model = new \App\Vegetables\Model();

    $conditions = [
        'row_id' => intval($_POST['id'])
    ];

    //gauname areju su $drink objektais (siuo atveju viena objekta arejuje pagal paduota id
    $vegetables = $model->get($conditions);
    if (!$vegetables) {
        $response->addError('Vegetable doesn`t exist!');
    } else {
        $vegetable = $vegetables[0];

        //idedame i data holderi naujas vertes, kurias ivede useris 
        //ir kurios atejo is javascripto
        $vegetable->setName($filtered_input['product_name']);
        $vegetable->setPrice($filtered_input['price']);
        $vegetable->setDescription($filtered_input['description']);
        
        //vertes, kurias idejome auksciau i data holderi updatinam 
        //ir duombazeje FileDB ka daro $drinksModel->update($drink) metodas
        $model->update($vegetable);
        
        // Irasom visa dalyvio informacija i response
        $response->setData($vegetable->getData());
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
function form_fail($filtered_input, &$form) {
    $response = new \Core\Api\Response();

    foreach ($form['fields'] as $field_id => $field) {
        if (isset($field['error'])) {
            $response->addError($field['error'], $field_id);
        }
    }

    $response->print();
}