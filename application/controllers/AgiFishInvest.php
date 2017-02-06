<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgiFishInvest extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Agivest_model');
        $this->load->model('Email_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('string');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

	public function index(){
		if($this->session->userdata('userSession')){		
            $namaadmin = $this->session->userdata('userSession');
            $data['namaAdmin'] = $namaadmin['username'];
            //Ambil Kolam Dari Database
            $data['namaKolam'] = "Agi-1";
			$this->load->view('pages/agiFishInvest' , $data);
		}else{
            //Ambil Kolam Dari Database
            $data['namaKolam'] = "Agi-1";
        	$this->load->view('pages/agiFishInvest' , $data);	
		}
	}

    public function agiFishInvestStep2(){
        if($this->session->userdata('userSession')){        
            $namaadmin = $this->session->userdata('userSession');
            $data['namaAdmin'] = $namaadmin['username'];
            $data['namaKolam'] = $this->input->post("namaKolam");
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            

            if (!empty($namaadmin['modalInvestasi'] && empty($data['modalInvestasi']))) {
                $data['modalInvestasi'] = $namaadmin['modalInvestasi'];
            }
            if (!empty($namaadmin['namaKolam'] && empty($data['namaKolam']))) {
                $data['namaKolam'] = $namaadmin['namaKolam'];
            }
            //die(var_dump($data['modalInvestasi']));
            $this->load->view('pages/agiFishInvest2' , $data);
        }else{
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            $data['namaKolam'] = $this->input->post("namaKolam");
            $this->load->view('pages/login', $data);   
        }
    }

    public function agiFishInvestStep3(){
        if($this->session->userdata('userSession')){        
            $namaadmin = $this->session->userdata('userSession');
            $data['namaAdmin'] = $namaadmin['username'];
            $data['namaKolam'] = $this->input->post("namaKolam");
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            if (!empty($namaadmin['modalInvestasi'])) {
                $data['modalInvestasi'] = $namaadmin['modalInvestasi'];
            }
            if (!empty($namaadmin['namaKolam'])) {
                $data['namaKolam'] = $namaadmin['namaKolam'];
            }
            $this->load->view('pages/agiFishInvest3' , $data);
        }else{
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            $data['namaKolam'] = $this->input->post("namaKolam");
            $this->load->view('pages/login', $data);   
        }
    }
    public function finish(){
        if($this->session->userdata('userSession')){        
            $namaadmin = $this->session->userdata('userSession');
            $data['namaAdmin'] = $namaadmin['username'];
            $data['namaKolam'] = $this->input->post("namaKolam");
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            if (!empty($namaadmin['modalInvestasi'])) {
                $data['modalInvestasi'] = $namaadmin['modalInvestasi'];
            }
            if (!empty($namaadmin['namaKolam'])) {
                $data['namaKolam'] = $namaadmin['namaKolam'];
            }
            $this->load->view('pages/home' , $data);
        }else{
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            $data['namaKolam'] = $this->input->post("namaKolam");
            $this->load->view('pages/login', $data);   
        }
    }
}
