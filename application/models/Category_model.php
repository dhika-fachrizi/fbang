<?php

class Category_model extends CI_Model
{

    public function get_blog_by_category($slug)
    {
        $query = $this->db->query("SELECT tbl_post.*,tbl_category.*,user_name,user_photo FROM
			tbl_post LEFT JOIN tbl_category ON post_category_id=category_id
			LEFT JOIN tbl_user ON post_user_id=user_id WHERE category_slug='$slug'");
        return $query;
    }

    public function blog_category_perpage($category_id, $offset, $limit)
    {
        $query = $this->db->query("SELECT tbl_post.*,tbl_category.*,user_name,user_photo FROM
			tbl_post LEFT JOIN tbl_category ON post_category_id=category_id
			LEFT JOIN tbl_user ON post_user_id=user_id
			WHERE category_id='$category_id' LIMIT $offset,$limit");
        return $query;
    }

    public function get_category_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_category_by_slug($slug)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->join('tbl_type', 'category_type_id=type_id');
        $this->db->where('category_slug', $slug);
        $query = $this->db->get()->row_array();
        return $query;
    }
}