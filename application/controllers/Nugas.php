<?php
class Nugas extends CI_Controller{
    
    public function index(){
        $this->load->view('Navbar');
        $this->load->view('Nugas');
    }
}

?>