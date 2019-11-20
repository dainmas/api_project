<?php

namespace App\Cars\Views;

class ApiForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'maker' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ]
                ],
                'model' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ]
                ],
                'year' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_number_range' => [
                                'min' => 1960,
                                'max' => date('Y')
                            ]
                        ]
                    ],
                ],
            ],
            'callbacks' => [
                'success' => 'form_success',
                'fail' => 'form_fail',
            ]
        ];
    }

}
