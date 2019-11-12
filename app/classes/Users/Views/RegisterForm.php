<?php

namespace App\Users\Views;

class RegisterForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'attr' => [
                'id' => 'register-form',
                'method' => 'POST',
            ],
            'fields' => [
                'age' => [
                    'label' => 'Age',
                    'type' => 'number',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_min_18_max_100',
                            'validate_number_range' => [
                                'min' => 18,
                                'max' => 100
                            ]
                        ]
                    ],
                ],
                'selector' => [
                    'type' => 'select',
                    'label' => 'Vyras/Moteris:',
//                  'value'=>1
                    'options' => [
                        'V',
                        'M'
                    ],
                    'validate' => [
                        'validate_not_empty'
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_mail'
                        ]
                    ],
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],
                'password_repeat' => [
                    'label' => 'Password repeat',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Registruotis',
                ],
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password_repeat'
                ]
            ],
            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }

}
