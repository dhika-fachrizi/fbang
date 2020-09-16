<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promo_model extends CI_Model
{

    public function get_post_promo($search, $city, $short, $limit, $perpage)
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->where('post_type_id', 6);
        $this->db->join('tbl_detail_promo', 'post_detail_id=detail_promo_id');
        $this->db->join('tbl_city', 'post_city_id=city_id');
        //WHERE `detail_promo_end` > CURRENT_DATE()

        $this->db->where("DATE_FORMAT(FROM_UNIXTIME(`detail_promo_end`), '%Y-%m-%d %H:%i:%s') > CURDATE()");
        if ($city != "" && $city != null) {
            $this->db->where('post_city_id', $city);
        }

        if ($search != "" && $search != null) {
            $dt_search = [
                'post_title' => $search,
                'post_description' => $search,
                'post_title' => $search,
            ];
            $this->db->like($dt_search);
        }

        if ($short != "" && $short != null) {
            $this->db->order_by('post_date', $short);
        } else {
            $this->db->order_by('post_date', 'DESC');
        }
        $this->db->limit($perpage, $limit);
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_post_by_slug($slug)
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->join('tbl_detail_promo', 'post_detail_id=detail_promo_id');
        $this->db->where('post_slug', $slug);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_promo_post()
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->where('post_type_id', 6);
        $this->db->order_by('post_date', 'DESC');
        $this->db->join('tbl_detail_promo', 'post_detail_id=detail_promo_id');
        $this->db->where("DATE_FORMAT(FROM_UNIXTIME(`detail_promo_end`), '%Y-%m-%d %H:%i:%s') > CURDATE()");
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_filter_city()
    {

        $this->db->select('*');
        $this->db->from('tbl_city');
        $this->db->order_by('city_name', 'ASC');
        $query = $this->db->get()->result();
        return $query;
    }

}