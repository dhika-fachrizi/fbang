<?php
class Availability_model extends CI_Model
{

    //BACKEND
    public function get_availability()
    {
        $result = $this->db->query("SELECT * FROM tbl_availability");
        return $result;
    }

    //END BACKEND

}