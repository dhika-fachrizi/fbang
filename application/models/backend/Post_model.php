<?php
class Post_model extends CI_Model
{

    //BACKEND
    public function get_all_post()
    {
        $result = $this->db->query("SELECT post_id,post_type_id,post_title,post_image,DATE_FORMAT(post_date,'%d %M %Y') AS post_date,category_name,post_tags,post_status,post_views FROM tbl_post LEFT JOIN tbl_category ON post_category_id=category_id");
        // print_r($result->result());
        // die();
        return $result;
    }

    public function get_post_by_id($post_id)
    {
        $result = $this->db->query("SELECT * FROM tbl_post WHERE post_id='$post_id'");
        return $result;
    }
    public function get_news_post_by_id($post_id)
    {
        $result = $this->db->query("SELECT * FROM tbl_post p left JOIN tbl_detail_news c ON p.post_detail_id = c.detail_news_id WHERE post_id='$post_id'");
        return $result;
    }

    public function get_catlist_post_by_id($post_id)
    {
        $result = $this->db->query("SELECT * FROM tbl_post p left JOIN tbl_detail_catlist c ON p.post_detail_id = c.detail_catlist_id WHERE post_id='$post_id'");
        return $result;
    }

    public function get_promo_post_by_id($post_id)
    {
        $result = $this->db->query("SELECT * FROM tbl_post p left JOIN tbl_detail_promo c ON p.post_detail_id = c.detail_promo_id WHERE post_id='$post_id'");
        return $result;
    }

    public function save_post($title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image, $tags, $description, $detail_id, $news_name, $phone, $address, $availability, $social)
    {
        $data = array(
            'post_title' => $title,
            'post_description' => $description,
            'post_contents' => $contents,
            'post_image' => $image,
            'post_type_id' => $type,
            'post_category_id' => $category,
            'post_subcategory_id' => $subcategory,
            'post_tags' => $tags,
            'post_city_id' => $city,
            'post_location_id' => $location,
            'post_halal_id' => $halal,
            'post_additional_id' => $additional,
            'post_slug' => $slug,
            'post_status' => 1,
            'post_user_id' => $this->session->userdata('id'),
            'post_detail_id ' => $detail_id,
        );

        $detail = array(
            'detail_news_id' => $detail_id,
            'detail_news_name' => $news_name,
            'detail_news_availability' => $availability,
            'detail_news_social' => $social,
            'detail_news_address' => $address,
            'detail_news_phone' => $phone,
            'detail_news_gmaps' => '[]',
        );
        $this->db->insert('tbl_post', $data);
        $this->db->insert('tbl_detail_news', $detail);

    }

    public function save_catlist_post($title, $contents, $type, $category, $slug, $city, $location, $halal, $additional, $image, $tags, $description, $detail_id, $catlist_name, $phone, $address, $availability, $social)
    {
        $data = array(
            'post_title' => $title,
            'post_description' => $description,
            'post_contents' => $contents,
            'post_image' => $image,
            'post_type_id' => $type,
            'post_category_id' => $category,
            'post_tags' => $tags,
            'post_city_id' => $city,
            'post_location_id' => $location,
            'post_halal_id' => $halal,
            'post_additional_id' => $additional,
            'post_slug' => $slug,
            'post_status' => 1,
            'post_user_id' => $this->session->userdata('id'),
            'post_detail_id ' => $detail_id,
        );

        $detail = array(
            'detail_catlist_id' => $detail_id,
            'detail_catlist_name' => $catlist_name,
            'detail_catlist_availability' => $availability,
            'detail_catlist_social' => $social,
            'detail_catlist_address' => $address,
            'detail_catlist_phone' => $phone,
            'detail_catlist_gmaps' => '[]',
        );
        $this->db->insert('tbl_post', $data);
        $this->db->insert('tbl_detail_catlist', $detail);

    }

    public function save_promo_post($title, $contents, $type, $category, $slug, $city, $image, $tags, $description, $detail_id, $promo_name, $short_desc, $address, $time, $start, $end)
    {
        // print_r($start);
        // print_r($and);
        // die();
        $data = array(
            'post_title' => $title,
            'post_description' => $description,
            'post_contents' => $contents,
            'post_image' => $image,
            'post_type_id' => $type,
            'post_category_id' => $category,
            'post_tags' => $tags,
            'post_city_id' => $city,
            'post_slug' => $slug,
            'post_status' => 1,
            'post_user_id' => $this->session->userdata('id'),
            'post_detail_id ' => $detail_id,
        );

        $detail = array(
            'detail_promo_id' => $detail_id,
            'detail_promo_name' => $promo_name,
            'detail_promo_short_desc' => $short_desc,
            'detail_promo_address' => $address,
            'detail_promo_time' => $time,
            'detail_promo_start' => strtotime($start),
            'detail_promo_end' => strtotime($end),
            'detail_promo_created_at' => time(),
            'detail_promo_update_at' => time(),
        );
        $this->db->insert('tbl_post', $data);
        $this->db->insert('tbl_detail_promo', $detail);

    }

    public function edit_post_with_img($id, $title, $contents, $type, $category, $slug, $city, $location, $halal, $additional, $image, $tags, $description, $detail_id, $news_name, $phone, $address, $availability, $social)
    {
        $data = array(
            'post_title' => $title,
            'post_description' => $description,
            'post_contents' => $contents,
            'post_image' => $image,
            'post_type_id' => $type,
            'post_category_id' => $category,
            'post_tags' => $tags,
            'post_city_id' => $city,
            'post_location_id' => $location,
            'post_halal_id' => $halal,
            'post_additional_id' => $additional,
            'post_slug' => $slug,
            'post_status' => 1,
            'post_user_id' => $this->session->userdata('id'),
        );

        $this->db->where('post_id', $id);
        $this->db->update('tbl_post', $data);

        $detail = array(
            'detail_news_name' => $news_name,
            'detail_news_availability' => $availability,
            'detail_news_social' => $social,
            'detail_news_address' => $address,
            'detail_news_phone' => $phone,
            'detail_news_gmaps' => '',
        );

        $this->db->where('detail_news_id', $detail_id);
        $result = $this->db->update('tbl_detail_news', $detail);

        return $result;
    }

    public function edit_post_no_img($id, $title, $contents, $type, $category, $slug, $city, $location, $halal, $additional, $tags, $description, $detail_id, $news_name, $phone, $address, $availability, $social)
    {

        $data = array(
            'post_title' => $title,
            'post_description' => $description,
            'post_contents' => $contents,
            'post_type_id' => $type,
            'post_category_id' => $category,
            'post_tags' => $tags,
            'post_city_id' => $city,
            'post_location_id' => $location,
            'post_halal_id' => $halal,
            'post_additional_id' => $additional,
            'post_slug' => $slug,
            'post_status' => 1,
            'post_user_id' => $this->session->userdata('id'),
        );

        $this->db->where('post_id', $id);
        $this->db->update('tbl_post', $data);

        $detail = array(
            'detail_news_name' => $news_name,
            'detail_news_availability' => $availability,
            'detail_news_social' => $social,
            'detail_news_address' => $address,
            'detail_news_phone' => $phone,
            'detail_news_gmaps' => '',
        );

        $this->db->where('detail_news_id', $detail_id);
        $result = $this->db->update('tbl_detail_news', $detail);
    }

    public function edit_post_catlist_with_img($id, $title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image, $tags, $description, $detail_id, $catlist_name, $phone, $address, $availability, $social)
    {
        $data = array(
            'post_title' => $title,
            'post_description' => $description,
            'post_contents' => $contents,
            'post_image' => $image,
            'post_type_id' => $type,
            'post_category_id' => $category,
            'post_subcategory_id' => $subcategory,
            'post_tags' => $tags,
            'post_city_id' => $city,
            'post_location_id' => $location,
            'post_halal_id' => $halal,
            'post_additional_id' => $additional,
            'post_slug' => $slug,
            'post_status' => 1,
            'post_user_id' => $this->session->userdata('id'),
        );

        $this->db->where('post_id', $id);
        $this->db->update('tbl_post', $data);

        $detail = array(
            'detail_catlist_name' => $catlist_name,
            'detail_catlist_availability' => $availability,
            'detail_catlist_social' => $social,
            'detail_catlist_address' => $address,
            'detail_catlist_phone' => $phone,
            'detail_catlist_gmaps' => '',
        );

        $this->db->where('detail_catlist_id', $detail_id);
        $result = $this->db->update('tbl_detail_catlist', $detail);

        return $result;

    }

    public function edit_post_catlist_no_img($id, $title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $tags, $description, $detail_id, $catlist_name, $phone, $address, $availability, $social)
    {
        $data = array(
            'post_title' => $title,
            'post_description' => $description,
            'post_contents' => $contents,
            'post_type_id' => $type,
            'post_category_id' => $category,
            'post_subcategory_id' => $subcategory,
            'post_tags' => $tags,
            'post_city_id' => $city,
            'post_location_id' => $location,
            'post_halal_id' => $halal,
            'post_additional_id' => $additional,
            'post_slug' => $slug,
            'post_status' => 1,
            'post_user_id' => $this->session->userdata('id'),
        );

        $this->db->where('post_id', $id);
        $this->db->update('tbl_post', $data);

        $detail = array(
            'detail_catlist_name' => $catlist_name,
            'detail_catlist_availability' => $availability,
            'detail_catlist_social' => $social,
            'detail_catlist_address' => $address,
            'detail_catlist_phone' => $phone,
            'detail_catlist_gmaps' => '',
        );

        $this->db->where('detail_catlist_id', $detail_id);
        $result = $this->db->update('tbl_detail_catlist', $detail);
        return $result;
    }

    public function edit_post_promo_with_img($id, $title, $contents, $type, $category, $slug, $city, $image, $tags, $description, $detail_id, $promo_name, $short_desc, $address, $time, $start, $end)
    {
        $data = array(
            'post_title' => $title,
            'post_description' => $description,
            'post_contents' => $contents,
            'post_image' => $image,
            'post_type_id' => $type,
            'post_category_id' => $category,
            'post_tags' => $tags,
            'post_city_id' => $city,
            'post_slug' => $slug,
            'post_status' => 1,
            'post_user_id' => $this->session->userdata('id'),
        );

        $this->db->where('post_id', $id);
        $this->db->update('tbl_post', $data);

        $detail = array(

            'detail_promo_name' => $promo_name,
            'detail_promo_short_desc' => $short_desc,
            'detail_promo_address' => $address,
            'detail_promo_time' => $time,
            'detail_promo_start' => strtotime($start),
            'detail_promo_end' => strtotime($end),
            'detail_promo_update_at' => time(),
        );

        $this->db->where('detail_promo_id', $detail_id);
        $result = $this->db->update('tbl_detail_promo', $detail);

        return $result;

    }

    public function edit_post_promo_no_img($id, $title, $contents, $type, $category, $slug, $city, $location, $halal, $additional, $tags, $description, $detail_id, $promo_name, $short_desc, $address, $time, $start, $end)
    {

        // print_r($and);

        $data = array(
            'post_title' => $title,
            'post_description' => $description,
            'post_contents' => $contents,

            'post_type_id' => $type,
            'post_category_id' => $category,
            'post_tags' => $tags,
            'post_city_id' => $city,
            'post_slug' => $slug,
            'post_status' => 1,
            'post_user_id' => $this->session->userdata('id'),
        );

        $detail = array(

            'detail_promo_name' => $promo_name,
            'detail_promo_short_desc' => $short_desc,
            'detail_promo_address' => $address,
            'detail_promo_time' => $time,
            'detail_promo_start' => strtotime($start),
            'detail_promo_end' => strtotime($end),
            'detail_promo_update_at' => time(),
        );

        print_r($detail);

        $this->db->where('post_id', $id);
        $this->db->update('tbl_post', $data);
        $this->db->where('detail_promo_id', $detail_id);
        $result = $this->db->update('tbl_detail_promo', $detail);

        return $result;

    }

    public function delete_post($post_id)
    {
        $this->db->where('post_id', $post_id);
        $this->db->delete('tbl_post');
    }

    public function datadummy2()
    {
        return "true";
    }

    public function save_tags_post($tags)
    {

        $tags_array = explode(',', strtolower($tags));
        $this->db->from('tbl_tags');
        $this->db->where_in('tag_name', $tags_array);

        $db_tags_query = $this->db->get();

        $data_temp = $db_tags_query->result_array();
        // print_r($data_temp);

        $new_array_tags = array();

        foreach ($data_temp as $dt) {
            array_push($new_array_tags, strtolower($dt['tag_name']));
        }

        $data_insert_db = array();

        foreach ($tags_array as $t) {

            if (!in_array($t, $new_array_tags)) {
                $data_t = array("tag_name" => $t);
                array_push($data_insert_db, $data_t);
            }

        }

        if (count($data_insert_db) > 1) {
            die("atas");
            $this->db->insert_batch('tbl_tags', $data_insert_db);
        } else if (count($data_insert_db) == 1) {
            print_r($data_insert_db);
            $sql = "INSERT into tbl_tags(tag_name) VALUES ('" . $data_insert_db[0]['tag_name'] . "' )";
            $this->db->query($sql);

        }

    }

    //END BACKEND

}