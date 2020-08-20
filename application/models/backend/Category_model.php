<?php
class Category_model extends CI_Model
{

    public function get_all_category()
    {
        $result = $this->db->query("SELECT *
		FROM tbl_category c
		LEFT JOIN tbl_type t
		ON c.category_type_id = t.type_id");
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

    public function add_new_row($type, $category, $slug)
    {
        $data = array(
            'category_type_id' => $type,
            'category_name' => $category,
            'category_slug' => $slug,

        );
        $this->db->insert('tbl_category', $data);
    }

    public function edit_row($id, $type, $category, $slug)
    {
        $data = array(
            'category_type_id' => $type,
            'category_name' => $category,
            'category_slug' => $slug,
        );
        $this->db->where('category_id', $id);
        $this->db->update('tbl_category', $data);
    }

    public function delete_row($id)
    {
        $this->db->where('category_id', $id);
        $this->db->delete('tbl_category');
    }

}