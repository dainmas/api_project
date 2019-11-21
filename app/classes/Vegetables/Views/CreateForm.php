<?php

namespace App\Vegetables\Views;

class CreateForm extends BaseForm {

    public function __construct($data = []) {
        parent::__construct($data);
        
        $this->data['attr']['id'] = 'create-form';
        $this->data['buttons']['submit']['title'] = 'Sukurti';
        $this->data['buttons']['submit']['extra']['attr']['class']='button-outline';
    }

}
