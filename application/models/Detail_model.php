<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_model extends CI_Model
{

    public function get_post_header()
    {
        $this->db->select('tbl_post.*, user_name');
        $this->db->from('tbl_post');
        $this->db->join('tbl_user', 'post_user_id=user_id', 'left');
        $this->db->order_by('post_id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }

    public function get_post_header_2()
    {
        $this->db->select('tbl_post.*, user_name');
        $this->db->from('tbl_post');
        $this->db->join('tbl_user', 'post_user_id=user_id', 'left');
        $this->db->order_by('post_id', 'DESC');
        $this->db->limit(2, 1);
        $query = $this->db->get();
        return $query;
    }

    public function get_post_header_3()
    {
        $this->db->select('tbl_post.*, user_name');
        $this->db->from('tbl_post');
        $this->db->join('tbl_user', 'post_user_id=user_id', 'left');
        $this->db->order_by('post_id', 'DESC');
        $this->db->limit(3, 3);
        $query = $this->db->get();
        return $query;
    }

    public function get_latest_post()
    {
        $this->db->select('tbl_post.*, user_name, user_photo');
        $this->db->from('tbl_post');
        $this->db->join('tbl_user', 'post_user_id=user_id', 'left');
        $this->db->order_by('post_id', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get();
        return $query;
    }

    public function get_popular_post()
    {
        $this->db->select('tbl_post.*, user_name');
        $this->db->from('tbl_post');
        $this->db->join('tbl_user', 'post_user_id=user_id', 'left');
        $this->db->order_by('post_views', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query;
    }

    public function get_popular()
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->order_by('post_views', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_news_update()
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->order_by('post_date', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get()->result_array();
        return $query;
    }
    ///
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

        if (count($query) < 5) {
            $this->db->from('tbl_post');
            $this->db->order_by('post_date', 'DESC');
            $this->db->where_not_in('post_type_id', array(1, 6));
            $this->db->where('post_id !=', $id);
            foreach ($query as $q) {
                $this->db->where('post_id !=', $q['post_id']);
            }

            $query3 = $this->db->get()->result_array();
            foreach ($query3 as $q3) {
                array_push($query, $q3);
            }
        }

        // print_r($query);
        // die();

        $res = [];
        if (count($query) > 5) {
            for ($i = 0; $i < 4; $i++) {
                array_push($res, $query[$i]);
            }
        } else if(!empty($query)){
            for ($i = 0; $i < count($query); $i++) {
                array_push($res, $query[$i]);
            }
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

    //..........................
    public function get_news_detail($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->where('post_id', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_user()
    {
        $this->db->select('tbl_post.*, user_name');
        $this->db->from('tbl_post');
        $this->db->join('tbl_user', 'post_user_id=user_id', 'left');
        $this->db->order_by('post_id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_popular_image()
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->order_by('post_views', 'DESC');
        $this->db->limit(8);
        $query = $this->db->get()->result_array();
        return $query;
    }
    //.......................
    public function checking_email($email)
    {
        $query = $this->db->query("SELECT * FROM tbl_subscribe WHERE subscribe_email='$email'");
        return $query;
    }

    public function save_subcribe($email)
    {
        $query = $this->db->query("INSERT INTO tbl_subscribe (subscribe_email) VALUES ('$email')");
        return $query;
    }

    public function count_views($kode)
    {
        $user_ip = $_SERVER['REMOTE_ADDR'];
        $cek_ip = $this->db->query("SELECT * FROM tbl_post_views WHERE view_ip='$user_ip' AND view_post_id='$kode' AND DATE(view_date)=CURDATE()");
        if ($cek_ip->num_rows() <= 0) {
            $this->db->trans_start();
            $this->db->query("INSERT INTO tbl_post_views (view_ip,view_post_id) VALUES('$user_ip','$kode')");
            $this->db->query("UPDATE tbl_post SET post_views=post_views+1 where post_id='$kode'");
            $this->db->trans_complete();
            if ($this->db->trans_status() == true) {
                return true;
            } else {
                return false;
            }
        }
    }

}
