<?php
class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/Tag_model', 'tag_model');
        $this->load->model('backend/Category_model', 'category_model');
        $this->load->model('backend/City_model', 'city_model');
        $this->load->model('backend/Location_model', 'location_model');
        $this->load->model('backend/Subcategory_model', 'subcategory_model');
        $this->load->model('backend/Additional_model', 'additional_model');
        $this->load->model('backend/Type_model', 'type_model');
        $this->load->model('backend/Post_model', 'post_model');
        $this->load->model('backend/Availability_model', 'availability_model');
        $this->load->model('backend/Social_model', 'social_model');
        $this->load->model('backend/Additional_model', 'additional_model');
        $this->load->library('upload');
        $this->load->helper('text');
    }

    public function index()
    {
        $x['data'] = $this->post_model->get_all_post();
        $this->load->view('backend/v_post', $x);
    }

    public function add_new()
    {
        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(1);
        $x['type'] = $this->type_model->get_all_type();
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['additional'] = $this->additional_model->get_all_additional();
        $x['social'] = $this->social_model->get_social();
        $x['availability'] = $this->availability_model->get_availability();
        $this->load->view('backend/v_add_post', $x);
    }

    public function add_catlist_new()
    {

        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(2);
        $x['type'] = $this->type_model->get_all_type();
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['additional'] = $this->additional_model->get_all_additional();
        $x['social'] = $this->social_model->get_social();
        $x['availability'] = $this->availability_model->get_availability();
        $this->load->view('backend/v_add_catlist_post', $x);
    }

    public function add_umkm_new()
    {

        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(3);
        $x['type'] = $this->type_model->get_all_type();
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['additional'] = $this->additional_model->get_all_additional();
        $x['social'] = $this->social_model->get_social();
        $x['availability'] = $this->availability_model->get_availability();
        $this->load->view('backend/v_add_umkm_post', $x);
    }

    public function add_stfood_new()
    {

        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(4);
        $x['type'] = $this->type_model->get_all_type();
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['additional'] = $this->additional_model->get_all_additional();
        $x['social'] = $this->social_model->get_social();
        $x['availability'] = $this->availability_model->get_availability();
        $this->load->view('backend/v_add_stfoodt_post', $x);
    }

    public function add_hltfood_new()
    {

        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(5);
        $x['type'] = $this->type_model->get_all_type();
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['additional'] = $this->additional_model->get_all_additional();
        $x['social'] = $this->social_model->get_social();
        $x['availability'] = $this->availability_model->get_availability();
        $this->load->view('backend/v_add_hltfood_post', $x);
    }

    public function add_promo_new()
    {

        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(6);
        $x['type'] = $this->type_model->get_all_type();
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['availability'] = $this->availability_model->get_availability();
        $x['social'] = $this->social_model->get_social();
        $x['additional'] = $this->additional_model->get_all_additional();

        $this->load->view('backend/v_add_promo_post', $x);
    }

    public function get_edit()
    {
        $post_id = $this->uri->segment(4);
        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(1);
        $x['type'] = $this->type_model->get_all_type();
        $x['data'] = $this->post_model->get_news_post_by_id($post_id);
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['availability'] = $this->availability_model->get_availability();
        $x['social'] = $this->social_model->get_social();
        $x['additional'] = $this->additional_model->get_all_additional();

        $this->load->view('backend/v_edit_post', $x);
    }

    public function get_catlist_edit()
    {
        $post_id = $this->uri->segment(4);
        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(2);
        $x['type'] = $this->type_model->get_all_type();
        $x['data'] = $this->post_model->get_catlist_post_by_id($post_id);
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['availability'] = $this->availability_model->get_availability();
        $x['social'] = $this->social_model->get_social();
        $x['additional'] = $this->additional_model->get_all_additional();

        $this->load->view('backend/v_edit_catlist_post', $x);
    }

    public function get_promo_edit()
    {
        $post_id = $this->uri->segment(4);
        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(6);
        $x['type'] = $this->type_model->get_all_type();
        $x['data'] = $this->post_model->get_promo_post_by_id($post_id);
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['availability'] = $this->availability_model->get_availability();
        $x['social'] = $this->social_model->get_social();
        $x['additional'] = $this->additional_model->get_all_additional();

        $this->load->view('backend/v_edit_promo_post', $x);
    }

    public function get_umkm_edit()
    {
        $post_id = $this->uri->segment(4);
        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(3);
        $x['type'] = $this->type_model->get_all_type();
        $x['data'] = $this->post_model->get_umkm_post_by_id($post_id);
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['availability'] = $this->availability_model->get_availability();
        $x['social'] = $this->social_model->get_social();
        $x['additional'] = $this->additional_model->get_all_additional();

        $this->load->view('backend/v_edit_umkm_post', $x);
    }

    public function get_stfood_edit()
    {
        $post_id = $this->uri->segment(4);
        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(4);
        $x['type'] = $this->type_model->get_all_type();
        $x['data'] = $this->post_model->get_stfood_post_by_id($post_id);
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['availability'] = $this->availability_model->get_availability();
        $x['social'] = $this->social_model->get_social();
        $x['additional'] = $this->additional_model->get_all_additional();

        $this->load->view('backend/v_edit_stfood_post', $x);
    }

    public function get_hltfood_edit()
    {
        $post_id = $this->uri->segment(4);
        $x['tag'] = $this->tag_model->get_all_tag();
        $x['category'] = $this->category_model->get_all_category_by_type(5);
        $x['type'] = $this->type_model->get_all_type();
        $x['data'] = $this->post_model->get_hltfood_post_by_id($post_id);
        $x['city'] = $this->city_model->get_all_city();
        $x['location'] = $this->location_model->get_all_location();
        $x['availability'] = $this->availability_model->get_availability();
        $x['social'] = $this->social_model->get_social();
        $x['additional'] = $this->additional_model->get_all_additional();

        $this->load->view('backend/v_edit_hltfood_post', $x);
    }

    public function publish()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $image_desc = $this->input->post('image_desc', true);
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $city = $this->input->post('city', true);
                $location = 0;
                $halal = 0;
                $additional = 0;
                $sentemail = $this->input->post('sentemail');

                //detail
                $detail_id = uniqid('id');
                $news_name = $this->input->post('news_name', true);
                $phone = $this->input->post('news_phone', true);
                $address = $this->input->post('news_address', true);
                $availability = $this->input->post('availability', true);
                $social = $this->input->post('social', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));
                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 0) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->save_post($title, $contents, $type, $category, $slug, $city, $location, $halal, $additional, $image, $image_desc, $tags, $description, $description_title, $detail_id, $news_name, $phone, $address, $availability, $social, $sentemail);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
            }

        } else {
            redirect('backend/post');
        }
    }

    public function publish_catlist()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $subcategory = $this->input->post('subcategory', true);
                $city = $this->input->post('city', true);
                $location = $this->input->post('location', true);
                $halal = $this->input->post('halal', true);
                $additional = $this->input->post('additional', true);

                //detail
                $detail_id = uniqid('id');
                $catlist_name = $this->input->post('catlist_name', true);
                $phone = $this->input->post('catlist_phone', true);
                $address = $this->input->post('catlist_address', true);
                $availability = $this->input->post('availability', true);
                $social = $this->input->post('social', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));
                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 0) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                if ($tags) {
                    $this->post_model->save_tags_post($tags);
                }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $image_desc = $this->input->post('image_desc', true);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->save_catlist_post($title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image, $image_desc, $tags, $description, $description_title, $detail_id, $catlist_name, $phone, $address, $availability, $social);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
                print_r($_POST);
            }

        } else {
            print_r($_POST);
            redirect('backend/post');
        }
    }

    public function publish_promo()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $city = $this->input->post('city', true);

                //detail
                $detail_id = uniqid('id');
                $promo_name = $this->input->post('promo_name', true);
                $short_desc = $this->input->post('promo_short_desc', true);
                $address = $this->input->post('promo_address', true);
                $time = $this->input->post('promo_time', true);
                $start = $this->input->post('promo_start', true);
                $end = $this->input->post('promo_end', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));
                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 0) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                if (isset($tags)) {

                    $this->post_model->save_tags_post($tags);
                }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $image_desc = $this->input->post('image_desc', true);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->save_promo_post($title, $contents, $type, $category, $slug, $city, $image, $image_desc, $tags, $description, $description_title, $detail_id, $promo_name, $short_desc, $address, $time, $start, $end);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
                print_r($_POST);
            }

        } else {
            print_r($_POST);
            redirect('backend/post');
        }
    }
    public function publish_umkm()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $subcategory = $this->input->post('subcategory', true);
                $city = $this->input->post('city', true);
                $location = $this->input->post('location', true);
                $halal = $this->input->post('halal', true);
                $additional = $this->input->post('additional', true);

                //detail
                $detail_id = uniqid('id');
                $umkm_name = $this->input->post('umkm_name', true);
                $phone = $this->input->post('umkm_phone', true);
                $address = $this->input->post('umkm_address', true);
                $availability = $this->input->post('availability', true);
                $social = $this->input->post('social', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));
                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 0) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                if ($tags) {
                    $this->post_model->save_tags_post($tags);
                }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $image_desc = $this->input->post('image_desc', true);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->save_umkm_post($title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image, $image_desc, $tags, $description, $description_title, $detail_id, $umkm_name, $phone, $address, $availability, $social);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
                print_r($_POST);
            }

        } else {
            print_r($_POST);
            redirect('backend/post');
        }
    }

    public function publish_stfood()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $subcategory = $this->input->post('subcategory', true);
                $city = $this->input->post('city', true);
                $location = $this->input->post('location', true);
                $halal = $this->input->post('halal', true);
                $additional = $this->input->post('additional', true);

                //detail
                $detail_id = uniqid('id');
                $stfood_name = $this->input->post('stfood_name', true);
                $phone = $this->input->post('stfood_phone', true);
                $address = $this->input->post('stfood_address', true);
                $availability = $this->input->post('availability', true);
                $social = $this->input->post('social', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));
                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 0) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                if ($tags) {
                    $this->post_model->save_tags_post($tags);
                }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $image_desc = $this->input->post('image_desc', true);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->save_stfood_post($title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image, $image_desc, $tags, $description, $description_title, $detail_id, $stfood_name, $phone, $address, $availability, $social);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
                print_r($_POST);
            }

        } else {
            print_r($_POST);
            redirect('backend/post');
        }
    }

    public function publish_hltfood()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $subcategory = $this->input->post('subcategory', true);
                $city = $this->input->post('city', true);
                $location = $this->input->post('location', true);
                $halal = $this->input->post('halal', true);
                $additional = $this->input->post('additional', true);

                //detail
                $detail_id = uniqid('id');
                $hltfood_name = $this->input->post('hltfood_name', true);
                $phone = $this->input->post('hltfood_phone', true);
                $address = $this->input->post('hltfood_address', true);
                $availability = $this->input->post('availability', true);
                $social = $this->input->post('social', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));
                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 0) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                if ($tags) {
                    $this->post_model->save_tags_post($tags);
                }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $image_desc = $this->input->post('image_desc', true);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->save_hltfood_post($title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image, $image_desc, $tags, $description, $description_title, $detail_id, $hltfood_name, $phone, $address, $availability, $social);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
                print_r($_POST);
            }

        } else {
            print_r($_POST);
            redirect('backend/post');
        }
    }

    public function edit()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $image_desc = $this->input->post('image_desc', true);
                $id = $this->input->post('post_id', true);
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $subcategory = $this->input->post('subcategory', true);
                $city = $this->input->post('city', true);
                $location = 0;
                $halal = 0;
                $additional = 0;

                //detail
                $detail_id = $this->input->post('post_detail_id');
                $news_name = $this->input->post('news_name', true);
                $phone = $this->input->post('news_phone', true);
                $address = $this->input->post('news_address', true);
                $availability = $this->input->post('availability', true);
                $social = $this->input->post('social', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));

                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 1) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                if ($tags) {
                    $this->post_model->save_tags_post($tags);
                }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->edit_post_with_img($id, $title, $contents, $type, $category, $slug, $city, $location, $halal, $additional, $image, $image_desc, $tags, $description, $description_title, $detail_id, $news_name, $phone, $address, $availability, $social);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
            }

        } else {
            $id = $this->input->post('post_id', true);
            $image_desc = $this->input->post('image_desc', true);
            $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
            $contents = $this->input->post('contents');
            $type = $this->input->post('type', true);
            $category = $this->input->post('category', true);
            $subcategory = $this->input->post('subcategory', true);
            $city = $this->input->post('city', true);
            $location = 0;
            $halal = 0;
            $additional = 0;
            //detail
            $detail_id = $this->input->post('post_detail_id');
            $news_name = $this->input->post('news_name', true);
            $phone = $this->input->post('news_phone', true);
            $address = $this->input->post('news_address', true);
            $availability = $this->input->post('availability', true);
            $social = $this->input->post('social', true);

            $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
            $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
            $trim = trim($string);
            $praslug = strtolower(str_replace(" ", "-", $trim));

            $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
            if ($query->num_rows() > 1) {
                $uniqe_string = rand();
                $slug = $praslug . '-' . $uniqe_string;
            } else {
                $slug = $praslug;
            }

            $tags = $this->input->post('tags', true);
            // $xtags[] = $this->input->post('tag');
            // foreach ($xtags as $tag) {
            //     $tags = @implode(",", $tag);
            // }

            if ($tags) {
                $this->post_model->save_tags_post($tags);
            }

            $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
            $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

            $this->post_model->edit_post_no_img($id, $title, $contents, $type, $category, $slug, $city, $location, $halal, $additional, $image_desc, $tags, $description, $description_title, $detail_id, $news_name, $phone, $address, $availability, $social);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('backend/post');
        }

    }

    public function edit_catlist()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $id = $this->input->post('post_id', true);
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $subcategory = $this->input->post('subcategory', true);
                $city = $this->input->post('city', true);
                $location = $this->input->post('location', true);
                $halal = $this->input->post('halal', true);
                $additional = $this->input->post('additional', true);

                //detail
                $detail_id = $this->input->post('post_detail_id', true);
                $catlist_name = $this->input->post('catlist_name', true);
                $phone = $this->input->post('catlist_phone', true);
                $address = $this->input->post('catlist_address', true);
                $availability = $this->input->post('availability', true);
                $social = $this->input->post('social', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));

                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 1) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                if ($tags) {
                    print_r($this->post_model->save_tags_post($tags));
                }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $image_desc = $this->input->post('image_desc', true);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->edit_post_catlist_with_img($id, $title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image, $image_desc, $tags, $description, $description_title, $detail_id, $catlist_name, $phone, $address, $availability, $social);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
            }

        } else {
            $id = $this->input->post('post_id', true);
            $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
            $contents = $this->input->post('contents');
            $type = $this->input->post('type', true);
            $category = $this->input->post('category', true);
            $subcategory = $this->input->post('subcategory', true);
            $city = $this->input->post('city', true);
            $location = $this->input->post('location', true);
            $halal = $this->input->post('halal', true);
            $additional = $this->input->post('additional', true);

            //detail
            $detail_id = $this->input->post('post_detail_id', true);
            $catlist_name = $this->input->post('catlist_name', true);
            $phone = $this->input->post('catlist_phone', true);
            $address = $this->input->post('catlist_address', true);
            $availability = $this->input->post('availability', true);
            $social = $this->input->post('social', true);

            $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
            $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
            $trim = trim($string);
            $praslug = strtolower(str_replace(" ", "-", $trim));

            $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
            if ($query->num_rows() > 1) {
                $uniqe_string = rand();
                $slug = $praslug . '-' . $uniqe_string;
            } else {
                $slug = $praslug;
            }

            $tags = $this->input->post('tags', true);
            // $xtags[] = $this->input->post('tag');
            // foreach ($xtags as $tag) {
            //     $tags = @implode(",", $tag);
            // }

            if ($tags) {
                print_r($this->post_model->save_tags_post($tags));
            }

            $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
            $image_desc = $this->input->post('image_desc', true);
            $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

            $this->post_model->edit_post_catlist_no_img($id, $title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image_desc, $tags, $description, $description_title, $detail_id, $catlist_name, $phone, $address, $availability, $social);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('backend/post');
        }

    }

    public function edit_promo()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $id = $this->input->post('post_id', true);
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $city = $this->input->post('city', true);

                //detail
                $detail_id = $this->input->post('post_detail_id', true);
                $promo_name = $this->input->post('promo_name', true);
                $short_desc = $this->input->post('promo_short_desc', true);
                $address = $this->input->post('promo_address', true);
                $time = $this->input->post('promo_time', true);
                $start = $this->input->post('promo_start', true);
                $end = $this->input->post('promo_end', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));

                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 1) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                if ($tags) {
                    $this->post_model->save_tags_post($tags);
                }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $image_desc = $this->input->post('image_desc', true);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->edit_post_promo_with_img($id, $title, $contents, $type, $category, $slug, $city, $image, $image_desc, $tags, $description, $description_title, $detail_id, $promo_name, $short_desc, $address, $time, $start, $end);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
            }

        } else {
            $id = $this->input->post('post_id', true);
            $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
            $contents = $this->input->post('contents');
            $type = $this->input->post('type', true);
            $category = $this->input->post('category', true);
            $city = $this->input->post('city', true);
            $location = $this->input->post('location', true);
            $halal = $this->input->post('halal', true);
            $additional = $this->input->post('additional', true);

            //detail
            $detail_id = $this->input->post('post_detail_id', true);
            $promo_name = $this->input->post('promo_name', true);
            $short_desc = $this->input->post('promo_short_desc', true);
            $address = $this->input->post('promo_address', true);
            $time = $this->input->post('promo_time', true);
            $start = $this->input->post('promo_start', true);
            $end = $this->input->post('promo_end', true);

            $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
            $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
            $trim = trim($string);
            $praslug = strtolower(str_replace(" ", "-", $trim));

            $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
            if ($query->num_rows() > 1) {
                $uniqe_string = rand();
                $slug = $praslug . '-' . $uniqe_string;
            } else {
                $slug = $praslug;
            }

            $tags = $this->input->post('tags', true);
            // $xtags[] = $this->input->post('tag');
            // foreach ($xtags as $tag) {
            //     $tags = @implode(",", $tag);
            // }

            if ($tags) {
                $this->post_model->save_tags_post($tags);
            }
            $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
            $image_desc = $this->input->post('image_desc', true);
            $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

            $this->post_model->edit_post_promo_no_img($id, $title, $contents, $type, $category, $slug, $city, $location, $halal, $additional, $image_desc, $tags, $description, $description_title, $detail_id, $promo_name, $short_desc, $address, $time, $start, $end);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('backend/post');
        }

    }

//edit umkm

    public function edit_umkm()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $id = $this->input->post('post_id', true);
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $subcategory = $this->input->post('subcategory', true);
                $city = $this->input->post('city', true);
                $location = $this->input->post('location', true);
                $halal = $this->input->post('halal', true);
                $additional = $this->input->post('additional', true);

                //detail
                $detail_id = $this->input->post('post_detail_id', true);
                $umkm_name = $this->input->post('umkm_name', true);
                $phone = $this->input->post('umkm_phone', true);
                $address = $this->input->post('umkm_address', true);
                $availability = $this->input->post('availability', true);
                $social = $this->input->post('social', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));

                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 1) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                if ($tags) {
                    print_r($this->post_model->save_tags_post($tags));
                }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $image_desc = $this->input->post('image_desc', true);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->edit_post_umkm_with_img($id, $title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image, $image_desc, $tags, $description, $description_title, $detail_id, $umkm_name, $phone, $address, $availability, $social);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
            }

        } else {
            $id = $this->input->post('post_id', true);
            $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
            $contents = $this->input->post('contents');
            $type = $this->input->post('type', true);
            $category = $this->input->post('category', true);
            $subcategory = $this->input->post('subcategory', true);
            $city = $this->input->post('city', true);
            $location = $this->input->post('location', true);
            $halal = $this->input->post('halal', true);
            $additional = $this->input->post('additional', true);

            //detail
            $detail_id = $this->input->post('post_detail_id', true);
            $umkm_name = $this->input->post('umkm_name', true);
            $phone = $this->input->post('umkm_phone', true);
            $address = $this->input->post('umkm_address', true);
            $availability = $this->input->post('availability', true);
            $social = $this->input->post('social', true);

            $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
            $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
            $trim = trim($string);
            $praslug = strtolower(str_replace(" ", "-", $trim));

            $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
            if ($query->num_rows() > 1) {
                $uniqe_string = rand();
                $slug = $praslug . '-' . $uniqe_string;
            } else {
                $slug = $praslug;
            }

            $tags = $this->input->post('tags', true);
            // $xtags[] = $this->input->post('tag');
            // foreach ($xtags as $tag) {
            //     $tags = @implode(",", $tag);
            // }

            if ($tags) {
                print_r($this->post_model->save_tags_post($tags));
            }

            $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
            $image_desc = $this->input->post('image_desc', true);
            $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

            $this->post_model->edit_post_umkm_no_img($id, $title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image_desc, $tags, $description, $description_title, $detail_id, $umkm_name, $phone, $address, $availability, $social);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('backend/post');
        }

    }

//edit stfood

    public function edit_stfood()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $id = $this->input->post('post_id', true);
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $subcategory = $this->input->post('subcategory', true);
                $city = $this->input->post('city', true);
                $location = $this->input->post('location', true);
                $halal = $this->input->post('halal', true);
                $additional = $this->input->post('additional', true);

                //detail
                $detail_id = $this->input->post('post_detail_id', true);
                $stfood_name = $this->input->post('stfood_name', true);
                $phone = $this->input->post('stfood_phone', true);
                $address = $this->input->post('stfood_address', true);
                $availability = $this->input->post('availability', true);
                $social = $this->input->post('social', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));

                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 1) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                if ($tags) {
                    print_r($this->post_model->save_tags_post($tags));
                }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $image_desc = $this->input->post('image_desc', true);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->edit_post_stfood_with_img($id, $title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image, $image_desc, $tags, $description, $description_title, $detail_id, $stfood_name, $phone, $address, $availability, $social);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
            }

        } else {
            $id = $this->input->post('post_id', true);
            $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
            $contents = $this->input->post('contents');
            $type = $this->input->post('type', true);
            $category = $this->input->post('category', true);
            $subcategory = $this->input->post('subcategory', true);
            $city = $this->input->post('city', true);
            $location = $this->input->post('location', true);
            $halal = $this->input->post('halal', true);
            $additional = $this->input->post('additional', true);

            //detail
            $detail_id = $this->input->post('post_detail_id', true);
            $stfood_name = $this->input->post('stfood_name', true);
            $phone = $this->input->post('stfood_phone', true);
            $address = $this->input->post('stfood_address', true);
            $availability = $this->input->post('availability', true);
            $social = $this->input->post('social', true);

            $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
            $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
            $trim = trim($string);
            $praslug = strtolower(str_replace(" ", "-", $trim));

            $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
            if ($query->num_rows() > 1) {
                $uniqe_string = rand();
                $slug = $praslug . '-' . $uniqe_string;
            } else {
                $slug = $praslug;
            }

            $tags = $this->input->post('tags', true);
            // $xtags[] = $this->input->post('tag');
            // foreach ($xtags as $tag) {
            //     $tags = @implode(",", $tag);
            // }

            if ($tags) {
                print_r($this->post_model->save_tags_post($tags));
            }

            $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
            $image_desc = $this->input->post('image_desc', true);
            $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

            $this->post_model->edit_post_stfood_no_img($id, $title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image_desc, $tags, $description, $description_title, $detail_id, $stfood_name, $phone, $address, $availability, $social);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('backend/post');
        }

    }

//edit hltfood

    public function edit_hltfood()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $id = $this->input->post('post_id', true);
                $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
                $contents = $this->input->post('contents');
                $type = $this->input->post('type', true);
                $category = $this->input->post('category', true);
                $subcategory = $this->input->post('subcategory', true);
                $city = $this->input->post('city', true);
                $location = $this->input->post('location', true);
                $halal = $this->input->post('halal', true);
                $additional = $this->input->post('additional', true);

                //detail
                $detail_id = $this->input->post('post_detail_id', true);
                $hltfoodt_name = $this->input->post('hltfoodt_name', true);
                $phone = $this->input->post('hltfoodt_phone', true);
                $address = $this->input->post('hltfoodt_address', true);
                $availability = $this->input->post('availability', true);
                $social = $this->input->post('social', true);

                $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
                $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim = trim($string);
                $praslug = strtolower(str_replace(" ", "-", $trim));

                $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
                if ($query->num_rows() > 1) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $tags = $this->input->post('tags', true);
                // $xtags[] = $this->input->post('tag');
                // foreach ($xtags as $tag) {
                //     $tags = @implode(",", $tag);
                // }

                if ($tags) {
                    print_r($this->post_model->save_tags_post($tags));
                }

                $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
                $image_desc = $this->input->post('image_desc', true);
                $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

                $this->post_model->edit_post_hltfoodt_with_img($id, $title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image, $image_desc, $tags, $description, $description_title, $detail_id, $hltfoodt_name, $phone, $address, $availability, $social);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('backend/post');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/post');
            }

        } else {
            $id = $this->input->post('post_id', true);
            $title = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
            $contents = $this->input->post('contents');
            $type = $this->input->post('type', true);
            $category = $this->input->post('category', true);
            $subcategory = $this->input->post('subcategory', true);
            $city = $this->input->post('city', true);
            $location = $this->input->post('location', true);
            $halal = $this->input->post('halal', true);
            $additional = $this->input->post('additional', true);

            //detail
            $detail_id = $this->input->post('post_detail_id', true);
            $hltfoodt_name = $this->input->post('hltfoodt_name', true);
            $phone = $this->input->post('hltfoodt_phone', true);
            $address = $this->input->post('hltfoodt_address', true);
            $availability = $this->input->post('availability', true);
            $social = $this->input->post('social', true);

            $preslug = strip_tags(htmlspecialchars($this->input->post('slug', true), ENT_QUOTES));
            $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
            $trim = trim($string);
            $praslug = strtolower(str_replace(" ", "-", $trim));

            $query = $this->db->get_where('tbl_post', array('post_slug' => $praslug));
            if ($query->num_rows() > 1) {
                $uniqe_string = rand();
                $slug = $praslug . '-' . $uniqe_string;
            } else {
                $slug = $praslug;
            }

            $tags = $this->input->post('tags', true);
            // $xtags[] = $this->input->post('tag');
            // foreach ($xtags as $tag) {
            //     $tags = @implode(",", $tag);
            // }

            if ($tags) {
                print_r($this->post_model->save_tags_post($tags));
            }

            $description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
            $image_desc = $this->input->post('image_desc', true);
            $description_title = htmlspecialchars($this->input->post('description_title', true), ENT_QUOTES);

            $this->post_model->edit_post_hltfoodt_no_img($id, $title, $contents, $type, $category, $subcategory, $slug, $city, $location, $halal, $additional, $image_desc, $tags, $description, $description_title, $detail_id, $hltfoodt_name, $phone, $address, $availability, $social);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('backend/post');
        }

    }

    public function delete()
    {
        $post_id = $this->input->post('id', true);
        $this->post_model->delete_post($post_id);
        echo $this->session->set_flashdata('msg', 'success-delete');
        redirect('backend/post');
    }

    //upload image summernote
    public function upload_image()
    {
        if (isset($_FILES["file"]["name"])) {
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file')) {
                $this->upload->display_errors();
                return false;
            } else {
                $data = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $data['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = true;
                $config['quality'] = '60%';
                $config['width'] = 800;
                $config['height'] = 800;
                $config['new_image'] = './assets/images/' . $data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url() . 'assets/images/' . $data['file_name'];
            }
        }
    }

    public function _create_thumbs($file_name)
    {
        // Image resizing config
        $config = array(
            array(
                'image_library' => 'GD2',
                'source_image' => './assets/images/' . $file_name,
                'maintain_ratio' => false,
                'width' => 370,
                'height' => 237,
                'new_image' => './assets/images/thumb/' . $file_name,
            ));

        $this->load->library('image_lib', $config[0]);
        foreach ($config as $item) {
            $this->image_lib->initialize($item);
            if (!$this->image_lib->resize()) {
                return false;
            }
            $this->image_lib->clear();
        }
    }

    public function dynamic_attribute()
    {
        $category_id = $this->uri->segment(4);
        $data['subcategory'] = $this->subcategory_model->get_subcategory_by_category($category_id);
        $data['subcategory_id'] = $this->uri->segment(5);
        $data['location'] = $this->location_model->get_location_by_category($category_id);
        $data['location_id'] = $this->uri->segment(6);
        $data['halal_id'] = $this->uri->segment(7);
        $data['additional'] = $this->additional_model->get_additional_by_category($category_id);
        $data['additional_id'] = $this->uri->segment(8);

        $this->load->view('backend/v_attribute_post', $data);
    }

}