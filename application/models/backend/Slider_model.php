<?php
class Slider_model extends CI_Model
{

    public function get_all_post()
    {
        $this->db->from('tbl_slider');
        $this->db->order_by('slider_order', 'ASC');
        $result = $this->db->get();
        return $result;
    }

    public function get_post_by_id($post_id)
    {
        $this->db->from('tbl_slider');
        $this->db->where('slider_id', $post_id);
        $result = $this->db->get();
        return $result;
    }

    public function save_post($title, $description, $image, $link, $order)
    {
        $data = array(
            'slider_title' => $title,
            'slider_desc' => $description,
            'slider_image' => $image,
            'slider_link' => $link,
            'slider_order' => $order,
        );
        $result = $this->db->insert('tbl_slider', $data);
        return $result;

    }

    public function edit_post_with_img($id, $title, $description, $image, $link, $order)
    {
        $detail = array(
            'slider_title' => $title,
            'slider_desc' => $description,
            'slider_image' => $image,
            'slider_link' => $link,
            'slider_order' => $order,

        );
        $this->db->where('slider_id', $id);
        $result = $this->db->update('tbl_slider', $detail);

        return $result;

    }

    public function edit_post_no_img($id, $title, $description, $link, $order)
    {
        $data = array(
            'slider_title' => $title,
            'slider_desc' => $description,
            'slider_link' => $link,
            'slider_order' => $order,

        );
        $this->db->where('slider_id', $id);
        $result = $this->db->update('tbl_slider', $data);

        return $result;

    }

    public function delete_post($id)
    {
        $this->db->where('slider_id', $id);
        $result = $this->db->delete('tbl_slider');
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