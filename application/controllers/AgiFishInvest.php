<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgiFishInvest extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Agivest_model');
        $this->load->model('Home_model');
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
            
            //Non Tambak Penuh
            $cekTambak = $this->Agivest_model->getCekTambak();
            //Update Tambak Jadi Tidak Aktif
            if (!empty($cekTambak->result())) {
                $id_tambak = "";
                foreach ($cekTambak->result() as $row) {
                    $id_tambak = $row->id_tambak;
                }
                //Cek Uang Investasi countInvest2
                $temporaryInvestment = $this->Home_model->countInvest2($id_tambak);
                
                $dataInput = array(
                    'statusTambak' => "N",
                    'temporaryInvestment' => $temporaryInvestment
                );

                $updateTambak = $this->Home_model->updateData('fytambak', $dataInput, "id_tambak = '$id_tambak'");
            }

            //Ambil Kolam Dari Database
            $data['kolam'] = $this->Home_model->getData("fytambak", "WHERE statusTambak = 'A'");

            //Jumlah Investasi Terkumpul
            $data['jumlahInvestasi'] = $this->Home_model->countInvestTambak();
			$this->load->view('pages/agiFishInvest' , $data);
		}else{
            //Ambil Kolam Dari Database
            $data['kolam'] = $this->Home_model->getData("fytambak", "WHERE fytambak.statusTambak = 'A';");
            //Jumlah Investasi Terkumpul
            $data['jumlahInvestasi'] = $this->Home_model->countInvestTambak();
        	$this->load->view('pages/agiFishInvest' , $data);	
		}
	}

    public function agiFishInvestStep2(){
        if($this->session->userdata('userSession')){        
            $namaadmin = $this->session->userdata('userSession');
            $data['namaAdmin'] = $namaadmin['username'];
            $data['id_tambak'] = $this->input->post("id_tambak");
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            $data['total_investTambak'] = $this->input->post("total_investTambak");

            if (!empty($namaadmin['modalInvestasi'] && empty($data['modalInvestasi']))) {
                $data['modalInvestasi'] = $namaadmin['modalInvestasi'];
            }
            if (!empty($namaadmin['id_tambak'] && empty($data['id_tambak']))) {
                $data['id_tambak'] = $namaadmin['id_tambak'];
            }
            //die(var_dump($data['modalInvestasi']));
            $this->load->view('pages/agiFishInvest2' , $data);
        }else{
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            $data['id_tambak'] = $this->input->post("id_tambak");
            $this->load->view('pages/login', $data);   
        }
    }

    public function agiFishInvestStep3(){
        if($this->session->userdata('userSession')){        
            $namaadmin = $this->session->userdata('userSession');
            $data['namaAdmin'] = $namaadmin['username'];
            $data['id_tambak'] = $this->input->post("id_tambak");
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            $data['total_investTambak'] = $this->input->post("total_investTambak");
            if (!empty($namaadmin['modalInvestasi'])) {
                $data['modalInvestasi'] = $namaadmin['modalInvestasi'];
            }
            if (!empty($namaadmin['id_tambak'])) {
                $data['id_tambak'] = $namaadmin['id_tambak'];
            }
            $this->load->view('pages/agiFishInvest3' , $data);
        }else{
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            $data['id_tambak'] = $this->input->post("id_tambak");
            $this->load->view('pages/login', $data);   
        }
    }
    public function finish(){
        if($this->session->userdata('userSession')){        
            $namaadmin = $this->session->userdata('userSession');
            $data['namaAdmin'] = $namaadmin['username'];
            $data['id_tambak'] = $this->input->post("id_tambak");
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            $data['total_investTambak'] = $this->input->post("total_investTambak");
            if (!empty($namaadmin['modalInvestasi'])) {
                $data['modalInvestasi'] = $namaadmin['modalInvestasi'];
            }
            if (!empty($namaadmin['id_tambak'])) {
                $data['id_tambak'] = $namaadmin['id_tambak'];
            }
            
            //Simpen Data
            $t = time();
            $today = date("Y-m-d", $t); 
            $expiredDay = date( "Y-m-d", strtotime( "$today +3 days" ));

            $dataInput = array(
                'id_identitas' => $namaadmin['id_identitas'],
                'id_tambak'  => $data['id_tambak'],
                'statusInvest'  => 'N',
                'money' => $data['modalInvestasi'],
                'saham_invest' => ($data['modalInvestasi'] / $data['total_investTambak']) * 100,
                'ordered' => $today,
                'expired' => $expiredDay
            );
            $simpan = $this->Home_model->insertData('fyinvest' , $dataInput);
            
            //$this->load->view('pages/home' , $data);
            redirect('Home', 'refresh');
        }else{
            $data['modalInvestasi'] = $this->input->post("modalInvestasi");
            $data['id_tambak'] = $this->input->post("id_tambak");
            $this->load->view('pages/login', $data);   
        }
    }
}
