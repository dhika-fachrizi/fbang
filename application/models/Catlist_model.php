<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catlist_model extends CI_Model
{

    public function get_post_catlist($limit, $perpage)
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->where('post_type_id', 2);
        $this->db->where('post_category_id', 11);
        $this->db->join('tbl_detail_catlist', 'post_detail_id=detail_catlist_id');
        $this->db->join('tbl_city', 'post_city_id=city_id');
        $this->db->order_by('post_date', 'DESC');
        $this->db->limit($perpage, $limit);
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_post_by_slug($slug)
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->join('tbl_detail_catlist', 'post_detail_id=detail_catlist_id');
        $this->db->where('post_slug', $slug);
        $query = $this->db->get()->row_array();
        return $query;
    }

}