<?php

Class Agivest_model extends CI_Model {
    //1. Login - Model ---------------------------------------------------------
   	function getData($username, $password){
		$query = $this->db->query("select * from fyidentitas where (username='$username' && pass='$password') || (email='$username' && pass='$password') limit 1");
	    if($query->num_rows() > 0){
			return $query->result();
	    }else{
			return false;
	    }
	}
	function getData2($username, $password){
		$query = $this->db->query("select * from fyidentitas where (email='$username' && pass='$password') || (email='$username' && pass='$password') limit 1");
	    if($query->num_rows() > 0){
			return $query->result();
	    }else{
			return false;
	    }
	}
	function checkEmailValid($username){
		$result = $this->db->query("select * from fyidentitas where username='$username'");
		return $result;
	}

	function checkEmailValid2($email){
		$result = $this->db->query("select * from fyidentitas where email='$email'");
		return $result;
	}

    //End of Login-Model -------------------------------------------------------

    //2. Register - Model ---------------------------------------------------------
   	function checkDuplicate($where){
		$result=$this->db->query('select * from fyidentitas '. $where);		
		if($result->num_rows() == 0){
			return 0;//valid
		}else{
			return 1;//duplicate
		}
	}

	function insertData($tableName, $data){
		$result = $this->db->insert($tableName, $data);
		return $result;
	}
	//End of Register-Model -------------------------------------------------------

	//3. Forgot - Model ---------------------------------------------------------
	function checkEmailValidForgot($where){
	$result=$this->db->query("select * from fyidentitas " . $where);		
		if($result->num_rows() == 0){			
			return 0;//Belum Terdaftar
		}else{
			return 1;//Sudah Terdaftar
		}
	}

	function updateStatus($verificationCode,$email){
		$result = "update fyidentitas set verificationCodeForgotPass = '$verificationCode', activeStatusForgotPass = 'N' WHERE email = '$email'";
        $this->db->query($result);
    	return $result;
	}

	function resetPassword($password,$verificationText){
		$result = "update fyidentitas set pass = '$password' , activeStatusForgotPass = 'N' WHERE verificationCodeForgotPass = '$verificationText'";
        $this->db->query($result);
    	return $result;
	}

	function getDataForgot($verificationText){
		$result = $this->db->query("select * from fyidentitas where verificationCodeForgotPass='$verificationText'");
		return $result;
	}
	//End of Forgot-Model -------------------------------------------------------
	//4. Investor - Model ---------------------------------------------------------
	public function getDataOrder($id_identitas){
		$result = $this->db->query("select * from fyinvest,fytambak where fyinvest.id_tambak = fytambak.id_tambak and fyinvest.id_identitas = '$id_identitas'");
		return $result;
	}

	public function getDataOrder2($id_identitas){
		$result = $this->db->query("select * from fyinvest,fytambak where fyinvest.id_tambak = fytambak.id_tambak and fyinvest.id_identitas = '$id_identitas' and fyinvest.statusInvest = 'N'");
		return $result;
	}

	public function getDataOrderAktif($id_identitas){
		$result = $this->db->query("select * from fyinvest,fytambak where fyinvest.id_tambak = fytambak.id_tambak and fyinvest.id_identitas = '$id_identitas' and fyinvest.statusInvest = 'A'");
		return $result;
	}

	public function countOrderAktif($id_identitas){
		$result = $this->db->query("select count(fyinvest.id_invest) as count from fyinvest,fytambak where fyinvest.id_tambak = fytambak.id_tambak and fyinvest.id_identitas = '$id_identitas' and fyinvest.statusInvest = 'A'");
		return $result->row()->count;
	}

	public function getDataInvestor($id_identitas){
		$result = $this->db->query("select * from fyidentitas where id_identitas = '$id_identitas'");
		return $result;
	}

	public function getDataInvestasi($id_tambak){
		$result = $this->db->query("select * from fyinvest
									LEFT JOIN fyidentitas
									on fyidentitas.id_identitas = fyinvest.id_identitas
									where id_tambak = '$id_tambak'
									and fyinvest.statusInvest = 'A'
									");
		return $result;
	}

	public function getCekTambak(){
		$result = $this->db->query("select *
									from fytambak
									WHERE fytambak.total_investTambak <= (Select sum(money)
																	     From fyinvest,fytambak
																	     where fyinvest.id_tambak = fytambak.id_tambak
																	     and fytambak.statusTambak = 'A'
																	     and fyinvest.statusInvest = 'A'
																		)");
		return $result;
	}

	public function getDataPenambak($id_tambak){
		$result = $this->db->query("
			select * from fyidentitas 
			LEFT JOIN fytambak 
			ON fytambak.id_penambak = fyidentitas.id_identitas
			WHERE fytambak.id_tambak = '$id_tambak'  
			LIMIT 1");
		return $result;
	}

	public function getDataTambak($id_tambak, $statusInvest){
		$result = $this->db->query("select 
									fytambak.nameTambak, 
									fytambak.pictureTambak,
									fytambak.statusTambak,
									fytambak.location, 
									fyinvest.statusInvest, 
									fyinvest.money,
									fyinvest.id_invest,
									fyinvest.ordered, 
									fyinvest.expired
									from fytambak,fyinvest
									where fytambak.id_tambak = fyinvest.id_tambak
									and fyinvest.id_tambak = '$id_tambak'
									and fyinvest.statusInvest = '$statusInvest';");
		return $result;
	}

	public function getPilihTambak($id_tambak){
		$result = $this->db->query("select 
									fytambak.nameTambak, 
									fytambak.pictureTambak, 
									fytambak.statusTambak, 
									fytambak.progresTambak,
									fytambak.location, 
									fyinvest.statusInvest, 
									fyinvest.money,
									fyinvest.id_invest,
									fyinvest.ordered, 
									fyinvest.expired
									from fytambak,fyinvest
									where fytambak.nameTambak = fyinvest.nameTambak
									and fyinvest.id_tambak = '$id_tambak'
									and fyinvest.statusInvest = 'A';");
		return $result;
	}	

	public function getTambak($id){
		$result = $this->db->query("select * from fytambak
									WHERE fytambak.statusTambak = 'A'
									and fytambak.nameTambak = '$id'
									order by idTambak");
		return $result;
	}

	public function countTambak($username,$nameTambak){
		$result = $this->db->query("select COUNT(nameTambak) 
									FROM fyinvest
									WHERE username = '$username'
									AND nameTambak = '$nameTambak'
									AND statusInvest = 'A'
									HAVING COUNT(nameTambak) == 1");
		return $result;
	}

	public function deleteData($tableName, $where){
		$result = $this->db->delete($tableName, $where);
		return $result;
	}

	public function getDataPakan($id){
		$result = $this->db->query("select fypakan.tanggal_pakan, fypakan.jmlhKg_pakan
									from fypakan, fytambak
									where fypakan.id_tambak = fytambak.id_tambak
									and fypakan.id_tambak = '$id'
									and fypakan.id_penambak = fytambak.id_penambak
									order by fypakan.id_pakan DESC;");
		return $result;
	}

	public function countPakan($id){
		$this->db->select_sum('jmlhKg_pakan');
		$this->db->where("fypakan.id_tambak = '$id'");
		$this->db->where("fytambak.id_tambak = fypakan.id_tambak");
		$this->db->where("fytambak.id_penambak = fypakan.id_penambak");
		$result = $this->db->get('fypakan, fytambak')->row()->jmlhKg_pakan;
		return $result;
	}

	public function getDataIkan($id){
		$result = $this->db->query("select 
									fyikan.id_ikan, 
									fyikan.condition_ikan,
									fyikan.desc_ikan,
									fyikan.dead_ikan,
									fyikan.date_ikan
									from fyikan,fytambak
									where fyikan.id_tambak = '$id' 
									and fyikan.id_tambak = fytambak.id_tambak
									and fyikan.id_penambak = fytambak.id_penambak
									order by fyikan.id_ikan DESC;");
		return $result;
	}

	public function getKondisiIkan($id){
		/*
		$result = $this->db->query("select 
									condition_ikan
									from fyikan,fytambak
									where fyikan.id_tambak = '$id' 
									and fyikan.id_tambak = fytambak.id_tambak
									and fyikan.id_penambak = fytambak.id_penambak
									limit 1;");
		return $result;*/

		$this->db->select('condition_ikan');
		$this->db->where("fyikan.id_tambak = '$id'");
		$this->db->where("fyikan.id_tambak = fytambak.id_tambak");
		$result = $this->db->get('fyikan, fytambak');
		return $result;
	}

	public function getDataUang($id){
		$result = $this->db->query("select 
									fyuang.id_uang,
									fyuang.date_uang,
									fyuang.save_uang,
									fyuang.buy_uang,
									fyuang.desc_uang
									from fyuang, fytambak
									where fytambak.id_tambak = fyuang.id_tambak
									and fyuang.id_tambak = '$id'
									and fyuang.id_penambak = fytambak.id_penambak
									order by fyuang.id_uang DESC;");
		return $result;
	}

	//End of Investor-Model -------------------------------------------------------
	//5. Penambak - Model ---------------------------------------------------------
	public function getIdTambak($id_identitas){
		$this->db->select('id_tambak');
		$this->db->where("fytambak.id_penambak = '$id_identitas'");
		$result = $this->db->get('fytambak')->row()->id_tambak;
		return $result;
	}

	public function getTempInvestment($id_tambak){
		$this->db->select('temporaryInvestment');
		$this->db->where("fytambak.id_tambak = '$id_tambak'");
		$result = $this->db->get('fytambak')->row()->temporaryInvestment;
		return $result;
	}

	//End of Investor-Model -------------------------------------------------------
}

?>