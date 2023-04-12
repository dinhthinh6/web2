<?php
class Database{
    private $__con;
    function __construct(){
        $this->__con = Connection::getInstance();
    }

    // function insert($table, $data){
    //     $fieldStr = '';
    //     $valueStr = '';
    //     foreach($data as $key=>$value){
    //         $fieldStr.=$key.',';
    //         $valueStr.= "'".$value." ', ";
    //     }
    //     $fieldStr = rtrim($fieldStr, ',');
    //     $valueStr = rtrim($valueStr, ',');

    //     $sql = "Insert Into $table($fieldStr) Values ($valueStr)";

    //     $status = $this->query($sql);

    //     if($status){
    //         return true;
    //     }

    //     return false;
    // }

    // function update($table, $data, $condition=''){
    //     if(!empty($data)){
    //         $updateStr = '';
    //         foreach ($data as $key=>$value){
    //             $updateStr.="$key='$value',";
    //         }

    //         $updateStr = rtrim($updateStr, ',');

    //         if(!empty($condition)){
    //             $sql = "UPDATE $table SET $updateStr WHERE $condition";
    //         }
    //         else {
    //             $sql = "UPDATE $table SET $updateStr";
    //         }
    //         $status = $this->query($sql);
    //         if($status){
    //             return true;
    //         }
    //     }
    //     return false; 
    // }


    // function delete($table, $data){
    //     $fieldStr = '';
    //     $valueStr = '';
    //     foreach($data as $key=>$value){
    //         $fieldStr.=$key.',';
    //         $valueStr.= "'".$value." ', ";
    //     }
    //     $fieldStr = rtrim($fieldStr, ',');
    //     $valueStr = rtrim($valueStr, ',');

    //     $sql = " FROM $table WHERE $fieldStr = $valueStr;"
    //     // $sql = "Insert Into $table($fieldStr) Values ($valueStr)";

    //     $status = $this->query($sql);

    //     if($status){
    //         return true;
    //     }

    //     return false;
    // }

    function query($sql){
        $result = mysqli_query($this->__con,$sql);

        return $result;
    }

    function fetchAll($result){
        $data = [];
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        };
        return $data;
    }

}
