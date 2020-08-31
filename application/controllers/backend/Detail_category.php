<?php

class Detail_category extends CI_Controller
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
        $this->load->model('backend/Detail_category_model', 'detail_category_model');
        $this->load->library('upload');
        $this->load->helper('text');
    }

    public function index()
    {
        $x['data'] = $this->detail_category_model->get_all_post();
        $this->load->view('backend/v_detail_category_view', $x);
    }

    public function add_new()
    {
        $x['category_id'] = $this->uri->segment(4);
        $this->load->view('backend/v_add_detail_category', $x);
    }

    public function get_edit()
    {
        $post_id = $this->uri->segment(4);
        $x['data'] = $this->detail_category_model->get_post_by_id($post_id);
        //$this->c($x['data']);
        $this->load->view('backend/v_edit_detail_category', $x);
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
                $title = $this->input->post('title', true);
                $description = $this->input->post('description', true);
                $category = $this->input->post('category', true);
                $this->detail_category_model->save_post($title, $description, $image, $category);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('backend/detail_category');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/detail_category');
            }

        } else {
            redirect('backend/detail_category');
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
                $id = $this->input->post('post_id', true);
                $title = $this->input->post('title', true);
                $description = $this->input->post('description', true);
                $category = $this->input->post('category', true);
                $this->detail_category_model->edit_post_with_img($id, $title, $description, $image);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('backend/detail_category');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/detail_category');
            }

        } else {
            $id = $this->input->post('post_id', true);
            $title = $this->input->post('title', true);
            $description = $this->input->post('description', true);
            $category = $this->input->post('category', true);
            $this->detail_category_model->edit_post_no_img($id, $title, $description);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('backend/detail_category');
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
                'width' => 665,
                'height' => 430,
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

    public function c($arr)
    {
        print_r($arr);
        echo "<br>";
        die();
    }

}