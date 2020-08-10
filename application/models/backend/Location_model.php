<?php
class Location_model extends CI_Model{

	function get_all_location(){
		$result = $this->db->get('tbl_location');
		return $result; 
	}

	function add_new_row($location){
		$data = array(
	        'location_name' => $location,
		);
		$this->db->insert('tbl_location', $data);
	}

	function edit_row($id,$location){
		$data = array(
	        'location_name' => $location
		);
		$this->db->where('location_id', $id);
		$this->db->update('tbl_location', $data);
	}

	function delete_row($id){
		$this->db->where('location_id', $id);
		$this->db->delete('tbl_location');
	}


}