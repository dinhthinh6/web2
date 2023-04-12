<?php
class Account extends Controller{
    
    public $data = [];
    
    public $mode_account;
    public function __construct(){
        $this->mode_account = $this->model('AccountModel');
    }

    public function signup(){
        $this->data['sub_content'][] = [];
        $this->data['content'] = 'account/signup';
        //Render view
        $this->render('layouts/client_layout',$this->data);
    }

    public function login(){
        $this->data['sub_content'][] = [];
        $this->data['content'] = 'account/login';
        //Render view
        $this->render('layouts/client_layout',$this->data);
    }

    public function index(){
        $list =  $this->mode_account->getList();
        $this->data['sub_content']['list'] = $list;
        // $this->data['sub_content']['page_title'] = "Web ban hang`!";
        $this->data['content'] = 'account/login';
        //Render view
        $this->render('layouts/client_layout',$this->data);
    }

    

}