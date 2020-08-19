<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_model extends CI_Model{
	
	function get_post_header(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	function get_post_header_2(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(2,1);
		$query = $this->db->get();
		return $query;
	}

	function get_post_header_3(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(3,3);
		$query = $this->db->get();
		return $query;
	}

	function get_latest_post(){
		$this->db->select('tbl_post.*, user_name, user_photo');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query;
	}

	function get_popular_post(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_views', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query;
	}

	function get_popular(){
		$this->db->select('*');
		$this->db->from('tbl_post');
		$this->db->order_by('post_views', 'DESC');
		$this->db->limit(4);
		$query = $this->db->get()->result_array();
		return $query;
	}

	function get_news_update(){
		$this->db->select('*');
		$this->db->from('tbl_post');
		$this->db->order_by('post_date', 'DESC');
		$this->db->limit(4);
		$query = $this->db->get()->result_array();
		return $query;
    }
    
    //..........................
	function get_news_detail($id){
		$this->db->select('*');
		$this->db->from('tbl_post');
		$this->db->where('post_id',$id);
		$query = $this->db->get()->row_array();
		return $query;
	}

    function get_user(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get()->row_array();
		return $query;
    }

    function get_popular_image(){
		$this->db->select('*');
		$this->db->from('tbl_post');
		$this->db->order_by('post_views', 'DESC');
		$this->db->limit(8);
		$query = $this->db->get()->result_array();
		return $query;
	}
    //.......................
	function checking_email($email){
		$query = $this->db->query("SELECT * FROM tbl_subscribe WHERE subscribe_email='$email'");
		return $query;
	}

	function save_subcribe($email){
		$query = $this->db->query("INSERT INTO tbl_subscribe (subscribe_email) VALUES ('$email')");
		return $query;
	}
	
	function count_views($kode){
        $user_ip=$_SERVER['REMOTE_ADDR'];
        $cek_ip=$this->db->query("SELECT * FROM tbl_post_views WHERE view_ip='$user_ip' AND view_post_id='$kode' AND DATE(view_date)=CURDATE()");
        if($cek_ip->num_rows() <= 0){
            $this->db->trans_start();
				$this->db->query("INSERT INTO tbl_post_views (view_ip,view_post_id) VALUES('$user_ip','$kode')");
				$this->db->query("UPDATE tbl_post SET post_views=post_views+1 where post_id='$kode'");
			$this->db->trans_complete();
			if($this->db->trans_status()==TRUE){
				return TRUE;
			}else{
				return FALSE;
			}
        }
    }

}