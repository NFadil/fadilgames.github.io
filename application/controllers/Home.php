<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->view('Navbar');
        $this->load->view('Home');
    }
}

?>