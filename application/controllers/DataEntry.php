<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DataEntry extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('header');
        $this->load->view('dataEntry/dataentrysidebar');
        $this->load->view('dataEntry/dataentrymainpage');
        $this->load->view('footer');
    }
    
    public function bidanByForm(){
        $data['kecamatan']		= $this->uri->segment(3);
        $this->load->view("header");
        $this->load->view("dataentry/dataentrysidebar");
        $this->load->view("dataentry/bidanentryform",$data);
        $this->load->view("footer");
    }
    
    public function bidanByTanggal(){
        $data['kecamatan']		= $this->uri->segment(3);
        $this->load->view("header");
        $this->load->view("dataentry/dataentrysidebar");
        $this->load->view("dataentry/bidanentrytanggal",$data);
        $this->load->view("footer");
        
    }
    
    public function gizi(){
        $data['kecamatan']		= $this->uri->segment(3);
        $this->load->view("header");
        $this->load->view("dataentry/dataentrysidebar");
        $this->load->view("dataentry/gizi",$data);
        $this->load->view("footer");
    }
    
    public function jurim(){
        $data['kecamatan']		= $this->uri->segment(3);
        $this->load->view("header");
        $this->load->view("dataentry/dataentrysidebar");
        $this->load->view("dataentry/jurim",$data);
        $this->load->view("footer");
    }
}