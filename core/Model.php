<?php
abstract class Model extends Database{
    protected $db;

    function __construct(){
        $this->db = new Database();
    }

    abstract function tableFill();

    abstract function fieldFill();

    public function get(){
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();
        $sql = "Select $fieldSelect from $tableName";

        $query = $this->query($sql);

        if(!empty($query)){
            return $this->db->fetchAll($query);
        }
        return false;
    }
}