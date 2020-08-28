<?php
class Location_model extends CI_Model
{

    public function get_all_location()
    {
        $this->db->select('*');
        $this->db->from('tbl_location');
        $this->db->join('tbl_category', 'location_category_id=category_id', 'left');
        // $this->db->order_by('post_date', 'DESC');
        $result = $this->db->get();
        return $result;
    }

    public function get_location_by_category($category)
    {
        $this->db->select('*');
        $this->db->from('tbl_location');
        $this->db->join('tbl_category', 'location_category_id=category_id', 'left');
        $this->db->where('category_id', $category);
        $result = $this->db->get();
        return $result;
    }

    public function add_new_row($location, $category)
    {
        $data = array(
            'location_name' => $location,
            'location_category_id' => $category,
        );
        $this->db->insert('tbl_location', $data);
    }

    public function edit_row($id, $location, $category)
    {
        $data = array(
            'location_name' => $location,
            'location_category_id' => $category,
        );
        $this->db->where('location_id', $id);
        $this->db->update('tbl_location', $data);
    }

    public function delete_row($id)
    {
        $this->db->where('location_id', $id);
        $this->db->delete('tbl_location');
    }

}