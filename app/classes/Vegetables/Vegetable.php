<?php

namespace App\Vegetables;

class Vegetable {

    private $data = [];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'product_name' => null,
                'price' => null,
                'description' => null,
            ];
        }
    }

    /**
     * * Sets all data from array
     * @param $array
     */
    public function setData($array) {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }
        $this->setName($array['product_name'] ?? null);
        $this->setPrice($array['price'] ?? null);
        if ($array['description'] ?? false) {
            $this->setDescription($array['description']);
        }else{
             $this->data['description'] = null;
        }
    }

    /**
     * Gets all data as array
     * @return array
     */
    public function getData() {
        return [
            'id' => $this->getId(),
            'product_name' => $this->getName(),
            'price' => $this->getPrice(),
            'description' => $this->getDescription(),
        ];
    }

    /**
     * @param int $id
     */
    public function setId(int $id) {
        $this->data['id'] = $id;
    }

    /**
     * @return int|null
     */
    public function getId() {
        return $this->data['id'];
    }

    /**
     * Sets name
     * @param string $name
     */
    public function setName(string $product_name) {
        $this->data['product_name'] = $product_name;
    }

    /**
     * Returns product_name
     * @return string
     */
    public function getName() {
        return $this->data['product_name'];
    }

    /**
     * Sets data price
     * @param int $price
     */
    public function setPrice(float $price) {
        
        $this->data['price'] = number_format($price, 2);
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->data['price'];
    }

    /**
     * Sets data description
     * @param string $description
     */
    public function setDescription(string $description) {
        $this->data['description'] = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->data['description'];
    }

}
