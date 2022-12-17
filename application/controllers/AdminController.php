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
        //STEP1 =
        $title = $_POST['title'];
        $desc = $_POST['description'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $status = $_POST['status'];

        //STEP2 = check input names value
        if(!empty($title) && !empty($desc) && !empty($date) && !empty($category) && !empty($status)){
              
        //----------------------------------------------------------
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|mp3|jpeg|mp4';

        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        //----------------------------------------------------------

        if ($this->upload->do_upload('img')){
            $upload_name = $this->upload->data('file_name');
            $upload_ext = $this->upload->data('file_ext'); 
        //----------------------------------------------------------
           //STEP3 = push all input values in array
            $data = [
                'n_title'       => $title,
                'n_description' => $desc,
                'n_date'        => $date,
                'n_category'    => $category,
                'n_status'      => $status,
                'n_file'        => $upload_name,
                'n_file_ext'    => $upload_ext,
                'n_create_date' => date("Y-m-d H:i:s"),
            ];
            //STEP4 = insert values to database
            $this->db->insert('news', $data);

        //STEP5 = redirect pago to list method
            redirect(base_url('a_news_list'));
        }
        else{
            $data = [
                'n_title'       => $title,
                'n_description' => $desc,
                'n_date'        => $date,
                'n_category'    => $category,
                'n_status'      => $status,
                //'n_file'        => $upload_name,
                //'n_file_ext'    => $upload_ext,
                'n_create_date' => date("Y-m-d H:i:s"),
            ];
            //STEP4 = insert values to database
            $this->db->insert('news', $data);

        //STEP5 = redirect pago to list method
            redirect(base_url('a_news_list'));
        }
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
        
    }
}