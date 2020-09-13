<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catlist_model extends CI_Model
{

    public function get_post_catlist($type, $category, $get_city, $get_subcategory, $get_location, $get_halal, $get_additional, $short, $search, $limit, $perpage)
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->where('post_type_id', $type);
        $this->db->where('post_category_id', $category);
        if ($type == 2) {
            $this->db->join('tbl_detail_catlist', 'post_detail_id=detail_catlist_id');
        } else if ($type == 3) {
            $this->db->join('tbl_detail_umkm', 'post_detail_id=detail_umkm_id');
        } else if ($type == 4) {
            $this->db->join('tbl_detail_stfood', 'post_detail_id=detail_stfood_id');
        } else if ($type == 5) {
            $this->db->join('tbl_detail_hltfood', 'post_detail_id=detail_hltfood_id');
        }

        $this->db->join('tbl_city', 'post_city_id=city_id');

        if (is_array($get_city)) {
            $this->db->where_in('post_city_id', $get_city);
        }
        if (is_array($get_subcategory)) {
            $this->db->where_in('post_subcategory_id', $get_subcategory);
        }
        if (is_array($get_location)) {
            $this->db->where_in('post_location_id', $get_location);
        }
        if (is_array($get_halal)) {
            $this->db->where_in('post_halal_id', $get_halal);
        }
        if (is_array($get_additional)) {
            $this->db->where_in('post_additional_id', $get_additional);
        }

        if ($short != "" && $short != null) {
            $this->db->order_by('post_date', $short);
        } else {
            $this->db->order_by('post_date', 'DESC');
        }

        if ($search != "" && $search != null) {
            $dt_search = [
                'post_title' => $search,
                'post_description' => $search,
                'post_title' => $search,
            ];
            $this->db->like($dt_search);
        }

        $this->db->limit($perpage, $limit);
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_post_catlist_count($type, $category, $get_city, $get_subcategory, $get_location, $get_halal, $get_additional, $short, $search)
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->where('post_type_id', $type);
        $this->db->where('post_category_id', $category);
        if ($type == 2) {
            $this->db->join('tbl_detail_catlist', 'post_detail_id=detail_catlist_id');
        } else if ($type == 3) {
            $this->db->join('tbl_detail_umkm', 'post_detail_id=detail_umkm_id');
        } else if ($type == 4) {
            $this->db->join('tbl_detail_stfood', 'post_detail_id=detail_stfood_id');
        } else if ($type == 5) {
            $this->db->join('tbl_detail_hltfood', 'post_detail_id=detail_hltfood_id');
        }
        $this->db->join('tbl_city', 'post_city_id=city_id');

        if (is_array($get_city)) {
            $this->db->where_in('post_city_id', $get_city);
        }
        if (is_array($get_subcategory)) {
            $this->db->where_in('post_subcategory_id', $get_subcategory);
        }
        if (is_array($get_location)) {
            $this->db->where_in('post_location_id', $get_location);
        }
        if (is_array($get_halal)) {
            $this->db->where_in('post_halal_id', $get_halal);
        }
        if (is_array($get_additional)) {
            $this->db->where_in('post_additional_id', $get_additional);
        }

        if ($short != "" && $short != null) {
            $this->db->order_by('post_date', $short);
        } else {
            $this->db->order_by('post_date', 'DESC');
        }

        if ($search != "" && $search != null) {
            $dt_search = [
                'post_title' => $search,
                'post_description' => $search,
                'post_title' => $search,
            ];
            $this->db->like($dt_search);
        }
        $query = $this->db->count_all_results();
        return $query;
    }

    public function get_post_by_slug($slug)
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->join('tbl_category', 'post_category_id=category_id');
        $this->db->where('post_slug', $slug);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_post_dynamic($id, $type, $category)
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        if ($type == 2) {
            $this->db->join('tbl_detail_catlist', 'post_detail_id=detail_catlist_id');
        } else if ($type == 3) {
            $this->db->join('tbl_detail_umkm', 'post_detail_id=detail_umkm_id');
        } else if ($type == 4) {
            $this->db->join('tbl_detail_stfood', 'post_detail_id=detail_stfood_id');
        } else if ($type == 5) {
            $this->db->join('tbl_detail_hltfood', 'post_detail_id=detail_hltfood_id');
        }
        $this->db->join('tbl_category', 'post_category_id=category_id');
        $this->db->where('post_id', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_filter_category($category)
    {
        $this->db->select('*');
        $this->db->from('tbl_subcategory');
        $this->db->join('tbl_category', 'subcategory_category_id=category_id');
        $this->db->order_by('subcategory_name', 'ASC');
        $this->db->where('category_id', $category);
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_filter_city($category)
    {
        $this->db->select('p.post_city_id,c.city_name');
        $this->db->distinct();
        $this->db->from('tbl_post p');
        $this->db->join('tbl_city c', 'p.post_city_id=c.city_id');
        $this->db->order_by('city_name', 'ASC');
        $this->db->where('post_category_id', $category);
        $query = $this->db->get()->result();
        // print_r($query);
        // die();
        return $query;
    }

    public function get_filter_location($category)
    {
        $this->db->select('*');
        $this->db->from('tbl_location');
        $this->db->join('tbl_category', 'location_category_id=category_id');
        $this->db->order_by('location_name', 'ASC');
        $this->db->where('category_id', $category);
        $query = $this->db->get()->result();

        return $query;
    }

    public function get_filter_additional($category)
    {
        $this->db->select('*');
        $this->db->from('tbl_additional');
        $this->db->join('tbl_category', 'additional_category_id=category_id');
        $this->db->order_by('additional_name', 'ASC');
        $this->db->where('category_id', $category);
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_other_name_type($type)
    {
        switch ($type) {
            case 1:
                $result = 'news';
                break;
            case 2:
                $result = 'catlist';
                break;
            case 3:
                $result = 'umkm';
                break;
            case 4:
                $result = 'hltfood';
                break;
            case 5:
                $result = 'stfood';
                break;
            case 6:
                $result = 'promo';
                break;

            default:
                $result = 'home';
                break;
        }
        return $result;
    }

}
