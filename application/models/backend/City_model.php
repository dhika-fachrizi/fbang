<?php
class City_model extends CI_Model
{

    public function get_all_city()
    {
        $this->db->order_by('city_name', 'ASC');
        $result = $this->db->get('tbl_city');
        return $result;
    }

    public function add_new_row($city)
    {
        $data = array(
            'city_name' => $city,
        );
        $this->db->insert('tbl_city', $data);
    }

    public function edit_row($id, $city)
    {
        $data = array(
            'city_name' => $city,
        );
        $this->db->where('city_id', $id);
        $this->db->update('tbl_city', $data);
    }

    public function delete_row($id)
    {
        $this->db->where('city_id', $id);
        $this->db->delete('tbl_city');
    }

}