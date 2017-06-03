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
	public function getDataInvestor($username){
		$result = $this->db->query("select * from fyidentitas where username = '$username'");
		return $result;
	}

	public function getDataTambak($username, $statusInvest){
		$result = $this->db->query("select 
									fytambak.nameTambak, 
									fytambak.pictureTambak, 
									fytambak.fishFarmer, 
									fytambak.pictureFishFarmer,
									fytambak.statusTambak,
									fytambak.location, 
									fyinvest.statusInvest, 
									fyinvest.money,
									fyinvest.id_invest,
									fyinvest.ordered, 
									fyinvest.expired
									from fytambak,fyinvest
									where fytambak.nameTambak = fyinvest.nameTambak
									and fyinvest.username = '$username'
									and fyinvest.statusInvest = '$statusInvest';");
		return $result;
	}

	public function getPilihTambak($username){
		$result = $this->db->query("select 
									fytambak.nameTambak, 
									fytambak.pictureTambak, 
									fytambak.fishFarmer, 
									fytambak.pictureFishFarmer,
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
									and fyinvest.username = '$username'
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
		$result = $this->db->query("select 
									fytambak.nameTambak, 
									fypakan.username,
									fypakan.report,
									fypakan.picturePakan,
									fypakan.kilogram
									from fytambak,fypakan
									where fytambak.nameTambak = fypakan.nameTambak
									and fytambak.statusTambak = 'A'
									and fypakan.nameTambak = '$id'
									order by fypakan.laporanHari;");
		return $result;
	}

	public function getDataIkan($id){
		$result = $this->db->query("select 
									fytambak.nameTambak, 
									fyikan.username,
									fyikan.reportDay,
									fyikan.totalFish
									from fytambak,fyikan
									where fytambak.nameTambak = fyikan.nameTambak
									and fytambak.statusTambak = 'A'
									and fyikan.nameTambak = '$id'
									order by fyikan.reportDay;");
		return $result;
	}

	public function getDataUang($id){
		$result = $this->db->query("select 
									fytambak.nameTambak, 
									fyuang.username,
									fyuang.reportDay,
									fyuang.deposit,
									fyuang.kredit,
									from fytambak,fyuang
									where fytambak.nameTambak = fyuang.nameTambak
									and fytambak.statusTambak = 'A'
									and fyuang.nameTambak = '$id'
									order by fyuang.reportDay;");
		return $result;
	}

	public function getDataProfit1($id, $limit, $start){
		$result = $this->db->query("select 
									fytambak.nameTambak, 
									fyinvest.username,
									fyinvest.ownership
									from fytambak,fyinvest
									where fyinvest.nameTambak = '$id'
									and fytambak.nameTambak = '$id'
									and fytambak.statusTambak = 'A'
									and fyinvest.statusInvest = 'A'
									order by fyinvest.username 
									limit '$start', '$limit';");
		return $result;
	}
	function getDataProfit($id, $limit, $start)
    {
        $sql = "select 
        		fytambak.nameTambak,
        		fyinvest.username,
        		fyinvest.ownership
        		from fytambak, fyinvest
        		where fyinvest.nameTambak = '$id'
        		and fytambak.nameTambak = '$id'
				and fytambak.statusTambak = 'A'
				and fyinvest.statusInvest = 'A'
        		order by fyinvest.username
        		limit $start, $limit;";
        $query = $this->db->query($sql);
        return $query->result();
    }
	//End of Investor-Model -------------------------------------------------------
}

?>