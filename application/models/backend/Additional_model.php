<?php
class Additional_model extends CI_Model
{

    public function get_all_additional()
    {
        $result = $this->db->query("SELECT *
		FROM tbl_additional c
		LEFT JOIN tbl_category t
		ON c.additional_category_id = t.category_id");
        return $result;
    }

    public function get_additional_by_category($category)
    {
        $this->db->select('*');
        $this->db->from('tbl_additional');
        $this->db->join('tbl_category', 'additional_category_id=category_id', 'left');
        $this->db->where('category_id', $category);
        $result = $this->db->get();
        return $result;
    }

    public function add_new_row($additional, $category)
    {
        $data = array(
            'additional_name' => $additional,
            'additional_category_id' => $category,

        );
        $this->db->insert('tbl_additional', $data);
    }

    public function edit_row($id, $additional, $category)
    {
        $data = array(
            'additional_name' => $additional,
            'additional_category_id' => $category,
        );
        $this->db->where('additional_id', $id);
        $this->db->update('tbl_additional', $data);
    }

    public function delete_row($id)
    {
        $this->db->where('additional_id', $id);
        $this->db->delete('tbl_additional');
    }

}