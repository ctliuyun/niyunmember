<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('loginmodel');
        //$this->load->helper('url_helper');
    }

    public function index() {

        if (!file_exists(APPPATH . '/views/login.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('loginemail', 'Loginemail', 'trim|required', array(
            'required' => '你没有填写用户名。'
        ));

        $this->form_validation->set_rules('passwd', 'Password', 'trim|required|md5', array(
            'required' => '输入密码框不能为空。'
        ));





        if ($this->form_validation->run() == FALSE) {
            $data['regsuccess'] = FALSE;
            $this->load->view('login', $data);
        } else {

            $userlogin = $this->loginmodel->user_login();

            $row = $userlogin->row();
            redirect('invoice');
            
            /*
            if (isset($row)) {
                echo $row->serv_id;
                echo $row->user_login;
                echo $row->user_email;
                echo $row->user_create_date;
            }  else {
                
                redirect('invoice');
                //echo trim($this->input->post('passwd'));
            }*/
        
        }


        //$data['regsuccess']=FALSE;
        // $data['title'] = ucfirst($page); // Capitalize the first letter
        //$this->load->view('templates/header', $data);
        //$this->load->view('/' . $page,$data);
        //$this->load->view('templates/footer', $data);
    }

    public function register() {


        if (!file_exists(APPPATH . '/views/register.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->helper('form');
        $this->load->library('form_validation');


        $this->form_validation->set_rules(
                'userlogin', 'Username', 'trim|required|alpha_dash|min_length[5]|max_length[12]|is_unique[niyun_users.user_login]', array(
            'required' => '你没有填写用户名。',
            'min_length' => '用户名的长度必须大于5个字符。',
            'max_length' => '用户名的长度必须小于13个字符。',
            'alpha_dash' => '用户名只能使用字母/数字/下划线/破折号。',
            'is_unique' => '这个用户名已经存在了。'
        ));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|regex_match[/^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/]|is_unique[niyun_users.user_email]', array(
            'required' => '你没有填写电子邮箱。',
            'regex_match' => '你填写的电子邮箱不符合一般的电子邮箱命名规则。',
            'valid_email' => '电子邮箱字段必须包含一个有效的电子邮箱地址。',
            'is_unique' => '这个电子邮箱已经存在了。'
        ));

        $this->form_validation->set_rules('passwd', 'Password', 'trim|required', array(
            'required' => '输入密码框不能为空。'
        ));
        $this->form_validation->set_rules('repasswd', 'Password Confirmation', 'trim|required|matches[passwd]', array(
            'matches' => '两次填写的密码不一致。',
            'required' => '再次输入密码框不能为空。'
        ));

        $this->form_validation->set_rules('iagree', 'Iagree', 'required', array(
            'required' => '你必须同意使用条款。'
        ));


        //$this->input->post('title')

        if ($this->form_validation->run() == FALSE) {

            // $data['title'] = ucfirst($page); // Capitalize the first letter
            //$this->load->view('templates/header', $data);
            $this->load->view('register');
        } else {

            $data['regsuccess'] = TRUE;
            $this->loginmodel->user_creat();
            
            $this->load->view('login', $data);
            //redirect('');
            
        }

        //$this->load->view('templates/footer', $data);
    }

}

?>
