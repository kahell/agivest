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

    public function cekExpired($id_identitas){
        //Cek Expired
        $cek_expired = $this->Agivest_model->getDataOrder2($id_identitas);
        //Count Jumlah
        $i = 0;
        foreach ($cek_expired->result() as $row) {
            //Delete Otomatis
            $expired1 = $row->expired;
            $expired2 = explode('-', $expired1);
            $ordered = date("Y-m-d");
            $ordered2 = explode('-', $ordered);
            //Cek Tahun
            if ($expired2[0] < $ordered2[0]) {
                $deleteInvest = $this->Agivest_model->deleteData("fyinvest","statusInvest = 'N' AND id_identitas = '$id_identitas' AND id_invest ='$row->id_invest'");
            }elseif($expired2[2] < $ordered2[2]) { //Cek Tanggal
                //Cek Bulan
                if ($expired2[1] <= $ordered2[1]) {
                    //cek desember ke januari
                    if ($expired2[1] == 1 && $ordered2[1]==12) {

                    }else{
                        $deleteInvest = $this->Agivest_model->deleteData("fyinvest","statusInvest = 'N' AND id_identitas ='$id_identitas' AND id_invest ='$row->id_invest'");
                    }
                    $deleteInvest = $this->Agivest_model->deleteData("fyinvest","statusInvest = 'N' AND id_identitas ='$id_identitas' AND id_invest ='$row->id_invest'");
                }
            }
            $i++;
        }
        return $i;
    }

    public function index() {
       if($this->session->userdata('userSession')){
            $namaadmin = $this->session->userdata('userSession');       
            $data['namaAdmin']  = $namaadmin['username'];
            
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
            //Cek Expired
            $cekExpired = $this->cekExpired($namaadmin['id_identitas']);

            //Count AgiFISH Aktif
            $data["countAgiFish"] = $this->Agivest_model->countOrderAktif($namaadmin['id_identitas']);
            //die(var_dump($data["countAgiFish"]));
            //Ordered
            $data['ongoing_order'] = $this->Agivest_model->getDataOrder($namaadmin['id_identitas']);

            $this->load->view('pages/Investor/investor', $data);    
        }else{
            //Tambak
            $tambak = $this->Home_model->getData("fytambak", "where statusTambak = 'A' ");
            //Tambak2
            $tambak2 = $this->Home_model->getData("fytambak", "where statusTambak = 'N' ");
            $id_tambak = "";
            $id_tambak2 = "";
            $namaTambak = "";
            $namaTambak2 = "";
            $total_investTambak = "";
            $date2 = "";
            $foto = "";
            $foto2 = "";
            if (!empty($tambak)) {
                foreach ($tambak->result() as $row) {
                    $namaTambak = $row->nameTambak;
                    $id_tambak = $row->id_tambak;
                    $total_investTambak = $row->total_investTambak;
                    $foto = $row->pictureTambak;
                }
            }

            if (!empty($tambak2)) {
                foreach ($tambak2->result() as $row) {
                    $namaTambak2 = $row->nameTambak;
                    $foto2 = $row->pictureTambak;
                    $id_tambak2 = $row->id_tambak;
                    $date2 = $row->date;
                }
            }
            //Statistik
            $statistik = $this->Home_model->countUser();
            //Luas Tambak
            $luasTambak = $this->Home_model->countLuas();
            //Total Penambak
            $countPenambak = $this->Home_model->countPenambak();
            //get Temporary tambak
            $tempMoney = $this->Home_model->getMoney("fyinvest", "where statusInvest = 'A' AND id_tambak = '$id_tambak'");
            $hitungInvest = 0;
            if (!empty($tempMoney)) {
                foreach ($tempMoney->result() as $row) {
                    $hitungInvest += $row->money;
                }
            } else {
                $hitungInvest = 0;
            }
            //Update Temporary Tambak
            $updateTambak = $this->Home_model->updateTambak($id_tambak, $hitungInvest);

            $data['date'] = $date2;
            $data['foto'] = $foto;
            $data['foto2'] = $foto2;
            $data['namaTambak2'] = $namaTambak2;
            $data['tambak'] = $tambak;
            $data['Investor'] = $statistik;
            $data['luasTambak'] = $luasTambak;
            $data['countPenambak'] = $countPenambak;

            $this->load->view('pages/home', $data);
        }
    }

    public function agiFish() {
            if($this->session->userdata('userSession')){
            $namaadmin = $this->session->userdata('userSession');       
            $data['namaAdmin']  = $namaadmin['username'];
            //Select identitas
            $identitas = $this->Agivest_model->getDataInvestor($namaadmin['id_identitas']);
            foreach ($identitas->result() as $row) {
                $data['name'] = $row->name;
                //Umur
                $birthday = explode('-', $row->birthday);
                $umur = date('Y') - $birthday[0];
                $data['umur'] = $umur;
                $data['birthday'] = $row->birthday;
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

            //Cek Expired
            $cekExpired = $this->cekExpired($namaadmin['id_identitas']);
            $data["countAgiFish"] = null;

            //Pilih Investasi
            $data["pilihInvestasi2"] = "Y";
            $data["pilihInvestasi"] = $this->Agivest_model->getDataOrderAktif($namaadmin['id_identitas']);
            
            //Cek Profil Penambak
            $data['cek_ketTambak'] = "N";
            $data['ketTambak'] = "";

            //Cek User Invest
            $data['cek_totalUserInvest'] = "N";
            $data['totalUserInvest'] = "";
            //Cek Investasi
            $data['cek_dataInvestasi'] = "N";
            $data['dataInvestasi'] = "";
            $data['chart_data'] = json_encode("");

            //Get Data pakan
            $data['cek_pakan'] = "N";
            $data['pakan'] = null;
            $data['cek_totalPakan'] = "N";
            $data['totalPakan'] = "";

            //Get Uang
            $data['cek_uang'] = "N";
            $data['uangSisa'] = null;
            $data['uang'] = null;

            //Get Ikan
            $data['kondisi_ikan'] = null;
            $data['cek_ikan'] = "N";
            $data['ikan'] = null;

            $this->load->view('pages/Investor/agi-fish', $data);    
        }else{
            //Tambak
            $tambak = $this->Home_model->getData("fytambak", "where statusTambak = 'A' ");
            //Tambak2
            $tambak2 = $this->Home_model->getData("fytambak", "where statusTambak = 'N' ");
            $id_tambak = "";
            $id_tambak2 = "";
            $namaTambak = "";
            $namaTambak2 = "";
            $total_investTambak = "";
            $date2 = "";
            $foto = "";
            $foto2 = "";
            if (!empty($tambak)) {
                foreach ($tambak->result() as $row) {
                    $namaTambak = $row->nameTambak;
                    $id_tambak = $row->id_tambak;
                    $total_investTambak = $row->total_investTambak;
                    $foto = $row->pictureTambak;
                }
            }

            if (!empty($tambak2)) {
                foreach ($tambak2->result() as $row) {
                    $namaTambak2 = $row->nameTambak;
                    $foto2 = $row->pictureTambak;
                    $id_tambak2 = $row->id_tambak;
                    $date2 = $row->date;
                }
            }
            //Statistik
            $statistik = $this->Home_model->countUser();
            //Luas Tambak
            $luasTambak = $this->Home_model->countLuas();
            //Total Penambak
            $countPenambak = $this->Home_model->countPenambak();
            //get Temporary tambak
            $tempMoney = $this->Home_model->getMoney("fyinvest", "where statusInvest = 'A' AND id_tambak = '$id_tambak'");
            $hitungInvest = 0;
            if (!empty($tempMoney)) {
                foreach ($tempMoney->result() as $row) {
                    $hitungInvest += $row->money;
                }
            } else {
                $hitungInvest = 0;
            }
            //Update Temporary Tambak
            $updateTambak = $this->Home_model->updateTambak($id_tambak, $hitungInvest);

            $data['date'] = $date2;
            $data['foto'] = $foto;
            $data['foto2'] = $foto2;
            $data['namaTambak2'] = $namaTambak2;
            $data['tambak'] = $tambak;
            $data['Investor'] = $statistik;
            $data['luasTambak'] = $luasTambak;
            $data['countPenambak'] = $countPenambak;

            $this->load->view('pages/home', $data);
        }
    }

    public function chartMorris($id){
        //Nampilin di chart Morris
        $data['dataInvestasi'] = $this->Agivest_model->getDataInvestasi($id);
        $chart_data = array();
        foreach ($data['dataInvestasi']->result() as $row) {
            $chart_data[] = array(
                    'label' => $row->name,
                    'value' => $row->saham_invest
                );
        }
        $chart_data = json_encode($chart_data);
        return $chart_data;
    }

    public function agiFish1($id) {
            if($this->session->userdata('userSession')){
            $namaadmin = $this->session->userdata('userSession');       
            $data['namaAdmin']  = $namaadmin['username'];
            //Select identitas
            $identitas = $this->Agivest_model->getDataInvestor($namaadmin['id_identitas']);
            foreach ($identitas->result() as $row) {
                $data['name'] = $row->name;
                //Umur
                $birthday = explode('-', $row->birthday);
                $umur = date('Y') - $birthday[0];
                $data['umur'] = $umur;
                $data['birthday'] = $row->birthday;
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

            //Cek Expired
            $data["countAgiFish"] = $this->cekExpired($namaadmin['id_identitas']);

            //Pilih Investasi Untuk Tidak Nampilin Modal
            $data["pilihInvestasi2"] = "N";
            $data["pilihInvestasi"] = $this->Agivest_model->getDataOrderAktif($namaadmin['id_identitas']);
            //Hitung Nilai Investasi
            $totalUserInvest = 0;
            foreach ($data["pilihInvestasi"]->result() as $row) {
                $totalUserInvest += $row->money;
            }
            $data['cek_totalUserInvest'] = "Y";
            $data['totalUserInvest'] = $totalUserInvest;
            //Get Profil Penambak
            $data['cek_ketTambak'] = "Y";
            $data['ketTambak'] = $this->Agivest_model->getDataPenambak($id);
            //Cari Umur
            foreach ($data['ketTambak']->result() as $row) {
                //Umur
                //die(var_dump($row->pictureProfile));
                $birthday = explode('-', $row->birthday);
                $umur = date('Y') - $birthday[0];
                $data['penambak_umur'] = $umur;
            }
            //Get Investasi
            $data['cek_dataInvestasi'] = "Y";
            $data['dataInvestasi'] = $this->Agivest_model->getDataInvestasi($id);
            //Get Data Chart Moris
            $data['chart_data'] = $this->chartMorris($id);

            //Get Pakan
            $data['cek_pakan'] = "Y";
            $data['pakan'] = $this->Agivest_model->getDataPakan($id);
            $data['cek_totalPakan'] = "Y";
            $data['totalPakan'] = $this->Agivest_model->countPakan($id);

            //Get Uang
            $data['cek_uang'] = "Y";
            $data['uangSisa'] = $this->Agivest_model->getTempInvestment($id);
            $data['uang'] = $this->Agivest_model->getDataUang($id);

            //Get Ikan
            $data['kondisi_ikan'] = $this->Agivest_model->getKondisiIkan($id);
            $data['cek_ikan'] = "Y";
            $data['ikan'] = $this->Agivest_model->getDataIkan($id);

            $this->load->view('pages/Investor/agi-fish', $data);    
        }else{
            //Tambak
            $tambak = $this->Home_model->getData("fytambak", "where statusTambak = 'A' ");
            //Tambak2
            $tambak2 = $this->Home_model->getData("fytambak", "where statusTambak = 'N' ");
            $id_tambak = "";
            $id_tambak2 = "";
            $namaTambak = "";
            $namaTambak2 = "";
            $total_investTambak = "";
            $date2 = "";
            $foto = "";
            $foto2 = "";
            if (!empty($tambak)) {
                foreach ($tambak->result() as $row) {
                    $namaTambak = $row->nameTambak;
                    $id_tambak = $row->id_tambak;
                    $total_investTambak = $row->total_investTambak;
                    $foto = $row->pictureTambak;
                }
            }

            if (!empty($tambak2)) {
                foreach ($tambak2->result() as $row) {
                    $namaTambak2 = $row->nameTambak;
                    $foto2 = $row->pictureTambak;
                    $id_tambak2 = $row->id_tambak;
                    $date2 = $row->date;
                }
            }
            //Statistik
            $statistik = $this->Home_model->countUser();
            //Luas Tambak
            $luasTambak = $this->Home_model->countLuas();
            //Total Penambak
            $countPenambak = $this->Home_model->countPenambak();
            //get Temporary tambak
            $tempMoney = $this->Home_model->getMoney("fyinvest", "where statusInvest = 'A' AND id_tambak = '$id_tambak'");
            $hitungInvest = 0;
            if (!empty($tempMoney)) {
                foreach ($tempMoney->result() as $row) {
                    $hitungInvest += $row->money;
                }
            } else {
                $hitungInvest = 0;
            }
            //Update Temporary Tambak
            $updateTambak = $this->Home_model->updateTambak($id_tambak, $hitungInvest);

            $data['date'] = $date2;
            $data['foto'] = $foto;
            $data['foto2'] = $foto2;
            $data['namaTambak2'] = $namaTambak2;
            $data['tambak'] = $tambak;
            $data['Investor'] = $statistik;
            $data['luasTambak'] = $luasTambak;
            $data['countPenambak'] = $countPenambak;

            $this->load->view('pages/home', $data);
        }
    }

    public function agiPet() {
                    if($this->session->userdata('userSession')){
            $namaadmin = $this->session->userdata('userSession');       
            $data['namaAdmin']  = $namaadmin['username'];
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

            //Cek Expired
            $data["countAgiFish"] = $this->cekExpired($namaadmin['id_identitas']);

            //Pembayaran
            $fytambak = $this->Agivest_model->getDataTambak($namaadmin['id_identitas'], 'N');

            foreach($fytambak->result() as $row) {
                    $data['pictureTambak'] = $row->pictureTambak;
                    $data['location'] = $row->location;
                    $data['nameTambak'] = json_encode($row->nameTambak);
                    $data['statusInvest'] = $row->statusInvest;
                    $data['statusTambak'] = $row->statusTambak;
                    $data['expired'] = $row->expired;                    
              }
          
            $data['fytambak'] = $fytambak;

            $this->load->view('pages/Investor/agi-pet', $data);    
        }else{
            //Tambak
            $tambak = $this->Home_model->getData("fytambak", "where statusTambak = 'A' ");
            //Tambak2
            $tambak2 = $this->Home_model->getData("fytambak", "where statusTambak = 'N' ");
            $id_tambak = "";
            $id_tambak2 = "";
            $namaTambak = "";
            $namaTambak2 = "";
            $total_investTambak = "";
            $date2 = "";
            $foto = "";
            $foto2 = "";
            if (!empty($tambak)) {
                foreach ($tambak->result() as $row) {
                    $namaTambak = $row->nameTambak;
                    $id_tambak = $row->id_tambak;
                    $total_investTambak = $row->total_investTambak;
                    $foto = $row->pictureTambak;
                }
            }

            if (!empty($tambak2)) {
                foreach ($tambak2->result() as $row) {
                    $namaTambak2 = $row->nameTambak;
                    $foto2 = $row->pictureTambak;
                    $id_tambak2 = $row->id_tambak;
                    $date2 = $row->date;
                }
            }
            //Statistik
            $statistik = $this->Home_model->countUser();
            //Luas Tambak
            $luasTambak = $this->Home_model->countLuas();
            //Total Penambak
            $countPenambak = $this->Home_model->countPenambak();
            //get Temporary tambak
            $tempMoney = $this->Home_model->getMoney("fyinvest", "where statusInvest = 'A' AND id_tambak = '$id_tambak'");
            $hitungInvest = 0;
            if (!empty($tempMoney)) {
                foreach ($tempMoney->result() as $row) {
                    $hitungInvest += $row->money;
                }
            } else {
                $hitungInvest = 0;
            }
            //Update Temporary Tambak
            $updateTambak = $this->Home_model->updateTambak($id_tambak, $hitungInvest);

            $data['date'] = $date2;
            $data['foto'] = $foto;
            $data['foto2'] = $foto2;
            $data['namaTambak2'] = $namaTambak2;
            $data['tambak'] = $tambak;
            $data['Investor'] = $statistik;
            $data['luasTambak'] = $luasTambak;
            $data['countPenambak'] = $countPenambak;

            $this->load->view('pages/home', $data);
        }
    }

   
}
