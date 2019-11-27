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
                'name' => null,
                'surname' => null,
                'email' => null,
                'password' => null,
                'phone_number' => null
            ];
        }
    }

    public function setData($array) {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }

        $this->setName($array['name'] ?? null);
        $this->setSurname($array['surname'] ?? null);
        $this->setEmail($array['email'] ?? null);
        $this->setPassword($array['password'] ?? null);
        if ($array['phone_number'] ?? false) {
            $this->setPhoneNumber($array['phone_number']);
        }else{
             $this->data['phone_number'] = null;
        }
    }

    public function getData() {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'surname' => $this->getSurname(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            'phone_number' => $this->getPhoneNumber(),
        ];
    }

    public function setId(int $id) {
        $this->data['id'] = $id;
    }

    public function setName(string $name) {
        $this->data['name'] = $name;
    }

    public function setSurname(string $surname) {
        $this->data['surname'] = $surname;
    }

    public function setEmail(string $email) {
        $this->data['email'] = $email;
    }

    public function setPassword(string $password) {
        $this->data['password'] = $password;
    }

     public function setPhoneNumber(int $phone_number) {
        $this->data['phone_number'] = $phone_number;
    }
    
    public function getId() {
        return $this->data['id'];
    }

    public function getName() {
        return $this->data['name'];
    }

    public function getSurname() {
        return $this->data['surname'];
    }

    public function getEmail() {
        return $this->data['email'];
    }

    public function getPassword() {
        return $this->data['password'];
    }

    public function getPhoneNumber() {
        return $this->data['phone_number'];
    }
}
