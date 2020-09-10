<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email_model extends CI_Model
{
    public function get_status_email()
    {
        $this->db->select('*');
        $this->db->where('email_news_update', 1);
        $this->db->where('post_date >=', date('Y-m-d 00:00:00'));
        $query = $this->db->get('tbl_post')->result_array();
        return $query;
    }

    public function update_status_email()
    {
        $this->db->set('email_news_update', 0);
        $this->db->where('email_news_update', 1);
        $this->db->where('post_date >=', date('Y-m-d 00:00:00'));
        $this->db->order_by('post_date', 'dsc');
        $this->db->limit(5);
        $this->db->update('tbl_post');
        return false;
    }
}
