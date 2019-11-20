<?php

namespace App\Cars;

class Car {

    private $data = [];

    const MAKER = ['audi' => 'Audi', 'bmv' => 'BMW', 'vw' => 'VW', 'honda' => 'Honda', 'mercedes' => 'Mercedes', 'ferrary' => 'Ferrary'];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'maker' => null,
                'model' => null,
                'year' => null,
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
       
        $this->setMaker($array['maker'] ?? null);
        $this->setModel($array['model'] ?? null);
        $this->setYear($array['year'] ?? null);
    }

    /**
     * Gets all data as array
     * @return array
     */
    public function getData() {
        return [
            'id' => $this->getId(),
            'maker' => $this->getMaker(),
            'model' => $this->getModel(),
            'year' => $this->getYear(),
        ];
    }

    /**
     * @param int $id
     */
    public function setId(int $id) {
        $this->data['id'] = $id;
    }

    /**
     * Sets name
     * @param string $name
     */
    public function setModel(string $model) {
        $this->data['model'] = $model;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year) {
        $this->data['year'] = $year;
    }

    public function setMaker(string $maker) {
        if (in_array($maker, array_keys(self::MAKER))) {
            $this->data['maker'] = $maker;
            return true;
        }
    }

    /**
     * Returns maker
     * @return string
     */
    public function getMaker() {
        return $this->data['maker'];
    }

    public static function getMakerOptions() {

        return self::MAKER;
    }

    /**
     * @return int|null
     */
    public function getId() {
        return $this->data['id'];
    }

    /**
     * Returns name
     * @return string
     */
    public function getModel() {
        return $this->data['model'];
    }

    /**
     * @return mixed
     */
    public function getYear() {
        return $this->data['year'];
    }

}
