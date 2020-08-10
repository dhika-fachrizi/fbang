<?php
class City_model extends CI_Model{

	function get_all_city(){
		$result = $this->db->get('tbl_city');
		return $result; 
	}

	function add_new_row($city){
		$data = array(
	        'city_name' => $city,
		);
		$this->db->insert('tbl_city', $data);
	}

	function edit_row($id,$city){
		$data = array(
	        'city_name' => $city
		);
		$this->db->where('city_id', $id);
		$this->db->update('tbl_city', $data);
	}

	function delete_row($id){
		$this->db->where('city_id', $id);
		$this->db->delete('tbl_city');
	}


}