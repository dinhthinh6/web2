<?php
class AccountModel extends Model{

    public $fullName;
    public $userName;
    public $pass;
    public $email;
    public $phoneNumber;
    public $address;
    protected $_table_account = 'taikhoan';
    protected $_table_customer = 'khachhang';

    public function __construct(){

    }

    function tableFill(){
        return [$this->_table_account, $this->_table_customer];
    }

    function fieldFill(){
        return "*";
    }
    

    public function getList(){
        
    }

    public function create(){
        $column_acccount = "Username,Password,MaPQ";
        $sql = "INSERT INTO $this->_table_account ($column_acccount) VALUES ('$this->userName','$this->pass','0')";
        $result = $this->db->query($sql);
        return $result;
    }
}