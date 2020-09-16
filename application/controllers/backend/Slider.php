<?php

class Slider extends CI_Controller
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
        $this->load->model('backend/Slider_model', 'slider_model');
        $this->load->library('upload');
        $this->load->helper('text');
    }

    public function index()
    {
        $x['data'] = $this->slider_model->get_all_post();
        $this->load->view('backend/v_slider', $x);
    }

    public function add_new()
    {
        $x['category_id'] = $this->uri->segment(4);
        $this->load->view('backend/v_add_slider', $x);
    }

    public function get_edit()
    {
        $post_id = $this->uri->segment(4);
        $x['data'] = $this->slider_model->get_post_by_id($post_id);
        $this->load->view('backend/v_edit_slider', $x);
    }

    public function publish()
    {

        if (!empty($_FILES['filefoto']['name'])) {
            $extension = pathinfo($_FILES['filefoto']['name'], PATHINFO_EXTENSION);
            $pretitle = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
            $ptitle = preg_replace('/[^\p{L}\p{N}\s]/u', '', $pretitle);
            $imgTitle = $ptitle . '-' . time() . '-Foodbang.' . $extension;
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['file_name'] = $imgTitle;
            $this->upload->initialize($config);
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();

                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 1200;
                $config['height'] = 800;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $title = $this->input->post('title', true);
                $description = $this->input->post('description', true);
                $link = $this->input->post('link', true);
                $order = $this->input->post('order', true);
                $this->slider_model->save_post($title, $description, $image, $link, $order);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('backend/slider');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/slider');
            }

        } else {
            redirect('backend/slider');
        }
    }

    public function edit()
    {

        if (!empty($_FILES['filefoto']['name'])) {

            $extension = pathinfo($_FILES['filefoto']['name'], PATHINFO_EXTENSION);
            $pretitle = strip_tags(htmlspecialchars($this->input->post('title', true), ENT_QUOTES));
            $ptitle = preg_replace('/[^\p{L}\p{N}\s]/u', '', $pretitle);
            $imgTitle = $ptitle . '-' . time() . '-Foodbang.' . $extension;
            $config['file_name'] = $imgTitle;
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();

                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 1200;
                $config['height'] = 800;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $id = $this->input->post('post_id', true);
                $title = $this->input->post('title', true);
                $description = $this->input->post('description', true);
                $link = $this->input->post('link', true);
                $order = $this->input->post('order', true);
                $this->slider_model->edit_post_with_img($id, $title, $description, $image, $link, $order);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('backend/slider');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/slider');
            }

        } else {
            $id = $this->input->post('post_id', true);
            $title = $this->input->post('title', true);
            $description = $this->input->post('description', true);
            $link = $this->input->post('link', true);
            $order = $this->input->post('order', true);
            $this->slider_model->edit_post_no_img($id, $title, $description, $link, $order);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('backend/slider');
        }

    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $this->slider_model->delete_post($id);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('backend/slider');

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

    public function c($arr)
    {
        print_r($arr);
        echo "<br>";
        die();
    }

}