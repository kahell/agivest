<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('userSession')) {
            $namaadmin = $this->session->userdata('userSession');
            $data['namaAdmin'] = $namaadmin['username'];
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
            if (!empty($tambak->result())) {
                foreach ($tambak->result() as $row) {
                    $namaTambak = $row->nameTambak;
                    $id_tambak = $row->id_tambak;
                    $total_investTambak = $row->total_investTambak;
                    $foto = $row->pictureTambak;
                }
            }
            if (!empty($tambak2->result())) {
                foreach ($tambak2->result() as $row) {
                    $namaTambak2 = $row->nameTambak;
                    $foto2 = $row->pictureTambak;
                    $id_tambak2 = $row->id_tambak;
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
        } else {
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
