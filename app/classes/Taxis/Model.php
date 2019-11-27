<?php

namespace App\Taxis;

use \App\App;

class Model {

    private $table_name = 'taxis';

    public function __construct() {
        App::$db->createTable($this->table_name);
    }

    /**
     * Irašo $taxi i duombaze
     * @param Taxi $taxi
     * @return bool
     */
    public function insert(Taxi $taxi) {
        return App::$db->insertRow($this->table_name, $taxi->getData());
    }

    /**
     * @param array $conditions
     * @return array
     */
    public function get($conditions = []) {
        $taxis = [];
        $rows = App::$db->getRowsWhere($this->table_name, $conditions);
        foreach ($rows as $row_id => $row_data) {
            $row_data['id'] = $row_id;
            $taxis[] = new Taxi($row_data);
        }
        
        return $taxis;
    }

    /**
     * @param Taxi $taxi
     * @return bool
     */
    public function update(Taxi $taxi) {
        return App::$db->updateRow($this->table_name, $taxi->getId(), $taxi->getData());
    }

    /**
     * deletes all taxis from database
     * @param Taxi $taxi
     * @return bool
     */
    public function delete(Taxi $taxi) {
        return App::$db->deleteRow($this->table_name, $taxi->getId());
    }

    public function __destruct() {
        App::$db->save();
    }

}
