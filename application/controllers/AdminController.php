<?php 

class AdminController extends CI_Controller{

    public function index(){
        $this->load->view('admin/auth-login-basic');
    }

    public function dashboard(){
        $this->load->view('admin/index');
    }

    public function news_list(){
        $this->load->view('admin/news/list');
    }

    public function news_create(){
        $this->load->view('admin/news/create');
    }

    public function forgotpassword(){
        $this->load->view('admin/auth-forgot-password-basic');
    }

    public function register(){
        $this->load->view('admin/auth-register-basic');
    }

    public function news_create_act(){
    }

}