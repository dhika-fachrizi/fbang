<?php

class Tag_model extends CI_Model
{

	function get_blog_by_tags($tag, $category)
	{
		if ($category) {
		$this->db->select('*');
        $this->db->from('tbl_post');
		$this->db->from('tbl_post');
		$this->db->like('post_tags', '%$tag%');
        $this->db->where('post_category_id', $category);
        
        if (is_array($category)) {
			$this->db->where_in('post_category_id', $category);
		}
		} else {
			$query = $this->db->query("SELECT tbl_post.*,user_name,user_photo FROM tbl_post
			LEFT JOIN tbl_user ON post_user_id=user_id
			WHERE post_tags LIKE '%$tag%'");
		}
		
		return $query;
	}

	function blog_tags_perpage($tag, $offset, $limit)
	{
		$query = $this->db->query("SELECT tbl_post.*,user_name,user_photo FROM tbl_post
			LEFT JOIN tbl_user ON post_user_id=user_id
			WHERE post_tags LIKE '%$tag%' LIMIT $offset,$limit");
		return $query;
	}
}
