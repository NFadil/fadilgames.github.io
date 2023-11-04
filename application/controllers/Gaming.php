<?php
class Gaming extends CI_Controller{
    public function index(){
        $this->load->view('Navbar');
        $this->load->view('Gaming');
    }
}

?>