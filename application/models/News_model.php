<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News_model extends CI_Model
{

    public function get_post_news($limit, $perpage)
    {
        $this->db->from('tbl_post');
        $this->db->where('post_type_id', 1);
        $this->db->order_by('post_date', 'DESC');
        $this->db->limit($perpage, $limit);
        $query = $this->db->get();
        return $query;
    }

    public function get_post_news_count()
    {
        $this->db->from('tbl_post');
        $this->db->where('post_type_id', 1);
        $this->db->order_by('post_date', 'DESC');

        $query = $this->db->count_all_results();
        return $query;
    }

    public function get_news_detail($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->join('tbl_detail_news', 'post_detail_id=detail_news_id');
        $this->db->where('post_id', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

}