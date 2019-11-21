<?php

namespace App\Vegetables;

use \App\App;

class Model {

    private $table_name = 'vegetables';

    public function __construct() {
        App::$db->createTable($this->table_name);
    }

    /**
     * Irašo $vegetable i duombaze
     * @param Vegetable $vegetable
     * @return bool
     */
    public function insert(Vegetable $vegetable) {
        return App::$db->insertRow($this->table_name, $vegetable->getData());
    }

    /**
     * @param array $conditions
     * @return array
     */
    public function get($conditions = []) {
        $vegetables = [];
        $rows = App::$db->getRowsWhere($this->table_name, $conditions);
        foreach ($rows as $row_id => $row_data) {
            $row_data['id'] = $row_id;
            $vegetables[] = new Vegetable($row_data);
        }
        
        return $vegetables;
    }

    /**
     * @param Vegetable $vegetable
     * @return bool
     */
    public function update(Vegetable $vegetable) {
        return App::$db->updateRow($this->table_name, $vegetable->getId(), $vegetable->getData());
    }

    /**
     * deletes all vegetables from database
     * @param Vegetable $vegetable
     * @return bool
     */
    public function delete(Vegetable $vegetable) {
        return App::$db->deleteRow($this->table_name, $vegetable->getId());
    }

    public function __destruct() {
        App::$db->save();
    }

}


