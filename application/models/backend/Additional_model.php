<?php
class Additional_model extends CI_Model{

	function get_all_additional(){
		$result = $this->db->get('tbl_additional');
		return $result; 
	}

	function add_new_row($additional){
		$data = array(
	        'additional_name' => $additional,
		);
		$this->db->insert('tbl_additional', $data);
	}

	function edit_row($id,$additional){
		$data = array(
	        'additional_name' => $additional
		);
		$this->db->where('additional_id', $id);
		$this->db->update('tbl_additional', $data);
	}

	function delete_row($id){
		$this->db->where('additional_id', $id);
		$this->db->delete('tbl_additional');
	}


}