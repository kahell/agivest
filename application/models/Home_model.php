<?php
Class Home_model extends CI_Model{
	public function getData($tableName, $where){
		$result = $this->db->query("select * from $tableName $where");
		return $result;
	}		
	public function insertData($tableName, $data){
		$result = $this->db->insert($tableName, $data);
		return $result;
	}
	public function updateData($tableName, $data, $where){
		$result = $this->db->update($tableName, $data, $where);
		return $result;
	}
	public function deleteData($tableName, $where){
		$result = $this->db->delete($tableName, $where);
		return $result;
	}

	public function countUser(){
		$this->db->select('id_identitas');
		$result = $this->db->count_all_results('fyidentitas');
		return $result;
	}

	public function countLuas(){
		$this->db->select_sum('spaciousPond');
		$this->db->where("fytambak.statusTambak = 'A' and fyinvest.statusInvest = 'A' ");
		$result = $this->db->get('fytambak,fyinvest')->row()->spaciousPond;
		return $result;
	}

	public function countInvest(){
		$this->db->select_sum('money');
		$this->db->where("statusInvest = 'A'");
		$result = $this->db->get('fyinvest')->row()->money;
		return $result;
	}
	public function countPenambak(){
		$this->db->select('tukangNama');
		$result = $this->db->count_all_results('fytambak');
		return $result;
	}

	public function email($username){
		$result = $this->db->query("select email from fyidentitas where username = '$username'");
		return $result;
	}

	public function getMoney($tableName, $where){
		$result = $this->db->query("select * from $tableName $where");
		return $result;
	}

	public function updateTambak($fytambak, $uang){
		$result = $this->db->query("update fytambak set temporaryInvestment = '$uang' WHERE statusTambak = 'N' AND nameTambak = '$fytambak' ");
		return $result;
	}
}
?>