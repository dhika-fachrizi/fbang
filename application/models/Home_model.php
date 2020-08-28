<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
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

    public function get_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query = $this->db->get();
        return $query->result_array();
    }
//.....................
    public function get_popular()
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->order_by('post_views', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get()->result_array();
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

    public function get_feature_article()
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->order_by('post_date', 'DESC');
        $this->db->where('post_feature_article = 1');
        $this->db->limit(4);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_news_update()
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->order_by('post_date', 'DESC');
        $this->db->where('post_type_id = 1');
        $this->db->limit(8);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_4_future_article()
    {
        $result = $this->db->query("SELECT * FROM tbl_post JOIN tbl_future_article ON tbl_post.post_id = tbl_future_article.post_id where tbl_future_article.id > 1");
        return $result->result_array();
    }
    public function slot1()
    {
        $result = $this->db->query("SELECT * FROM tbl_post JOIN tbl_future_article ON tbl_post.post_id = tbl_future_article.post_id where tbl_future_article.id = 1");
        return $result->row_array();
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

    public function search_blog($query)
    {
        $result = $this->db->query("SELECT tbl_post.*,user_name,user_photo FROM tbl_post
			LEFT JOIN tbl_user ON post_user_id=user_id
			LEFT JOIN tbl_category ON post_category_id=category_id
			WHERE post_title LIKE '%$query%' OR category_name LIKE '%$query%' OR post_tags LIKE '%$query%' LIMIT 12");
        return $result->result_array();
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

    public function get_post_by_slug($slug)
    {
        $query = $this->db->query("SELECT tbl_post.*,user_name,COUNT(comment_id) AS comment_total,tbl_category.* FROM tbl_post
			LEFT JOIN tbl_user ON post_user_id=user_id
			LEFT JOIN tbl_comment ON post_id=comment_post_id
			LEFT JOIN tbl_category ON post_category_id=category_id
			WHERE post_slug='$slug' GROUP BY post_id LIMIT 1");
        return $query->row_array();
    }

}