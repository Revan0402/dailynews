<?php 

class AdminController extends CI_Controller{

    public function index(){
        $this->load->view('admin/auth-login-basic');
    }

    public function dashboard(){
        $this->load->view('admin/index');
    }



}