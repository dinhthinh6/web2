<?php
class Contact extends Controller{
    
    public $data = [];

    public $model_contact;
    public function __construct(){
        $this->model_contact = $this->model('ContactModel');
    }
    public function index(){
        // $list =  $this->model_home->getList();
        // $this->data['sub_content']['list'] = $list;
        // $this->data['sub_content']['page_title'] = "Web ban hang`!";
        // $this->data['content'] = 'home/index';
        //Render view
        $this->data['sub_content'][] = [];
        $this->data['content'] = 'home/index';
        $this->render('layouts/client_layout',$this->data);
    }

}