<?php
class Detail_category_model extends CI_Model
{

    public function get_all_post()
    {

        $result = $this->db->query('SELECT * FROM `tbl_detail_category` RIGHT OUTER JOIN tbl_category On detail_category_category_id = category_id');
        // print_r($result->result());
        // die();
        return $result;
    }

    public function get_post_by_id($post_id)
    {
        $result = $this->db->query('SELECT * FROM `tbl_detail_category` RIGHT OUTER JOIN tbl_category On detail_category_category_id = category_id WHERE detail_category_category_id = ' . $post_id . ' ');
        return $result;
    }

    public function save_post($title, $description, $image, $category, $meta_title, $meta_desc)
    {
        $data = array(
            'detail_category_title' => $title,
            'detail_category_desc' => $description,
            'detail_category_meta_title' => $meta_title,
            'detail_category_meta_desc' => $meta_desc,
            'detail_category_image' => $image,
            'detail_category_category_id' => $category,
        );
        $result = $this->db->insert('tbl_detail_category', $data);
        return $result;

    }

    public function edit_post_with_img($id, $title, $description, $image, $meta_title, $meta_desc)
    {
        $detail = array(
            'detail_category_title' => $title,
            'detail_category_desc' => $description,
            'detail_category_meta_title' => $meta_title,
            'detail_category_meta_desc' => $meta_desc,
            'detail_category_image' => $image,

        );
        $this->db->where('detail_category_category_id', $id);
        $result = $this->db->update('tbl_detail_category', $detail);

        return $result;

    }

    public function edit_post_no_img($id, $title, $description, $meta_title, $meta_desc)
    {
        $data = array(
            'detail_category_title' => $title,
            'detail_category_desc' => $description,
            'detail_category_meta_title' => $meta_title,
            'detail_category_meta_desc' => $meta_desc,
        );
        $this->db->where('detail_category_category_id', $id);
        $result = $this->db->update('tbl_detail_category', $data);

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
