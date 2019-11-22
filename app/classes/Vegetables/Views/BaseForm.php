<?php

namespace App\Vegetables\Views;

class BaseForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'product_name' => [
                    'label' => 'Produkto pavadinimas',
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Produkto pavadinimas'
                        ]
                    ]
                ],
                'price' => [
                    'label' => 'Kaina(Eur)',
                    'type' => 'number',
                    'extra' => [
                        'attr' => [
                            'step' => '0.01',
                            'placeholder' => 'Kaina'
                        ]
                    ]
                ],
                'description' => [
                    'label' => 'Aprašymas',
                    'type' => 'text',
                    'optional' => true
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
