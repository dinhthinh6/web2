<?php
class ContactModel{
    protected $_name = 'products';
    protected $_phone = '';

    public function getList(){
        $data = [
            'Item 1',
            'Item 2',
            'Item 3'
        ];
        return $data;
    }
}