<?php
class Subcategory_model extends CI_Model
{

    public function get_all_subcategory()
    {
        $result = $this->db->query("SELECT *
		FROM tbl_subcategory c
		LEFT JOIN tbl_category t
		ON c.subcategory_category_id = t.category_id");
        return $result;
    }

    public function get_all_category_by_type($type)
    {
        $result = $this->db->query("SELECT *
		FROM tbl_category
        WHERE category_type_id = '${type}'"
        );
        return $result;
    }

    public function get_subcategory_by_category($category)
    {
        $this->db->select('*');
        $this->db->from('tbl_subcategory');
        $this->db->join('tbl_category', 'subcategory_category_id=category_id', 'left');
        $this->db->where('category_id', $category);
        $result = $this->db->get();
        return $result;
    }

    public function add_new_row($subcategory, $category)
    {
        $data = array(
            'subcategory_name' => $subcategory,
            'subcategory_category_id' => $category,
        );
        $this->db->insert('tbl_subcategory', $data);
    }

    public function edit_row($id, $subcategory, $category)
    {
        $data = array(
            'subcategory_name' => $subcategory,
            'subcategory_category_id' => $category,
        );
        $this->db->where('subcategory_id', $id);
        $this->db->update('tbl_subcategory', $data);
    }

    public function delete_row($id)
    {
        $this->db->where('subcategory_id', $id);
        $this->db->delete('tbl_subcategory');
    }

}