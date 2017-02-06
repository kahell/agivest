<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
          parent::__construct();
          $this->load->model('Agivest_model');
          $this->load->model('Email_model');
          $this->load->helper('cookie');
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->library('form_validation');
     }

	public function index(){   
    if($this->session->userdata('userSession')){          
      redirect('Home', 'refresh');
    }else{
      $this->load->view('pages/login'); 
    }
  }
  
  public function selectLogin(){
    //Modal Investasi
    $modalInvestasi = $this->input->post("modalInvestasi");
    //Nama Kolam
    $namaKolam = $this->input->post("namaKolam");

    $data['modalInvestasi'] = $modalInvestasi;
    $data['namaKolam'] = $namaKolam;
    $this->form_validation->set_rules('username', 'Email', 'trim|required|valid_email');

    if ($this->form_validation->run() == TRUE) {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      //Check Berdasarkan Email
      $result = $this->Agivest_model->getData2($username,md5($password));
      if($result){
        //Status
        $statusUser = '';

        $sess_array = array();      
        foreach($result as $row){
          $sess_array = array(          
            'idIdentitas'  => $row->idIdentitas,
            'username' => $row->username,
            'modalInvestasi' => $modalInvestasi,
            'namaKolam' => $namaKolam,
            'statusUser' => $row->statusUser
          );
          $statusUser = $row->statusUser;
        }

        //Check Email Verification
        $emailVerif = $this->Agivest_model->checkEmailValid2($username);
        $result2 = '';

        foreach ($emailVerif->result_array() as $row) {
          $result2 = $row['activeStatus'];
        }

        if($result2 != 'A') {
          $this->session->set_flashdata('gagalmasuk','Maaf email anda belum terverifikasi. Silahkan cek email anda.');                   
              $this->load->view('pages/login');
        }else{
          if (!empty($modalInvestasi)) {
            if ($statusUser != '1') {
              //SET SESSION
              $this->session->set_userdata('userSession', $sess_array);
              redirect('AgiFishInvest/agiFishInvestStep2');
            }else{
              $this->session->set_flashdata('gagalmasuk','Username atau Password anda salah');                   
              $this->load->view('pages/login' , $data);
            }
          }else{
            if ($statusUser != '1') {
              //SET SESSION
              $this->session->set_userdata('userSession', $sess_array);
              redirect('Investor', 'refresh');
            }else{
              $this->session->set_flashdata('gagalmasuk','Username atau Password anda salah');                   
              $redirect(base_url().'Login', 'refresh');
            }
          }
        }

      }else{      
        $this->session->set_flashdata('gagalmasuk','Username atau Password anda salah');                   
        redirect(base_url().'Login', 'refresh');
      }
    }else{
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      //Check berdasarkan username
      $result = $this->Agivest_model->getData($username,md5($password));
      if($result){
        //Status
        $statusUser = '';
        $sess_array = array();      
        foreach($result as $row){
          $sess_array = array(          
            'idIdentitas'  => $row->idIdentitas,
            'username' => $row->username,
            'modalInvestasi' => $modalInvestasi,
            'namaKolam' => $namaKolam,
            'statusUser' => $row->statusUser
          );
          $statusUser = $row->statusUser;
        }
        //Check Username Verification
        $emailVerif = $this->Agivest_model->checkEmailValid($username);
        $result2 = '';

        foreach ($emailVerif->result_array() as $row) {
          $result2 = $row['activeStatus'];
        }

        if($result2 != 'A') {
          $this->session->set_flashdata('gagalmasuk','Maaf email anda belum terverifikasi. Silahkan cek email anda.');                   
          redirect(base_url().'Login', 'refresh');
          }else{
            if (!empty($modalInvestasi)) {
              //SET SESSION
              if ($statusUser != '1') {
                $this->session->set_userdata('userSession', $sess_array);
                redirect('AgiFishInvest/agiFishInvestStep2', $data);
              }else{
                $this->session->set_flashdata('gagalmasuk','Username atau Password anda salah');                   
                $this->load->view('pages/login' , $data);
              }
            }else{
              if ($statusUser != '1') {
                //SET SESSION
                $this->session->set_userdata('userSession', $sess_array);
                redirect('Investor', 'refresh');
              }else{
                $this->session->set_flashdata('gagalmasuk','Username atau Password anda salah');                   
                $this->load->view('pages/login');
              }
            }
        }

      }else{
        if (!empty($modalInvestasi)) {
          $this->session->set_flashdata('gagalmasuk','Username atau Password anda salah');
          $this->load->view('pages/login',$data);
        }else{
          $this->session->set_flashdata('gagalmasuk','Username atau Password anda salah');
          redirect(base_url().'Login', 'refresh', $data);
        }
      }
    }
  }

  function logout(){
    $this->session->unset_userdata('userSession');
    session_destroy();
    redirect('Home', 'refresh');
  }

  function verify($verificationText=NULL){
      $noRecords = $this->Email_model->verifyEmailAddress($verificationText);
      if ($noRecords > 0){
        $data['errormsg'] = "Email Verified Successfully!"; 
        $this->load->view('pages/login', $data);
      }else{
        $data['errormsg'] = "Sorry Unable to Verify Your Email!"; 
        $this->load->view('pages/login', $data);
      }
  }

}
