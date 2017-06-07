<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penambak extends CI_Controller {

    public function __construct() {
        parent::__construct();
            $this->load->model('Agivest_model');
            $this->load->model('Home_model');
            $this->load->library('session');
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->helper('html');
            $this->load->library('form_validation');
            $this->load->library('pagination');
    }
    public function index() {
       if($this->session->userdata('penambakSession')){
            $namaadmin = $this->session->userdata('penambakSession');       
            $data['namaAdmin']  = $namaadmin['username'];
            $data['id_identitas']  = $namaadmin['id_identitas'];

            //Select identitas
            $identitas = $this->Agivest_model->getDataInvestor($namaadmin['id_identitas']);
            foreach ($identitas->result() as $row) {
                  $data['name'] = $row->name;
                  $data['pictureProfile'] = $row->pictureProfile;
                  $data['biodata'] = $row->biodata;
                  $data['gender'] = $row->gender;
                  $data['email'] = $row->email;
                  $data['province'] = $row->province;
                  $data['region'] = $row->region;
                  $data['address'] = $row->address;
                  $data['telephone'] = $row->telephone;
                  $data['namaAhliWaris'] = $row->namaAhliWaris;
                  $data['noTelphoneAW'] = $row->noTelphoneAW;
                  $data['alamatAhliWaris'] = $row->alamatAhliWaris;
            }

            $this->load->view('pages/Penambak/penambak', $data); 

        }else{
            //Tambak
            $tambak = $this->Home_model->getData("fytambak", "where statusTambak = 'A' ");
            $namaTambak = "";
            $id_tambak = "";
            $jumlahInvest = "";
            if (!empty($tambak)){
                foreach ($tambak->result() as $row) {
                    $namaTambak = $row->nameTambak;
                    $jumlahInvest = $row->jumlahInvest;
                    $id_tambak = $row->id_tambak;
                }
            }
            //Statistik
            $statistik = $this->Home_model->countUser();
            //Luas Tambak
            $luasTambak = $this->Home_model->countLuas();
            //Total Invest
            $totalInvest = $this->Home_model->countInvest();
            //get Temporary tambak
             $tempMoney = $this->Home_model->getMoney("fyinvest", "where statusInvest = 'A' AND id_tambak = '$id_tambak'");
            $hitungInvest = 0;
            if (!empty($tempMoney)) {
                foreach ($tempMoney->result() as $row) {
                    $hitungInvest += $row->money;
                }
            }else{
                $hitungInvest = 0;
            }
            //Update Temporary Tambak
            $updateTambak = $this->Home_model->updateTambak($id_tambak,$hitungInvest);

            $data['tambak'] = $tambak;
            $data['Investor'] = $statistik;
            $data['luasTambak'] = $luasTambak;
            $data['totalInvest'] = $totalInvest;
            
            $this->load->view('pages/home', $data);
        }
    } 

    public function update_pakanTambak(){
        //Input data
        $id_identitas = $this->input->post('id_identitas');
        $jmlhKg_pakan = $this->input->post('pakan');
        $t = time();
        $date = date("Y-m-d h:i:s a", $t);
        //Get id_tambak
        $id_tambak = $this->Agivest_model->getIdTambak($id_identitas);

        $dataInput = array(
                'id_penambak' => $id_identitas,
                'jmlhKg_pakan'  => $jmlhKg_pakan,
                'id_tambak'  => $id_tambak,
                'tanggal_pakan' => $date
            );
        $simpan = $this->Home_model->insertData('fypakan' , $dataInput);
        echo $simpan;
    }

    public function update_ikanTambak(){
        //Input data
        $id_identitas = $this->input->post('id_identitas');
        $desc_ikan = $this->input->post('desc_ikan');
        $dead_ikan = $this->input->post('dead_ikan');
        $condition_ikan = $this->input->post('condition_ikan');
        $t = time();
        $date = date("Y-m-d h:i:s a", $t);
        //Get id_tambak
        $id_tambak = $this->Agivest_model->getIdTambak($id_identitas);

        $dataInput = array(
                'id_penambak' => $id_identitas,
                'desc_ikan'  => $desc_ikan,
                'id_tambak'  => $id_tambak,
                'dead_ikan'  => $dead_ikan,
                'condition_ikan'  => $condition_ikan,
                'date_ikan' => $date
            );
        $simpan = $this->Home_model->insertData('fyikan' , $dataInput);
        echo $simpan;
    }

    public function update_uangTambak(){
        //Input data
        $id_identitas = $this->input->post('id_identitas');
        $buy_uang = $this->input->post('buy_uang');
        $desc_uang = $this->input->post('desc_uang');
        $t = time();
        $date = date("Y-m-d h:i:s a", $t);
        //Get id_tambak
        $id_tambak = $this->Agivest_model->getIdTambak($id_identitas);
        //Get Temporary Investment
        $temporaryInvestment = $this->Agivest_model->getTempInvestment($id_tambak);
        //Hitung save_uang
        $save_uang = $temporaryInvestment - $buy_uang;
        //Update Temporary Investment
        $dataInput2 = array(
                'temporaryInvestment' => $save_uang,
            );
        $update_tempInvest = $this->Home_model->updateData('fytambak', $dataInput2,"id_tambak = '$id_tambak'");
        
        $dataInput = array(
                'id_penambak' => $id_identitas,
                'buy_uang'  => $buy_uang,
                'id_tambak'  => $id_tambak,
                'desc_uang'  => $desc_uang,
                'save_uang'  => $save_uang,
                'date_uang' => $date
            );

        $simpan = $this->Home_model->insertData('fyuang' , $dataInput);
        echo $simpan;
    }
}
