<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CakupanIndikatorPWS extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->view("header");
        $this->load->view("laporan/laporansidebar");
        $this->load->view("laporan/pws");
        $this->load->view("footer");
    }
    
    public function index(){
        
    }
}