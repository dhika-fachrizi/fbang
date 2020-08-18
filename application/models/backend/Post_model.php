<?php
class Post_model extends CI_Model{

	//BACKEND
	function get_all_post(){
		$result = $this->db->query("SELECT post_id,post_title,post_image,DATE_FORMAT(post_date,'%d %M %Y') AS post_date,category_name,post_tags,post_status,post_views FROM tbl_post JOIN tbl_category ON post_category_id=category_id");
		return $result;
	}

	function get_post_by_id($post_id){
		$result = $this->db->query("SELECT * FROM tbl_post WHERE post_id='$post_id'");
		return $result;
	}

	function save_post($title,$contents,$type,$category,$slug,$city,$location,$halal,$additional,$image,$tags,$description){
		$data = array(
	        'post_title' 	   => $title,
	        'post_description' => $description,
	        'post_contents'    => $contents,
			'post_image' 	   => $image,
			'post_type_id' 	   => $type,
	        'post_category_id' => $category,
	        'post_tags' 	   => $tags,   
	        'post_city_id' 	   => $city,   
	        'post_location_id'	 => $location,   
	        'post_halal_id'		 => $halal,   
	        'post_additional_id' => $additional,   
	        'post_slug' 	   => $slug,
	        'post_status' 	   => 1,
	        'post_user_id'	   => $this->session->userdata('id')
		);
		$this->db->insert('tbl_post', $data);
	}

	function edit_post_with_img($id,$title,$contents,$type,$category,$slug,$city,$location,$halal,$additional,$image,$tags,$description){
		$result = $this->db->query("UPDATE tbl_post SET post_title='$title',post_description='$description',post_contents='$contents',post_image='$image',post_last_update=NOW(),post_type_id='$type',post_category_id='$category',post_tags='$tags',post_slug='$slug',post_city_id='$city',post_location_id='$location',post_location_id='$location',post_halal_id='$halal',post_additional_id='$additional' WHERE post_id='$id'");
		return $result;
	}

	function edit_post_no_img($id,$title,$contents,$type,$category,$slug,$city,$location,$halal,$additional,$tags,$description){
		$result = $this->db->query("UPDATE tbl_post SET post_title='$title',post_description='$description',post_contents='$contents',post_last_update=NOW(),post_type_id='$type',post_category_id='$category',post_tags='$tags',post_slug='$slug',post_city_id='$city',post_location_id='$location',post_halal_id='$halal',post_additional_id='$additional' WHERE post_id='$id'");
		return $result;
	}

	function delete_post($post_id){
		$this->db->where('post_id', $post_id);
		$this->db->delete('tbl_post');
	}
	
	//END BACKEND

}