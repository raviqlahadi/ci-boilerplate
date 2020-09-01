<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dashboard extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            if(!$this->session->logged_in){
                $this->session->set_flashdata('alert', $this->alert->set_alert('danger', 'Anda perlu login untuk mengakses halaman ini'));
                redirect('auth');
            }
        }
        
        public function index()
        {
            $data['page_content'] = 'page/dashboard/index';
            $this->load->view('index', $data);
        }
    
    }
    
    /* End of file Home.php */
