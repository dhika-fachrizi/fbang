<?php
class Email_model extends CI_Model
{

    function get_news_update()
    {
        $query = $this->db->query("SELECT * FROM tbl_post WHERE email_news_update = 1 ");
        return $query;
    }
}
