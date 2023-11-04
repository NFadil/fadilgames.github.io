<?php
class Ngobrol extends CI_Controller{
    
    public function index(){
        $this->load->view('Navbar');
        $this->load->view('Ngobrol');
    }
}

?>