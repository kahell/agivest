<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HelfiAdm extends CI_Controller {

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
       if($this->session->userdata('adminSession')){
            $namaadmin = $this->session->userdata('adminSession');       
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

            $this->load->view('pages/Admin/admin', $data); 

        }else{
            redirect('Home', 'refresh');
        }
    }

    public function Investor(){
        if($this->session->userdata('adminSession')){
            $namaadmin = $this->session->userdata('adminSession');       
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

            //Tampilkan Investor
            $data['Investor'] = $this->Home_model->getData('fyidentitas', "WHERE statusUser = '0'" );
            //Tampilin Data Investasi
            $data['Investasi'] = $this->Home_model->getSelectData('fyinvest.id_invest, fyinvest.statusInvest, fyinvest.money, fyinvest.ordered, fyinvest.expired, fyidentitas.username, fyinvest.id_identitas', "fyinvest", "LEFT JOIN fyidentitas ON fyinvest.id_identitas = fyidentitas.id_identitas WHERE fyidentitas.activeStatus = 'A' AND fyidentitas.statusUser = '0' Order by fyinvest.id_invest DESC");

            $this->load->view('pages/Admin/admin_investor', $data); 

        }else{
            redirect('Home', 'refresh');
        }
    }

    public function update_statusInvest(){
        //Input data
        $id_identitas = $this->input->post('id_identitas');
        $id_invest = $this->input->post('id_invest');
        $statusInvest = $this->input->post('statusInvest');
        $dataInput = array(
                'statusInvest' => $statusInvest
            );
        $simpan = $this->Home_model->updateData('fyinvest' , $dataInput, "id_invest = '$id_invest' and id_identitas = '$id_identitas'");
        echo $simpan;
    }

    public function delete_Investasi($id){
        $delete = $this->Home_model->deleteData('fyinvest' , "id_invest = '$id'");
        redirect("HelfiAdm/Investor","refresh");
    }

    public function update_statusInvestor(){
        //Input data
        $id_identitas = $this->input->post('id_identitas');
        $name = $this->input->post('name');
        $birthday = $this->input->post('birthday');
        $biodata = $this->input->post('biodata');
        $gender = $this->input->post('gender');
        $province = $this->input->post('province');
        $region = $this->input->post('region');
        $address = $this->input->post('address');
        $telephone = $this->input->post('telephone');
        $activeStatus = $this->input->post('activeStatus');

        $dataInput = array(
                'name' => $name,
                'birthday' => $birthday,
                'biodata' => $biodata,
                'gender' => $gender,
                'province' => $province,
                'region' => $region,
                'address' => $address,
                'telephone' => $telephone,
                'activeStatus' => $activeStatus
            );
        $simpan = $this->Home_model->updateData('fyidentitas' , $dataInput, "id_identitas = '$id_identitas'");
        echo $simpan;
    }

    public function delete_Investor($id){
        $delete = $this->Home_model->deleteData('fyidentitas' , "id_identitas = '$id'");
        redirect("HelfiAdm/Investor","refresh");
    }

    public function add_statusInvestor(){
        //Input data
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $email = $this->input->post('email');
        $statusUser = $this->input->post('statusUser');
        $name = $this->input->post('name');
        $birthday = $this->input->post('birthday');
        $biodata = $this->input->post('biodata');
        $gender = $this->input->post('gender');
        $province = $this->input->post('province');
        $region = $this->input->post('region');
        $address = $this->input->post('address');
        $telephone = $this->input->post('telephone');

        $dataInput = array(
                'username' => $username,
                'pass' => md5($pass),
                'email' => $email,
                'statusUser' => $statusUser,
                'name' => $name,
                'birthday' => $birthday,
                'biodata' => $biodata,
                'gender' => $gender,
                'province' => $province,
                'region' => $region,
                'address' => $address,
                'telephone' => $telephone,
                'activeStatus' => 'N'
            );
        $simpan = $this->Home_model->insertData('fyidentitas' , $dataInput);
        echo $simpan;
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
