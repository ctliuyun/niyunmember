<?php

class Profile extends CI_Controller {

    public function index() {

        if (!file_exists(APPPATH . '/views/invoice.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data = array(
            'treeview' => 'start',
            'treeviewmenu' => 'profile'
        );


        $this->load->view('/global/header');
        $this->load->view('/global/sidebar',$data);
        //$this->load->view('invoice');
        $this->load->view('profile');
        $this->load->view('/global/footer');
    }

}

?>
