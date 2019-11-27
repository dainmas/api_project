<?php

namespace App\Taxis\Views;

class BaseForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'name' => [
                    'label' => 'Vardas',
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite vardą'
                        ]
                    ]
                ],
                'comment' => [
                    'label' => 'Komentaras',
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Vieta Jūsų komentarui'
                        ]
                    ]
                ],
                'date' => [
                    'label' => 'Date',
                    'type' => 'date',
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
