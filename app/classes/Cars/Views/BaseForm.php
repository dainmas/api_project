<?php

namespace App\Cars\Views;

class BaseForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'maker' => [
			'type' => 'select',
			'label' => 'Gamintojas:',
			'options' => \App\Cars\Car::getMakerOptions(),
		],
                'model' => [
                    'label' => 'Modelis',
                    'type' => 'text',
                ],
                'year' => [
                    'label' => 'Metai:',
                    'type' => 'number',
                ],
                
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Submit',
                ],
            ]
        ];
    }

}


