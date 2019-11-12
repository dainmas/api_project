<?php

namespace App\Users;

class User {

    private $data = [];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'selector'=> null,
                'age'=> null,
                'email' => null,
                'password' => null,
                
            ];
        }
    }

    public function setData($array) {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }
        if (isset($array['age'])) {
            $this->setAge($array['age']);
        } else {
            $this->data['age'] = null;
        }
      
        $this->setEmail($array['email'] ?? null);
        $this->setPassword($array['password'] ?? null);
    }

    public function getData() {
        return [
            'id' => $this->getId(),
            'age' => $this->getAge(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword()
        ];
    }

    public function setId(int $id) {
        $this->data['id'] = $id;
    }
    
     public function setAge(int $age) {
        $this->data['age'] = $age;
    }
    
    public function setEmail(string $email) {
        $this->data['email'] = $email;
    }

    public function setPassword(string $password) {
        $this->data['password'] = $password;
    }

    public function getId() {
        return $this->data['id'];
    }
    
    public function getAge() {
        return $this->data['age'];
    }
    
    public function getEmail() {
        return $this->data['email'];
    }

    public function getPassword() {
        return $this->data['password'];
    }

}
