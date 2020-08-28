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

    public function get_more_exploler($id, $type, $tags)
    {
        $temp_like = [];
        $tags_array = explode(',', strtolower($tags));
        if (count($tags_array) > 3) {
            $loop = 3;
        } else {
            $loop = count($tags_array);
        }

        for ($i = 0; $i < $loop; $i++) {
            array_push($temp_like, array('post_tags' => $tags_array[$i]));
        }

        $this->db->from('tbl_post');
        $this->db->where('post_type_id', $type);
        $this->db->where('post_id !=', $id);
        $this->db->order_by('post_date', 'DESC');
        foreach ($temp_like as $item) {
            $this->db->like($item);
        }

        $query = $this->db->get()->result_array();
        if (count($query) < 5) {
            $query1 = $this->or_more_exploler($id, $type, $query, $tags_array);

            foreach ($query1 as $q1) {
                array_push($query, $q1);
            }
        }

        if (count($query) < 5) {
            $this->db->from('tbl_post');
            $this->db->where('post_type_id', $type);
            foreach ($query as $q) {
                $this->db->where('post_id !=', $q['post_id']);
            }

            $query2 = $this->db->get()->result_array();
            foreach ($query2 as $q2) {
                array_push($query, $q2);
            }
        }

        $res = [];
        for ($i = 0; $i < 4; $i++) {
            array_push($res, $query[$i]);
        }

        return $res;

    }

    public function or_more_exploler($id, $type, $q, $tags)
    {
        $query = "SELECT * FROM tbl_post WHERE post_type_id =${type} AND  post_id != ${id} ";
        if (count($q) > 0) {
            foreach ($q as $e) {
                $query .= " AND post_id !=" . $e['post_id'];
            }
        }

        if (count($tags) > 0) {
            $query .= " AND (";
            for ($i = 0; $i < count($tags); $i++) {
                if ($i == 0) {
                    $query .= "post_tags LIKE '%" . $tags[$i] . "' ";
                } else {
                    $query .= "OR post_tags LIKE '%" . $tags[$i] . "' ";
                }

            }
            $query .= ")";
        }

        $res = $this->db->query($query)->
            result_array();

        return $res;

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
        $this->db->join('tbl_user', 'post_user_id=user_id');
        $this->db->where('post_id', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

}