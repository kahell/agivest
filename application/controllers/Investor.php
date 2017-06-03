<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Investor extends CI_Controller {

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
       if($this->session->userdata('userSession')){
            $namaadmin = $this->session->userdata('userSession');       
            $data['namaAdmin']  = $namaadmin['username'];
            //Select identitas
            $identitas = $this->Agivest_model->getDataInvestor($data['namaAdmin']);
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

            //Pembayaran
            $fytambak = $this->Agivest_model->getDataTambak($data['namaAdmin'], 'N');

            foreach($fytambak->result() as $row) {
                    $data['pictureTambak'] = $row->pictureTambak;
                    $data['location'] = $row->location;
                    $data['nameTambak'] = json_encode($row->nameTambak);
                    $data['statusInvest'] = $row->statusInvest;
                    $data['statusTambak'] = $row->statusTambak;
                    $data['expired'] = $row->expired;
                    $data['pictureFishFarmer'] = $row->pictureFishFarmer;
                    $data['fishFarmer'] = $row->fishFarmer;
                    $data['id_invest'] = $row->id_invest;
                    //Delete Otomatis
                    $expired1 = $data['expired'];
                    $expired2 = explode('-', $expired1);
                    $currentDate = date("d-n-Y");
                    $currentDate2 = explode('-', $currentDate);

                    //Cek Tahun
                    if ($expired2[5] < $currentDate2[2]) {
                        $uname = $data['namaAdmin'];
                        $deleteInvest = $this->Agivest_model->deleteData("fyinvest","username ='$uname' AND id_invest ='$row->id_invest'");
                    }elseif($expired2[3] < $currentDate2[0]) { //Cek Tanggal
                        //Cek Bulan
                        if ($expired2[4] <= $currentDate2[1]) {
                            //cek desember ke januari
                            if ($expired2[4] == 1 && $currentDate2[1]==12) {

                            }else{
                                $uname = $data['namaAdmin'];
                                $deleteInvest = $this->Agivest_model->deleteData("fyinvest","username ='$uname' AND id_invest ='$row->id_invest'");
                            }
                            $uname = $data['namaAdmin'];
                            $deleteInvest = $this->Agivest_model->deleteData("fyinvest","username ='$uname' AND id_invest ='$row->id_invest'");
                        }
                    }
              }
          
            $data['fytambak'] = $fytambak;

            $this->load->view('pages/Investor/investor', $data);    
        }else{
            //Tambak
            $tambak = $this->Home_model->getData("fytambak", "where statusTambak = 'N' ");
            $namaTambak = "";
            $jumlahInvest = "";
            if (!empty($tambak)){
                foreach ($tambak->result() as $row) {
                    $namaTambak = $row->nameTambak;
                    $jumlahInvest = $row->jumlahInvest;
                }
            }
            //Statistik
            $statistik = $this->Home_model->countUser();
            //Luas Tambak
            $luasTambak = $this->Home_model->countLuas();
            //Total Invest
            $totalInvest = $this->Home_model->countInvest();
            //get Temporary tambak
            $tempMoney = $this->Home_model->getMoney("fyinvest", "where statusInvest = 'A' AND nameTambak = '$namaTambak'");
            $hitungInvest = 0;
            if (!empty($tempMoney)) {
                foreach ($tempMoney->result() as $row) {
                    $hitungInvest += $row->money;
                }
            }else{
                $hitungInvest = 0;
            }
            //Update Temporary Tambak
            $updateTambak = $this->Home_model->updateTambak($namaTambak,$hitungInvest);

            $data['tambak'] = $tambak;
            $data['Investor'] = $statistik;
            $data['luasTambak'] = $luasTambak;
            $data['totalInvest'] = $totalInvest;
            
            $this->load->view('pages/home', $data);
        }
    }

    public function agiFish() {
            if($this->session->userdata('userSession')){
            $namaadmin = $this->session->userdata('userSession');       
            $data['namaAdmin']  = $namaadmin['username'];
            //Select identitas
            $identitas = $this->Agivest_model->getDataInvestor($data['namaAdmin']);
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

            //Pembayaran
            $fytambak = $this->Agivest_model->getDataTambak($data['namaAdmin'], 'N');

            foreach($fytambak->result() as $row) {
                    $data['pictureTambak'] = $row->pictureTambak;
                    $data['location'] = $row->location;
                    $data['nameTambak'] = json_encode($row->nameTambak);
                    $data['statusInvest'] = $row->statusInvest;
                    $data['statusTambak'] = $row->statusTambak;
                    $data['expired'] = $row->expired;
                    $data['pictureFishFarmer'] = $row->pictureFishFarmer;
                    $data['fishFarmer'] = $row->fishFarmer;
                    $data['id_invest'] = $row->id_invest;
                    //Delete Otomatis
                    $expired1 = $data['expired'];
                    $expired2 = explode('-', $expired1);
                    $currentDate = date("d-n-Y");
                    $currentDate2 = explode('-', $currentDate);

                    //Cek Tahun
                    if ($expired2[5] < $currentDate2[2]) {
                        $uname = $data['namaAdmin'];
                        $deleteInvest = $this->Agivest_model->deleteData("fyinvest","username ='$uname' AND id_invest ='$row->id_invest'");
                    }elseif($expired2[3] < $currentDate2[0]) { //Cek Tanggal
                        //Cek Bulan
                        if ($expired2[4] <= $currentDate2[1]) {
                            //cek desember ke januari
                            if ($expired2[4] == 1 && $currentDate2[1]==12) {

                            }else{
                                $uname = $data['namaAdmin'];
                                $deleteInvest = $this->Agivest_model->deleteData("fyinvest","username ='$uname' AND id_invest ='$row->id_invest'");
                            }
                            $uname = $data['namaAdmin'];
                            $deleteInvest = $this->Agivest_model->deleteData("fyinvest","username ='$uname' AND id_invest ='$row->id_invest'");
                        }
                    }
              }
            
            $data['fytambak'] = $fytambak;

            //Kepemilikan
            //$data['kepemilikan'] = $this->Agivest_model->getDataProfit($id, $config["per_page"], $data['page'] );           

            $this->load->view('pages/Investor/agi-fish', $data);    
        }else{
            //Tambak
            $tambak = $this->Home_model->getData("fytambak", "where statusTambak = 'N' ");
            $namaTambak = "";
            $jumlahInvest = "";
            if (!empty($tambak)){
                foreach ($tambak->result() as $row) {
                    $namaTambak = $row->nameTambak;
                    $jumlahInvest = $row->jumlahInvest;
                }
            }
            //Statistik
            $statistik = $this->Home_model->countUser();
            //Luas Tambak
            $luasTambak = $this->Home_model->countLuas();
            //Total Invest
            $totalInvest = $this->Home_model->countInvest();
            //get Temporary tambak
            $tempMoney = $this->Home_model->getMoney("fyinvest", "where statusInvest = 'A' AND nameTambak = '$namaTambak'");
            $hitungInvest = 0;
            if (!empty($tempMoney)) {
                foreach ($tempMoney->result() as $row) {
                    $hitungInvest += $row->money;
                }
            }else{
                $hitungInvest = 0;
            }
            //Update Temporary Tambak
            $updateTambak = $this->Home_model->updateTambak($namaTambak,$hitungInvest);

            $data['tambak'] = $tambak;
            $data['Investor'] = $statistik;
            $data['luasTambak'] = $luasTambak;
            $data['totalInvest'] = $totalInvest;
            
            $this->load->view('pages/home', $data);
        }
    }

    public function agiPet() {
                    if($this->session->userdata('userSession')){
            $namaadmin = $this->session->userdata('userSession');       
            $data['namaAdmin']  = $namaadmin['username'];
            //Select identitas
            $identitas = $this->Agivest_model->getDataInvestor($data['namaAdmin']);
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

            //Pembayaran
            $fytambak = $this->Agivest_model->getDataTambak($data['namaAdmin'], 'N');

            foreach($fytambak->result() as $row) {
                    $data['pictureTambak'] = $row->pictureTambak;
                    $data['location'] = $row->location;
                    $data['nameTambak'] = json_encode($row->nameTambak);
                    $data['statusInvest'] = $row->statusInvest;
                    $data['statusTambak'] = $row->statusTambak;
                    $data['expired'] = $row->expired;
                    $data['pictureFishFarmer'] = $row->pictureFishFarmer;
                    $data['fishFarmer'] = $row->fishFarmer;
                    $data['id_invest'] = $row->id_invest;
                    //Delete Otomatis
                    $expired1 = $data['expired'];
                    $expired2 = explode('-', $expired1);
                    $currentDate = date("d-n-Y");
                    $currentDate2 = explode('-', $currentDate);

                    //Cek Tahun
                    if ($expired2[5] < $currentDate2[2]) {
                        $uname = $data['namaAdmin'];
                        $deleteInvest = $this->Agivest_model->deleteData("fyinvest","username ='$uname' AND id_invest ='$row->id_invest'");
                    }elseif($expired2[3] < $currentDate2[0]) { //Cek Tanggal
                        //Cek Bulan
                        if ($expired2[4] <= $currentDate2[1]) {
                            //cek desember ke januari
                            if ($expired2[4] == 1 && $currentDate2[1]==12) {

                            }else{
                                $uname = $data['namaAdmin'];
                                $deleteInvest = $this->Agivest_model->deleteData("fyinvest","username ='$uname' AND id_invest ='$row->id_invest'");
                            }
                            $uname = $data['namaAdmin'];
                            $deleteInvest = $this->Agivest_model->deleteData("fyinvest","username ='$uname' AND id_invest ='$row->id_invest'");
                        }
                    }
              }
          
            $data['fytambak'] = $fytambak;

            $this->load->view('pages/Investor/agi-pet', $data);    
        }else{
            //Tambak
            $tambak = $this->Home_model->getData("fytambak", "where statusTambak = 'N' ");
            $namaTambak = "";
            $jumlahInvest = "";
            if (!empty($tambak)){
                foreach ($tambak->result() as $row) {
                    $namaTambak = $row->nameTambak;
                    $jumlahInvest = $row->jumlahInvest;
                }
            }
            //Statistik
            $statistik = $this->Home_model->countUser();
            //Luas Tambak
            $luasTambak = $this->Home_model->countLuas();
            //Total Invest
            $totalInvest = $this->Home_model->countInvest();
            //get Temporary tambak
            $tempMoney = $this->Home_model->getMoney("fyinvest", "where statusInvest = 'A' AND nameTambak = '$namaTambak'");
            $hitungInvest = 0;
            if (!empty($tempMoney)) {
                foreach ($tempMoney->result() as $row) {
                    $hitungInvest += $row->money;
                }
            }else{
                $hitungInvest = 0;
            }
            //Update Temporary Tambak
            $updateTambak = $this->Home_model->updateTambak($namaTambak,$hitungInvest);

            $data['tambak'] = $tambak;
            $data['Investor'] = $statistik;
            $data['luasTambak'] = $luasTambak;
            $data['totalInvest'] = $totalInvest;
            
            $this->load->view('pages/home', $data);
        }
    }

}
