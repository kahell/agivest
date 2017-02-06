<?php
Class Admin_model extends CI_Model{
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
	public function getDataTable($tableName){
		$result = $this->db->get($tableName);
		return $result;
	}
	public function getDataInvoice(){
		$result = $this->db->get("fyinvest");
		return $result;
	}
	public function countTable($tableName, $id){
		$this->db->select($id);
		$result = $this->db->count_all_results($tableName);
		return $result;
	}
}
?>