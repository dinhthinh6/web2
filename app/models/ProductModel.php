<?php
class ProductModel extends Model{
    protected $_table = 'sanpham';

    function tableFill(){
        return $this->_table;
    }

    function fieldFill(){
        return "*";
    }

    public function getList(){
        // $reuslt[] = parent::get();
        $sql = "Select * from $this->_table";
        $reuslt = $this->db->query($sql);
        $data[] =  $this->db->fetchAll($reuslt);
        return $data;
    }
}