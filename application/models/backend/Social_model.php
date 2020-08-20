<?php
class Social_model extends CI_Model
{

    //BACKEND
    public function get_social()
    {
        $result = $this->db->query("SELECT * FROM tbl_social");
        return $result;
    }

    //END BACKEND

}