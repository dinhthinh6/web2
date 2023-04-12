<?php
class Shop extends Controller{
    
    public $data = [];

    public $model_shop;
    public function __construct(){
        $this->model_home = $this->model('HomeModel');
    }
    public function index(){
        $list =  $this->model_home->getList();
        $this->data['sub_content']['list'] = $list;
        $this->data['sub_content']['page_title'] = "Web ban hang`!";
        $this->data['content'] = 'home/index';
        //Render view
        $this->render('layouts/client_layout',$this->data);
    }

}