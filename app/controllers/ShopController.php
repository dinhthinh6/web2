<?php
class Shop extends Controller{
    
    public $data = [];

    public $product;
    public function __construct(){
        $this->product = $this->model('ProductModel');
    }
    public function index(){
        $list =  $this->product->getList();
        $this->data['sub_content']['list'] = $list;
        $this->data['sub_content']['page_title'] = "Web ban hang`!";
        $this->data['content'] = 'home/index';
        //Render view
        $this->render('layouts/client_layout',$this->data);
    }

}