<?php
class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/Category_model', 'category_model');
        $this->load->model('backend/Type_model', 'type_model');
        $this->load->helper('text');
    }

    public function index()
    {
        $x['type'] = $this->type_model->get_all_type();
        $x['data'] = $this->category_model->get_all_category();
        $this->load->view('backend/v_category', $x);
    }

    public function save()
    {
        $category = strip_tags(htmlspecialchars($this->input->post('category', true), ENT_QUOTES));
        $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $category);
        $trim = trim($string);
        $slug = strtolower(str_replace(" ", "-", $trim));
        $type = $this->input->post('type', true);
        $this->category_model->add_new_row($type, $category, $slug);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/category');
    }

    public function edit()
    {
        $id = $this->input->post('kode', true);
        $category = strip_tags(htmlspecialchars($this->input->post('category2', true), ENT_QUOTES));
        $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $category);
        $trim = trim($string);
        $slug = strtolower(str_replace(" ", "-", $trim));
        $type = $this->input->post('type2', true);
        $this->category_model->edit_row($id, $type, $category, $slug);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/category');
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $this->category_model->delete_row($id);
        $this->session->set_flashdata('msg', 'success-delete');
        redirect('backend/category');
    }
}