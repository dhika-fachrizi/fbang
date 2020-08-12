<?php
class Type_model extends CI_Model{

	function get_all_type(){
		$result = $this->db->get('tbl_type');
		return $result; 
	}

	function add_new_row($type){
		$data = array(
	        'type_name' => $type,
		);
		$this->db->insert('tbl_type', $data);
	}

	function edit_row($id,$type){
		$data = array(
	        'type_name' => $type
		);
		$this->db->where('type_id', $id);
		$this->db->update('tbl_type', $data);
	}

	function delete_row($id){
		$this->db->where('type_id', $id);
		$this->db->delete('tbl_type');
	}


}